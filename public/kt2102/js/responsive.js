$(window).ready(function() {
	var width = $(window).width();
	
	if (width <= 420) {
		$('#logo').attr('src', 'img/top-logo-2.png');
		$('.navbar-header').css('height', '90px');
	}
});

$(window).resize(function() {
	var width = $(window).width();
	
	if (width <= 420) {
		$('#logo').attr('src', 'img/top-logo-2.png');
		$('.navbar-header').css('height', '90px');
	}
	else {
		$('#logo').attr('src', 'img/top-logo.png');
		$('.navbar-header').css('height', 'auto');
	}
});