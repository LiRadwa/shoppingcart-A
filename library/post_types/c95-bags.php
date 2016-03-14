<?php
// Register Custom Post Type
function c95_bags() {

	$labels = array(
		'name'                  => _x( 'bags', 'Post Type General Name', 'bags' ),
		'singular_name'         => _x( 'bag', 'Post Type Singular Name', 'bags' ),
		'menu_name'             => __( 'bags', 'bags' ),
		'name_admin_bar'        => __( 'bags', 'bags' ),
		'archives'              => __( 'bags Archives', 'bags' ),
		'parent_item_colon'     => __( 'Parent bags', 'bags' ),
		'all_items'             => __( 'All bags', 'bags' ),
		'add_new_item'          => __( 'Add New bags', 'bags' ),
		'add_new'               => __( 'Add New bags ', 'bags' ),
		'new_item'              => __( 'New bags', 'bags' ),
		'edit_item'             => __( 'Edit bags', 'bags' ),
		'update_item'           => __( 'Update bags', 'bags' ),
		'view_item'             => __( 'View bags', 'bags' ),
		'search_items'          => __( 'Search bags', 'bags' ),
		'not_found'             => __( 'Not found', 'bags' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bags' ),
		'featured_image'        => __( 'Featured Image', 'bags' ),
		'set_featured_image'    => __( 'Set featured image', 'bags' ),
		'remove_featured_image' => __( 'Remove featured image', 'bags' ),
		'use_featured_image'    => __( 'Use as featured image', 'bags' ),
		'insert_into_item'      => __( 'Insert into bags', 'bags' ),
		'uploaded_to_this_item' => __( 'Uploaded to this bags', 'bags' ),
		'items_list'            => __( 'bags list', 'bags' ),
		'items_list_navigation' => __( 'bags list navigation', 'bags' ),
		'filter_items_list'     => __( 'Filter bags list', 'bags' ),
	);
	$args = array(
		'label'                 => __( 'bag', 'bags' ),
		'description'           => __( 'bags description', 'bags' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'bags_category' ),
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
	register_post_type( 'bags', $args );

}
add_action( 'init', 'c95_bags', 0 );