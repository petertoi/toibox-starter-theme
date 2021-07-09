const { merge } = require('webpack-merge')
const { uniq } = require('lodash')

const userConfig = require(`${ __dirname }/../config`)

const mergeConfig = {
	customizeArray (a, b, key) {
		if (key === 'watch') {
			return uniq([...a, ...b])
		}

		// Fall back to default merging
		return undefined
	},
}

module.exports = merge(
	mergeConfig,
	{
		devUrl: 'https://dev.test/',
		watch: [
			'app/**/*.php',
			'public/**/*',
			'resources/views/**/*.php',
		],
		paths: {
			assets: 'resources/assets',
			output: 'public',
		},
		criticalCss: {
			urls: [
				{
					url: '',
					template: 'home',
				},
			],
		},
	},
	userConfig,
)
