<?php 
/**
*
*	Register metaboxes
*    @package rkthemes
*/


namespace Rktheme\Inc;

use Rktheme\Inc\Traits\Singleton;

	class Meta_Box{
		use Singleton;

		protected function __construct(){

			//load class
			
			$this->setup_hooks();
		}

		protected function setup_hooks(){
			// actions and filters
		add_action( 'add_meta_boxes', [ $this, 'add_the_custom_meta_box' ] );
		add_action( 'save_post', [ $this, 'save_post_data' ] );
		}

		public function add_the_custom_meta_box(){
			$screens = [ 'post' ];
			foreach ( $screens as $screen ) {
			 add_meta_box(
			  'hide-title',
			  __('hide page title', 'rkthemes'),
			  [$this, 'custom_meta_box_html'],
			  $screen,
			  'side'
			);	
			}
		}


		public function custom_meta_box_html( $post ){

		$value = get_post_meta( $post->ID, '_hide_page_title', true );

		/**
		 * Use nonce for verification.
		 * This will create a hidden input field with id and name as
		 * 'hide_title_meta_box_nonce_name' and unique nonce input value.
		 */
		wp_nonce_field( plugin_basename(__FILE__), 'hide_title_meta_box_nonce_name' );
		?>
<label for="rkthemes-field"><?php esc_html_e( 'Hide the page title', 'rkthemes' ); ?></label>
		<select name="rkthemes_hide_title_field" id="rkthemes-field" class="postbox">
			<option value=""><?php esc_html_e( 'Select', 'rkthemes' ); ?></option>
			<option value="yes" <?php selected( $value, 'yes' ); ?>>
				<?php esc_html_e( 'Yes', 'rkthemes' ); ?>
			</option>
			<option value="no" <?php selected( $value, 'no' ); ?>>
				<?php esc_html_e( 'No', 'rkthemes' ); ?>
			</option>
		</select>

<?php
		}


		public function save_post_data($post_id){
			/**
		 * When the post is saved or updated we get $_POST available
		 * Check if the current user is authorized
		 */
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		/**
		 * Check if the nonce value we received is the same we created.
		 */
		if ( ! isset( $_POST['hide_title_meta_box_nonce_name'] ) ||
		     ! wp_verify_nonce( $_POST['hide_title_meta_box_nonce_name'], plugin_basename(__FILE__) )
		) {
			return;
		}
			 if ( array_key_exists( 'rkthemes_hide_title_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_hide_page_title',
            $_POST['rkthemes_hide_title_field']
        );
    }
		}


	}



