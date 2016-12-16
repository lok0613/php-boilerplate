$(document).ready(function() {
	var navbar = $('.navbar.navbar-default');
	var container = $('.container-fluid > .container');

	var scrollLimit = 125;
	if ($(window).width() < 768) {
		scrollLimit = 88;
	}

	var stickNavbar = function () {
		if ($(window).scrollTop() > scrollLimit) {
	    	container.addClass('fix-navbar');
	    }
	    if ($(window).scrollTop() < scrollLimit + 1) {
	    	container.removeClass('fix-navbar');
	    }
	}
	stickNavbar();
	$(window).scroll(stickNavbar);
})
