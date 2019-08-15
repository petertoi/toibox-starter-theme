const mix = require( 'laravel-mix' );
const path = require( 'path' );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const SpritesmithPlugin = require( 'webpack-spritesmith' );
const SVGSpritemapPlugin = require( 'svg-spritemap-webpack-plugin' );
require( 'laravel-mix-polyfill' );
require( 'laravel-mix-versionhash' );

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */
const assetsDir = 'resources/assets';
const outputDir = 'public';

const options = {
	extractVueStyles: false,
	processCssUrls: false, // Webpack url() rewriting
	purifyCss: false,
	postCss: [
		require( 'autoprefixer' ),
	],
};

mix.options( options )
	 .setPublicPath( outputDir )
	 .sourceMaps( false )
	 .sass( `${ assetsDir }/scss/main.scss`, `${ outputDir }/css/main.css` )
	 .js( `${ assetsDir }/js/main.js`, `${ outputDir }/js/main.js` )
	 .polyfill( {
		 enabled: true,
		 useBuiltIns: 'usage',
		 targets: false,
	 } )
	 .extract()
	 .copy( `${ assetsDir }/fonts/**/*`, `${ outputDir }/fonts` )
	 .copy( `${ assetsDir }/img/**/*`, `${ outputDir }/img` )
	 .copy( `${ assetsDir }/lang/**/*.mo`, `${ outputDir }/lang` )
	 .copy( `${ assetsDir }/svg/**/*`, `${ outputDir }/svg` )
	 .copy( `${ assetsDir }/sprites/*`, `${ outputDir }/sprites` )
	 .browserSync( {
		 proxy: 'toibox.test',
		 files: [
			 'app/**/*.php',
			 'public/**/*',
			 'resources/views/**/*.php',
		 ],
	 } )
	 .webpackConfig( {
		 plugins: [
			 new CleanWebpackPlugin(),
			 new SpritesmithPlugin( {
				 src: {
					 cwd: path.resolve( assetsDir, 'sprites/img' ),
					 glob: '*.png',
				 },
				 target: {
					 image: path.resolve( assetsDir, 'sprites/spritemap.png' ),
					 css: path.resolve( assetsDir, 'scss/common/_sprite.scss' ),
				 },
				 apiOptions: {
					 cssImageRef: '../sprites/spritemap.png',
				 },
			 } ),
			 new SVGSpritemapPlugin(
				 [ path.resolve( assetsDir, 'svg/*.svg' ) ],
				 {
					 output: {
						 filename: 'sprites/spritemap.svg',
					 },
				 },
			 ),
		 ],
		 externals: {
			 jquery: 'jQuery',
		 },
	 } );

if ( mix.inProduction() ) {
	mix.versionHash();
}

