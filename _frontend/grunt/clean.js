module.exports = {
	options: {
		force: true
	},
	dev: {
		files: [
			{
				dot: true,
				src: [
					'<%= path.temp %>/*',
					'!<%= path.temp %>/*.html'
				]
			}
		]
	},
	dist: {
		files: [
			{
				dot: true,
				src: [
					'<%= path.production %>/<%= folder.fonts %>',
					'<%= path.production %>/<%= folder.styles %>',
					'<%= path.production %>/<%= folder.scripts %>',
					'<%= path.production %>/<%= folder.images %>',
					'<%= path.production %>/<%= folder.pictures %>',
					'<%= path.production %>/<%= folder.components %>',
					'<%= path.production %>/<%= folder.swf %>',
					'<%= path.production %>/<%= folder.video %>',
					'<%= path.production %>/<%= folder.audio %>',
					'!<%= path.production %>/.git*'
				]
			}
		]
	}
};