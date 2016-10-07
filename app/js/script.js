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
        if ( ($(this).scrollTop() + windowHeight) >= $('.services__animation1').offset().top) {//до начала блока с классом contacts__box
            $('.services__animation1--vertical').css({height:"100%"});
            $('.services__animation2--horizontal').css({width:"100%", left:"0"});
            $('.services__animation2--vertical').css({height:"100%"});
            $('.services__animation2--horizontal2').css({width:"100%"});
            $('.services__animation3--horizontal').css({width:"100%"});
            $('.services__animation4--horizontal').css({width:"100%"});
            $('.services__animation4--vertical').css({height:"100%"});
            $('.services__animation5--horizontal').css({width:"100%"});
            $('.services__animation5--vertical').css({height:"100%"});
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

    /*modal*/
    $('a.header__phone--call').click( function(event){ // лoвим клик пo ссылки с id="go"
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function(){ // пoсле выпoлнения предъидущей aнимaции
                $('.modal__call')
                    .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
    });
    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('.modal__call--close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
        $('.modal__call')
            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function(){ // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                }
            );
    });
    /*order modal*/
    $('a.brand__box--order').click( function(event){ // лoвим клик пo ссылки с id="go"
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function(){ // пoсле выпoлнения предъидущей aнимaции
                $('.modal__order')
                    .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
    });
    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('.modal__order--close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
        $('.modal__order')
            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function(){ // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                }
            );
    });
    /*close modal*/
});