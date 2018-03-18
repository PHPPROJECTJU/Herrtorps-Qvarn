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
            $large = 'large';
            $bild = get_field('bild');
            $largebild = $bild['sizes'][ $large ];
            $width = $bild['sizes'][ $large . '-width' ];
            $height = $bild['sizes'][ $large . '-height' ];
          ?>

          <div class="historiebild">
            <?php
               if ($bild) { ?>
              <img class='historie_img' src='<?php echo $largebild ?>'/>
            <?php } ?>
          </div>

        <div class="historiatext-lang">
          <p><?php the_field('langtext'); ?></p>
        </div>

      </section>

      <br>
      <div class="line2_green"></div>
      <br>

    <?php }
}
?>
</div>

<?php get_footer(); ?>
