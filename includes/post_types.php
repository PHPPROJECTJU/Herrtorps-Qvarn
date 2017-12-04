<?php
 function aktivitetspost_post_type() {

     /* Set up the arguments for the post type. */
     $args = array(

         /**
          * Whether the post type should be used publicly via the admin or by front-end users.  This
          * argument is sort of a catchall for many of the following arguments.  I would focus more
          * on adjusting them to your liking than this argument.
          */
         'public'              => true, // bool (default is FALSE)

         /**
          * Whether queries can be performed on the front end as part of parse_request().
          */
         'publicly_queryable'  => true, // bool (defaults to 'public').

         /**
          * Whether to exclude posts with this post type from front-end search results.
          */
         'exclude_from_search' => false, // bool (defaults to 'public')

         /**
          * Whether individual post type items are available for selection in navigation menus.
          */
         'show_in_nav_menus'   => true, // bool (defaults to 'public')

         /**
          * Whether to generate a default UI for managing this post type in the admin. You'll have
          * more control over what's shown in the admin with the other arguments.  To build your
          * own UI, set this to FALSE.
          */
         'show_ui'             => true, // bool (defaults to 'public')

         /**
          * Whether to show post type in the admin menu. 'show_ui' must be true for this to work.
          */
         'show_in_menu'        => true, // bool (defaults to 'show_ui')

         /**
          * Whether to make this post type available in the WordPress admin bar. The admin bar adds
          * a link to add a new post type item.
          */
         'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

         /**
          * The position in the menu order the post type should appear. 'show_in_menu' must be true
          * for this to work.
          */
         'menu_position'       => 5, // int (defaults to 25 - below comments)

         /**
          * The css-string for the icon to use for the admin menu item.
          * https://developer.wordpress.org/resource/dashicons
          */
         'menu_icon'           => 'dashicons-tickets-alt', // string (defaults to use the post icon)

         /**
          * Whether the posts of this post type can be exported via the WordPress import/export plugin
          * or a similar plugin.
          */
         'can_export'          => true, // bool (defaults to TRUE)

         /**
          * Whether to delete posts of this type when deleting a user who has written posts.
          */
         'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

         /**
          * Whether this post type should allow hierarchical (parent/child/grandchild/etc.) posts.
          */
         'hierarchical'        => false, // bool (defaults to FALSE)

         /**
          * Whether the post type has an index/archive/root page like the "page for posts" for regular
          * posts. If set to TRUE, the post type name will be used for the archive slug.  You can also
          * set this to a string to control the exact name of the archive slug. (site.com/aktiviteter)
          */
         'has_archive'         => 'aktivitetspost', // bool|string (defaults to FALSE)

         /**
          * Sets the query_var key for this post type. If set to TRUE, the post type name will be used.
          * You can also set this to a custom string to control the exact key.
          */
         'query_var'           => 'aktivitetspost', // bool|string (defaults to TRUE - post type name)

         /**
          * A string used to build the edit, delete, and read capabilities for posts of this type. You
          * can use a string or an array (for singular and plural forms).  The array is useful if the
          * plural form can't be made by simply adding an 's' to the end of the word.  For example,
          * array( 'box', 'boxes' ).
          */
         'capability_type'     => 'post', // string|array (defaults to 'post')

         /**
          * Whether WordPress should map the meta capabilities (edit_post, read_post, delete_post) for
          * you.  If set to FALSE, you'll need to roll your own handling of this by filtering the
          * 'map_meta_cap' hook.
          */
         'map_meta_cap'        => true, // bool (defaults to FALSE)

         /**
          * How the URL structure should be handled with this post type.  You can set this to an
          * array of specific arguments or true|false.  If set to FALSE, it will prevent rewrite
          * rules from being created.
          */
         'rewrite' => array(
       		'slug'                  => 'aktivitetspost',
       		'with_front'            => false,
       		'pages'                 => true,
       		'feeds'                 => false,
       	),

         /**
          * What WordPress features the post type supports.  Many arguments are strictly useful on
          * the edit post screen in the admin.  However, this will help other themes and plugins
          * decide what to do in certain situations.  You can pass an array of specific features or
          * set it to FALSE to prevent any features from being added.  You can use
          * add_post_type_support() to add features or remove_post_type_support() to remove features
          * later.  The default features are 'title' and 'editor'.
          */
         'supports' => array(

             /* Post titles ($post->post_title). */
             'title',

             /* Post content ($post->post_content). */
             'editor',

             /* Post excerpt ($post->post_excerpt). */
             //'excerpt',

             /* Post author ($post->post_author). */
             'author',

             /* Featured images (the user's theme must support 'post-thumbnails'). */
             'thumbnail',

             /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
             //'comments',

             /* Displays meta box to send trackbacks from the edit post screen. */
             //'trackbacks',

             /* Displays the Custom Fields meta box. Post meta is supported regardless. */
             //'custom-fields',

             /* Displays the Revisions meta box. If set, stores post revisions in the database. */
             //'revisions',

             /* Displays the Attributes meta box with a parent selector and menu_order input box. */
             /*'page-attributes',*/

             /* Displays the Format meta box and allows post formats to be used with the posts. */
             //'post-formats',
         ),

         /**
          * Labels used when displaying the posts in the admin and sometimes on the front end.  These
          * labels do not cover post updated, error, and related messages.  You'll need to filter the
          * 'post_updated_messages' hook to customize those.
          */
        /*'taxonomies'            => array( 'aktivitet_skill', 'aktivitet_type' ),*/
         'labels' => array(
             'name'               => __( 'Aktivitetsposter',                   'Aktivitetspost-textdomain' ),
             'singular_name'      => __( 'Aktivitetspost',                    'Aktivitetspost-textdomain' ),
             'menu_name'          => __( 'Aktivitetsposter',                   'Aktivitetspost-textdomain' ),
             'name_admin_bar'     => __( 'Aktivitetsposter',                   'Aktivitetspost-textdomain' ),
             'add_new'            => __( 'Lägg till Ny',                    'Aktivitetspost-textdomain' ),
             'add_new_item'       => __( 'Lägg till Ny Aktivitetspost',            'Aktivitetspost-textdomain' ),
             'edit_item'          => __( 'Redigera Aktivitetspost',               'Aktivitetspost-textdomain' ),
             'new_item'           => __( 'Ny Aktivitetspost',                'Aktivitetspost-textdomain' ),
             'view_item'          => __( 'Se Aktivitetspost',               'Aktivitetspost-textdomain' ),
             'search_items'       => __( 'Sök Aktivitetsposter',            'Aktivitetspost-textdomain' ),
             'not_found'          => __( 'Hittade inga Aktivitetsposter',          'Aktivitetspost-textdomain' ),
             'not_found_in_trash' => __( 'Hittade inga Aktivitetsposter i papperskorgen', 'Aktivitetspost-textdomain' ),
             'all_items'          => __( 'Alla Aktivitetsposter',               'Aktivitetspost-textdomain' ),
         )
     );

     /* Register the post type. */
     register_post_type(
         'aktivitetspost', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
         $args      // Arguments for post type.
     );
 }

 /* Register custom post types on the 'init' hook. */
 add_action( 'init', 'aktivitetspost_post_type' );
