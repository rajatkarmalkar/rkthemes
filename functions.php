<?php 
/**
* Theme Functions
*
*/

if (!defined('RKTHEME_DIR_PATH')) {
	define( 'RKTHEME_DIR_PATH', untrailingslashit(get_template_directory()) );
}


if (!defined('RKTHEME_DIR_URI')) {
	define( 'RKTHEME_DIR_URI', untrailingslashit(get_template_directory_uri()) );
}

require_once  RKTHEME_DIR_PATH . '/inc/helpers/autoloader.php';



 function rktheme_instance(){
 	Rktheme\Inc\Rktheme::get_instance();
 }

rktheme_instance();

function add_scripts() {
		//wp_register_style( 'style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/assets/css/style.css' ), 'all' );
	//	wp_register_script('style', get_template_directory_uri() . 'assets/js/script.js', [], filemtime( get_template_directory() . '/assets/js/script.css' ), 'all');

// 	$myfile = get_template_directory_uri() . '/assets/css/cd-custom.css';
// $realpath = get_template_directory().'/assets/css/cd-custom.css';
// $myfilejs = get_template_directory_uri() . '/assets/js/main.js';
// $realpathjs = get_template_directory().'/assets/js/main.js';

		

			
}
add_action("wp_enqueue_scripts" , "add_scripts");


 ?>