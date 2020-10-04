<?php

/**
 * Registers the `localisation` taxonomy,
 * for use with 'offer'.
 */
function localisation_init() {
	register_taxonomy( 'localisation', array( 'offer' ), array(
		'hierarchical'      => false,
		'public'            => false,
		'show_in_nav_menus' => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
		'rewrite'           => false,
		'capabilities'      => array(
			'manage_terms'  => 'manage_localisations',
			'edit_terms'    => 'manage_localisations',
			'delete_terms'  => 'manage_localisations',
			'assign_terms'  => 'edit_offers',
		),
		'labels'            => array(
			'name'                       => __( 'Localisations', 'beauterecrutement' ),
			'singular_name'              => _x( 'Localisation', 'taxonomy general name', 'beauterecrutement' ),
			'search_items'               => __( 'Search Localisations', 'beauterecrutement' ),
			'popular_items'              => __( 'Popular Localisations', 'beauterecrutement' ),
			'all_items'                  => __( 'All Localisations', 'beauterecrutement' ),
			'parent_item'                => __( 'Parent Localisation', 'beauterecrutement' ),
			'parent_item_colon'          => __( 'Parent Localisation:', 'beauterecrutement' ),
			'edit_item'                  => __( 'Edit Localisation', 'beauterecrutement' ),
			'update_item'                => __( 'Update Localisation', 'beauterecrutement' ),
			'view_item'                  => __( 'View Localisation', 'beauterecrutement' ),
			'add_new_item'               => __( 'Add New Localisation', 'beauterecrutement' ),
			'new_item_name'              => __( 'New Localisation', 'beauterecrutement' ),
			'separate_items_with_commas' => __( 'Separate Localisations with commas', 'beauterecrutement' ),
			'add_or_remove_items'        => __( 'Add or remove Localisations', 'beauterecrutement' ),
			'choose_from_most_used'      => __( 'Choose from the most used Localisations', 'beauterecrutement' ),
			'not_found'                  => __( 'No Localisations found.', 'beauterecrutement' ),
			'no_terms'                   => __( 'No Localisations', 'beauterecrutement' ),
			'menu_name'                  => __( 'Localisations', 'beauterecrutement' ),
			'items_list_navigation'      => __( 'Localisations list navigation', 'beauterecrutement' ),
			'items_list'                 => __( 'Localisations list', 'beauterecrutement' ),
			'most_used'                  => _x( 'Most Used', 'localisation', 'beauterecrutement' ),
			'back_to_items'              => __( '&larr; Back to Localisations', 'beauterecrutement' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'offers/localisations',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'localisation_init' );

/**
 * Sets the post updated messages for the `localisation` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `localisation` taxonomy.
 */
function localisation_updated_messages( $messages ) {

	$messages['localisation'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Localisation added.', 'beauterecrutement' ),
		2 => __( 'Localisation deleted.', 'beauterecrutement' ),
		3 => __( 'Localisation updated.', 'beauterecrutement' ),
		4 => __( 'Localisation not added.', 'beauterecrutement' ),
		5 => __( 'Localisation not updated.', 'beauterecrutement' ),
		6 => __( 'Localisations deleted.', 'beauterecrutement' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'localisation_updated_messages' );
