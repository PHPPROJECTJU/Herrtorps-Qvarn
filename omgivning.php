<?php
/*
 * Template Name: Omgivning
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<?php

$args = array(
  'post_type' => 'omgivningspost',
  'posts_per_page' => -1
);

$query = new WP_Query( $args );



if( $query->have_posts() ) {

    while ( $query->have_posts() ) {
      $query->the_post();
      ?>

      <section class="omgivning">
        <div class="contentwidth">

            <?php
            $mediumlarge = 'medium_large';
            $bild = get_field('bild');
            $mlbild = $bild['sizes'][ $mediumlarge ];
            $width = $bild['sizes'][ $mediumlarge . '-width' ];
            $height = $bild['sizes'][ $mediumlarge . '-height' ];
          ?>
          <div class="omgivningleft">
          <?php
             if ($bild) { ?>
            <div class='omgivning_bild' style='background-image: url("<?php echo $mlbild;?>");'></div>
            <?php } ?>

          </div>
          <div class="omgivning-right">

              <h2><?php the_field('rubrik'); ?></h2>
              <p><?php the_field('beskrivning'); ?></p>

              <div class='btncontainer'>
                <a target="_blank" href="<?php the_field('lank');?>"><button class='outlinebtn_beige'>Läs mer</button></a>
              </div>
          </div>


        </div>
      </section>

    <?php }
}
?>

<?php get_footer(); ?>