/*<!--Lägg tilling a new custom post type

Important note!
When you add custom post types with rewrite=true,
go to settings - permalinks and click save
Taxonomies
a way to sort things out


hierarchical
non-hierarchical-->*/

  //------------------------NEXT POST TYPE

  function boendepost_post_type() {

      $args = array(

          'public'              => true, // bool (default is FALSE)

          'publicly_queryable'  => true, // bool (defaults to 'public').

          'exclude_from_search' => false, // bool (defaults to 'public')

          'show_in_nav_menus'   => true, // bool (defaults to 'public')

          'show_ui'             => true, // bool (defaults to 'public')

          'show_in_menu'        => true, // bool (defaults to 'show_ui')

          'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

          'menu_position'       => 5, // int (defaults to 25 - below comments)

          'menu_icon'           => 'dashicons-building', // string (defaults to use the post icon)

          'can_export'          => true, // bool (defaults to TRUE)

          'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

          'hierarchical'        => false, // bool (defaults to FALSE)

          'has_archive'         => 'boendepost', // bool|string (defaults to FALSE)

          'query_var'           => 'boendepost', // bool|string (defaults to TRUE - post type name)

          'capability_type'     => 'post', // string|array (defaults to 'post')

          'map_meta_cap'        => true, // bool (defaults to FALSE)

          'rewrite' => array(
           'slug'                  => 'boendepost',
           'with_front'            => false,
           'pages'                 => true,
           'feeds'                 => false,
         ),

          'supports' => array(

              /* Post titles ($post->post_title). */
              'title',

              /* Post content ($post->post_content). */
              'editor',

              /* Post excerpt ($post->post_excerpt). */
              //'excerpt',

              /* Post author ($post->post_author). */
              'author',

              /* Featured images (the user's theme must support 'post-thumbnails'). */
              'thumbnail',

              /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
              //'comments',

              /* Displays meta box to send trackbacks from the edit post screen. */
              //'trackbacks',

              /* Displays the Custom Fields meta box. Post meta is supported regardless. */
              //'custom-fields',

              /* Displays the Revisions meta box. If set, stores post revisions in the database. */
              //'revisions',

              /* Displays the Attributes meta box with a parent selector and menu_order input box. */
              /*'page-attributes',*/

              /* Displays the Format meta box and allows post formats to be used with the posts. */
              //'post-formats',
          ),

         /*'taxonomies'            => array( 'boende_skill', 'boende_type' ),*/
          'labels' => array(
              'name'               => __( 'Boendeposter',                   'Boende-textdomain' ),
              'singular_name'      => __( 'Boendepost',                    'boendepost-textdomain' ),
              'menu_name'          => __( 'Boendeposter',                   'boendepost-textdomain' ),
              'name_admin_bar'     => __( 'Boendeposter',                   'boendepost-textdomain' ),
              'add_new'            => __( 'Lägg till ny',                    'boendepost-textdomain' ),
              'add_new_item'       => __( 'Lägg till ny boendepost',            'boendepost-textdomain' ),
              'edit_item'          => __( 'Redigera boendepost',               'boendepost-textdomain' ),
              'new_item'           => __( 'Ny boendepost',                'boendepost-textdomain' ),
              'view_item'          => __( 'Se boendepost',               'boendepost-textdomain' ),
              'search_items'       => __( 'Sök boendepost',            'boendepost-textdomain' ),
              'not_found'          => __( 'Hittade inga boendeposter',          'boendepost-textdomain' ),
              'not_found_in_trash' => __( 'Hittade inga boendeposter i papperskorgen', 'boendepost-textdomain' ),
              'all_items'          => __( 'Alla boendeposter',               'boendepost-textdomain' ),
          )
      );

      /* Register the post type. */
      register_post_type(
          'boendepost', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
          $args      // Arguments for post type.
      );
  }

  /* Register custom post types on the 'init' hook. */
  add_action( 'init', 'boendepost_post_type' );



  //------------------------NEXT POST TYPE

   function omgivningspost_post_type() {

       $args = array(

           'public'              => true, // bool (default is FALSE)

           'publicly_queryable'  => true, // bool (defaults to 'public').

           'exclude_from_search' => false, // bool (defaults to 'public')

           'show_in_nav_menus'   => true, // bool (defaults to 'public')

           'show_ui'             => true, // bool (defaults to 'public')

           'show_in_menu'        => true, // bool (defaults to 'show_ui')

           'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

           'menu_position'       => 5, // int (defaults to 25 - below comments)

           'menu_icon'           => 'dashicons-location-alt', // string (defaults to use the post icon)

           'can_export'          => true, // bool (defaults to TRUE)

           'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

           'hierarchical'        => false, // bool (defaults to FALSE)

           'has_archive'         => 'omgivningspost', // bool|string (defaults to FALSE)

           'query_var'           => 'omgivningspost', // bool|string (defaults to TRUE - post type name)

           'capability_type'     => 'post', // string|array (defaults to 'post')

           'map_meta_cap'        => true, // bool (defaults to FALSE)

           'rewrite' => array(
         		'slug'                  => 'omgivningspost',
         		'with_front'            => false,
         		'pages'                 => true,
         		'feeds'                 => false,
         	),

           'supports' => array(

               /* Post titles ($post->post_title). */
               'title',

               /* Post content ($post->post_content). */
               'editor',

               /* Post excerpt ($post->post_excerpt). */
               //'excerpt',

               /* Post author ($post->post_author). */
               'author',

               /* Featured images (the user's theme must support 'post-thumbnails'). */
               'thumbnail',

               /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
               //'comments',

               /* Displays meta box to send trackbacks from the edit post screen. */
               //'trackbacks',

               /* Displays the Custom Fields meta box. Post meta is supported regardless. */
               //'custom-fields',

               /* Displays the Revisions meta box. If set, stores post revisions in the database. */
               //'revisions',

               /* Displays the Attributes meta box with a parent selector and menu_order input box. */
               /*'page-attributes',*/

               /* Displays the Format meta box and allows post formats to be used with the posts. */
               //'post-formats',
           ),

          /*'taxonomies'            => array( 'boende_skill', 'boende_type' ),*/
           'labels' => array(
               'name'               => __( 'Omgivningsposter',                   'omgivningspost-textdomain' ),
               'singular_name'      => __( 'Omgivningspost',                    'omgivningspost-textdomain' ),
               'menu_name'          => __( 'Omgivningsposter',                   'omgivningspost-textdomain' ),
               'name_admin_bar'     => __( 'Omgivningsposter',                   'omgivningspost-textdomain' ),
               'add_new'            => __( 'Lägg till ny',                    'omgivningspost-textdomain' ),
               'add_new_item'       => __( 'Lägg till ny omgivningspost',            'omgivningspost-textdomain' ),
               'edit_item'          => __( 'Redigera omgivningspost',               'omgivningspost-textdomain' ),
               'new_item'           => __( 'Ny omgivningspost',                'omgivningspost-textdomain' ),
               'view_item'          => __( 'Se omgivningspost',               'omgivningspost-textdomain' ),
               'search_items'       => __( 'Sök omgivningspost',            'omgivningspost-textdomain' ),
               'not_found'          => __( 'Hittade inga omgivningsposter',          'omgivningspost-textdomain' ),
               'not_found_in_trash' => __( 'Hittade inga omgivningsposter i papperskorgen', 'omgivningspost-textdomain' ),
               'all_items'          => __( 'Alla omgivningsposter',               'omgivningspost-textdomain' ),
           )
       );

       /* Register the post type. */
       register_post_type(
           'omgivningspost', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
           $args      // Arguments for post type.
       );
   }

   /* Register custom post types on the 'init' hook. */
   add_action( 'init', 'omgivningspost_post_type' );



   //------------------------NEXT POST TYPE

    function historiepost_post_type() {

        $args = array(

            'public'              => true, // bool (default is FALSE)

            'publicly_queryable'  => true, // bool (defaults to 'public').

            'exclude_from_search' => false, // bool (defaults to 'public')

            'show_in_nav_menus'   => true, // bool (defaults to 'public')

            'show_ui'             => true, // bool (defaults to 'public')

            'show_in_menu'        => true, // bool (defaults to 'show_ui')

            'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

            'menu_position'       => 5, // int (defaults to 25 - below comments)

            'menu_icon'           => 'dashicons-book-alt', // string (defaults to use the post icon)

            'can_export'          => true, // bool (defaults to TRUE)

            'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

            'hierarchical'        => false, // bool (defaults to FALSE)

            'has_archive'         => 'historiepost', // bool|string (defaults to FALSE)

            'query_var'           => 'historiepost', // bool|string (defaults to TRUE - post type name)

            'capability_type'     => 'post', // string|array (defaults to 'post')

            'map_meta_cap'        => true, // bool (defaults to FALSE)

            'rewrite' => array(
          		'slug'                  => 'historiepost',
          		'with_front'            => false,
          		'pages'                 => true,
          		'feeds'                 => false,
          	),

            'supports' => array(

                /* Post titles ($post->post_title). */
                'title',

                /* Post content ($post->post_content). */
                'editor',

                /* Post excerpt ($post->post_excerpt). */
                //'excerpt',

                /* Post author ($post->post_author). */
                'author',

                /* Featured images (the user's theme must support 'post-thumbnails'). */
                'thumbnail',

                /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
                //'comments',

                /* Displays meta box to send trackbacks from the edit post screen. */
                //'trackbacks',

                /* Displays the Custom Fields meta box. Post meta is supported regardless. */
                //'custom-fields',

                /* Displays the Revisions meta box. If set, stores post revisions in the database. */
                //'revisions',

                /* Displays the Attributes meta box with a parent selector and menu_order input box. */
                /*'page-attributes',*/

                /* Displays the Format meta box and allows post formats to be used with the posts. */
                //'post-formats',
            ),

           /*'taxonomies'            => array( 'boende_skill', 'boende_type' ),*/
            'labels' => array(
                'name'               => __( 'Historieposter',                   'historiepost-textdomain' ),
                'singular_name'      => __( 'Historiepost',                    'historiepost-textdomain' ),
                'menu_name'          => __( 'Historieposter',                   'historiepost-textdomain' ),
                'name_admin_bar'     => __( 'Historieposter',                   'historiepost-textdomain' ),
                'add_new'            => __( 'Lägg till ny',                    'historiepost-textdomain' ),
                'add_new_item'       => __( 'Lägg till ny historiepost',            'historiepost-textdomain' ),
                'edit_item'          => __( 'Redigera historiepost',               'historiepost-textdomain' ),
                'new_item'           => __( 'Ny historiepost',                'historiepost-textdomain' ),
                'view_item'          => __( 'Se historiepost',               'historiepost-textdomain' ),
                'search_items'       => __( 'Sök historiepost',            'historiepost-textdomain' ),
                'not_found'          => __( 'Hittade inga historieposter',          'historiepost-textdomain' ),
                'not_found_in_trash' => __( 'Hittade inga historieposter i papperskorgen', 'historiepost-textdomain' ),
                'all_items'          => __( 'Alla historieposter',               'historiepost-textdomain' ),
            )
        );

        /* Register the post type. */
        register_post_type(
            'historiepost', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
            $args      // Arguments for post type.
        );
    }

    /* Register custom post types on the 'init' hook. */
    add_action( 'init', 'historiepost_post_type' );

    //------------------------NEXT POST TYPE

     function ompost_post_type() {

         $args = array(

             'public'              => true, // bool (default is FALSE)

             'publicly_queryable'  => true, // bool (defaults to 'public').

             'exclude_from_search' => false, // bool (defaults to 'public')

             'show_in_nav_menus'   => true, // bool (defaults to 'public')

             'show_ui'             => true, // bool (defaults to 'public')

             'show_in_menu'        => true, // bool (defaults to 'show_ui')

             'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

             'menu_position'       => 5, // int (defaults to 25 - below comments)

             'menu_icon'           => 'dashicons-info', // string (defaults to use the post icon)

             'can_export'          => true, // bool (defaults to TRUE)

             'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

             'hierarchical'        => false, // bool (defaults to FALSE)

             'has_archive'         => 'ompost', // bool|string (defaults to FALSE)

             'query_var'           => 'ompost', // bool|string (defaults to TRUE - post type name)

             'capability_type'     => 'post', // string|array (defaults to 'post')

             'map_meta_cap'        => true, // bool (defaults to FALSE)

             'rewrite' => array(
               'slug'                  => 'ompost',
               'with_front'            => false,
               'pages'                 => true,
               'feeds'                 => false,
             ),

             'supports' => array(

                 /* Post titles ($post->post_title). */
                 'title',

                 /* Post content ($post->post_content). */
                 'editor',

                 /* Post excerpt ($post->post_excerpt). */
                 //'excerpt',

                 /* Post author ($post->post_author). */
                 'author',

                 /* Featured images (the user's theme must support 'post-thumbnails'). */
                 'thumbnail',

                 /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
                 //'comments',

                 /* Displays meta box to send trackbacks from the edit post screen. */
                 //'trackbacks',

                 /* Displays the Custom Fields meta box. Post meta is supported regardless. */
                 //'custom-fields',

                 /* Displays the Revisions meta box. If set, stores post revisions in the database. */
                 //'revisions',

                 /* Displays the Attributes meta box with a parent selector and menu_order input box. */
                 /*'page-attributes',*/

                 /* Displays the Format meta box and allows post formats to be used with the posts. */
                 //'post-formats',
             ),

            /*'taxonomies'            => array( 'boende_skill', 'boende_type' ),*/
             'labels' => array(
                 'name'               => __( 'Omposter',                   'ompost-textdomain' ),
                 'singular_name'      => __( 'Ompost',                    'ompost-textdomain' ),
                 'menu_name'          => __( 'Omposter',                   'ompost-textdomain' ),
                 'name_admin_bar'     => __( 'Omposter',                   'ompost-textdomain' ),
                 'add_new'            => __( 'Lägg till ny',                    'ompost-textdomain' ),
                 'add_new_item'       => __( 'Lägg till ny ompost',            'ompost-textdomain' ),
                 'edit_item'          => __( 'Redigera ompost',               'ompost-textdomain' ),
                 'new_item'           => __( 'Ny ompost',                'ompost-textdomain' ),
                 'view_item'          => __( 'Se ompost',               'ompost-textdomain' ),
                 'search_items'       => __( 'Sök ompost',            'ompost-textdomain' ),
                 'not_found'          => __( 'Hittade inga omposter',          'ompost-textdomain' ),
                 'not_found_in_trash' => __( 'Hittade inga omposter i papperskorgen', 'ompost-textdomain' ),
                 'all_items'          => __( 'Alla omposter',               'ompost-textdomain' ),
             )
         );

         /* Register the post type. */
         register_post_type(
             'ompost', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
             $args      // Arguments for post type.
         );
     }

     /* Register custom post types on the 'init' hook. */
     add_action( 'init', 'ompost_post_type' );

     //------------------------NEXT POST TYPE

      function oppettider_post_type() {

          $args = array(

              'public'              => true, // bool (default is FALSE)

              'publicly_queryable'  => true, // bool (defaults to 'public').

              'exclude_from_search' => false, // bool (defaults to 'public')

              'show_in_nav_menus'   => true, // bool (defaults to 'public')

              'show_ui'             => true, // bool (defaults to 'public')

              'show_in_menu'        => true, // bool (defaults to 'show_ui')

              'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

              'menu_position'       => 5, // int (defaults to 25 - below comments)

              'menu_icon'           => 'dashicons-clock', // string (defaults to use the post icon)

              'can_export'          => true, // bool (defaults to TRUE)

              'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

              'hierarchical'        => false, // bool (defaults to FALSE)

              'has_archive'         => 'oppettider', // bool|string (defaults to FALSE)

              'query_var'           => 'oppettider', // bool|string (defaults to TRUE - post type name)

              'capability_type'     => 'post', // string|array (defaults to 'post')

              'map_meta_cap'        => true, // bool (defaults to FALSE)

              'rewrite' => array(
                'slug'                  => 'oppettider',
                'with_front'            => false,
                'pages'                 => true,
                'feeds'                 => false,
              ),

              'supports' => array(

                  /* Post titles ($post->post_title). */
                  'title',

                  /* Post content ($post->post_content). */
                  'editor',

                  /* Post excerpt ($post->post_excerpt). */
                  //'excerpt',

                  /* Post author ($post->post_author). */
                  'author',

                  /* Featured images (the user's theme must support 'post-thumbnails'). */
                  'thumbnail',

                  /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
                  //'comments',

                  /* Displays meta box to send trackbacks from the edit post screen. */
                  //'trackbacks',

                  /* Displays the Custom Fields meta box. Post meta is supported regardless. */
                  //'custom-fields',

                  /* Displays the Revisions meta box. If set, stores post revisions in the database. */
                  //'revisions',

                  /* Displays the Attributes meta box with a parent selector and menu_order input box. */
                  /*'page-attributes',*/

                  /* Displays the Format meta box and allows post formats to be used with the posts. */
                  //'post-formats',
              ),

             'taxonomies'            => array( 'oppettidstyp' ),
              'labels' => array(
                  'name'               => __( 'Öppettider',                   'oppettider-textdomain' ),
                  'singular_name'      => __( 'Öppettid',                    'oppettider-textdomain' ),
                  'menu_name'          => __( 'Öppettider',                   'oppettider-textdomain' ),
                  'name_admin_bar'     => __( 'Öppettider',                   'oppettider-textdomain' ),
                  'add_new'            => __( 'Lägg till ny',                    'oppettider-textdomain' ),
                  'add_new_item'       => __( 'Lägg till ny öppettid',            'oppettider-textdomain' ),
                  'edit_item'          => __( 'Redigera öppettid',               'oppettider-textdomain' ),
                  'new_item'           => __( 'Ny öppettid',                'oppettider-textdomain' ),
                  'view_item'          => __( 'Se öppettid',               'oppettider-textdomain' ),
                  'search_items'       => __( 'Sök öppettid',            'ompost-textdomain' ),
                  'not_found'          => __( 'Hittade inga öppettider',          'oppettider-textdomain' ),
                  'not_found_in_trash' => __( 'Hittade inga öppettider i papperskorgen', 'oppettider-textdomain' ),
                  'all_items'          => __( 'Alla öppettider',               'oppettider-textdomain' ),
              )
          );

          /* Register the post type. */
          register_post_type(
              'oppettider', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
              $args      // Arguments for post type.
          );
      }

      /* Register custom post types on the 'init' hook. */
      add_action( 'init', 'oppettider_post_type' );

    ?>
