<?php

if ( ! function_exists( 'add_recruiter_role')) {
    function add_recruiter_role() {
        add_role(
            'recruiter',
            __( 'recruiter', 'beauterecrutement'),
            [
                'read' => true,
                'edit_offer' => true,
                'read_offer' => true,
                'delete_offer' => true,
                'edit_offers' => true,
                'edit_others_offers' => false,
                'delete_offers' => true,
                'publish_offers' => true,
                'read_private_offers' => false,
                'delete_private_offers' => false,
                'delete_published_offers' => false,
                'delete_others_offers' => false,
                'edit_private_offers' => false,
                'edit_published_offers' => true,
                'create_offers' => true,
                'manage_localisations' => false,
                'manage_jobs' => false,
                'manage_types' => false,
               // 'edit_types' => true,
                //'delete_types' => true,
               //'upload_files' => true,
            ]
        );
    }
}

if (!function_exists('remove_recruiter_role')) {
    function remove_recruiter_role()
    {
        remove_role('recruiter');
    }
}