module.exports = {

		options: {
			prefix : 'svg-',
			cleanup: false,
			cleanupdefs: true,
			includeTitleElement: false,
			inheritviewbox: false,
			svg: {
				xmlns: 'http://www.w3.org/2000/svg'
			},
			symbol: {

			}
		},
		default : {
			files: {
				'<%= path.development %>/<%= folder.images %>/symbols.svg': ['<%= path.development %>/<%= folder.images %>/svg/*.svg']
			}
		}

};