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

  <h1 class='topheading'><?php the_field('rubrik'); ?></h1>
<?php
  }
}
?>

<!--ÖPPETTIDER START----------------------------------------->

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
      ?>

      <h2 class="page_rubrik"><?php echo $category->name;?></h2>
      <table id='oppet_tabell'>
        <tr>
          <th>Säsong</th>
          <th>Period</th>
          <th>Öppet</th>
        </tr>

        <?php
        while ( $query->have_posts() ) {
        $query->the_post();
        ?>

        <tr>
          <td><?php the_field('namn');?></td>
          <td><?php the_field('fran');?>-<?php the_field('till');?></td>
          <td><?php the_field('oppettid');?>-<?php the_field('stangningstid');?></td>
        </tr>

    <?php}?>
      </table><?php
     }
   }
}


getTider();
?>


<!--ÖPPETTIDER SLUT---------------------------------------->


<?php
if( have_posts() ) {

    while ( have_posts() ) {
      the_post();
          ?>

<h2 class='page_rubrik'><?php the_field('vagbeskrivningrubrik'); ?></h2>
<p><?php the_field('vagbeskrivningtext'); ?></p>

<?php
}
}
?>



</div>
</section>

<?php get_footer(); ?>
