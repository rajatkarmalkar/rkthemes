<?php 
/**
*
*
*    @package rktheme
*/

namespace Rktheme\Inc;
use Rktheme\Inc\Traits\Singleton;
	class Assets{
		use Singleton;

		protected function __construct(){

			//load class
			$this->setup_hooks();
		}

		protected function setup_hooks(){
			// actions and filters
			add_action("wp_enqueue_scripts", [$this, 'register_styles']);
			add_action("wp_enqueue_scripts", [$this, 'register_scripts']);
		}


		public function register_styles(){
		wp_register_style( 'rkthemes', RKTHEME_DIR_URI . '/assets/css/rkthemes.css', [], filemtime( RKTHEME_DIR_PATH .'/assets/css/rkthemes.css' ), 'all' );

		wp_register_style( 'bootstrap-css', RKTHEME_DIR_URI . '/assets/bootstrap/css/bootstrap.min.css', [], false, 'all' );

		wp_enqueue_style('rkthemes');
		wp_enqueue_style('bootstrap-css');	
		}

		public function register_scripts(){
			wp_register_script( 'main-js', RKTHEME_DIR_URI . '/assets/js/main.js', array(), filemtime( RKTHEME_DIR_PATH.'/assets/js/main.js' ), true );

		wp_register_script( 'bootstrap-js', RKTHEME_DIR_URI . '/assets//bootstrap/js/bootstrap.min.js', array('jquery'), false, true );

		wp_enqueue_script('main-js');
		wp_enqueue_script('bootstrap-js');	
		}		
}

 ?>