<?php
/*
 * Template Name: Boende
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<!--code taken and modified from https://www.w3schools.com/howto/howto_js_tabs.asp 2 dec 2017-->

<div class='contentwidth'>

  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Enkelrum')" id="defaultOpen">Enkelrum</button>
    <button class="tablinks" onclick="openTab(event, 'Dubbelrum')">Dubbelrum</button>
    <button class="tablinks" onclick="openTab(event, 'Flerbäddsrum')">Flerbäddsrum</button>
  </div>

  <div id="Enkelrum" class="tabcontent">
    <div class="boende">
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
                  <h2 class="page_rubrik"><?php the_field('rumstyp'); ?></h2>
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

        <?php } ?>
    <?php } ?>
    </div>
  </div>

  <div id="Dubbelrum" class="tabcontent">
    <h3>Dubbelrum</h3>
    <p>Dubbelrum med en dubbelsäng.</p>
  </div>

  <div id="Flerbäddsrum" class="tabcontent">
    <h3>Flerbäddsrum</h3>
    <p>Flerbäddsrum för flera personer.</p>
  </div>

</div>

<br>
<br>
<br>

<div class='btncontainer'>
  <a target="_blank" href="<?php the_field('lank');?>"><button class='outlinebtn_green'>Boka rum</button></a>
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
