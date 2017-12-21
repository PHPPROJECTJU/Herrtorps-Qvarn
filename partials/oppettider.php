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

/*kolla vilket datum vi är på nu*/
       $curmonth = date("m");
       $curday = date("j");
       $curdate = $curday . "/" . $curmonth;

/*vald månad får vi ut genom att ta allt som kommer efter / i $fran och $till*/
       $franmanad = substr($fran, strpos($fran, '/')+1);
       $tillmanad = substr($till, strpos($till, '/')+1);

/*valt datum får vi ut genom att ta allt som kommer före / i $fran och $till*/
       $frandatum = substr($fran, 0, strpos($fran, '/'));
       $tilldatum = substr($till, 0, strpos($till, '/'));



         if (($curmonth >= $franmanad) && ($curmonth <= $tillmanad) && ($curday >= $frandatum) && ($curday <= $tilldatum)) {

               echo "<h3>".$titel."</h3>";
               echo "<p>";
               echo "Öppet ";
               if ($frandag && $tilldag) {
                 echo $frandag . "-" . $tilldag;
               }
               echo " kl " . $oppettid;
               echo "-" . $stangningstid . "<br/>";

               if ($laggtill){
                 echo $frandag2 . "-" . $tilldag2 . " kl " . $oppettid2;
                 echo "-" . $stangningstid2 . "<br/>";
               }
               echo "</p>";
               echo "<br/>";

               $matches++;
           }
           elseif ($fran == $curdate) {

             echo "<h4>".$titel."</h4>" . "<p>" . $curdate;
             echo "<br/>";
             echo "Öppet kl " . $oppettid . "-" .$stangningstid;
             echo "<br/>";
             echo "<br/>";
             echo "</p>";

             $matches++;
           }

     }
   }

if ($matches == 0) {
  echo "<p>Vi har stängt just nu.</p>";
  echo "<br/>";
}
  echo "<a href='/kontakt'>Se alla öppettider</a>";

};


dropDown();
?>
