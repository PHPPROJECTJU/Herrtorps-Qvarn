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

/*-----To make menu object active https://stackoverflow.com/questions/26789438/how-to-add-active-class-to-wp-nav-menu-current-menu-item-simple-way----*/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_filter('show_admin_bar', '__return_false');

?>
