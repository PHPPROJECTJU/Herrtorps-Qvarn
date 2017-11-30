<?php
/*
 * Template Name: Omgivning
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<?php
if( have_posts() ) {

    while ( have_posts() ) {
      the_post();?>

      <div class="omgivning">
          <h2><?php the_field('skararubrik'); ?></h2>

            <?php
            $mediumlarge = 'medium_large';
            $skarabild = get_field('skarabild');
            $mlbild = $skarabild['sizes'][ $mediumlarge ];
            $width = $skarabild['sizes'][ $mediumlarge . '-width' ];
            $height = $skarabild['sizes'][ $mediumlarge . '-height' ];
            //
             if ($skarabild) { ?>
            <div class='omgivning_bild' style='background-image: url("<?php echo $mlbild;?>");'> 
            <?php } ?>


          <p><?php the_field('skaratext'); ?></p>
          <p><?php the_field('skaralank'); ?></p>
      </div>

      <div class="omgivning">
          <h2><?php the_field('hornborgarubrik'); ?></h2>

            <?php
            // $mediumlarge = 'medium_large';
            // $hornbild = get_field('hornborgabild');
            // $mlbild = $hornbild['sizes'][ $mediumlarge ];
            // $width = $hornbild['sizes'][ $mediumlarge . '-width' ];
            // $height = $hornbild['sizes'][ $mediumlarge . '-height' ];
            //
            // if ($hornbild) { ?>
            <!--<div class="hornbild" style='background-image: url("<?php //echo $hornbild;?>");'></div>-->
            <?php //} ?>

        <?php the_field('hornborgabild') ?>
        <p><?php the_field('hornborgatext'); ?></p>
        <p><?php the_field('hornborgalank'); ?></p>
      </div>

    <?php }
}
?>

<?php get_footer(); ?>
