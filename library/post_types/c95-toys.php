<?php
// Register Custom Post Type
function c95_toys() {

	$labels = array(
		'name'                  => _x( 'toys', 'Post Type General Name', 'toys' ),
		'singular_name'         => _x( 'toy', 'Post Type Singular Name', 'toys' ),
		'menu_name'             => __( 'toys', 'toys' ),
		'name_admin_bar'        => __( 'toys', 'toys' ),
		'archives'              => __( 'toys Archives', 'toys' ),
		'parent_item_colon'     => __( 'Parent toys', 'toys' ),
		'all_items'             => __( 'All toys', 'toys' ),
		'add_new_item'          => __( 'Add New toys', 'toys' ),
		'add_new'               => __( 'Add New toys', 'toys' ),
		'new_item'              => __( 'New toys', 'toys' ),
		'edit_item'             => __( 'Edit toys', 'toys' ),
		'update_item'           => __( 'Update toys', 'toys' ),
		'view_item'             => __( 'View toys', 'toys' ),
		'search_items'          => __( 'Search toys', 'toys' ),
		'not_found'             => __( 'Not found', 'toys' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'toys' ),
		'featured_image'        => __( 'Featured Image', 'toys' ),
		'set_featured_image'    => __( 'Set featured image', 'toys' ),
		'remove_featured_image' => __( 'Remove featured image', 'toys' ),
		'use_featured_image'    => __( 'Use as featured image', 'toys' ),
		'insert_into_item'      => __( 'Insert into toys', 'toys' ),
		'uploaded_to_this_item' => __( 'Uploaded to this toys', 'toys' ),
		'items_list'            => __( 'toys list', 'toys' ),
		'items_list_navigation' => __( 'toys list navigation', 'toys' ),
		'filter_items_list'     => __( 'Filter toys list', 'toys' ),
	);
	$args = array(
		'label'                 => __( 'toy', 'toys' ),
		'description'           => __( 'toys description', 'toys' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'toys_category' ),
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
	register_post_type( 'toys', $args );

}
add_action( 'init', 'c95_toys', 0 );