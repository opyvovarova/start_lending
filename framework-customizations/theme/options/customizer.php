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
    'panel_slider' => array(
	    'title'   => __( 'Слайдер в шапке', '{domain}' ),
	    'options' => array(
		    'slides' => array(
			    'type'  => 'addable-box',
			    'label' => __('Слайды', '{domain}'),
			    'box-options' => array(
				    'image' => array(
					    'type' => 'upload',
					    'label' => __('Изображение', '{domain}'),
					    'images_only' => true,
				    ),
				    'span' => array(
					    'type' => 'text',
					    'label' => __('Верхний заголовок', '{domain}'),
				    ),
				    'title' => array(
				    	'type' => 'text',
					    'label' => __('Заголовок', '{domain}'),
				    ),
				    'desc' => array(
				    	'type' => 'textarea',
					    'label' => __('Текст слайда', '{domain}'),
				    ),
			    ),
			    'template' => '{{- title}}', // box title
			    'box-controls' => array( // buttons next to (x) remove box button
				    'control-id' => '<small class="dashicons dashicons-smiley"></small>',
			    ),
			    'limit' => 0, // limit the number of boxes that can be added
			    'add-button-text' => __('Добавить', '{domain}'),
			    'sortable' => true,
		    )
	    ),
    ),
);