(function ($) {
    $('.tall-slide-area-all').owlCarousel({
        loop: true,
        nav: false,
        responsive: {
            0: {
                items: 1,
                margin:10,
            },
            600: {
                items: 1,
                margin:20,
            },
            1000: {
                items: 2,
                margin:90,
            }
        },
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,        

    });

})(jQuery);