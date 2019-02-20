<?php
/*
 * Template Name: Om oss
 */
?>

<?php get_header(); ?>
<?php require('custom-fields/intro-sida-only-img.php'); ?>

<?php

$args = array(
  'post_type' => 'ompost',
  'posts_per_page' => -1
);

$query = new WP_Query( $args );

if( $query->have_posts() ) {
?>


        <?php
            while ( $query->have_posts() ) {
              $query->the_post();
        ?>
        <section class='lightsection'>
            <div class='contentwidth'>
                <h1 class='topheading'><?php the_field('sektionsrubrik'); ?></h1>
                <p class='introtext'><?php the_field('huvudtext'); ?></p>
            </div>
        </section>

        <section class='boxsection'>

          <div class='leftbox'>

              <div class='boxwidth'> <!--constrains box content width-->
                <div class="box_line_beige"></div>

                <h2><?php the_field('rubrik'); ?></h2>
                <p><?php the_field('text'); ?></p>

                  <div class="box_line_beige_flip"></div>
              </div>
            </div>


            <?php
                  $large = 'large';
                  $mediumlarge = 'medium_large';

                  $bild = get_field('bild');

                  $lbild = $bild['sizes'][ $large ];
                  $width = $bild['sizes'][ $large . '-width' ];
                  $height = $bild['sizes'][ $large . '-height' ];

                  if ($bild) {
              ?>
              <div class='rightbox' style='background-image: url("<?php echo  $lbild;?>");'>
            <?php }
            ?>
            <?php if (get_field('bildtext')) {
              ?>
              <p class='bildtext'><?php the_field('bildtext'); ?></p>
              <?php
            } ?>
          </div>
        </section>


    <?php }?>
<?php } ?>
<section class='lightsection'>
    <div class='contentwidth'>
      <br>
      <br>
      <div class="line1_green"></div>
    </div>
</section>



<?php get_footer(); ?>
