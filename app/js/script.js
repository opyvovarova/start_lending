$(document).ready(function () {

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
       /* animateOut: 'flipOutX',
        animateIn: 'flipInX',*/
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

    /*services animation*/
    var windowHeight = $(window).height();//переменная для определения высоты окна    
    var elements = $('.services__box--item');

    $(window).scroll(function () {//при прокрутке окна

        if ( ($(this).scrollTop() + windowHeight) >= elements.offset().top) {//до начала блока с классом advantages

            elements.each(function(i) {//функция задержки появления каждого элемента
                $(this).delay((i++) * 500).fadeTo(1000, 1);
            }); 
        }
        if ( ($(this).scrollTop() + windowHeight) >= $('.contacts__box').offset().top) {//до начала блока с классом contacts__box
            $('.contacts__box--address').css({visibility:"visible"});//добавляется видимость
            $('.contacts__box--call').css({visibility:"visible"});//добавляется видимость
            $('.contacts__box--address').addClass('animated fadeInLeft');//добавляются классы для анимации
            $('.contacts__box--call').addClass('animated fadeInRight');//добавляются классы для анимации
        }        
    });
    /*close services animation*/
    
    /*go up arrow*/
    $(window).scroll(function () {
        var scrollDiv = $('#Go_Top');
        $(this).hide().removeAttr("href");
        if ($(window).scrollTop() >= "250") {/*показывать при прокрутке вниз показывать медленно #Go_Top*/
            $(this).fadeIn("slow")
        };
        if ($(window).scrollTop() <= "250") {/*при прокрутке ввверх медленно скрывать #Go_Top*/
            $(scrollDiv).fadeOut("slow");
        }
        else {
            $(scrollDiv).fadeIn("slow")
        };
    });
    $('#Go_Top').click(function () {/*функция плавной прокрутки вверх при клике на стрелку "вверх"*/
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    /*close go up arrow*/

    /*footer map*/
    if ($('#footerMap').length > 0) {//проверяет наличие блока на странице

        ymaps.ready(function () {

            var myMap = new ymaps.Map('footerMap', {
                // При инициализации карты, обязательно нужно указать
                // ее центр и коэффициент масштабирования
                center: [55.548726, 37.74242],
                zoom: 17
            });
            // Создание метки
            var myPlacemark = new ymaps.Placemark(
                // Координаты метки
                [55.548726, 37.74242] , {
                    // Свойства
                    // Текст метки
                    // iconContent: 'Центр детского творчества'
                }, {
                    // Опции
                    // Иконка метки будет растягиваться под ее контент
                    // preset: 'twirl#blueStretchyIcon'
                    iconImageHref: 'img/icons/biglmarker-icon.png', // картинка иконки
                    iconImageSize: [140, 118], // размеры картинки
                    iconImageOffset: [9, -103] // смещение картинки
                });
            // Добавление метки на карту
            myMap.geoObjects.add(myPlacemark);
        });
    };

    /*close footer map*/

});