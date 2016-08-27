module.exports = {
	options: {
		progressive: true,
		interlaced: true
	},
	dist: {
		files: [
			{
				expand: true,
				cwd: '<%= path.development %>/<%= folder.images %>',
				src: '{,**/}*.{gif,png,jpg,jpeg}',
				dest: '<%= path.production %>/<%= folder.images %>'
			}, {
				expand: true,
				cwd: '<%= path.development %>/<%= folder.pictures %>',
				src: '{,**/}*.{gif,png,jpg,jpeg}',
				dest: '<%= path.production %>/<%= folder.pictures %>'
			}

		]
	}
};
