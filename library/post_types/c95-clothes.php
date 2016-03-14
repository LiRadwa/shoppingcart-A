<?php
// Register Custom Post Type
function c95_clothes() {

	$labels = array(
		'name'                  => _x( 'clothes', 'Post Type General Name', 'clothes' ),
		'singular_name'         => _x( 'clothes', 'Post Type Singular Name', 'clothes' ),
		'menu_name'             => __( 'clothes', 'clothes' ),
		'name_admin_bar'        => __( 'clothes', 'clothes' ),
		'archives'              => __( 'clothes Archives', 'clothes' ),
		'parent_item_colon'     => __( 'Parent clothes', 'clothes' ),
		'all_items'             => __( 'All clothes', 'clothes' ),
		'add_new_item'          => __( 'Add New clothes', 'clothes' ),
		'add_new'               => __( 'Add New clothes', 'clothes' ),
		'new_item'              => __( 'New clothes', 'clothes' ),
		'edit_item'             => __( 'Edit clothes', 'clothes' ),
		'update_item'           => __( 'Update clothes', 'clothes' ),
		'view_item'             => __( 'View clothes', 'clothes' ),
		'search_items'          => __( 'Search clothes', 'clothes' ),
		'not_found'             => __( 'Not found', 'clothes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'clothes' ),
		'featured_image'        => __( 'Featured Image', 'clothes' ),
		'set_featured_image'    => __( 'Set featured image', 'clothes' ),
		'remove_featured_image' => __( 'Remove featured image', 'clothes' ),
		'use_featured_image'    => __( 'Use as featured image', 'clothes' ),
		'insert_into_item'      => __( 'Insert into clothes', 'clothes' ),
		'uploaded_to_this_item' => __( 'Uploaded to this clothes', 'clothes' ),
		'items_list'            => __( 'clothes list', 'clothes' ),
		'items_list_navigation' => __( 'clothes list navigation', 'clothes' ),
		'filter_items_list'     => __( 'Filter clothes list', 'clothes' ),
	);
	$args = array(
		'label'                 => __( 'clothes', 'clothes' ),
		'description'           => __( 'clothes description', 'clothes' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'clothes_category' ),
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
	register_post_type( 'clothes', $args );

}
add_action( 'init', 'c95_clothes', 0 );