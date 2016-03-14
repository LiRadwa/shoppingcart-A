<?php
// Register Custom Post Type
function c95_watches() {

	$labels = array(
		'name'                  => _x( 'watches', 'Post Type General Name', 'watches' ),
		'singular_name'         => _x( 'watches', 'Post Type Singular Name', 'watches' ),
		'menu_name'             => __( 'watches', 'watches' ),
		'name_admin_bar'        => __( 'watches', 'watches' ),
		'archives'              => __( 'watches Archives', 'watches' ),
		'parent_item_colon'     => __( 'Parent watches', 'watches' ),
		'all_items'             => __( 'All watches', 'watches' ),
		'add_new_item'          => __( 'Add New watches', 'watches' ),
		'add_new'               => __( 'Add New watches', 'watches' ),
		'new_item'              => __( 'New watches', 'watches' ),
		'edit_item'             => __( 'Edit watches', 'watches' ),
		'update_item'           => __( 'Update watches', 'watches' ),
		'view_item'             => __( 'View watches', 'watches' ),
		'search_items'          => __( 'Search watches', 'watches' ),
		'not_found'             => __( 'Not found', 'watches' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'watches' ),
		'featured_image'        => __( 'Featured Image', 'watches' ),
		'set_featured_image'    => __( 'Set featured image', 'watches' ),
		'remove_featured_image' => __( 'Remove featured image', 'watches' ),
		'use_featured_image'    => __( 'Use as featured image', 'watches' ),
		'insert_into_item'      => __( 'Insert into watches', 'watches' ),
		'uploaded_to_this_item' => __( 'Uploaded to this watches', 'watches' ),
		'items_list'            => __( 'watches list', 'watches' ),
		'items_list_navigation' => __( 'watches list navigation', 'watches' ),
		'filter_items_list'     => __( 'Filter watches list', 'watches' ),
	);
	$args = array(
		'label'                 => __( 'watches', 'watches' ),
		'description'           => __( 'watches description', 'watches' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'watches_category' ),
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
	register_post_type( 'watches', $args );

}
add_action( 'init', 'c95_watches', 0 );