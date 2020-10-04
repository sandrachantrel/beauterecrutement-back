<?php

if ( ! function_exists( 'add_administrator_capabilities' )) {

    function add_administrator_capabilities() {

        // fonction get_role pour recuperer l'objet du role 
        $administrator= get_role('administrator');

       // je viens rajouter les capabilities sur le role administrateur 

       // Offres d'emploi
            $administrator->add_cap('edit_offer');
			$administrator->add_cap('read_offer');
			$administrator->add_cap('delete_offer');
			$administrator->add_cap('edit_offers');
			$administrator->add_cap('edit_others_offers');
			$administrator->add_cap('delete_offers');
			$administrator->add_cap('publish_offers');
			$administrator->add_cap('read_private_offers');
			$administrator->add_cap('delete_private_offers');
			$administrator->add_cap('delete_published_offers');
			$administrator->add_cap('delete_others_offers');
			$administrator->add_cap('edit_private_offers');
			$administrator->add_cap('edit_published_offers');
            $administrator->add_cap('create_offers');
            
        // Localisations
            $administrator->add_cap('manage_localisations');

        // Types de contrat
            $administrator->add_cap('manage_types');
            $administrator->add_cap('edit_types');
            $administrator->add_cap('delete_types');

        // Métiers
            $administrator->add_cap('manage_jobs');

        // Remove Pages

            // suppression du post-type par default page - attention pour rajouter le post-type faire add_cap
            $administrator->remove_cap('edit_pages');

    }
}

if (! function_exists('remove_administrator_capabilities')) {
    function remove_administrator_capabilities()
    {
        $administrator = get_role('administrator');

        // je viens supprimer les capabilities sur le role administrateur 

        // Offres d'emploi
        $administrator->remove_cap('edit_offer');
        $administrator->remove_cap('read_offer');
        $administrator->remove_cap('delete_offer');
        $administrator->remove_cap('edit_offers');
        $administrator->remove_cap('edit_others_offers');
        $administrator->remove_cap('delete_offers');
        $administrator->remove_cap('publish_offers');
        $administrator->remove_cap('read_private_offers');
        $administrator->remove_cap('delete_private_offers');
        $administrator->remove_cap('delete_published_offers');
        $administrator->remove_cap('delete_others_offers');
        $administrator->remove_cap('edit_private_offers');
        $administrator->remove_cap('edit_published_offers');
        $administrator->remove_cap('create_offers');
        
    // Localisations
        $administrator->remove_cap('manage_localisations');

    // Types de contrat
        $administrator->remove_cap('manage_types');

    // Métiers
        $administrator->remove_cap('manage_jobs');
    }
}