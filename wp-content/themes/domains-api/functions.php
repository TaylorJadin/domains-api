<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Register post types
add_action( 'init', 'domains_cpt' );
add_action( 'init', 'products_cpt' );

// Define Domains custom post type
function domains_cpt() {
   $labels = array(
      'name'               => _x( 'Domains', 'domains general name' ),
      'singular_name'      => _x( 'Domain', 'domains singular name' ),
      'menu_name'          => 'Domains'
   );
   $args = array(
      'labels'             => $labels,
      'description'        => 'Holds domain names',
      'public'             => false,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'menu_icon'          => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" fill="black" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1472 992v480q0 26-19 45t-45 19h-384v-384h-256v384h-384q-26 0-45-19t-19-45v-480q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69l-62 74q-8 9-21 11h-3q-13 0-21-7l-692-577-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5t11-21.5l719-599q32-26 76-26t76 26l244 204v-195q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z"/></svg>'),
      'menu_position'      => 0,
      'supports'           => array( 'title', 'editor')
   );
   register_post_type( 'domains', $args );
   }

// Define Products custom post type
function products_cpt() {
   $labels = array(
      'name'               => _x( 'Products', 'products general name' ),
      'singular_name'      => _x( 'Product', 'products singular name' ),
      'menu_name'          => 'Products'
   );
   $args = array(
      'labels'             => $labels,
      'description'        => 'Holds product names',
      'public'             => false,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'menu_icon'          => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" fill="black" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1757 1408l35 313q3 28-16 50-19 21-48 21h-1664q-29 0-48-21-19-22-16-50l35-313h1722zm-93-839l86 775h-1708l86-775q3-24 21-40.5t43-16.5h256v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h384v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h256q25 0 43 16.5t21 40.5zm-384-185v256q0 26-19 45t-45 19-45-19-19-45v-256q0-106-75-181t-181-75-181 75-75 181v256q0 26-19 45t-45 19-45-19-19-45v-256q0-159 112.5-271.5t271.5-112.5 271.5 112.5 112.5 271.5z"/></svg>'),
      'menu_position'      => 0,
      'supports'           => array( 'title', 'editor')
   );
   register_post_type( 'products', $args );
   }

?>