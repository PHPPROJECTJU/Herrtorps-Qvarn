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
            <a href="<?php the_field('nedladdningsbar_meny'); ?>" download><?php the_field('nedladdning_text');  ?></a>
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
      if (get_field('bildtext')) {
        ?>
        <p class='bildtext'><?php the_field('bildtext'); ?></p>
        <?php
      }
      ?>
    </div>

<?php echo "</section>";?>
</div> <!-- end of matmeny -->

<!--<div class="line1_green"></div>-->

<!-- HÖGTID -->
<!--code taken and modified from https://www.w3schools.com/howto/howto_js_tabs.asp 2 dec 2017-->
<div class='contentmargins'>


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

<!-- Cafe -->
<div class="cafe">

  <?php
  $large = 'large';
  $mediumlarge = 'medium_large';

  $cafebild = get_field('cafebild');

  $lbild = $cafebild['sizes'][ $large ];
  $width = $cafebild['sizes'][ $large . '-width' ];
  $height = $cafebild['sizes'][ $large . '-height' ];

  if ($cafebild) {
    ?>
    <div class='cafebild' style='background-image: url("<?php echo  $lbild;?>");'>
      <?php if (get_field('cafebildtext')) {
        ?>
        <p class='bildtext'><?php the_field('cafebildtext'); ?></p>
        <?php
      } ?>
    </div>
  <?php }?>

        <div class="cafetext">
          <h2 class='page_rubrik'><?php the_field('caferubrik'); ?></h2>
          <p><?php the_field('cafebeskrivning'); ?></p>
        </div>

</div>

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
