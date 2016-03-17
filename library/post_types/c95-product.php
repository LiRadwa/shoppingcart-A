<?php
// Register Custom Post Type
function setup_product_post_type() {

	$labels = array(
		'name'                  => _x( 'product', 'Post Type General Name', 'products' ),
		'singular_name'         => _x( 'product', 'Post Type Singular Name', 'products' ),
		'menu_name'             => __( 'products', 'products' ),
		'name_admin_bar'        => __( 'products', 'products' ),
		'archives'              => __( 'product Archives', 'products' ),
		'parent_item_colon'     => __( 'Parent Item:', 'products' ),
		'all_items'             => __( 'All Items', 'products' ),
		'add_new_item'          => __( 'Add New Item', 'products' ),
		'add_new'               => __( 'Add New', 'products' ),
		'new_item'              => __( 'New Item', 'products' ),
		'edit_item'             => __( 'Edit Item', 'products' ),
		'update_item'           => __( 'Update Item', 'products' ),
		'view_item'             => __( 'View Item', 'products' ),
		'search_items'          => __( 'Search Item', 'products' ),
		'not_found'             => __( 'Not found', 'products' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'products' ),
		'featured_image'        => __( 'Featured Image', 'products' ),
		'set_featured_image'    => __( 'Set featured image', 'products' ),
		'remove_featured_image' => __( 'Remove featured image', 'products' ),
		'use_featured_image'    => __( 'Use as featured image', 'products' ),
		'insert_into_item'      => __( 'Insert into item', 'products' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'products' ),
		'items_list'            => __( 'Items list', 'products' ),
		'items_list_navigation' => __( 'Items list navigation', 'products' ),
		'filter_items_list'     => __( 'Filter items list', 'products' ),
	);
	$args = array(
		'label'                 => __( 'product', 'products' ),
		'description'           => __( 'product Description', 'products' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'c95-product', $args );

}
add_action( 'init', 'setup_product_post_type', 0 );