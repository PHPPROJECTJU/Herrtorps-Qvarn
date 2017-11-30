<?php

$handle = "herrtorps-qvarn";
$src = get_template_directory_uri() . "/css/main.css";
$deps = null;
$ver = null;
$media = "all";
wp_register_style( $handle, $src, $deps, $ver, $media );

require('includes/post_types.php');
/*require('includes/taxonomies.php');*/
require('includes/reg_widgets.php');
require('includes/reg_menu.php');


function addthemesupport(){
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'link' ) );
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    require('includes/reg_media.php');
}


add_action( 'after_setup_theme', 'addthemesupport' );



function mytheme_enqueue_style() {
    wp_enqueue_style( 'herrtorps-qvarn', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );

?>
