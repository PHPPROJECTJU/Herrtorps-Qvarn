<?php
  //Defining image sizes to save on server

  //Width, height, crop
  add_image_size( 'grid_thumbnail', 200, 200, true );
  add_image_size( 'single_large', 660, 400, false );
  add_image_size( 'top_img', 2000, 800, false );
  add_image_size( 'top_img_full', 2000, 1300, false );

  //Activate Featured Image
  add_theme_support('post-thumbnails');
?>
