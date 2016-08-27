module.exports = {
	svgsprite: {
		src: ['<%= path.development %>/img/index/sprite-icon'],
		dest: '<%= path.development %>/img/index/sprite-icon/result',
		options: {
			preview: 'preview',
			sprite: ['sprite-icon'],
			prefix: 'svg_icon',
			dims: true,
			keep: false,
			padding: 4,
			render: {
				css: false,
				scss: false,
				less: 'less/_icons'
			},
			verbose: 1
		}

	}
};
