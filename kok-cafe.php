<?php
/*
 * Template Name: Kök och café
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<!-- MENY (för mat) -->
<div class="matmeny">
<section class='boxsection'>


  <div class='leftbox2'>

      <div class='boxwidth'> <!--constrains box content width-->

        <div class="box_line_green"></div>

            <h2 class='page_rubrik'><?php the_field('meny'); ?></h2>
            <p class='matratter'>
            <?php the_field('meny-text'); ?><br><br>
            </p>

          <div class="box_line_green_flip"></div>

      </div>

    </div>

      <?php
      $large = 'large';
      $mediumlarge = 'medium_large';

      $matbild = get_field('menybild');

      $lbild = $matbild['sizes'][ $large ];
      $width = $matbild['sizes'][ $large . '-width' ];
      $height = $matbild['sizes'][ $large . '-height' ];

      if ($matbild) {
        ?>
        <div class='rightbox' style='background-image: url("<?php echo  $lbild;?>");'>
      <?php }
      ?>
    </div>

<?php echo "</section>";?>
</div> <!-- end of matmeny -->

<!--<div class="line1_green"></div>-->

<!-- HÖGTID -->
<!--code taken and modified from https://www.w3schools.com/howto/howto_js_tabs.asp 2 dec 2017-->
<div class='contentmargins'>
  <?php
      $args = array(
        'post_type' => 'hogtidpost',
        'posts_per_page' => -1
      );

      $query = new WP_Query( $args );
  ?>

  <div class="tab">
    <h2 class='page_rubrik'>Högtider</h2>
    <?php //funkar inte! the_field('hogtid'); ?>

  <?php // gets the name for each tab and later on creates a tab (btn) with each name
      if( $query->have_posts() ) {
         while ( $query->have_posts() ) {
           $query->the_post();
           $hogtid = get_field('namn');
  ?>

  <button class="tablinks" id="defaultOpen" onclick="hogtidTab(event, '<?php echo $hogtid;?>')"><?php echo $hogtid;?></button>

  <?php } //endwhile
  } //endif
  ?>

  </div>

  <?php

    if( $query->have_posts() ) {
       while ( $query->have_posts() ) {
         $query->the_post();
         $hogtid = get_field('namn');
         ?>

                <div id="<?php echo $hogtid;?>" class="tabcontent">

                  <?php
                    $mediumlarge = 'medium_large';
                    $bild = get_field('bild');
                    $mlbild = $bild['sizes'][ $mediumlarge ];
                    $width = $bild['sizes'][ $mediumlarge . '-width' ];
                    $height = $bild['sizes'][ $mediumlarge . '-height' ];
                  ?>

                  <div class="tabbild">
                  <?php
                     if ($bild) { ?>
                    <div class='tab_img' style='background-image: url("<?php echo $mlbild;?>");'></div>
                  <?php } ?>
                  </div>

                  <div class="tabtext">
                      <h3><?php echo $hogtid ?></h3>
                      <p><?php the_field('beskrivning'); ?></p>
                  </div>
                </div>

            <?php } ?>
        <?php } ?>

<br>
<br>
<br>

<div class="line2_green"></div>

<br>

<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();
?>

<!-- PUBKVÄLL -->
<div class="pubkvall">

        <div class="pubgalleri">
          <?php the_field('pubgalleri');?>
        </div>

        <div class="pubtext">
          <h2 class='page_rubrik'><?php the_field('pubrubrik'); ?></h2>
          <p><?php the_field('pubbeskrivning'); ?></p>
          <p><b><?php the_field('pubtid'); ?></b></p>
        </div>

</div>
<?php
}
}
 ?>

</div> <!-- end of contentmargins -->

 <?php
 $src3 = get_template_directory_uri() . "/javascript/tabs.js";
 ?>
 <script type="text/javascript" src="<?php echo $src3;?>"></script>

<?php get_footer(); ?>
