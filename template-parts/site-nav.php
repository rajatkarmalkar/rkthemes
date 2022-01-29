 <?php
/**
 * Header Navigation template.
 *
 * @package Rkthemes
 */

$menu_class = \Rktheme\Inc\Menus::get_instance();
 $header_menu_id = $menu_class->get_menu_id( 'rkthemes_primary_menu' );
 $header_menus = wp_get_nav_menu_items( $header_menu_id );

?>

 <?php
      if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
        ?>
 <ul class="navbar-nav mr-auto">
      

      <?php
          foreach ( $header_menus as $menu_item ) {
            if ( ! $menu_item->menu_item_parent ) {

              $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
              $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );
              $has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : '';

              if ( ! $has_children ) {
                ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>"><?php echo esc_html( $menu_item->title ); ?></a>
      </li>

      <?php
              } else {
                ?>
     <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo esc_html( $menu_item->title ); ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    foreach ( $child_menu_items as $child_menu_item ) {
                      ?>
                      <a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url ); ?>">
                        <?php echo esc_html( $child_menu_item->title ); ?>
                      </a>
                      <?php
                    }
                    ?>
                  </div>
                </li>
    <?php } } } ?>
     
    </ul>
    <?php } ?>