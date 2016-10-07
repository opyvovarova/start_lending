/**
 * Created by admin on 06.10.2016.
 */
$(document).ready(function(){
    $('.js-modal-phone').mask("+7(999)999-99-99");
    $('.js-model-phone').mask("+7(999)999-99-99");

    $(document).on('click','.js-modal-submit',function(){
        $('.modal__call--form').validate({ // initialize the plugin
            rules: {
                modalName: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                modalPhone: {
                    required: true,
                }
            },
            messages: {
                modalName: "неправильное имя",
                modalPhone: {
                    required: "неправильный номер",
                }
            },
            submitHandler: function (form) { // for demo
                var name = $('.js-modal-name').val(),
                    phone = $('.js-modal-phone').val();

                $.ajax({
                    url: myajax.url,
                    type: "POST",
                    data: "action=sendcallmodal&name=" + name + "&phone=" + phone,
                    success: function (data) {
                        $('.js-modal-name').val('');
                        $('.js-modal-name').val('');
                        $('.modal__call')
                            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                                function(){ // пoсле aнимaции
                                    $(this).css('display', 'none'); // делaем ему display: none;
                                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                                }
                            );
                    }
                });
                return false; // for demo
            }
        });
    });
    $(document).on('click','.js-model-submit',function(){
        $('.modal__order--form').validate({ // initialize the plugin
            rules: {
                modelName: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                modelPhone: {
                    required: true,
                },
                modelModel: {
                    required: true,
                }
            },
            messages: {
                modelName: "неправильное имя",
                modelPhone: {
                    required: "неправильный номер",
                }
            },
            submitHandler: function (form) { // for demo
                var name = $('.js-model-name').val(),
                    phone = $('.js-model-phone').val(),
                    model = $('.js-model-model').val();

                $.ajax({
                    url: myajax.url,
                    type: "POST",
                    data: "action=sendordermodal&name=" + name + "&phone=" + phone + "&model=" + model,
                    success: function (data) {
                        $('.js-model-name').val('');
                        $('.js-model-name').val('');
                        $('.modal__order')
                            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                                function(){ // пoсле aнимaции
                                    $(this).css('display', 'none'); // делaем ему display: none;
                                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                                }
                            );
                    }
                });
                return false; // for demo
            }
        });
    });
});