<?php

/***************************** ACF Register */
define('MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/');
define('MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/');
include_once(MY_ACF_PATH . 'acf.php');

/****************************** Required Files */
require_once(__DIR__ . '/inc/classes/cyn-acf.php');
require_once(__DIR__ . '/inc/classes/cyn-register.php');
require_once(__DIR__ . '/inc/classes/cyn-options.php');
require_once(__DIR__ . '/inc/classes/cyn-form.php');
require_once(__DIR__ . '/inc/classes/cyn-common.php');

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
	$version = "1.6.0";

	wp_enqueue_style('cyn-styles', get_stylesheet_uri(), [], $version);
	wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', [], $version);
	wp_enqueue_style('cyn-theme', get_template_directory_uri() . '/css/cyn-theme-bundle-prefixed.css', [], $version);

	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('global-styles');
	wp_dequeue_style('classic-theme-styles');

	wp_enqueue_script('swiper', get_template_directory_uri() . '/js/lib/swiper-bundle.min.js', [], $version, true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/dist/scripts.bundle.min.js', ['jquery', 'swiper'], $version, true);
}
add_action('wp_enqueue_scripts', 'cyn_enqueue_files');

remove_action('wp-head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function cyn_enqueue_head()
{
	echo "<script>";
	echo "
		var cyn_head_sceipt = {
			url: '" . admin_url('admin-ajax.php') . "',
			nonce: '" . wp_create_nonce('ajax-nonce') . "'
		}
	";
	echo "</script>";
}
add_action('wp_head', 'cyn_enqueue_head');

/***************************** Theme Setup*/
function cyn_theme_setup()
{
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	register_nav_menus([
		'header-menu' => 'Header',
		'footer-us' => 'Footer - Us',
		'footer-what-we-do' => 'Footer - What We Do?',
		'footer-know-more' => 'Footer - Know More',
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

// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action('admin_head', 'fix_svg');

/***************************** Instance Classes */
cyn_acf::cyn_initialize_acf();

$cyn_acf = new cyn_acf();
$cyn_acf->cyn_acf_actions();

$cyn_register = new cyn_register();

$cyn_form = new cyn_form();

/* Update Checker */
require(__DIR__ . '/inc/plugin-update-checker/plugin-update-checker.php');

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/cyandm/flooringoutletandmore',
	__FILE__,
	'flooringoutletandmore'
);
$updateChecker->setBranch('main');
$updateChecker->setAuthentication('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');
