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

    <button class="tablinks" id="defaultOpen" onclick="openTab(event, '<?php echo $rumstyp;?>')"><?php echo $rumstyp;?></button>

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

              <div class="boendebild">
              <?php
                 if ($bild) { ?>
                <div class='boende_img' style='background-image: url("<?php echo $mlbild;?>");'></div>
              <?php } ?>
              </div>

              <div class="boendetext">
                  <h2 class="page_rubrik"><?php echo $rumstyp ?></h2>
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

        <?php } ?>
    <?php } ?>


<br>
<br>
<br>

  <div class='btncontainer'>
    <a target="_blank" href="<?php the_field('lank');?>"><button class='outlinebtn_green'>Boka rum</button></a>
  </div>

</div>

<script>

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function openTab(evt, rumsTyp) {

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
    document.getElementById(rumsTyp).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<?php get_footer(); ?>
