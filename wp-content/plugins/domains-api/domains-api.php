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
?>