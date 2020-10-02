<?php
/**
 * Plugin Name: beauterecrutement
 */

// Condition pour tout arreter si on est pas dans le contexte wordpress

 if (!defined('WPINC')) {
     exit;
 }


 //Require indispensable pour le chargement du post-type dans le back office
 require plugin_dir_path(__FILE__) . 'post-types/offer.php';
 require plugin_dir_path(__FILE__) . 'roles/administrator.php';
 require plugin_dir_path(__FILE__) . 'taxonomies/localisation.php';
 require plugin_dir_path(__FILE__) . 'taxonomies/type.php';
 require plugin_dir_path(__FILE__) . 'taxonomies/job.php';

 
 register_activation_hook( __FILE__, function(){
     add_administrator_capabilities();
 });

 register_deactivation_hook( __FILE__, function(){
     remove_administrator_capabilities();
 });