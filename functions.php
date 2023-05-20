<?php
/*******************************************ACF Register */
define('MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/');
define('MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/');
include_once(MY_ACF_PATH . 'acf.php');

/****************************** Required Files */
require_once(__DIR__ . '/inc/classes/cyn-acf.php');
require_once(__DIR__ . '/inc/classes/cyn-register.php');
require_once(__DIR__ . '/inc/classes/cyn-form.php');




/***************************** User Login / Logout */
function cyn_logout_user()
{
    wp_redirect(site_url());
    exit();
}

add_action('wp_logout', 'cyn_logout_user');

add_filter('login_errors', function () {
    return null;
});
/***************************** Enqueue Style And Scripts */

function cyn_enqueue_files()
{
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    wp_enqueue_style('cyn-styles', get_stylesheet_uri());
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');

    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', null, null, true);
    wp_enqueue_script('cyn-swipers', get_template_directory_uri() . '/js/swipers.js', null, null, true);
    wp_enqueue_script('cyn-ajax-form', get_template_directory_uri() . '/js/ajax-form.js', ['jquery'], null, true);
    wp_localize_script('cyn-ajax-form', 'cynAjax', array('url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('ajax-nonce')));
    wp_enqueue_script('cyn-mouse', get_template_directory_uri() . '/js/mouse.js', null, null, true);
    wp_enqueue_script('cyn-single-product', get_template_directory_uri() . '/js/single-product.js', null, null, true);
    wp_enqueue_script('cyn-scripts', get_template_directory_uri() . '/js/script.js', null, null, true);

}
add_action('wp_enqueue_scripts', 'cyn_enqueue_files');


remove_action('wp-head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


/***************************** Theme Setup*/

function cyn_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'header-menu' => 'Header',
        'footer-menu' => 'Footer'
    ]);
}
add_action('after_setup_theme', 'cyn_theme_setup');

/***************************** Theme initialize */

function cyn_theme_init()
{

}
add_action('init', 'cyn_theme_init');

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_widget_block_editor', '__return_false', 10);

/***************************** Instance Classes */
cyn_acf::cyn_initialize_acf();
cyn_form::cyn_create_form_table();

$cyn_acf = new cyn_acf();
$cyn_acf->cyn_acf_actions();

$cyn_register = new cyn_register();

$cyn_form = new cyn_form();







/************************ */
function livereload()
{
    echo '<script>document.write(\'<script src=”http://\' + (location.host || \'localhost\').split(\':\')[0] +\':35729/livereload.js?snipver=1"></\' + \'script>\')</script>';
}

add_action('wp_footer', 'livereload', 100);