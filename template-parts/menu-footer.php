<?php
$footer_nav_list = '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>';
$footer_nav_wrapper = '<nav id="footer-nav" role="navigation" class="footer-nav" aria-label="Main menu">' . "\n" . $footer_nav_list . '</nav>';
$footer_args    = array(
  'theme_location' => 'primary',
  'container'      => '',
  'menu_class'     => 'nav',
  'menu_id'        => 'nav__menu--footer',
  'items_wrap'     => $footer_nav_wrapper,
  'walker'         => new fcwp_walker_nav_menu
);
if( has_nav_menu( 'primary' ) ) : 
  wp_nav_menu( $footer_args ); 
endif;