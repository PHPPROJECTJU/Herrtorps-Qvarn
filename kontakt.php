<?php
/*
 * Template Name: Kontakt
 */
?>

<?php get_header(); ?>

<div class='headerimage'>
<?php the_post_thumbnail( 'top_img' );?>
</div>

<section class='lightsection'>
<div class='contentwidth'>


<?php
if( have_posts() ) {

    while ( have_posts() ) {
      the_post();
?>

  <h1 class='kontaktheading'><?php the_field('rubrik'); ?></h1>
  <div class="line1_green"></div>
<?php
  }
}
?>

<!--ÖPPETTIDER START----------------------------------------->
<!--solution to display posts by category found 4/12-17 here: https://wordpress.stackexchange.com/questions/66219/list-all-posts-in-custom-post-type-by-taxonomy-->

<div class='oppettider'>

<h2 class='page_rubrik'>Öppettider</h2>

<?php
function getTider() {

$categories = get_terms('oppettidstyp');

foreach($categories as $category) {
  wp_reset_query();
  $args = array(
    'oppettider' => 'custom_post_type',
    'tax_query' => array(
      array(
          'taxonomy' => 'oppettidstyp',
          'field' => 'slug',
          'terms' => $category->slug
      ),
    ),
  );

  $query = new WP_Query($args);
     if( $query->have_posts() ) {

      echo "<h3>" . $category->name . "</h3>";
      echo "<hr>";
      echo "<table id='oppet_tabell'>";
      echo "<tr>";

      if ($category->name == 'Pubkvällar') {
        echo "<th>Titel</th>";
      } elseif($category->name == 'Säsongsöppettider') {
        echo "<th>Säsong</th>";
      } else {
        echo "<th>Tillfälle</th>";
      }


          echo "<th>Datum</th>";
          echo "<th>Öppet</th>";
      echo "</tr>";

        while ( $query->have_posts() ) {
        $query->the_post();


      ?><tr>
      <td><?php
        echo the_field('namn');
      ?></td>
      <td><?php
        echo the_field('fran');

        $till = get_field('till');

        if ($till) {
          echo "-";
          echo the_field('till');
        }

      ?></td>
      <td><?php
        echo the_field('oppettid');
        echo "-";
        echo the_field('stangningstid');
      ?></td>
    </tr><?php

      }
      echo "</table>";
     }
   }
}


getTider();
?>
</div>

<!--ÖPPETTIDER SLUT---------------------------------------->

<div class='kontaktformular'>
  <h2 class='page_rubrik'>Kontakta oss</h2>
  <?php dynamic_sidebar( 'footer-1' ); ?>
</div>


<?php
if( have_posts() ) {

    while ( have_posts() ) {
      the_post();
          ?>
<div class='vagbeskrivning'>
    <h2 class='page_rubrik'><?php the_field('vagbeskrivningrubrik'); ?></h2>
    <p><?php the_field('vagbeskrivningtext'); ?></p>

    <?php echo do_shortcode("[huge_it_maps id='1']");?>
</div><?php

}
}
?>



</div>
</section>

<?php get_footer(); ?>
