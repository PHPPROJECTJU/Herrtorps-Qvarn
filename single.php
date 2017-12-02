<?php get_header(); ?>

<?php


if( have_posts() ) {

  echo "<div class='headerimage'>";
      the_post_thumbnail( 'top_img' );
  echo "</div>";

    while ( have_posts() ) {

      the_post();
          ?>

          <div class="aktivitet">
              <div class="contentwidth">

                  <h2 class='page_rubrik'><?php the_field('aktivitet'); ?></h2>
                  <p><?php the_field('beskrivning'); ?></p>
                  <?php
                  $pris = get_field('pris');

                  if ($pris) {?>
                    <p>Pris: <?php echo $pris ?>kr/person</p>
                  <?php }
                  ?>


              </div>
          </div>
    <?php }
   } ?>


<?php get_footer(); ?>
