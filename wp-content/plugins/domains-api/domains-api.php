<?php
/**
* Plugin Name: Domains API
* Plugin URI: https://github.com/TaylorJadin/domains-api
* Description: This plugin calls the Domains API after form submissions.
* Version: 0.1
* Author: Reclaim Hosting
* Author URI: https://reclaimhosting.com
**/


add_action( 'gform_after_submission_1', 'dooo_create_user', 10, 2 );

function dooo_create_user ( $entry, $form ) {
    var_dump($entry);
    $firstname = $entry["4.3"];
    
}

// CPT
add_action('init', function() {

    // Domains
    register_post_type('domains', [
        'label' => __('Domains', 'txtdomain'),
        'public' => true,
        'menu_position' => 0,
        'menu_icon' => 'dashicons-admin-site',
        'supports' => ['title', 'author'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'domain'],
        'labels' => [
            'singular_name' => __('Domain', 'txtdomain'),
            'add_new_item' => __('Add new domain', 'txtdomain'),
            'new_item' => __('New domain', 'txtdomain'),
            'view_item' => __('View domain', 'txtdomain'),
            'not_found' => __('No domains found', 'txtdomain'),
            'not_found_in_trash' => __('No domains found in trash', 'txtdomain'),
            'all_items' => __('All domains', 'txtdomain'),
            'insert_into_item' => __('Insert into domains', 'txtdomain')
        ],		
    ]);

    // Services
    register_post_type('services', [
        'label' => __('Services', 'txtdomain'),
        'public' => true,
        'menu_position' => 0,
        'menu_icon' => 'dashicons-products',
        'supports' => ['title', 'author'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'service'],
        'labels' => [
            'singular_name' => __('Service', 'txtdomain'),
            'add_new_item' => __('Add new service', 'txtdomain'),
            'new_item' => __('New service', 'txtdomain'),
            'view_item' => __('View service', 'txtdomain'),
            'not_found' => __('No services found', 'txtdomain'),
            'not_found_in_trash' => __('No services found in trash', 'txtdomain'),
            'all_items' => __('All services', 'txtdomain'),
            'insert_into_item' => __('Insert into services', 'txtdomain')
        ],		
    ]);

    // Services
    register_post_type('applications', [
        'label' => __('Applications', 'txtdomain'),
        'public' => true,
        'menu_position' => 0,
        'menu_icon' => 'dashicons-superhero-alt',
        'supports' => ['title', 'author'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'application'],
        'labels' => [
            'singular_name' => __('Application', 'txtdomain'),
            'add_new_item' => __('Add new application', 'txtdomain'),
            'new_item' => __('New application', 'txtdomain'),
            'view_item' => __('View application', 'txtdomain'),
            'not_found' => __('No applications found', 'txtdomain'),
            'not_found_in_trash' => __('No applications found in trash', 'txtdomain'),
            'all_items' => __('All applications', 'txtdomain'),
            'insert_into_item' => __('Insert into applications', 'txtdomain')
        ],		
    ]);

});
?>