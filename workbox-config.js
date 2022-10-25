module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{php,jpg,json,js}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};