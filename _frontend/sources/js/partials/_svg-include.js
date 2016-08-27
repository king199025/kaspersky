$(document).ready(function(){
	var $svg_symbols = $('.svg-symbols');

	if ($svg_symbols.html() == '')
	{
		$svg_symbols.load('/assets/img/symbols.svg');
	}
});