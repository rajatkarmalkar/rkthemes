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
require_once  RKTHEME_DIR_PATH . '/inc/helpers/template-tags.php';


 function rktheme_instance(){
 	Rktheme\Inc\Rktheme::get_instance();
 }

rktheme_instance();




