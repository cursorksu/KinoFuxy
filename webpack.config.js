'use strict';
const pjson = require('./package.json');
const NODE_ENV = process.env.NODE_ENV || 'development';
const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const rimraf = require('rimraf');
const AssetsPlugin = require('assets-webpack-plugin');

function addHash(template, hash) {
	return NODE_ENV === 'production' ? template.replace(/\.[^.]+$/, `.[${hash}]$&`) : template;
}

const publicPath = NODE_ENV === 'production' ? 'https://damp-temple-28139.herokuapp.com/' : 'http://fuksi.loc/';
console.log(publicPath);

function _path( p ) {
	return path.join( __dirname, p );
}

module.exports = {
	context: `${__dirname}${path.sep}assets${path.sep}js`,
	entry: {
		app: './app'
	},
	output: {
		path: `${__dirname}/dist/bundles/assets`,
		publicPath: '/dist/bundles/assets/',
		filename: addHash('[name].js', 'chunkhash'),
		chunkFilename: addHash('[id].js', 'chunkhash'),
		library: '[name]'
	},

	resolve: {
		extensions: ['', '.js'],
		modulesDirectories: ['node_modules'],
		alias: {
			// "TweenLite": path.resolve( 'node_modules', 'gsap/src/uncompressed/TweenLite.js' ),
			"TweenMax": path.resolve( 'node_modules', 'gsap/src/uncompressed/TweenMax.js' ),
			// "TimelineLite": path.resolve( 'node_modules', 'gsap/src/uncompressed/TimelineLite.js' ),
			"TimelineMax": path.resolve( 'node_modules', 'gsap/src/uncompressed/TimelineMax.js' ),
			"ScrollMagic": path.resolve( 'node_modules', 'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js' ),
			"scrollTo": path.resolve('node_modules', 'gsap/src/uncompressed/plugins/ScrollToPlugin.js'),
			"animation.gsap": path.resolve( 'node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js' ),
			"debug.addIndicators": path.resolve( 'node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js' ),
			// 'threesixty-slider': path.resolve('node_modules', 'threesixty-slider/dist/threesixty.min.js')
			// 'lightg': path.resolve('node_modules', 'lightgallery/dist/js/lightgallery.js'),
			// 'zoom-plugin': path.resolve('node_modules', 'lightgallery/modules/lg-zoom.js'),
		}		
	},

	resolveLoader: {
		modulesDirectories: ['node_modules'],
		extensions: ['', '.js'],
		moduleTemplates: ['*-loader', '*']
	},

	externals: {
    jQuery: 'jQuery',
    foundation: 'Foundation'
	},	

	module: {
		loaders: [
			{
				test: /\.js$/,
				loader: 'babel',
				exclude: [/node_modules/, /extention_modules/]
			},
			{
				test: /\.(png|jpg|gif)$/,
				loader: addHash('file?name=[path][name].[ext]', 'hash:6')
			},
			{ test: /\.css$/, loader: 'style!css' },

			{ test: /\.(scss|sass)$/, loader: ExtractTextPlugin.extract('css!autoprefixer!sass') },

			{ test: /\.svg$/, loader: 'url?limit=2000&mimetype=image/svg+xml&name=elements/fonts/[name].[ext]' },

			{ test: /\.woff$/, loader: 'url?limit=2000&mimetype=application/font-woff&name=elements/fonts/[name].[ext]' },
			{ test: /\.woff2$/, loader: 'url?limit=2000&mimetype=application/font-woff2&name=elements/fonts/[name].[ext]' },
			{ test: /\.[ot]tf$/, loader: 'url?limit=2000&mimetype=application/octet-stream&name=elements/fonts/[name].[ext]' },
			{ test: /\.eot$/, loader: 'url?limit=2000&mimetype=application/vnd.ms-fontobject&name=elements/fonts/[name].[ext]' }
		]
	},

	// devServer: {
	// 	host: 'localhost',
	// 	port: '8082',
	// 	contentBase: `${__dirname}/dist/bundles/assets`
	// },

	watch: NODE_ENV === 'development',
	watchOptions: {
		aggregateTimeout: 100
	},
	devtool: NODE_ENV === 'development' && 'eval',

	plugins: [
		{
			apply: compiler => rimraf.sync(compiler.options.output.path)
		},

		new ExtractTextPlugin(addHash('[name].css', 'contenthash'), {
			allChunks: true
		}),

		new webpack.optimize.CommonsChunkPlugin({
			name: 'app',
			// chunks: ['about', 'home']
			// minChunks: 2
		}),

		new AssetsPlugin({
			filename: 'assets.json',
			path: `${__dirname}/dist/bundles`
		}),

		new webpack.DefinePlugin({
			'process.env': {
				NODE_ENV: JSON.stringify(NODE_ENV)
			}
		}),

		new webpack.ProvidePlugin({
			$: "jquery/dist/jquery",
			jQuery: 'jquery/dist/jquery'
		})
		// new webpack.NoErrorsPlugin()
	]
};

if (NODE_ENV === 'production') {
	module.exports.plugins.push(
		new webpack.optimize.UglifyJsPlugin({
			compress: {
				warnings: false,
				drop_console: true,
				unsafe: true
			}
		})
	)
}