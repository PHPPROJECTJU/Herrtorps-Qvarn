<?php
/*
 * Template Name: Kontakt
 */
?>

<?php get_header(); ?>


<?php
if( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      ?>

      <div class='headerimage'>
      <?php the_post_thumbnail( 'top_img' );?>
      </div>

      <section class='lightsection'>
      <div class='contentwidth'>


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
          'terms' => $category->slug,
          'posts_per_page' => -1
      ),
    ),
  );

  ?>
  <div class="kontakttab">
  <?php

  $oppettid = $category->name;

  $query = new WP_Query($args);
     if( $query->have_posts() ) {

       ?>
       <button class="kontaktTablinks" id="defaultOpen" onclick="openTab(event, '<?php echo $oppettid;?>')"><?php echo $oppettid;?></button>
       <?php

       while ( $query->have_posts() ) {
       $query->the_post();

     }
   }?>
 </div>
 <?php
      if( $query->have_posts() ) {

        ?><table id='<?php echo $oppettid ?>' class='oppet_tabell'><?php
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

        $laggtill = get_field('lagg_till_en_tid');

        $frandag = get_field('frandag');
        $tilldag = get_field('tilldag');

        if (($frandag) && ($tilldag)){
          echo $frandag;
          echo "-";
          echo $tilldag." ";
        }

          echo the_field('oppettid');
          echo "-";
          echo the_field('stangningstid');

          if ($laggtill) {
            echo "<br />";
            echo the_field('frandag2');
            echo "-";
            echo the_field('tilldag2')." ";
            echo the_field('oppettid2');
            echo "-";
            echo the_field('stangningstid2');

        ?></td>
        </tr>
        <?php
        }
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
  <?php echo do_shortcode( '[contact-form-7 id="617" title="Kontaktformulär 1"]' ); ?>
</div>



<?php
if( have_posts() ) {

    while ( have_posts() ) {
      the_post();
          ?>

<div class='vagbeskrivning'>
  <div class="line1_green"></div>
    <h2 class='page_rubrik'><?php the_field('vagbeskrivningrubrik'); ?></h2>
    <p><?php the_field('vagbeskrivningtext'); ?></p>

    <?php echo do_shortcode("[huge_it_maps id='1']");?>
</div><?php

}
}
?>



</div>
</section>

<script>

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function openTab(evt, oppettid) {

    // Declare all variables
    var i, oppet_tabell, kontaktTablinks;

    // Get all elements with class="oppet_tabell" and hide them
    oppet_tabell = document.getElementsByClassName("oppet_tabell");
    for (i = 0; i < oppet_tabell.length; i++) {
        oppet_tabell[i].style.display = "none";
    }

    // Get all elements with class="kontaktTablinks" and remove the class "active"
    kontaktTablinks = document.getElementsByClassName("kontaktTablinks");
    for (i = 0; i < kontaktTablinks.length; i++) {
        kontaktTablinks[i].className = kontaktTablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(oppettid).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>


<?php get_footer(); ?>
