var saveLicense = require('uglify-save-license');
module.exports = {
	dist: {
		options: {
			preserveComments: saveLicense,
			sourceMap: true
		},
		files: [
			{
				expand: true,
				cwd: '<%= path.temp %>/<%= folder.scripts %>',
				src: ['*.js', '!*.min.js'],
				dest: '<%= path.production %>/<%= folder.scripts %>'
			}
		]
	}
};
