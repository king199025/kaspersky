module.exports = {
	less: {
		files: ['<%= path.development %>/<%= folder.less %>/{,**/}*.less'],
		tasks: ['less:dev', 'autoprefixer:dev']
	},
	rig: {
		files: [ '<%= path.development %>/<%= folder.scripts %>/{,**/}*.js' ],
		tasks: ['rig:dev']
	},
    templates: {
        files: [ '<%= path.development %>/<%= folder.templates %>{,**/}*.html' ],
        tasks: ['copy:devTemplates']
    },
    dev: {
        files: [ '<%= path.development %>/<%= folder.images %>{,**/}*',  '<%= path.development %>/<%= folder.pictures %>{,**/}*'],
        tasks: ['copy:dev']
    },
	livereload: {
		options: {
			interrupt: true,
			livereload: true,
			spawn: false
		},
		files: [ '<%= path.temp %>/{,**/}*' ]
	}
};
