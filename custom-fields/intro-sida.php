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


                    </div>
                    </section>

              <?php
              }
          }
?>
