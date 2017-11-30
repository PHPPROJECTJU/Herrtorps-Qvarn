<?php
/*
 * Template Name: Omgivning
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>



<?php get_footer(); ?>

<?php
if(have_posts() ) {

    <div class="omgivning">
      <h2><?php the_field('Skararubrik'); ?></h2>
      <p><?php the_field('Skaratext'); ?></p>
      <?php the_field('Skarabid'); ?>
      <p><?php the_field('Skaralänk'); ?></p>
    </div>

    <div class="omgivning">
      <h2><?php the_field('Hornborgarubrik'); ?></h2>
      <p><?php the_field('Hornborgatext'); ?></p>
      <?php the_field('Hornborgabild'); ?>
      <p><?php the_field('Hornborgalänk'); ?></p>
    </div>

<?php } //if have_posts end

else {
  echo "no posts";
} //esle end
?>
