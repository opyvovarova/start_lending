$(document).ready(function(){

    /*top-slider*/
    var top = $('.top-slider__box');

    top.owlCarousel({
        /*animateOut: 'fadeOut',
        animateIn: 'fadeIn',*/
        loop: true,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 450,
        nav: false,
        autoplay: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    /*close top-slider*/
    
});