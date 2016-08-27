module.exports = {
	dist: {
		files: [{
				expand: true,
				dot: true,
				cwd: '<%= path.development %>',
				dest: '<%= path.production %>',
				src: [
					'*.{ico,txt}',
					'.htaccess',
					'<%= folder.video %>/{,**/}*',
					'<%= folder.audio %>/{,**/}*',
					'<%= folder.swf %>/{,**/}*',
					'<%= folder.fonts %>/{,**/}*',
					'<%= folder.scripts %>/vendor/{,**/}*.js',
					'<%= folder.images %>/{,**/}*.{webp,svg,svgz}',
					'<%= folder.pictures %>/{,**/}*.{webp,svg,svgz}',
					'<%= folder.components %>/jquery-modern/dist/jquery.min.js',
					'<%= folder.components %>/jquery-legacy/dist/jquery.min.js'
				]
			}, {
				expand: true,
				dot: true,
				cwd: '<%= path.temp %>',
				dest: '<%= path.production %>',
				src: [
					'<%= folder.styles %>/{,**/}*.no-min.css'
				]
			},
		]
	},
    dev: {
        expand: true,
        dot: true,
        cwd: '<%= path.development %>',
        dest: '<%= path.temp %>',
        src: [
            '<%= folder.video %>/{,**/}*',
            '<%= folder.audio %>/{,**/}*',
            '<%= folder.fonts %>/{,**/}*',
            '<%= folder.images %>/{,**/}*',
            '<%= folder.pictures %>/{,**/}*']
    },
    devTemplates: {
        expand: true,
        dot: true,
        cwd: '<%= path.development %>/<%= folder.templates %>',
        dest: '<%= path.indexTemp %>',
        src: '*'
    },
	yiiViewSvg: {
		expand: true,
		dot: true,
		cwd: '<%= path.development %>/<%= folder.images %>/',
		dest: '<%= path.productionYiiView %>',
		src: 'symbols.svg',
		rename: function(dest, src) {
			return dest + 'svg.php';
		}
	}
};
