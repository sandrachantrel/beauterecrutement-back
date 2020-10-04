<?php

/**
 * Registers the `job` taxonomy,
 * for use with 'offer'.
 */
function job_init() {
	register_taxonomy( 'job', array( 'offer' ), array(
		'hierarchical'      => false,
		'public'            => false,
		'show_in_nav_menus' => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
		'rewrite'           => false,
		'capabilities'      => array(
			'manage_terms'  => 'manage_jobs',
			'edit_terms'    => 'manage_jobs',
			'delete_terms'  => 'manage_jobs',
			'assign_terms'  => 'edit_offers',
		),
		'labels'            => array(
			'name'                       => __( 'Jobs', 'beauterecrutement' ),
			'singular_name'              => _x( 'Job', 'taxonomy general name', 'beauterecrutement' ),
			'search_items'               => __( 'Search Jobs', 'beauterecrutement' ),
			'popular_items'              => __( 'Popular Jobs', 'beauterecrutement' ),
			'all_items'                  => __( 'All Jobs', 'beauterecrutement' ),
			'parent_item'                => __( 'Parent Job', 'beauterecrutement' ),
			'parent_item_colon'          => __( 'Parent Job:', 'beauterecrutement' ),
			'edit_item'                  => __( 'Edit Job', 'beauterecrutement' ),
			'update_item'                => __( 'Update Job', 'beauterecrutement' ),
			'view_item'                  => __( 'View Job', 'beauterecrutement' ),
			'add_new_item'               => __( 'Add New Job', 'beauterecrutement' ),
			'new_item_name'              => __( 'New Job', 'beauterecrutement' ),
			'separate_items_with_commas' => __( 'Separate Jobs with commas', 'beauterecrutement' ),
			'add_or_remove_items'        => __( 'Add or remove Jobs', 'beauterecrutement' ),
			'choose_from_most_used'      => __( 'Choose from the most used Jobs', 'beauterecrutement' ),
			'not_found'                  => __( 'No Jobs found.', 'beauterecrutement' ),
			'no_terms'                   => __( 'No Jobs', 'beauterecrutement' ),
			'menu_name'                  => __( 'Métiers', 'beauterecrutement' ),
			'items_list_navigation'      => __( 'Jobs list navigation', 'beauterecrutement' ),
			'items_list'                 => __( 'Jobs list', 'beauterecrutement' ),
			'most_used'                  => _x( 'Most Used', 'job', 'beauterecrutement' ),
			'back_to_items'              => __( '&larr; Back to Jobs', 'beauterecrutement' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'offers/jobs',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'job_init' );

/**
 * Sets the post updated messages for the `job` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `job` taxonomy.
 */
function job_updated_messages( $messages ) {

	$messages['job'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Job added.', 'beauterecrutement' ),
		2 => __( 'Job deleted.', 'beauterecrutement' ),
		3 => __( 'Job updated.', 'beauterecrutement' ),
		4 => __( 'Job not added.', 'beauterecrutement' ),
		5 => __( 'Job not updated.', 'beauterecrutement' ),
		6 => __( 'Jobs deleted.', 'beauterecrutement' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'job_updated_messages' );
