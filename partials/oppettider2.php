<?php
// function getTider() {
//
// $typer = get_terms('oppettidstyp');
//
// foreach($typer as $typ) {
//   wp_reset_query();
//   $args = array(
//     'oppettider' => 'custom_post_type',
//     'tax_query' => array(
//       array(
//           'taxonomy' => 'oppettidstyp',
//           'field' => 'slug',
//           'terms' => $typ->slug,
//           'posts_per_page' => 1
//       ),
//     ),
//   );
//
//   $oppettidstyp = $category->name;
//
//   $query = new WP_Query($args);
//
//   if( $query->have_posts() ) {
//      while ( $query->have_posts() ) {
//        $query->the_post();
//
//         echo $oppettidstyp;
//
//         }
//       }
//
//   }
// }
//
//
// getTider();




function dropDown(){
  $args = array(
    'post_type' => 'oppettider',
    'posts_per_page' => -1
  );

  $query = new WP_Query( $args );

  $matches = 0;

  if( $query->have_posts() ) {
     while ( $query->have_posts() ) {
       $query->the_post();

       $terms = get_terms(array('taxonomy' => 'oppettidstyp', 'hide_empty' => false));


/*Namn på en tid*/
      $titel = get_field('namn');



/*från och till på en säsong/period, datum (ex: 5/12-19/12)*/
       $fran = get_field('fran');
       $till = get_field('till');

       $period = get_field('period');



/*från och till, veckodag (ex: mån till fre)*/
       $frandag = get_field('frandag');
       $tilldag = get_field('tilldag');

/*från och till klockslag för öppet och stängt*/
       $oppettid = get_field('oppettid');
       $stangningstid = get_field('stangningstid');

/*ifall det är ikryssat att det finns olika tider olika veckodagar under samma period (används för att separera mån-fre och lör-sön t ex)*/

       $laggtill = get_field('lagg_till_en_tid');

       $frandag2 = get_field('frandag2');
       $tilldag2 = get_field('tilldag2');
       $oppettid2 = get_field('oppettid2');
       $stangningstid2 = get_field('stangningstid2');

       $today = date("Ymd");

       // echo $today;
       // echo "<br>";
       // echo "fran" . $fran;
       // if ($period) { echo "till" . $till; }
       // echo "<br>";

       if (($today >= $fran) && ($today <= $till) || ($today == $fran)) {

         //konvertera datum till rätt format
                  $fran = get_field('fran');
                  $fran = date_create($fran);
                  $fran = date_format($fran,'j/n');

                  $till = get_field('till');
                  $till = date_create($till);
                  $till = date_format($till,'j/n');



                  echo "<h3>".$titel."</h3>";
                  echo "<p>";

                  echo $fran;
                  if ($period) {
                    echo "-";
                    echo $till;
                  }
                  echo "<br>";


             if (get_locale() == 'sv_SE') {
                  echo "Öppet ";
             }//end of swe language check
             if (get_locale() == 'en_GB') {
                 echo "Open ";
             }//end of eng language check

                  if ($frandag && $tilldag) {
                    echo $frandag . "-" . $tilldag;
                  }

                      if (get_locale() == 'sv_SE'){
                        echo " kl ";
                      }//end of swe language check
                      if (get_locale() == 'en_GB') {
                          echo ", ";
                      }//end of eng language check

                  echo $oppettid;
                  echo "-" . $stangningstid . "<br/>";

                  if ($laggtill){
                    echo $frandag2 . "-" . $tilldag2;

                     if (get_locale() == 'sv_SE'){
                       echo " kl ";
                     }//end of swe language check
                     if (get_locale() == 'en_GB') {
                         echo ", ";
                     }//end of eng language check

                    echo $oppettid2;
                    echo "-" . $stangningstid2 . "<br/>";
                  }
                  echo "</p>";
                  echo "<br/>";

                  $matches++;


       }


     }
   }


if ($matches == 0) {
  if (get_locale() == 'sv_SE') {
    echo "<p>Vi har stängt just nu.</p>";
  }//end of swe language check
  if (get_locale() == 'en_GB') {
  echo "<p>We are currently closed</p>";
   }//end of eng language check

  echo "<br/>";
}
?>
<div class="box_line_beige" style='height: 30px;'></div>
<?php
  if (get_locale() == 'sv_SE') {
    echo "<a href='/kontakt#oppettider'>Se alla öppettider</a>";
  }//end of swe language check
  if (get_locale() == 'en_GB') {
  echo "<a href='/en/contact-english#oppettider/'>All opening hours</a>";
   }//end of eng language check



};


dropDown();
?>
