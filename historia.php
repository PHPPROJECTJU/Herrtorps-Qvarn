<?php
/*
 * Template Name: Historia
 */
?>

<?php get_header(); ?>

<?php require('custom-fields/intro-sida.php'); ?>

<?php
  $args = array(
    'post_type' => 'oppettider',
    'posts_per_page' => -1
  );

  $query = new WP_Query( $args );


  if( $query->have_posts() ) {
     while ( $query->have_posts() ) {
       $query->the_post();


       $fran = get_field('fran');
       $till = get_field('till');
       $oppettid = get_field('oppettid');
       $stangningstid = get_field('stangningstid');


       $curmonth = date("m");
       $curday = date("j");
       $curdate = $curday . "/" . $curmonth;



       $franmanad = substr($fran, strpos($fran, '/')+1);
       $tillmanad = substr($till, strpos($till, '/')+1);

       $frandag = substr($fran, 0, strpos($fran, '/'));
       $tilldag = substr($till, 0, strpos($till, '/'));
       echo $tilldag;

       if ((!$till) && ($curdate == $fran)) {
         echo "Idag öppet ";
         echo "kl" . $oppettid . "<br/>";
         echo "till kl" . $stangningstid . "<br/>";
       }
       elseif (($curmonth >= $franmanad) && ($curmonth <= $tillmanad)) {

         if (($till) && ($tillmanad != $franmanad)){
             echo "Öppet från månad " . $franmanad . "<br/>";
             echo "till månad " . $tillmanad . "<br/>";
             echo "<br/>";
             echo "Från den " . $fran . "<br/>";
             echo "Till den " . $till . "<br/>";
             echo "Öppet kl " . $oppettid . "<br/>";
             echo "till kl " . $stangningstid . "<br/>";

         } else {
           echo "Öppet månad " . $franmanad . "<br/>";
           echo "<br/>";
           echo "Från den " . $fran . "<br/>";
           echo "Till den " . $till . "<br/>";
           echo "Öppet kl " . $oppettid . "<br/>";
           echo "till kl " . $stangningstid . "<br/>";
         }

       }


       echo "<br/>";
       echo "<br/>";


     }
   }
        ?>

<?php get_footer(); ?>
