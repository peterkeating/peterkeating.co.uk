var PK = PK || {};

PK.global = {};

$(document).ready(function () {
	if (PK.global.hasScroll()) {
		$('#to-the-top').show();
	}

    $('#to-the-top').click(PK.global.toTheTop);
});

PK.global.toTheTop = function () {
	$('body').animate({scrollTop:0}, 1000);
};

PK.global.hasScroll = function () {
	return ($(document).height() > $(window).height());
};