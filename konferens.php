<?php
/*
 * Template Name: Konferens
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<div class='contentmargins'>

<div class="konferens">
  <div class="konferensinfo">
      <h1><?php the_field("konferensrubrik") ?></h1>
      <p><?php the_field("konferensbeskrivning") ?></p>
  </div>

<div class="line1_green"></div>

<div class="konferensdagpris">
  <div class="konferensdag">
      <h3><?php the_field("endagskonferens") ?></h3>
      <p><?php the_field("textendag") ?></p>
      <h3><?php the_field("tvadagarskonferens") ?></h3>
      <p><?php the_field("texttvadagar") ?></p>
  </div>

  <div class="konferenspris">
      <h3><?php the_field("endagskonferens") ?></h3>
      <p><b><?php the_field("prisendag") ?></b></p>
      <h3><?php the_field("tvadagarskonferens") ?></h3>
      <p><b><?php the_field("pristvadagar") ?></b></p>
  </div>
</div>

  <div class="konferensformular">
    <h1><?php the_field("intresserad") ?></h1>

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
</div>

</div>

<?php get_footer(); ?>
