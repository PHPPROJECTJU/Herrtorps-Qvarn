<?php
/*
 * Template Name: Kök och café
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<div class='contentmargins'>

  <!-- MENY (för mat) -->
  <section class='boxsection'>
    <div class='leftbox' style="background-color: #3e0909;">

        <!-- <div class="corner1_beige"></div> -->

        <div class='boxwidth'> <!--constrains box content width-->
          <div class="matmeny">
            <h1><?php the_field('meny'); ?></h1>
            <p>• <?php the_field('matratt1'); ?></p>
            <p>• <?php the_field('matratt2'); ?></p>
            <p>• <?php the_field('matratt3'); ?></p>
            <p>• <?php the_field('matratt4'); ?></p>
            <p>• <?php the_field('matratt5'); ?></p>
          </div>
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

<!-- PUBKVÄLL -->
<div class="pubkvall">
  <div class="innerpubkvall">
    <h1><?php the_field('pubrubrik'); ?></h1>
    <p><?php the_field('pubbeskrivning'); ?></p>
    <p><?php the_field('pubtid'); ?></p>
  </div>
</div>

<!--code taken and modified from https://www.w3schools.com/howto/howto_js_tabs.asp 2 dec 2017-->

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

<?php
    if( $query->have_posts() ) {
       while ( $query->have_posts() ) {
         $query->the_post();
         $hogtid = get_field('namn');
?>

<button class="tablinks" id="defaultOpen" onclick="openTab(event, '<?php echo $hogtid;?>')"><?php echo $hogtid;?></button>

<?php }
  }
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

                <div class="boendebild">
                <?php
                   if ($bild) { ?>
                  <div class='boende_img' style='background-image: url("<?php echo $mlbild;?>");'></div>
                <?php } ?>
                </div>

                <div class="boendetext">
                    <h2 class="page_rubrik"><?php echo $hogtid ?></h2>
                    <p><?php the_field('beskrivning'); ?></p>
                </div>
              </div>

          <?php } ?>
      <?php } ?>

</div>

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
