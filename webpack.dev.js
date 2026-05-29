const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin");

module.exports = {
	mode: "development",
	entry: {
		main: path.resolve(__dirname, "./src/main.js"),
	},
	output: {
		filename: "js/[name].[contenthash].js",
		path: path.resolve(
			__dirname,
			"./public/wp-content/themes/aukse-theme/assets"
		),
		clean: true,
		// assetModuleFilename: "images/[name][ext][query]",
		assetModuleFilename: (pathData) => {
			const filepath = path
				.dirname(pathData.filename)
				.split("/")
				.slice(1)
				.join("/");
			return `${filepath}/[name][ext][query]`;
		},
	},
	devtool: "eval",
	// sourcemaps
	optimization: {
		// minimize: true, // minimizes css in development mode
		minimizer: [new CssMinimizerPlugin()],
		splitChunks: {
			chunks: "all",
		},
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: "./css/[name].[contenthash].css",
		}),
		new CopyPlugin({
			patterns: [
				{
					from: "src/fonts",
					to: "fonts",
					globOptions: {
						dot: false,
						gitignore: false,
						ignore: [".DS_Store"],
					},
				},
			],
		}),
	],
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: "babel-loader",
					options: { presets: ["@babel/preset-env"] },
				},
			},
			{
				test: /\.css$/,
				// exclude: /node_modules/,
				use: [MiniCssExtractPlugin.loader, "css-loader"],
				generator: {
					filename: "css/[name][ext]",
				},
			},
			{
				test: /\.s[ac]ss$/i,
				exclude: /node_modules/,
				use: [
					MiniCssExtractPlugin.loader,
					"css-loader",
					{
						loader: "postcss-loader",
						options: {
							postcssOptions: {
								plugins: [
									require("autoprefixer"),
									require("tailwindcss")(
										"./tailwind.config.js"
									),
								],
							},
						},
					},
					"sass-loader",
				],
			},
			{
				test: /\.(gif|png|jpg|jpeg|svg|ico|webp)/,
				type: "asset/resource",
			},
			// {
			// 	test: /\.(ttf|otf|eot|woff(2)?)(\?[a-z0-9]+)?$/,
			// 	exclude: /node_modules/,
			// 	generator: {
			// 		filename: "fonts/[name][ext]",
			// 	},
			// },
			{
				test: /\.(mp4|mpe?g)$/i,
				type: "asset/resource",
				generator: {
					filename: "video/[name][ext]",
				},
			},
			{
				test: /\.json$/,
				type: "asset/resource",
				generator: {
					filename: "json/[name][ext][query]",
				},
			},
		],
	},
	stats: {
		all: false,
		entrypoints: true,
		chunkGroups: true,
		timings: true,
		errors: true,
	},
	externals: {
		// gsap: "gsap",
		jquery: "jQuery",
	},
};
