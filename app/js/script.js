$(document).ready(function(){

    /*top-slider*/   
    $('.top-slider__box').owlCarousel({
        animateOut: 'flipOutX',
        animateIn: 'flipInX',
        loop: true,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 450,
        nav: false,
        autoplay: true,
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