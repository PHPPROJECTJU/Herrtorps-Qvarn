<?php get_header(); ?>

    <?php if (have_posts()) {
      while (have_posts()) {
      the_post(); ?>

        <article>
            <h1><?php the_title(); ?></h1>
            <section>
                <?php the_post_thumbnail ('single_large'); ?>
                <?php the_content(); ?>
            </section>
        </article>

        <?php
      }
    } ?>

<?php get_footer(); ?>
