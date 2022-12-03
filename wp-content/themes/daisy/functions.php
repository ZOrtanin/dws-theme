<?php


add_action('wp_enqueue_scripts', 'daisy_scripts');

function daisy_scripts() {
    wp_enqueue_style('daisy-style', get_stylesheet_uri() );
	wp_enqueue_style('daisy-styles', get_template_directory_uri() . '/assets/css/styles.css' , array(), null, 'all');
	wp_enqueue_style('daisy-new-styles', get_template_directory_uri() . '/assets/css/new-css.css' , array(), null, 'all');
	wp_enqueue_style('daisy-styles-wooc', get_template_directory_uri() . '/woocommerce.css' , array(), null, 'all');
	wp_enqueue_style('daisy-pl', 'https://cdn.plyr.io/3.6.3/plyr.css' , array(), null, 'all');
	wp_enqueue_style('daisy-reset', get_template_directory_uri() . '/assets/css/reset.css' , array(), null, 'all');
	wp_enqueue_style('daisy-media', get_template_directory_uri() . '/assets/css/media.css' , array(), null, 'all');
	wp_enqueue_style('daisy-slick', get_template_directory_uri() . '/assets/css/slick.min.css' , array(), null, 'all');


	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
	wp_enqueue_script('daisy_slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true);
	wp_enqueue_script('daisy_popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), null, true);
	wp_enqueue_script('daisy_formstyler', get_template_directory_uri() . '/assets/js/jquery.formstyler.js', array(), null, true);
	wp_enqueue_script('daisy_jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), null, true);
	wp_enqueue_script('daisy_pl', 'https://cdn.plyr.io/3.6.3/plyr.js', array(), null, true);
	// wp_enqueue_script('daisy_mCustomScrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array(), null, true);
	wp_enqueue_script('daisy_script', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
	// wp_enqueue_script('daisy_map-src', get_template_directory_uri() . 'http://maps.google.com/maps/api/js?key=AIzaSyD8Sa-pQvShYr_o0sdirKLe4gfiNuTm4P8', array(), null, true);
    // wp_enqueue_script('daisy_map', get_template_directory_uri() . '/assets/js/map.js', array(), null, true);

};
//  add_filter('woocommerce_enqueue_styles', '__return_false');

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

add_theme_support( 'post-thumbnails' );

register_nav_menus(
	array(
		'header-menu' => esc_html__( 'Меню в шапке', 'daisy' ),
		// 'comparison-link' => esc_html__( 'Товары в сравнении', 'daisy' ),
		// 'wish-link' => esc_html__( 'Список желаний', 'daisy' ),
		// 'cart-link' => esc_html__( 'Корзина', 'daisy' ),
		// 'profile-link' => esc_html__( 'Личный кабинет', 'daisy' ),
	)
);


add_action( 'widgets_init', 'daisy_widgets_init' );
require_once get_template_directory() . '/inc/widgets.php';
// require_once get_template_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';
// require_once get_template_directory() . '/inc/cbfi/index.php';
// require_once get_template_directory() . '/inc/custom-fields/theme-options.php';
require_once get_template_directory() . '/inc/cb/index.php';
require_once get_template_directory() . '/inc/custom-fields/header-footer.php';
require_once get_template_directory() . '/inc/custom-fields/post-meta.php';
require_once get_template_directory() . '/inc/custom-fields/page-fields.php';

// add_action( 'after_setup_theme', 'woocommerce_support' ); function woocommerce_support() { add_theme_support( 'woocommerce' ); }

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_action( 'woocommerce_before_shop_loop', 'wcb_show_category_banner', 7 );

require_once get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
require_once get_template_directory() . '/woocommerce/includes/wc-functions.php';
require_once get_template_directory() . '/woocommerce/includes/wc-functions-single.php';
require_once get_template_directory() . '/woocommerce/includes/wc-functions-archive.php';

add_action('admin_bar_menu', function() {
    remove_action('wp_before_admin_bar_render', 'wp_customize_support_script');
}, 50);

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );

/**
 * Отключаем принудительную проверку новых версий WP, плагинов и темы в админке,
 * чтобы она не тормозила, когда долго не заходил и зашел...
 * Все проверки будут происходить незаметно через крон или при заходе на страницу: "Консоль > Обновления".
 *
 * @see https://wp-kama.ru/filecode/wp-includes/update.php
 * @author Kama (https://wp-kama.ru)
 * @version 1.1
 */
if( is_admin() ){
	// отключим проверку обновлений при любом заходе в админку...
	remove_action( 'admin_init', '_maybe_update_core' );
	remove_action( 'admin_init', '_maybe_update_plugins' );
	remove_action( 'admin_init', '_maybe_update_themes' );

	// отключим проверку обновлений при заходе на специальную страницу в админке...
	remove_action( 'load-plugins.php', 'wp_update_plugins' );
	remove_action( 'load-themes.php', 'wp_update_themes' );

	// оставим принудительную проверку при заходе на страницу обновлений...
	//remove_action( 'load-update-core.php', 'wp_update_plugins' );
	//remove_action( 'load-update-core.php', 'wp_update_themes' );

	// внутренняя страница админки "Update/Install Plugin" или "Update/Install Theme" - оставим не мешает...
	//remove_action( 'load-update.php', 'wp_update_plugins' );
	//remove_action( 'load-update.php', 'wp_update_themes' );

	// событие крона не трогаем, через него будет проверяться наличие обновлений - тут все отлично!
	//remove_action( 'wp_version_check', 'wp_version_check' );
	//remove_action( 'wp_update_plugins', 'wp_update_plugins' );
	//remove_action( 'wp_update_themes', 'wp_update_themes' );

	/**
	 * отключим проверку необходимости обновить браузер в консоли - мы всегда юзаем топовые браузеры!
	 * эта проверка происходит раз в неделю...
	 * @see https://wp-kama.ru/function/wp_check_browser_version
	 */
	add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_empty_array' );
}

/*Обновление темы с моего хоста*/
require 'inc/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'http://wp.daisywebstudio.com/wp-update/?action=get_metadata&slug=daisy',
    __FILE__, //Full path to the main plugin file or functions.php.
    'daisy'
);
