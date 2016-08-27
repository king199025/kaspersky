module.exports = {
	dev: {
		options: {
			port: '<%= connect.port %>',
			host: '*',
			hostname: '*',
			livereload: true,
			base: [
				'<%= path.indexTemp %>'
			]
		}
	}
};
