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

?>
