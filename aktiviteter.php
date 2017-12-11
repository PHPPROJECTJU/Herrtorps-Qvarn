<?php
/*
 * Template Name: Aktiviteter
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<?php

$args = array(
  'post_type' => 'aktivitetspost',
  'posts_per_page' => -1
);

$query = new WP_Query( $args );



if( $query->have_posts() ) {
?>
    <div class="contentmargins">

      <div class="akt_grid">
<?php
    while ( $query->have_posts() ) {
      $query->the_post();
?>
          <a href='<?php the_permalink(); ?>'>
              <div class="akt_grid_item">
                <?php
                the_post_thumbnail( 'grid_thumbnail' );
                ?>
                    <div class='overlay'>
                      <h3><?php the_field('aktivitet'); ?></h3>
                    </div>
              </div>
          </a>

    <?php }?>
      </div>
    </div>
<?php } ?>

<?php get_footer(); ?>
