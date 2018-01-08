<?php
/*
 * Template Name: Cookie-policy
 */
?>

<?php get_header(); ?>

<div class='contentmargins'>

<?php
if( have_posts() ) {



    while ( have_posts() ) {

      the_post();
      ?><h1><?php the_field('rubrik');?></h1><?php
      ?><p><?php the_field('beskrivning');?></p><?php

    }
}
?>

</div>

<?php get_footer(); ?>
