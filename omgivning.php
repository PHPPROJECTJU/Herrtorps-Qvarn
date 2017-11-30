<?php
/*
 * Template Name: Omgivning
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<?php
if( have_posts() ) {

    while ( have_posts() ) {
      the_post();?>

      <section class="omgivning">
        <div class="contentwidth">

            <?php
            $mediumlarge = 'medium_large';
            $skarabild = get_field('skarabild');
            $mlbild = $skarabild['sizes'][ $mediumlarge ];
            $width = $skarabild['sizes'][ $mediumlarge . '-width' ];
            $height = $skarabild['sizes'][ $mediumlarge . '-height' ];
          ?>
          <div class="omgivningleft">
          <?php
             if ($skarabild) { ?>
            <div class='omgivning_bild' style='background-image: url("<?php echo $mlbild;?>");'></div>
            <?php } ?>

          </div>
          <div class="omgivningright" style="width: 40%; float: left;">

              <h2><?php the_field('skararubrik'); ?></h2>
              <p><?php the_field('skaratext'); ?></p>

              <div class='btncontainer'>
                <a target="_blank" href="<?php the_field('skaralank');?>"><button class='outlinebtn_beige'>Läs mer</button></a>
              </div>
          </div>


        </div>
      </section>

      <section class="omgivning">
        <div class="contentwidth">

            <?php
            $mediumlarge = 'medium_large';
            $hornbild = get_field('hornborgabild');
            $mlbild = $hornbild['sizes'][ $mediumlarge ];
            $width = $hornbild['sizes'][ $mediumlarge . '-width' ];
            $height = $hornbild['sizes'][ $mediumlarge . '-height' ];
            ?>
          <div class="omgivningleft">
            <?php
            if ($hornbild) { ?>
            <div class='omgivning_bild' style='background-image: url("<?php echo $mlbild;?>");'></div>
            <?php } ?>
          </div>
          <div class="omgivningright" style="width: 40%; float: left;">

              <h2><?php the_field('hornborgarubrik'); ?></h2>
              <p><?php the_field('hornborgatext'); ?></p>

              <div class='btncontainer'>
                <a target="_blank" href=<?php the_field('hornborgalank');?>><button class='outlinebtn_beige'>Läs mer</button></a>
              </div>
          </div>

        </div>
      </section>

    <?php }
}
?>

<?php get_footer(); ?>
