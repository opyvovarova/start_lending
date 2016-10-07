<?php
/**
 * startlp functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package startlp
 */

if ( ! function_exists( 'startlp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function startlp_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on startlp, use a find and replace
	 * to change 'startlp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'startlp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'startlp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif;
add_action( 'after_setup_theme', 'startlp_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function startlp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'startlp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'startlp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'startlp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function startlp_scripts() {
	wp_enqueue_style( 'startlp-style-libs', get_template_directory_uri() . '/css/libs.min.css' );
	wp_enqueue_style( 'startlp-style', get_template_directory_uri() . '/css/styles.min.css' );

	wp_enqueue_script( 'startlp-script-jq', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '', true );
	wp_enqueue_script( 'startlp-script-mask', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array(), '', true );
	wp_enqueue_script( 'startlp-script-validate', 'http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js', array(), '', true );
	wp_enqueue_script( 'startlp-script-validate-methods', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js', array(), '', true );
	wp_enqueue_script( 'startlp-script-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
	wp_enqueue_script( 'startlp-script-map', 'https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU', array(), '', true );
	wp_enqueue_script( 'startlp-script', get_template_directory_uri() . '/js/script.min.js', array(), '', true );
	wp_enqueue_script( 'startlp-main', get_template_directory_uri() . '/js/main.js', array(), '', true );
	wp_localize_script('startlp-main', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'startlp_scripts' );

// AJAX ACTION
add_action( 'wp_ajax_sendcallmodal', 'sendCallForm' );
add_action( 'wp_ajax_nopriv_sendcallmodal', 'sendCallForm' );

function sendCallForm() {
	if ( $_POST ) {
		$adminMail = get_option( 'admin_email' );

		$str = "С вашего сайта оставили заявку на обратный звонок:<br>";
		$str .= 'Имя: ' . $_POST["name"] . ' <br>';
		$str .= 'Телефон: ' . $_POST["phone"] . ' <br>';

		wp_mail( $adminMail, "Запрос на обратный звонок", $str, "Content-type: text/html; charset=UTF-8\r\n" );
	}
	wp_die();
}
// AJAX ACTION
add_action( 'wp_ajax_sendordermodal', 'sendOrderForm' );
add_action( 'wp_ajax_nopriv_sendordermodal', 'sendOrderForm' );

function sendOrderForm() {
	if ( $_POST ) {
		$adminMail = get_option( 'admin_email' );

		$str = "С вашего сайта заказали товар:<br>";
		$str .= 'Имя: ' . $_POST["name"] . ' <br>';
		$str .= 'Телефон: ' . $_POST["phone"] . ' <br>';
		$str .= 'Модель: ' . $_POST["model"] . ' <br>';

		wp_mail( $adminMail, "Заказ с сайта", $str, "Content-type: text/html; charset=UTF-8\r\n" );
	}
	wp_die();
}
