<?php
if ( ! function_exists( 'C95_boy' ) ) {

// Register Custom Taxonomy
function C95_boy() {

	$labels = array(
		'name'                       => _x( 'boys', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'boy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'boy', 'text_domain' ),
		'all_items'                  => __( 'boy', 'text_domain' ),
		'parent_item'                => __( 'boy', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'boy', 'text_domain' ),
		'add_new_item'               => __( 'boy', 'text_domain' ),
		'edit_item'                  => __( 'boy', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'boy', array( 
		'c95-toys', 
		'c95-accessories',
		'c95-bags',
		'c95-clothes',
		'c95-glasses',
		'c95-watches',
		'c95-shoes',
		'c95-haircare',
		), $args );

}
add_action( 'init', 'C95_boy', 0 );

}