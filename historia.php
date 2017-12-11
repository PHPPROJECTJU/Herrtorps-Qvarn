<?php
/*
 * Template Name: Historia
 */
?>


<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<?php

$args = array(
  'post_type' => 'historiepost',
  'posts_per_page' => -1
);

$query = new WP_Query( $args );
?>
<div class="contentwidth">
<?php
if( $query->have_posts() ) {

    while ( $query->have_posts() ) {
      $query->the_post();
      ?>

      <section class="historia">

        <div class="historiatext">
            <h2 class='page_rubrik'><?php the_field('rubrik'); ?></h2>
        </div>

          <?php
            $mediumlarge = 'medium_large';
            $bild = get_field('bild');
            $mlbild = $bild['sizes'][ $mediumlarge ];
            $width = $bild['sizes'][ $mediumlarge . '-width' ];
            $height = $bild['sizes'][ $mediumlarge . '-height' ];
          ?>

          <div class="tabbild" style="width:100%;">
            <?php
               if ($bild) { ?>
              <div class='tab_img' style='background-image: url("<?php echo $mlbild;?>");'></div>
            <?php } ?>
          </div>

        <div class="historiatext-lang">
          <p><?php the_field('langtext'); ?></p>
        </div>

      </section>

    <?php }
}
?>
</div>

<?php get_footer(); ?>
