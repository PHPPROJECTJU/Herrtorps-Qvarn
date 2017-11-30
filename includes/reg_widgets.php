<?php
 //Defining a widget area

 function add_widgets() {

    $args = array(
      'id'            => 'footer-1',
      //Visible name in the Admin Dashboard Widget page
      'name'          => __( 'Footer 1', 'herrtorps-qvarn' ),
      //Visible description in the Admin Dashboard Widget page
      'description'   => __( 'Footer widget', 'herrtorps-qvarn' ),
      //HTML to wrap widget title in
      'before_title'  => '<div class="footerwidget">',
      'after_title'   => '</div>',
      // HTML to wrap each widget
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
    );


  register_sidebar( $args );

 }

 add_action( 'widgets_init', 'add_widgets' );

?>
