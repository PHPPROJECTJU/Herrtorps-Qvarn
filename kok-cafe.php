<?php
/*
 * Template Name: Kök och café
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<div class='contentwidth'>

  <!-- MENY (för mat) -->
  <div class="matmeny">
    <h1>Meny</h1>
    <p>• <?php the_field('matratt1'); ?></p>
    <p>• <?php the_field('matratt2'); ?></p>
    <p>• <?php the_field('matratt3'); ?></p>
    <p>• <?php the_field('matratt4'); ?></p>
    <p>• <?php the_field('matratt5'); ?></p>
  </div>

  <div class="matmenybild">
    <?php // the_field('menybild'); ?>
  </div>

<!--code taken and modified from https://www.w3schools.com/howto/howto_js_tabs.asp 2 dec 2017-->

  <!-- HÖGTIDER -->

  <div class="tab">
    <h1>Högtider</h1>
    <button class="tablinks" onclick="openTab(event, 'Morsdag')" id="defaultOpen">Morsdag</button>
    <button class="tablinks" onclick="openTab(event, 'Farsdag')">Farsdag</button>
    <button class="tablinks" onclick="openTab(event, 'Påsk')">Påsk</button>
    <button class="tablinks" onclick="openTab(event, 'Jul')">Jul</button>
    <button class="tablinks" onclick="openTab(event, 'Midsommar')">Midsommar</button>
  </div>

  <div id="Morsdag" class="tabcontent">
    <h3><?php the_field('morsdag'); ?></h3>
    <p><?php the_field('morsdagbeskrivning'); ?></p>
  </div>

  <div id="Farsdag" class="tabcontent">
    <h3><?php the_field('farsdag'); ?></h3>
    <p><?php the_field('farsdagbeskrivning'); ?></p>
  </div>

  <div id="Påsk" class="tabcontent">
    <h3><?php the_field('pask'); ?></h3>
    <p><?php the_field('paskbeskrivning'); ?></p>
  </div>

  <div id="Jul" class="tabcontent">
    <h3><?php the_field('jul'); ?></h3>
    <p><?php the_field('julbeskrivning'); ?></p>
  </div>

  <div id="Midsommar" class="tabcontent">
    <h3><?php the_field('midsommar'); ?></h3>
    <p><?php the_field('midsommarbeskrivning'); ?></p>
  </div>

  <!-- PUBKVÄLL -->
  <div class="pubkvall">
    <h1><?php the_field('pubrubrik'); ?></h1>
    <p><?php the_field('pubbeskrivning'); ?></p>
    <p><?php the_field('pubtid'); ?></p>
  </div>

</div>

<script>

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function openTab(evt, Hogtid) {
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
    document.getElementById(Hogtid).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<?php get_footer(); ?>
