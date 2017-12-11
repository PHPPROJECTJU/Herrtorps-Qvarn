<?php get_header();?>

<?php

            if( have_posts() ) {

                while ( have_posts() ) {
                  the_post();
                  echo "<div class='headerimage'>";

                    the_post_thumbnail( 'top_img' );
                  echo "</div>";

                      ?>
                      <!-- Section 1: light area with intro text -->
                      <section class='lightsection'>
                          <div class='contentwidth'>
                              <h1 class='topheading'><?php the_field('rubrik'); ?></h1>
                              <p class='introtext'><?php the_field('beskrivning'); ?></p>

                              <div class="line1_green"></div>

                              <div class='btncontainer'>
                                  <a href="<?php the_field('go-to-lank');?>"><button class='outlinebtn_green'><?php the_field('lank-etikett-1');?></button></a>
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
                                    <a href="<?php the_field('nyhetslank');?>"><button class='outlinebtn_beige'><?php the_field('nyhetslank-etikett-1');?></button></a>
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
                      </section>

                      <!-- Second light section -->

                      <section class='lightsection'>
                          <div class='contentwidth'>
                              <h1 class='topheading'><?php the_field('rubrik-2'); ?></h1>
                              <p class='introtext'><?php the_field('beskrivning-2'); ?></p>

                              <div class="line1_green"></div>

                              <div class='btncontainer'>
                                  <a href="<?php the_field('go-to-lank-2');?>"><button class='outlinebtn_green'><?php the_field('lank-etikett-2');?></button></a>
                              </div>

                          </div>
                      </section>

                      <!-- Second box section -->

                      <section class='boxsection'>

                          <?php
                                $large = 'large';
                                $mediumlarge = 'medium_large';

                                $nyhetsbild2 = get_field('nyhetsbild-2');

                                $lbild2 = $nyhetsbild2['sizes'][ $large ];
                                $width = $nyhetsbild2['sizes'][ $large . '-width' ];
                                $height = $nyhetsbild2['sizes'][ $large . '-height' ];

                                if ($nyhetsbild2) {
                            ?>
                            <div class='rightbox2' style='background-image: url("<?php echo  $lbild2;?>");'>
                          <?php }
                          ?>


                        </div>
                        <div class='leftbox2'>

                            <!-- <div class="corner1_beige"></div> -->

                            <div class='boxwidth'> <!--constrains box content width-->
                              <h2><?php the_field('nyhetsrubrik-2'); ?></h2>
                              <p><?php the_field('nyhetstext-2'); ?></p>

                                <div class='btncontainer'>
                                  <div class='btncontainer'>
                                    <a href="<?php the_field('nyhetslank-2');?>"><button class='outlinebtn_special'><?php the_field('nyhetslank-etikett-2');?></button></a>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </section>

                      <!-- Last light section before footer -->

                      <section class='lightsection'>
                          <div class='contentwidth'>
                              <h1 class='topheading'><?php the_field('rubrik-3'); ?></h1>
                              <p class='introtext'><?php the_field('beskrivning-3'); ?></p>

                              <div class="line1_green"></div>

                              <div class='btncontainer'>
                                  <a href="<?php the_field('go-to-lank-3');?>"><button class='outlinebtn_green'><?php the_field('lank-etikett-3');?></button></a>
                              </div>

                          </div>
                      </section>
                    <?php
                }
            }
?>


<?php get_footer(); ?>
