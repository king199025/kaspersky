module.exports = {
	dev: {
		options: {
			paths: ['<%= path.development %>/<%= folder.less %>']
		},
		files: [
			{
				expand: true,
				cwd: '<%= path.development %>/<%= folder.less %>',
				src: ['*.less', '!_*.less'],
				dest: '<%= path.temp %>/<%= folder.styles_drafts %>',
				ext: '.css'
			}
		]
	},
	dist: {
		options: {
			paths: ['<%= path.development %>/<%= folder.less %>']
		},
		files: [
			{
				expand: true,
				cwd: '<%= path.development %>/<%= folder.less %>',
				src: ['*.less', '!_*.less'],
				dest: '<%= path.temp %>/<%= folder.styles_drafts %>',
				ext: '.css'
			}
		]
	},
	compile: {
		options: {
			paths: ['<%= path.development %>/<%= folder.less %>']
		},
		files: [
			{
				expand: true,
				cwd: '<%= path.development %>/<%= folder.less %>',
				src: ['*.less', '!_*.less'],
				dest: '<%= path.temp %>/<%= folder.styles_drafts %>',
				ext: '.css'
			}
		]
	}
};
