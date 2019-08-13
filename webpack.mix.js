const mix = require( 'laravel-mix' );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );

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

mix.options( {
	extractVueStyles: false,
	processCssUrls: false, // Webpack url() rewriting
	// purifyCss: {
	// 	purifyOptions: {
	// 		info: true,
	// 		rejected: false,
	// 		minify: false,
	// 		whitelist: [
	// 			'*collapse*',
	// 			'*show*',
	// 			'*card*',
	// 		],
	// 	},
	// 	paths: [ 'resources/views/**/*.php' ],
	// 	verbose: false,
	// },
	purifyCss: false,
	postCss: [
		require( 'autoprefixer' ),
	],
} );

mix.setPublicPath( outputDir );

let sassOptions = {};

if ( mix.inProduction() ) {
	mix.version();
	sassOptions = {
		outputStyle: 'compressed',
	};
} else {
	mix.sourceMaps();
	sassOptions = {
		indentWidth: 1,
		outputStyle: 'expanded',
	};
}

mix.sass( `${ assetsDir }/scss/main.scss`, `${ outputDir }/css/main.css`, sassOptions );

mix.js( `${ assetsDir }/js/main.js`, `${ outputDir }/js/main.js` );
mix.babel( `${ outputDir }/js/main.js`, `${ outputDir }/js/main.js` );
mix.extract();

mix.copy( `${ assetsDir }/fonts/**/*`, `${ outputDir }/fonts` );
mix.copy( `${ assetsDir }/img/**/*`, `${ outputDir }/img` );
mix.copy( `${ assetsDir }/lang/**/*.mo`, `${ outputDir }/lang` );
mix.copy( `${ assetsDir }/svg/**/*`, `${ outputDir }/svg` );

mix.browserSync( {
	proxy: 'toibox.test',
	files: [
		'app/**/*.php',
		'public/**/*',
		'resources/views/**/*.php',
	],
} );

mix.webpackConfig( {
	plugins: [
		new CleanWebpackPlugin(),
	],
	externals: {
		jquery: 'jQuery',
	},
} );
