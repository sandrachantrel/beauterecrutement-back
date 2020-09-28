<?php
/**
 * Plugin Name: beauterecrutement
 */

// Condition pour tout arreter si on est pas dans le contexte wordpress

 if (!defined('WPINC')) {
     exit;
 }


 //Chargement du post-type dans le back office
 require plugin_dir_path(__FILE__) . 'post-types/offer.php';