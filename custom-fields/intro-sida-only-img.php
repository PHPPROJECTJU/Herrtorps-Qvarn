<?php
          if( have_posts() ) {
              while ( have_posts() ) {
                the_post();
                echo "<div class='headerimage'>";
                    the_post_thumbnail( 'top_img' );
                echo "</div>";
              }
          }
?>
