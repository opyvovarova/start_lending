<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'panel_1' => array(
        'title'   => __( 'Настройки сайта', '{domain}' ),
        'options' => array(
            'logo' => array(
                'type'  => 'upload',
                'label' => __( 'Логотип', '{domain}' ),
	            'images_only' => true
            ),
            'phone' => array(
	            'type'  => 'text',
	            'label' => __( 'Телефон', '{domain}' ),
	            'value' => '+7(495)461-62-30'
            ),
            'address' => array(
	            'type'  => 'text',
	            'label' => __( 'Адрес', '{domain}' ),
	            'value' => 'Россия, Московская область, <br> г.Видное, Белокаменное шосе, 10, вул.2'
            )
        ),
    ),
);