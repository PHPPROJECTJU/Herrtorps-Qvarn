<?php
 //Defining a widget area

 function add_widgets() {

    $args = array(
      'id'            => 'footer-1',
      //Visible name in the Admin Dashboard Widget page
      'name'          => __( 'Footer - Svensk kontaktinfo', 'herrtorps-qvarn' ),
      //Visible description in the Admin Dashboard Widget page
      'description'   => __( 'Footer widget', 'herrtorps-qvarn' ),
      //HTML to wrap widget title in
      'before_title'  => '<div class="footerwidget">',
      'after_title'   => '</div>',
      // HTML to wrap each widget
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
    );

    $args1 = array(
      'id'            => 'footer-2',
      //Visible name in the Admin Dashboard Widget page
      'name'          => __( 'Footer - Engelsk kontaktinfo', 'herrtorps-qvarn' ),
      //Visible description in the Admin Dashboard Widget page
      'description'   => __( 'Footer widget 2', 'herrtorps-qvarn' ),
      //HTML to wrap widget title in
      'before_title'  => '<div class="footerwidget2">',
      'after_title'   => '</div>',
      // HTML to wrap each widget
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
    );

    $args2 = array(
      'id'            => 'footer-3',
      //Visible name in the Admin Dashboard Widget page
      'name'          => __( 'Footer - Svensk socialmedia text', 'herrtorps-qvarn' ),
      //Visible description in the Admin Dashboard Widget page
      'description'   => __( 'Footer widget', 'herrtorps-qvarn' ),
      //HTML to wrap widget title in
      'before_title'  => '<div class="footerwidget">',
      'after_title'   => '</div>',
      // HTML to wrap each widget
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
    );

    $args3 = array(
      'id'            => 'footer-4',
      //Visible name in the Admin Dashboard Widget page
      'name'          => __( 'Footer - Engelsk socialmediatext', 'herrtorps-qvarn' ),
      //Visible description in the Admin Dashboard Widget page
      'description'   => __( 'Footer widget 4', 'herrtorps-qvarn' ),
      //HTML to wrap widget title in
      'before_title'  => '<div class="footerwidget2">',
      'after_title'   => '</div>',
      // HTML to wrap each widget
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
    );


  register_sidebar( $args );
  register_sidebar( $args1 );
  register_sidebar( $args2 );
  register_sidebar( $args3 );

 }

 add_action( 'widgets_init', 'add_widgets' );

?>
