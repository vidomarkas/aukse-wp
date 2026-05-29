/** @type {import('tailwindcss').Config} */

module.exports = {
	mode: "jit",
	corePlugins: {
		preflight: true,
	},
	theme: {
		extend: {
			fontFamily: {
				sans: ['"Inter"', "sans-serif"], // Overrides default sans
			},
		},
		screens: {
			sm: "640px",
			md: "768px",
			lg: "1024px",
			xl: "1280px",
			"2xl": "1536px",
		},
		fontFamily: {
			inter: ['"Inter"', "sans-serif"],
		},
	},
	blocklist: ["align-top"],
	safelist: [],
};
