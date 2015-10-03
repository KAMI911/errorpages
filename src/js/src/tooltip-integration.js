$(function () {
	$('[data-toggle="tooltip"]').tooltip({
		'container': 'body'
	})
});

$(function () {
	var clickableTooltips = $('[data-toggle-click="tooltip"]');
	clickableTooltips.tooltip({
		'trigger': 'click'
	});
	clickableTooltips.on('shown.bs.tooltip', function (e) {
		var self = $(this);
		setTimeout(function () {
			self.tooltip('hide');
		}, 3000);
	});
});
