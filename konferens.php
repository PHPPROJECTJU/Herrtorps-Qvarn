<?php
/*
 * Template Name: Konferens
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<div class='contentmargins'>

<!-- https://stackoverflow.com/questions/29118772/how-to-determine-the-current-language-of-a-wordpress-page-when-using-polylang -->
  <div class='kontaktformular'>
      <?php
      if (get_locale() == 'en_GB') {
          echo do_shortcode( '[contact-form-7 id="733" title="Företagsformulär - ENGLISH"]' );
      } else{
          echo do_shortcode( '[contact-form-7 id="732" title="Företagsformulär"]' );
      }
      ?>
  </div>

</div>

<?php get_footer(); ?>
