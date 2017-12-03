<?php get_header();?>

<main>

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
                          <p class='introtext'><?php the_field('beskrivning'); ?></p>

                          <div class="line1_green"></div>

                          <div class='btncontainer'>
                              <a href='/boende'><button class='outlinebtn_green'>Boka boende</button></a>
                          </div>

                      </div>
                      </section>

                      <section class='boxsection'>
                        <div class='leftbox'>

                            <!-- <div class="corner1_beige"></div> -->

                            <div class='boxwidth'> <!--constrains box content width-->
                              <h2><?php the_field('nyhetsrubrik'); ?></h2>
                              <p><?php the_field('nyhetstext'); ?></p>

                                <div class='btncontainer'>
                                  <div class='btncontainer'>
                                    <a href="<?php the_field('nyhetslank');?>"><button class='outlinebtn_beige'>Se aktiviteter</button></a>
                                  </div>
                                </div>
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



</main>

<?php get_footer(); ?>
