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
  <div class='leftbox' style="background-color: #3e0909;">
        <div class='boxwidth'>

            <h1><?php the_field('meny'); ?></h1>
            <p>• <?php the_field('matratt1'); ?></p>
            <p>• <?php the_field('matratt2'); ?></p>
            <p>• <?php the_field('matratt3'); ?></p>
            <p>• <?php the_field('matratt4'); ?></p>
            <p>• <?php the_field('matratt5'); ?></p>
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

<!-- PUBKVÄLL -->
<div class="pubkvall">
  <section class='lightsection'>
      <div class='contentwidth'>

        <div class="pubgalleri">
          <?php the_field('pubgalleri');?>
        </div>

        <div class="pubtext">
          <h1><?php the_field('pubrubrik'); ?></h1>
          <p><?php the_field('pubbeskrivning'); ?></p>
          <p><?php the_field('pubtid'); ?></p>
        </div>

      </div>
  </section>
</div>

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
    <h1>Högtider</h1>
    <?php //funkar inte! the_field('hogtid'); ?>

  <?php // gets the name for each tab and later on creates a tab (btn) with each name
      if( $query->have_posts() ) {
         while ( $query->have_posts() ) {
           $query->the_post();
           $hogtid = get_field('namn');
  ?>

  <button class="tablinks" id="defaultOpen" onclick="openTab(event, '<?php echo $hogtid;?>')"><?php echo $hogtid;?></button>

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
                      <h2><?php echo $hogtid ?></h2>
                      <p><?php the_field('beskrivning'); ?></p>
                  </div>
                </div>

            <?php } ?>
        <?php } ?>

</div> <!-- end of contentmargins -->

<script>

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function openTab(evt, hogtidTyp) {

    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(hogtidTyp).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<?php get_footer(); ?>
