var breakpoint_size = {
	'tiny': 320, // default viewport
	'small': 768,
	'medium': 980,
	'large': 1220,
	'huge': 1360,
	'giant': 1700
};

function breakpoint_mediaqueries(min, max){
	min = (breakpoint_size.hasOwnProperty(min)) ? breakpoint_size[min] : breakpoint_size['tiny'];
	max = max || 'undefined';
	max = (breakpoint_size.hasOwnProperty(max)) ? breakpoint_size[max] : '';

	if (max == '')
	{
		return 'screen and (min-width:' + min + 'px)';
	}
	else
	{
		return 'screen and (min-width:' + min + 'px) and (max-width:' + (max - 1) + 'px)';
	}
}