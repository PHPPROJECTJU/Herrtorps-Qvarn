<?php
  if (have_posts()):
        ?>

        <div class="top-img"><?php the_post_thumbnail('top_img');?></div>
        <h2><?php the_field('text'); ?></h2>
        <p><?php the_field('text_field'); ?></p>

        <?php
  endif;
?>