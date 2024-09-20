const path = require("path");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyPlugin = require("copy-webpack-plugin");
var ZipPlugin = require("zip-webpack-plugin");

module.exports = {
	mode: "development",
	entry: {
		admin_scripts: "./src/js/admin-scripts.js",
		site_scripts: "./src/js/site-scripts.js",
		vendors: "./src/js/vendors.js",
	},
	output: {
		filename: "js/[name].js",
		path: path.resolve(__dirname, "dist"),
		clean: true,
	},
	watch: false,
	watchOptions: {
		ignored: /node_modules/,
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: "babel-loader",
			},
			{
				test: /\.(sa|sc|c)ss$/,
				use: [
					/*"style-loader",*/
					MiniCssExtractPlugin.loader /* Cambiar style-loader por este para tener archivos css */,
					{
						loader: "css-loader",
						options: { url: false },
					},
					"sass-loader",
				],
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: "styles/[name].css",
			chunkFilename: "[id].css",
		}),
		new CopyPlugin({
			patterns: [
				{ from: path.resolve(__dirname, "vendor"), to: "vendor" },
				{
					from: "./src/Wordpress-Plugin-Starter-Kit.php",
					to: "Wordpress-Plugin-Starter-Kit.php",
				},
			],
		}),
		new ZipPlugin({
			path: "../dist_zip",
			filename: "wp-plugin-starter-kit.zip",
		}),
	],
	optimization: {
		splitChunks: {
			chunks: "all",
		},
		runtimeChunk: false,
	},
};
