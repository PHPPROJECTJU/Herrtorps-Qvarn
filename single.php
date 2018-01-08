<?php get_header(); ?>

<script>

document.getElementById('menu-item-512').className += ' current-menu-parent';

</script>

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

                  <?php
                  $prisrubrik = get_field('pris-rubrik');


                  if ($prisrubrik) {?>
                  <div class="price-box">
                    <h3><?php echo $prisrubrik;?></h3>
                    <?php
                        echo get_field('pris');
                    ?>
                  </div>
                <?php }?>

              </div>
          </div>
    <?php }
   } ?>


<?php get_footer(); ?>
