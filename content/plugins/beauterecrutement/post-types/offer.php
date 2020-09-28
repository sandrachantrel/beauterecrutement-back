<?php

/**
 * Registers the `offer` post type.
 */
function offer_init() {
	register_post_type( 'offer', array(
		'labels'                => array(
			'name'                  => __( "Offres d'Emploi", 'beauterecrutement' ),
			'singular_name'         => __( "Offre d'Emploi", 'beauterecrutement' ),
			'all_items'             => __( 'Toutes les Offres', 'beauterecrutement' ),
			'archives'              => __( 'Offer Archives', 'beauterecrutement' ),
			'attributes'            => __( 'Offer Attributes', 'beauterecrutement' ),
			'insert_into_item'      => __( 'Insert into Offer', 'beauterecrutement' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Offer', 'beauterecrutement' ),
			'featured_image'        => _x( 'Featured Image', 'offer', 'beauterecrutement' ),
			'set_featured_image'    => _x( 'Set featured image', 'offer', 'beauterecrutement' ),
			'remove_featured_image' => _x( 'Remove featured image', 'offer', 'beauterecrutement' ),
			'use_featured_image'    => _x( 'Use as featured image', 'offer', 'beauterecrutement' ),
			'filter_items_list'     => __( 'Filter Offers list', 'beauterecrutement' ),
			'items_list_navigation' => __( 'Offers list navigation', 'beauterecrutement' ),
			'items_list'            => __( 'Offers list', 'beauterecrutement' ),
			'new_item'              => __( 'Nouvelle Offre', 'beauterecrutement' ),
			'add_new'               => __( 'Nouvelle Offre', 'beauterecrutement' ),
			'add_new_item'          => __( 'Add New Offer', 'beauterecrutement' ),
			'edit_item'             => __( 'Edit Offer', 'beauterecrutement' ),
			'view_item'             => __( 'View Offer', 'beauterecrutement' ),
			'view_items'            => __( 'View Offers', 'beauterecrutement' ),
			'search_items'          => __( 'Search Offers', 'beauterecrutement' ),
			'not_found'             => __( 'No Offers found', 'beauterecrutement' ),
			'not_found_in_trash'    => __( 'No Offers found in trash', 'beauterecrutement' ),
			'parent_item_colon'     => __( 'Parent Offer:', 'beauterecrutement' ),
			'menu_name'             => __( "Offres d'Emploi", 'beauterecrutement' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_rest'          => true,
		'rest_base'             => 'offer',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'offer_init' );

/**
 * Sets the post updated messages for the `offer` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `offer` post type.
 */
function offer_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['offer'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Offer updated. <a target="_blank" href="%s">View Offer</a>', 'beauterecrutement' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'beauterecrutement' ),
		3  => __( 'Custom field deleted.', 'beauterecrutement' ),
		4  => __( 'Offer updated.', 'beauterecrutement' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Offer restored to revision from %s', 'beauterecrutement' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Offer published. <a href="%s">View Offer</a>', 'beauterecrutement' ), esc_url( $permalink ) ),
		7  => __( 'Offer saved.', 'beauterecrutement' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Offer submitted. <a target="_blank" href="%s">Preview Offer</a>', 'beauterecrutement' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Offer scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Offer</a>', 'beauterecrutement' ),
		date_i18n( __( 'M j, Y @ G:i', 'beauterecrutement' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Offer draft updated. <a target="_blank" href="%s">Preview Offer</a>', 'beauterecrutement' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'offer_updated_messages' );
