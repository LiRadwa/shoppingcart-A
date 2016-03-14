<?php
// Register Custom Post Type
function c95_accesories() {

	$labels = array(
		'name'                  => _x( 'accessories', 'Post Type General Name', 'bags' ),
		'singular_name'         => _x( 'accessory', 'Post Type Singular Name', 'bags' ),
		'menu_name'             => __( 'accessories', 'bags' ),
		'name_admin_bar'        => __( 'accessories', 'bags' ),
		'archives'              => __( 'accessories Archives', 'bags' ),
		'parent_item_colon'     => __( 'Parent accessories', 'bags' ),
		'all_items'             => __( 'All accessories', 'bags' ),
		'add_new_item'          => __( 'Add New accessory', 'bags' ),
		'add_new'               => __( 'Add New accessories', 'bags' ),
		'new_item'              => __( 'New accessories', 'bags' ),
		'edit_item'             => __( 'Edit accessories', 'bags' ),
		'update_item'           => __( 'Update accessories', 'bags' ),
		'view_item'             => __( 'View accessories', 'bags' ),
		'search_items'          => __( 'Search accessories', 'bags' ),
		'not_found'             => __( 'Not found', 'bags' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bags' ),
		'featured_image'        => __( 'Featured Image', 'bags' ),
		'set_featured_image'    => __( 'Set featured image', 'bags' ),
		'remove_featured_image' => __( 'Remove featured image', 'bags' ),
		'use_featured_image'    => __( 'Use as featured image', 'bags' ),
		'insert_into_item'      => __( 'Insert into accessories', 'bags' ),
		'uploaded_to_this_item' => __( 'Uploaded to this accessories', 'bags' ),
		'items_list'            => __( 'accessories list', 'bags' ),
		'items_list_navigation' => __( 'accessories list navigation', 'bags' ),
		'filter_items_list'     => __( 'Filter accessories list', 'bags' ),
	);
	$args = array(
		'label'                 => __( 'accessory', 'bags' ),
		'description'           => __( 'accessories description', 'bags' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'accessories_category' ),
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
	register_post_type( 'accessories', $args );

}
add_action( 'init', 'c95_accesories', 0 );