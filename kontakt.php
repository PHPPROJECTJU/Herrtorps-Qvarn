<?php
/*
 * Template Name: Kontakt
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida-only-img.php'); ?>

<div class='contentmargins'>

<section class='kontaktyta'>

  <h2 class='kontaktheading'><?php the_field('kontaktrubrik') ?></h2>

    <div class='kontaktuppgifter'>

      <?php
       if( have_posts() ) {
         while ( have_posts() ) {
            the_post();

            if (get_locale() == 'sv_SE') {
              echo "<h3>Adress</h3>";
            }//end of swe language check
            if (get_locale() == 'en_GB') {
              echo "<h3>Address</h3>";
             }//end of eng language check
             ?>

              <p>
                <?php
                  echo the_field('adress');
                ?>
              </p>
              <br/>
              <?php
              if (get_locale() == 'sv_SE') {
                echo "<h3>Telefon</h3>";
              }//end of swe language check
              if (get_locale() == 'en_GB') {
                echo "<h3>Phone</h3>";
               }//end of eng language check
               ?>
              <p><?php
                echo the_field('telefon');
              ?></p>
              <br/>
              <?php
              if (get_locale() == 'sv_SE') {
                echo "<h3>E-post</h3>";
              }//end of swe language check
              if (get_locale() == 'en_GB') {
                echo "<h3>E-mail</h3>";
               }//end of eng language check
               ?>
              <p><?php
                echo the_field('epost');
              ?></p>
              <br/>
          </div>


      <?php
         }
       }
      ?>
<!-- https://stackoverflow.com/questions/29118772/how-to-determine-the-current-language-of-a-wordpress-page-when-using-polylang -->
  <div class='kontaktformular'>
      <?php
      if (get_locale() == 'en_GB') {
          echo do_shortcode( '[contact-form-7 id="725" title="Kontaktformulär 1 - ENGLISH"]' );
      } else{
          echo do_shortcode( '[contact-form-7 id="617" title="Kontaktformulär 1"]' );
      }
      ?>
  </div>

</section>


<!--ÖPPETTIDER START----------------------------------------->
<!--solution to display posts by category found 4/12-17 here: https://wordpress.stackexchange.com/questions/66219/list-all-posts-in-custom-post-type-by-taxonomy-->

</div>

<div class='oppettider'>

<div class='oppetmargins'>

<h2 class='kontaktheading'><?php the_field('oppettiderrubrik') ?></h2>

<?php
function getTider() {

$disclaim = "<p style='display: none;' id='oppet_disclaim'>".get_field('tabelltext'). "</p>";


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


  <?php

  $oppettid = $category->name;

  $query = new WP_Query($args);
     if( $query->have_posts() ) {

       ?>
       <div class='onetable'>
       <div class="kontakttab">
       <button class="kontaktTablinks" id="defaultOpen" onclick="oppetTab(event, '<?php echo $oppettid;?>')"><?php echo $oppettid;?></button>
       <?php

       while ( $query->have_posts() ) {
       $query->the_post();

     }
   }?>
 </div>
 <?php
      if( $query->have_posts() ) {

        if (($category->name == 'Säsongsöppettider') || ($category->name == 'Seasons')) {

            echo $disclaim;

        }

        ?><table id='<?php echo $oppettid ?>' class='oppet_tabell'><?php


        echo "<tr>";

        if (($category->name == 'Säsongsöppettider') || ($category->name == 'Seasons')) {

          if (get_locale() == 'sv_SE') {
            echo "<th>Säsong</th>";
          }//end of swe language check
          if (get_locale() == 'en_GB') {
            echo "<th>Season</th>";
           }//end of eng language check

        } else {
          if (get_locale() == 'sv_SE') {
            echo "<th>Titel</th>";
          }//end of swe language check
          if (get_locale() == 'en_GB') {
            echo "<th>Title</th>";
           }//end of eng language check
        }



        if (($category->name == 'Säsongsöppettider') || ($category->name == 'Seasons')) {

          if (get_locale() == 'sv_SE') {
            echo "<th>Period</th>";
          }//end of swe language check
          if (get_locale() == 'en_GB') {
            echo "<th>Duration</th>";
           }//end of eng language check

        } else {

          if (get_locale() == 'sv_SE') {
            echo "<th>Datum</th>";
          }//end of swe language check
          if (get_locale() == 'en_GB') {
            echo "<th>Date</th>";
           }//end of eng language check
        }

        if (get_locale() == 'sv_SE') {
          echo "<th>Öppet</th>";
        }//end of swe language check
        if (get_locale() == 'en_GB') {
          echo "<th>Open</th>";
         }//end of eng language check

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
        ?>
        </div>
        <?php

     }
   }
}


getTider();
?>

</div>
</div>

<!--ÖPPETTIDER SLUT---------------------------------------->



<?php
if( have_posts() ) {

    while ( have_posts() ) {
      the_post();
          ?>

<div class='vagbeskrivning'>
  <div class='contentmargins'>
<h2 class='kontaktheading'><?php the_field('vagbeskrivningrubrik'); ?></h2>
    <div class='vagbeskrivningleft'>
      <p><?php the_field('vagbeskrivningtext'); ?></p>
    </div>

    <br/>

    <?php echo do_shortcode("[huge_it_maps id='1']");?>
</div><?php

}
}
?>


</div>
</div>

<?php
$src3 = get_template_directory_uri() . "/javascript/tabs.js";
?>
<script type="text/javascript" src="<?php echo $src3;?>"></script>

<?php get_footer(); ?>
