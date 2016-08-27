(function () {
	window.isMobile = false;

	$(document).ready(function () {
		var parser = new UAParser(),
			result = parser.getResult(),
			browser_name = result.browser.name.toLowerCase(),
			os_name = result.os.name.toLowerCase().replace(/\s+/g, ''),
			os_mobile = '',
			device = (result.device.model || 'default').toLowerCase();

		if (os_name == 'ios' || os_name == 'android' || os_name == 'windowsphone') {
			os_mobile = ' os-mobile';
			window.isMobile = true;
		}

		$('html').addClass(
			'browser-' + browser_name +
			' browser-' + browser_name + '-' + result.browser.major +
			' os-' + os_name +
			' device-' + device +
			os_mobile);
	});
})();