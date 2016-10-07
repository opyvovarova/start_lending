<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title' => array(
		'label' => __( 'Заголовок', 'unyson' ),
		'type'  => 'text',
		'value' => 'Услуги'
	),
    'services' => array(
	    'type'  => 'addable-box',
	    'label' => __('Список услуг', '{domain}'),
	    'box-options' => array(
		    'title' => array(
		    	'type' => 'text',
			    'label' => __('Название услуги', '{domain}'),
		    ),
		    'image' => array(
		    	'type' => 'upload',
			    'label' => __('Значок услуги', '{domain}'),
		    	'images_only' => true,
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
);