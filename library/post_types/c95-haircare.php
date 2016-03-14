<?php
// Register Custom Post Type
function c95_haircare() {

	$labels = array(
		'name'                  => _x( 'haircare', 'Post Type General Name', 'haircare' ),
		'singular_name'         => _x( 'haircare', 'Post Type Singular Name', 'haircare' ),
		'menu_name'             => __( 'haircare', 'haircare' ),
		'name_admin_bar'        => __( 'haircare', 'haircare' ),
		'archives'              => __( 'haircare Archives', 'haircare' ),
		'parent_item_colon'     => __( 'Parent haircare', 'haircare' ),
		'all_items'             => __( 'All haircare', 'haircare' ),
		'add_new_item'          => __( 'Add New haircare', 'haircare' ),
		'add_new'               => __( 'Add New haircare', 'haircare' ),
		'new_item'              => __( 'New haircare', 'haircare' ),
		'edit_item'             => __( 'Edit haircare', 'haircare' ),
		'update_item'           => __( 'Update haircare', 'haircare' ),
		'view_item'             => __( 'View haircare', 'haircare' ),
		'search_items'          => __( 'Search haircare', 'haircare' ),
		'not_found'             => __( 'Not found', 'haircare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'haircare' ),
		'featured_image'        => __( 'Featured Image', 'haircare' ),
		'set_featured_image'    => __( 'Set featured image', 'haircare' ),
		'remove_featured_image' => __( 'Remove featured image', 'haircare' ),
		'use_featured_image'    => __( 'Use as featured image', 'haircare' ),
		'insert_into_item'      => __( 'Insert into haircare', 'haircare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this haircare', 'haircare' ),
		'items_list'            => __( 'haircare list', 'haircare' ),
		'items_list_navigation' => __( 'haircare list navigation', 'haircare' ),
		'filter_items_list'     => __( 'Filter haircare list', 'haircare' ),
	);
	$args = array(
		'label'                 => __( 'haircare', 'haircare' ),
		'description'           => __( 'haircare description', 'haircare' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'haircare_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons dashicons-smiley',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'haircare', $args );

}
add_action( 'init', 'c95_haircare', 0 );