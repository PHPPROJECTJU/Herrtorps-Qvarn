<?php
/*
 * Template Name: Boende
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<!--code taken and modified from https://www.w3schools.com/howto/howto_js_tabs.asp 2 dec 2017-->

<div class='contentmargins'>

<?php
  $args = array(
    'post_type' => 'boendepost',
    'posts_per_page' => -1
  );

  $query = new WP_Query( $args );

?>
<div class="tab">
<?php
  if( $query->have_posts() ) {
     while ( $query->have_posts() ) {
       $query->the_post();
        $rumstyp = get_field('rumstyp');
       ?>

    <button class="tablinks" id="defaultOpen" onclick="rumTab(event, '<?php echo $rumstyp;?>')"><?php echo $rumstyp;?></button>

<?php }
}
?></div><?php

if( $query->have_posts() ) {
   while ( $query->have_posts() ) {
     $query->the_post();
      $rumstyp = get_field('rumstyp');
     ?>

            <div id="<?php echo $rumstyp;?>" class="tabcontent">


              <?php
                $mediumlarge = 'medium_large';
                $bild = get_field('bild');
                $mlbild = $bild['sizes'][ $mediumlarge ];
                $width = $bild['sizes'][ $mediumlarge . '-width' ];
                $height = $bild['sizes'][ $mediumlarge . '-height' ];
              ?>

              <div class="tabbild">
              <?php
                the_field('slider');
              ?>
              </div>

              <div class="tabtext">
                  <h2 class="page_rubrik"><?php echo $rumstyp ?></h2>
                  <ul class="icons">
                      <li>
                        <img src="<?php echo  get_template_directory_uri();?>/img/bed-icon.png" class='boendeicon' alt='Bäddar' /><p><?php the_field('baddar'); ?></p>
                      </li>
                      <li>
                        <img src="<?php echo  get_template_directory_uri();?>/img/window-icon_1.png" class='boendeicon' alt='Utsikt' /><p><?php the_field('utsikt'); ?></p>
                      </li>
                  </ul>
                  <p><?php the_field('beskrivning'); ?></p>

                  <p><?php the_field('pris'); ?></p>
              </div>
              </div>

        <?php } ?>
    <?php } ?>


<br>
<br>
<br>

  <div class='btncontainer'>
    <a target="_blank" href="<?php the_field('lank');?>"><button class='outlinebtn_green'>Boka rum</button></a>
  </div>

</div>

<?php
$src3 = get_template_directory_uri() . "/javascript/tabs.js";
?>
<script type="text/javascript" src="<?php echo $src3;?>"></script>

<?php get_footer(); ?>
