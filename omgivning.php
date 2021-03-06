<?php
/*
 * Template Name: Omgivning
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<?php

$args = array(
  'post_type' => 'omgivningspost',
  'posts_per_page' => -1
);

$query = new WP_Query( $args );
?>
<div class="contentwidth">
<?php
if( $query->have_posts() ) {

    while ( $query->have_posts() ) {
      $query->the_post();
      ?>

      <section class="omgivning">

            <?php
            $mediumlarge = 'medium_large';
            $bild = get_field('bild');
            $mlbild = $bild['sizes'][ $mediumlarge ];
            $width = $bild['sizes'][ $mediumlarge . '-width' ];
            $height = $bild['sizes'][ $mediumlarge . '-height' ];
          ?>
          <div class="omgivningbild">
          <?php
             if ($bild) { ?>
            <div class='omgivning_img' style='background-image: url("<?php echo $mlbild;?>");'>
              <?php if (get_field('bildtext')) {
                ?>
                <p class='bildtext'><?php the_field('bildtext'); ?></p>
                <?php
              } ?>
            </div>
            <?php } ?>

          </div>
          <div class="omgivningtext">

              <h2 class='page_rubrik'><?php the_field('rubrik'); ?></h2>
              <p><?php the_field('beskrivning'); ?></p>

              <br />
              <br />

              <div class='btncontainer'>
                <a target="_blank" href="<?php the_field('lank');?>"><button class='outlinebtn_green'><?php the_field('lank-etikett');?></button></a>
              </div>
          </div>
      </section>

      <br>

      <div class="line2_green"></div>

    <?php }
}
?>
</div>
      <br>

<?php get_footer(); ?>
