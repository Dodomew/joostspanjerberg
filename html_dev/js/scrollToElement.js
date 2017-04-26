$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top -100
        }, 750);
    }
});

// http://stackoverflow.com/questions/3042651/jquery-scrolltop-not-working-in-chrome-but-working-in-firefox
// http://stackoverflow.com/questions/9618997/run-scrolltop-with-offset-of-element-by-id
