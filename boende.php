<?php
/*
 * Template Name: Boende
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<?php

$args = array(
  'post_type' => 'boendepost',
  'posts_per_page' => -1
);

$query = new WP_Query( $args );



if( $query->have_posts() ) {

    while ( $query->have_posts() ) {
      $query->the_post();
      ?>

      <section class="boende">
        <div class="contentwidth">

            <?php
            $mediumlarge = 'medium_large';
            $bild = get_field('bild');
            $mlbild = $bild['sizes'][ $mediumlarge ];
            $width = $bild['sizes'][ $mediumlarge . '-width' ];
            $height = $bild['sizes'][ $mediumlarge . '-height' ];
          ?>
          <div class="boendebild">
          <?php
             if ($bild) { ?>
            <div class='boende_img' style='background-image: url("<?php echo $mlbild;?>");'></div>
            <?php } ?>

          </div>
          <div class="boendetext">


              <h2><?php the_field('rumstyp'); ?></h2>
              <ul class="icons">
                  <li>
                    <img src="<?php echo  get_template_directory_uri();?>/img/bed-32.png" class='boendeicon' alt='Bäddar' /><p><?php the_field('baddar'); ?></p>
                  </li>
                  <li>
                    <img src="<?php echo  get_template_directory_uri();?>/img/window-layout-32.png" class='boendeicon' alt='Utsikt' /><p><?php the_field('utsikt'); ?></p>
                  </li>
              </ul>
              <p><?php the_field('beskrivning'); ?></p>

              <p>Pris: <?php the_field('pris'); ?>kr/natt</p>

          </div>


        </div>
      </section>

    <?php }?>
    <br />
    <br />
    <br />
    <br />
    <div class='btncontainer'>
      <a target="_blank" href="<?php the_field('lank');?>"><button class='outlinebtn_green'>Boka rum</button></a>
    </div>
<?php }
?>

<?php get_footer(); ?>
