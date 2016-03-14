<?php
// Register Custom Post Type
function c95_skincare() {

	$labels = array(
		'name'                  => _x( 'skincare', 'Post Type General Name', 'skincare' ),
		'singular_name'         => _x( 'skincare', 'Post Type Singular Name', 'skincare' ),
		'menu_name'             => __( 'skincare', 'skincare' ),
		'name_admin_bar'        => __( 'skincare', 'skincare' ),
		'archives'              => __( 'skincare Archives', 'skincare' ),
		'parent_item_colon'     => __( 'Parent skincare', 'skincare' ),
		'all_items'             => __( 'All skincare', 'skincare' ),
		'add_new_item'          => __( 'Add New skincare', 'skincare' ),
		'add_new'               => __( 'Add New skincare', 'skincare' ),
		'new_item'              => __( 'New skincare', 'skincare' ),
		'edit_item'             => __( 'Edit skincare', 'skincare' ),
		'update_item'           => __( 'Update skincare', 'skincare' ),
		'view_item'             => __( 'View skincare', 'skincare' ),
		'search_items'          => __( 'Search skincare', 'skincare' ),
		'not_found'             => __( 'Not found', 'skincare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'skincare' ),
		'featured_image'        => __( 'Featured Image', 'skincare' ),
		'set_featured_image'    => __( 'Set featured image', 'skincare' ),
		'remove_featured_image' => __( 'Remove featured image', 'skincare' ),
		'use_featured_image'    => __( 'Use as featured image', 'skincare' ),
		'insert_into_item'      => __( 'Insert into skincare', 'skincare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this skincare', 'skincare' ),
		'items_list'            => __( 'skincare list', 'skincare' ),
		'items_list_navigation' => __( 'skincarelist navigation', 'skincare' ),
		'filter_items_list'     => __( 'Filter skincare list', 'skincare' ),
	);
	$args = array(
		'label'                 => __( 'skincare', 'skincare' ),
		'description'           => __( 'skincare description', 'skincare' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'skincare_category' ),
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
	register_post_type( 'skincare', $args );

}
add_action( 'init', 'c95_skincare', 0 );