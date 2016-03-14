<?php
// Register Custom Post Type
function c95_glasses() {

	$labels = array(
		'name'                  => _x( 'glasses', 'Post Type General Name', 'glasses' ),
		'singular_name'         => _x( 'glasses', 'Post Type Singular Name', 'glasses' ),
		'menu_name'             => __( 'glasses', 'glasses' ),
		'name_admin_bar'        => __( 'glasses', 'glasses' ),
		'archives'              => __( 'glasses Archives', 'glasses' ),
		'parent_item_colon'     => __( 'Parent glasses', 'glasses' ),
		'all_items'             => __( 'All glasses', 'glasses' ),
		'add_new_item'          => __( 'Add New glasses', 'glasses' ),
		'add_new'               => __( 'Add New glasses', 'glasses' ),
		'new_item'              => __( 'New glasses', 'glasses' ),
		'edit_item'             => __( 'Edit glasses', 'glasses' ),
		'update_item'           => __( 'Update glasses', 'glasses' ),
		'view_item'             => __( 'View glasses', 'glasses' ),
		'search_items'          => __( 'Search glasses', 'glasses' ),
		'not_found'             => __( 'Not found', 'glasses' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'glasses' ),
		'featured_image'        => __( 'Featured Image', 'glasses' ),
		'set_featured_image'    => __( 'Set featured image', 'glasses' ),
		'remove_featured_image' => __( 'Remove featured image', 'glasses' ),
		'use_featured_image'    => __( 'Use as featured image', 'glasses' ),
		'insert_into_item'      => __( 'Insert into glasses', 'glasses' ),
		'uploaded_to_this_item' => __( 'Uploaded to this glasses', 'glasses' ),
		'items_list'            => __( 'glasses list', 'glasses' ),
		'items_list_navigation' => __( 'glasses list navigation', 'glasses' ),
		'filter_items_list'     => __( 'Filter glasses list', 'glasses' ),
	);
	$args = array(
		'label'                 => __( 'glasses', 'glasses' ),
		'description'           => __( 'glasses description', 'glasses' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'glasses_category' ),
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
	register_post_type( 'glasses', $args );

}
add_action( 'init', 'c95_glasses', 0 );