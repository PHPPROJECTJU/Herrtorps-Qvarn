<?php

require('includes/post_types.php');
/*require('includes/taxonomies.php');
require('includes/add_widgets.php');
require('includes/add_menu.php');*/


function addthemesupport(){
    //add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'link' ) );
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    //require('includes/media_size.php');
}


add_action( 'after_setup_theme', 'addthemesupport' );


?>
