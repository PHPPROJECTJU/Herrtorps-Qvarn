<div id="postgrid">
<?php
  $args = array(
      'post_type'     => 'aktivitet',
      'post_per_page' => -1,
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()):
      while ($my_query->have_posts()):
          $my_query->the_post();
          ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            <?php the_post_thumbnail('grid_thumbnail'); ?>
          </a>
          <?php
      endwhile;
  endif;
?>
</div>
