<?php

/**
 * Registers the `type` taxonomy,
 * for use with 'offer'.
 */
function type_init() {
	register_taxonomy( 'type', array( 'offer' ), array(
		'hierarchical'      => false,
		'public'            => false,
		'show_in_nav_menus' => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
		'rewrite'           => false,
		'capabilities'      => array(
			'manage_terms'  => 'manage_types',
			'edit_terms'    => 'manage_types',
			'delete_terms'  => 'manage_types',
			'assign_terms'  => 'edit_offers',
		),
		'labels'            => array(
			'name'                       => __( 'Types', 'beauterecrutement' ),
			'singular_name'              => _x( 'Type', 'taxonomy general name', 'beauterecrutement' ),
			'search_items'               => __( 'Search Types', 'beauterecrutement' ),
			'popular_items'              => __( 'Popular Types', 'beauterecrutement' ),
			'all_items'                  => __( 'All Types', 'beauterecrutement' ),
			'parent_item'                => __( 'Parent Type', 'beauterecrutement' ),
			'parent_item_colon'          => __( 'Parent Type:', 'beauterecrutement' ),
			'edit_item'                  => __( 'Edit Type', 'beauterecrutement' ),
			'update_item'                => __( 'Update Type', 'beauterecrutement' ),
			'view_item'                  => __( 'View Type', 'beauterecrutement' ),
			'add_new_item'               => __( 'Add New Type', 'beauterecrutement' ),
			'new_item_name'              => __( 'New Type', 'beauterecrutement' ),
			'separate_items_with_commas' => __( 'Separate Types with commas', 'beauterecrutement' ),
			'add_or_remove_items'        => __( 'Add or remove Types', 'beauterecrutement' ),
			'choose_from_most_used'      => __( 'Choose from the most used Types', 'beauterecrutement' ),
			'not_found'                  => __( 'No Types found.', 'beauterecrutement' ),
			'no_terms'                   => __( 'No Types', 'beauterecrutement' ),
			'menu_name'                  => __( 'Types de Contrat', 'beauterecrutement' ),
			'items_list_navigation'      => __( 'Types list navigation', 'beauterecrutement' ),
			'items_list'                 => __( 'Types list', 'beauterecrutement' ),
			'most_used'                  => _x( 'Most Used', 'type', 'beauterecrutement' ),
			'back_to_items'              => __( '&larr; Back to Types', 'beauterecrutement' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'types',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'type_init' );

/**
 * Sets the post updated messages for the `type` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `type` taxonomy.
 */
function type_updated_messages( $messages ) {

	$messages['type'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Type added.', 'beauterecrutement' ),
		2 => __( 'Type deleted.', 'beauterecrutement' ),
		3 => __( 'Type updated.', 'beauterecrutement' ),
		4 => __( 'Type not added.', 'beauterecrutement' ),
		5 => __( 'Type not updated.', 'beauterecrutement' ),
		6 => __( 'Types deleted.', 'beauterecrutement' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'type_updated_messages' );
