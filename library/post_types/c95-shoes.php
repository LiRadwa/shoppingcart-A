<?php
// Register Custom Post Type
function c95_shoes() {

	$labels = array(
		'name'                  => _x( 'shoes', 'Post Type General Name', 'shoes' ),
		'singular_name'         => _x( 'shoes', 'Post Type Singular Name', 'shoes' ),
		'menu_name'             => __( 'shoes', 'shoes' ),
		'name_admin_bar'        => __( 'shoes', 'shoes' ),
		'archives'              => __( 'shoes Archives', 'shoes' ),
		'parent_item_colon'     => __( 'Parent shoes', 'shoes' ),
		'all_items'             => __( 'All shoes', 'shoes' ),
		'add_new_item'          => __( 'Add New shoes', 'shoes' ),
		'add_new'               => __( 'Add New shoes', 'shoes' ),
		'new_item'              => __( 'New shoes', 'shoes' ),
		'edit_item'             => __( 'Edit shoes', 'shoes' ),
		'update_item'           => __( 'Update shoes', 'shoes' ),
		'view_item'             => __( 'View shoes', 'shoes' ),
		'search_items'          => __( 'Search shoes', 'shoes' ),
		'not_found'             => __( 'Not found', 'shoes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'shoes' ),
		'featured_image'        => __( 'Featured Image', 'shoes' ),
		'set_featured_image'    => __( 'Set featured image', 'shoes' ),
		'remove_featured_image' => __( 'Remove featured image', 'shoes' ),
		'use_featured_image'    => __( 'Use as featured image', 'shoes' ),
		'insert_into_item'      => __( 'Insert into shoes', 'shoes' ),
		'uploaded_to_this_item' => __( 'Uploaded to this shoes', 'shoes' ),
		'items_list'            => __( 'shoes list', 'shoes' ),
		'items_list_navigation' => __( 'shoes list navigation', 'shoes' ),
		'filter_items_list'     => __( 'Filter shoes list', 'shoes' ),
	);
	$args = array(
		'label'                 => __( 'shoes', 'shoes' ),
		'description'           => __( 'shoes description', 'shoes' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'shoes_category' ),
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
	register_post_type( 'shoes', $args );

}
add_action( 'init', 'c95_shoes', 0 );