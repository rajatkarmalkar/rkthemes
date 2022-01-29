<?php 
/**
*
*
*    @package rktheme
*/


namespace Rktheme\Inc;

use Rktheme\Inc\Traits\Singleton;

	class Rktheme{
		use Singleton;

		protected function __construct(){

			//load class
			Assets::get_instance();
			Menus::get_instance();
			$this->setup_hooks();
		}

		protected function setup_hooks(){
			// actions and filters
		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
		}


		/**
	 * Setup theme.
	 *
	 * @return void
	 */
	public function setup_theme() {

		add_theme_support( 'title-tag' );

		add_theme_support(
			'custom-logo',
			[
				'header-text' => [
					'site-title',
					'site-description',
				],
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
			]
		);

		add_theme_support(
			'custom-background',
			[
				'default-color' => 'ffffff',
				'default-image' => '',
				'default-repeat' => 'no-repeat',
			]
		);

		add_theme_support( 'post-thumbnails' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
		);
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/build/css/editor.css' );

/**
		 * Some blocks such as the image block have the possibility to define
		 * a “wide” or “full” alignment by adding the corresponding classname
		 * to the block’s wrapper ( alignwide or alignfull ). A theme can opt-in for this feature by calling
		 * add_theme_support( 'align-wide' ), like we have done below.
		 *
		 * @see Wide Alignment
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
		 */
		add_theme_support( 'align-wide' );

		}
	}



 ?>