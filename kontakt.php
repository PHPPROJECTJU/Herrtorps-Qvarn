<?php
/*
 * Template Name: Kontakt
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

<!--ÖPPETTIDER START----------------------------------------->

              <?php
              function getTider() {

                  $args = array(
                    'post_type' => 'öppettider',
                    'posts_per_page' => -1
                  );

                  $query = new WP_Query( $args );

                  if( $query->have_posts() ) {

                      while ( $query->have_posts() ) {
                        $query->the_post();

                        echo "<p>";
                        echo the_field('namn');
                        echo "</p>";

                      }
                  }

              };

              getTider();
              ?>




<!--ÖPPETTIDER SLUT---------------------------------------->

              <h2 class='page_rubrik'><?php the_field('vagbeskrivningrubrik'); ?></h2>
              <p><?php the_field('vagbeskrivningtext'); ?></p>


          </div>
          </section>

    <?php
    }
}
?>

<?php get_footer(); ?>
