$(window).scroll(function() {
    // Fade out the navbar if we pass 250px scrolled.

    var nav = $('.navbar-fixed-top');
    var top = 250;

    if ($(window).scrollTop() >= top) {
        nav.fadeOut('medium');
    } else {
        nav.fadeIn('medium');
    }
});