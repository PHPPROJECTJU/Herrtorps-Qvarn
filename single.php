<?php get_header(); ?>

<?php


if( have_posts() ) {



    while ( have_posts() ) {

      the_post();

      echo "<div class='headerimage'>";
      echo get_the_post_thumbnail($post_id,'top_img');
      echo "</div>";
          ?>

          <div class="aktivitet">
              <div class="contentwidth">
                  <div class="aktivitet-box">
                      <h2 class='page_rubrik'><?php the_field('aktivitet'); ?></h2>
                      <p class="single-paragraf"><?php the_field('beskrivning'); ?></p>
                      <div class="img-box">
                        <?php
                            echo get_field('galleri-aktivitet');
                        ?>
                      </div>
                  </div>
                  <div class="price-box">
                    <h3><?php echo get_field('pris-rubrik');?></h3>
                    <?php
                        echo get_field('pris');
                    ?>
                  </div>

              </div>
          </div>
    <?php }
   } ?>


<?php get_footer(); ?>
