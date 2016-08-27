var $window = $(window),
	$body = $('body'),
	scrollmagic_controller = ( typeof ScrollMagic == 'function' ) ? new ScrollMagic.Controller() : null,
	meta_csrfToken = $('head meta[name=csrf-token]').attr('content') || '';

var viewport = {
	'width': Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
	'height': Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
};

var libs = {
	'shareAPI': '//yastatic.net/share2/share.js',
	'ytAPI': '//www.youtube.com/iframe_api'
}