module.exports = {
	options: {
		browsers: [ '> 1%', 'last 2 versions', 'ie 8', 'ie 9' ]
	},
	dev: {
		expand: true,
		flatten: true,
		src: '<%= path.temp %>/<%= folder.styles_drafts %>/**/*.css',
		dest:'<%= path.temp %>/<%= folder.styles %>'
	},
	dist: {
		expand: true,
		flatten: true,
		src: '<%= path.temp %>/<%= folder.styles_drafts %>/**/*.css',
		dest:'<%= path.temp %>/<%= folder.styles %>'
	},
	compile: {
		expand: true,
		flatten: true,
		src: '<%= path.temp %>/<%= folder.styles_drafts %>/**/*.css',
		dest:'<%= path.production %>/<%= folder.styles %>'
	}
};
