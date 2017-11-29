<?php

/*--FOR SINGLE.PHP-------------------------------------------*/

if ( is_single() ) {

                if(have_posts() ) {

                  while (have_posts() ) {

                  echo "<div id='content'>";

                      the_post();

                      echo "<h2>";
                          the_title();
                      echo "</h2>";

                      the_terms(get_the_ID(), 'project-type', '<span class="categories">','</span><span class="categories">','</span>');

                    the_content();
                    the_post_thumbnail( 'large' );
                  echo "</div>";//end of #content

                } //While loop end
              } else { //if have_posts end
                echo "no posts";
              }
}
/*--FOR PAGE.PHP-------------------------------------------*/
elseif (is_page('Hem')) {

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

                        <div class='btncontainer'>
                            <a href='/boende'><button class='outlinebtn_green'>Boka boende</button></a>
                        </div>

                    </div>
                    </section>

                    <section class='boxsection'>
                      <div class='leftbox'>
                          <div class='boxwidth'> <!--constrains box content width-->
                            <h2><?php the_field('nyhetsrubrik'); ?></h2>
                            <p><?php the_field('nyhetstext'); ?></p>

                              <div class='btncontainer'>
                                <a href='/se-gora'><button class='outlinebtn_beige'>Se upplevelser</button></a>
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
}




?>
