<?php
function create_oppettid_typ() {
  $labels = array(
    'name'                       => _x( 'Typ av öppettid', 'Taxonomy General Name', 'herrtorps-qvarn' ),
    'singular_name'              => _x( 'Typ av öppettid', 'Taxonomy Singular Name', 'herrtorps-qvarn' ),
    'menu_name'                  => __( 'Öppettidstyper', 'herrtorps-qvarn' ),
    'all_items'                  => __( 'Alla öppettidstyper', 'herrtorps-qvarn' ),
    'new_item_name'              => __( 'Ny öppettidstyp', 'herrtorps-qvarn' ),
    'add_new_item'               => __( 'Lägg till ny öppettidstyp', 'herrtorps-qvarn' ),
    'edit_item'                  => __( 'Redigera öppettidstyp', 'herrtorps-qvarn' ),
    'update_item'                => __( 'Uppdatera öppettidstyp', 'herrtorps-qvarn' ),
    'add_or_remove_items'        => __( 'Lägg till eller radera öppettidstyp', 'herrtorps-qvarn' ),
    'popular_items'              => __( 'Populära öppettidstyper', 'herrtorps-qvarn' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'oppettidstyp',
  );

  #the thing that adds it to Wordpress
  register_taxonomy( 'oppettidstyp', array('oppettider'), $args );
}


add_action( 'init', 'create_oppettid_typ' );

?>
