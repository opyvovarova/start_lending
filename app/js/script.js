$(document).ready(function(){

    /*menu scroll*/
    $('.smoothScroll').click(function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top;
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    /*close menu scroll*/

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