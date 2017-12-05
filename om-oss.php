<?php
/*
 * Template Name: Om oss
 */
?>

<?php get_header(); ?>
<?php
if( have_posts() ) {

  echo "<div class='headerimage'>";

    the_post_thumbnail( 'top_img' );
  echo "</div>";

    while ( have_posts() ) {
      the_post();

          // Section 1: light area with intro text
          echo "<section class='lightsection'>";
          echo "<div class='contentwidth'>"
          ?>

              <h1 class='topheading'><?php the_field('rubrik'); ?></h1>
              <div class="line1_green"></div>
              <p class='introtext'><?php the_field('beskrivning'); ?></p>

          </div>
          </section>

          <section class='boxsection'>
            <div class='leftbox'>

                <!-- <div class="corner1_beige"></div> -->

                <div class='boxwidth'> <!--constrains box content width-->
                  <h2><?php the_field('nyhetsrubrik'); ?></h2>
                  <p><?php the_field('nyhetstext'); ?></p>
                </div>
              </div>

              <?php
              $large = 'large';
              $mediumlarge = 'medium_large';

              $nyhetsbild = get_field('nyhetsbild');

              $lbild = $nyhetsbild['sizes'][ $large ];
              $width = $nyhetsbild['sizes'][ $large . '-width' ];
              $height = $nyhetsbild['sizes'][ $large . '-height' ];

              if ($nyhetsbild) {
                ?>
                <div class='rightbox' style='background-image: url("<?php echo  $lbild;?>");'>
              <?php }
              ?>


            </div>

        <?php echo "</section>";
    }
}
?>
<?php get_footer(); ?>
