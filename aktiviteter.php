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
  <section class="aktiviteter">
    <div class="contentwidth">

        <p>Lite text om aktiviteter</p>

      <div class="akt_grid">
<?php
    while ( $query->have_posts() ) {
      $query->the_post();

            $thumbnail = 'grid_thumbnail';
            $bild = get_field('bild');
            $thbild = $bild['sizes'][ $thumbnail ];
            $width = $bild['sizes'][ $thumbnail . '-width' ];
            $height = $bild['sizes'][ $thumbnail . '-height' ];
          ?>
          <a href='<?php the_permalink(); ?>'>
              <div class="akt_grid_item">
                <?php
                   if ($bild) { ?>
                  <div class='akt_thumbnail' style='background-image: url("<?php echo $thbild;?>");'></div>
                    <div class='overlay'>
                      <h3><?php the_field('aktivitet'); ?></h3>
                    </div>
                  <?php } ?>
              </div>
          </a>

    <?php }?>
      </div>
    </div>
  </section>
<?php } ?>


<?php get_footer(); ?>
