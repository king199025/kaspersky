module.exports = {
	"sprite-generate":[
		"sprite",
		"less:dev",
		"autoprefixer:dev",
		"copy:dev"
	],
	"svg-generate": [
		"svgstore",
		//"copy:yiiViewSvg"
	],
	"server": [
		"clean:dev",
		"rig:dev",
		"less:dev",
		"autoprefixer:dev",
		"copy:dev",
		"copy:devTemplates",
		"connect:dev",
		"watch"
	],
	"build": [
		"rig:dist",
		"less:dist",
		"autoprefixer:dist",
		"uglify:dist",
		"cssmin:dist",
		"imagemin:dist",
		"copy:dist",
		"copy:yiiViewSvg"
	],
	"buildNoImage": [
		"rig:dist",
		"less:dist",
		"autoprefixer:dist",
		"uglify:dist",
		"cssmin:dist",
		"copy:dist",
		"copy:yiiViewSvg"
	],
	"compile": [
		"rig:compile",
		"less:compile",
		"autoprefixer:compile",
		"imagemin:dist",
		"copy:dist"
	]
};
