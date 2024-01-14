(function ($) {
    $('.tall-slide-area-all').owlCarousel({
        loop: true,
        nav: false,
        responsive: {
            0: {
                items: 1,
                margin: 10,
            },
            600: {
                items: 1,
                margin: 20,
            },
            1000: {
                items: 2,
                margin: 90,
            }
        },
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,

    });
    // faqs


    $('.single-accordian:first-child').children('.single-accordian-content').slideDown().prev('.single-accordian-tittle').addClass('active-accordian');

    $('.single-accordian-tittle').click(function () {
        $(this).toggleClass('active-accordian').next().slideToggle().parent('.single-accordian').siblings('.single-accordian').children('.single-accordian-content').hide();

        $(this).parent('.single-accordian').siblings('.single-accordian').children('.single-accordian-tittle').removeClass('active-accordian')
    });
    // popup viedeo
    $(document).ready(function () {
        $('.popup-service-details').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });

    // popup viedeo
    $(document).ready(function () {
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });



})(jQuery);
// JavaScript to handle tab switching
function showTab(tabId) {
    // Hide all tab contents
    var tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(function (tabContent) {
        tabContent.style.display = 'none';
    });

    // Show the selected tab content
    var selectedTab = document.getElementById(tabId);
    selectedTab.style.display = 'block';
}