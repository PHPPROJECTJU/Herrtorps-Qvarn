<?php

function register_my_menu() {
  register_nav_menu('header-nav',__( 'Page Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>
