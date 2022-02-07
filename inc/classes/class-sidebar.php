<?php 
/**
*	Register Sidebar
*
*    @package rktheme
*/


namespace Rktheme\Inc;

use Rktheme\Inc\Traits\Singleton;

	class Sidebar{
		use Singleton;

		protected function __construct(){

			//load class
			add_action('widgets_init', [$this, 'register_sidebars']);
			add_action('widgets_init', [$this, 'register_clock_widget']);
			$this->setup_hooks();
		}

		protected function setup_hooks(){
			// actions and filters
		
		}

		public function register_sidebars() {

		register_sidebar(
			[
				'name'          => esc_html__( 'Sidebar', 'rkthemes' ),
				'id'            => 'sidebar-1',
				'description'   => '',
				'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			]
		);
	
	}

		public function register_clock_widget() {
			register_widget("Rktheme\Inc\Widgets");
		}



}

 ?>