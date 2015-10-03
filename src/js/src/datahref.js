(function () {
	'use strict';
	$('tr[data-href] a').click(function (e) {
		e.stopPropagation();
	});

	$('tr[data-href]').click(function (e) {
		window.location.href = $(this).data('href');
	});
})(jQuery);