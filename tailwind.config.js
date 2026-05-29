const baseConfig = require("./tailwind.base.config.js");

/** @type {import('tailwindcss').Config} */
module.exports = {
	...baseConfig,
	content: [
		// Theme files
		"./src/js/**/**/*.js",
		"./src/scss/**/**/*.{css,scss}",
		"./public/wp-content/themes/aukse-theme/**/**/*.{php,js}",

		// Plugin frontend files (theme builds these)
		// "./public/wp-content/plugins/aukse-blocks/src/blocks/**/save.js",
		// "./public/wp-content/plugins/aukse-blocks/src/blocks/**/view.js",
		// "./public/wp-content/plugins/aukse-blocks/src/blocks/**/style.scss",
		// "./public/wp-content/plugins/aukse-blocks/src/blocks/**/render.php",
	],
};
