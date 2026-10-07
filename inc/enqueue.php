<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nexcent_enqueue_assets() {
    // Main stylesheet from theme root
    wp_enqueue_style( 'nexcent-style', get_stylesheet_uri(), array(), _S_VERSION );

    // Component Stylesheets
    wp_enqueue_style( 'nexcent-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
    wp_enqueue_style( 'nexcent-header-style', get_template_directory_uri() . '/assets/css/components/header.css', array(), _S_VERSION );
    wp_enqueue_style( 'nexcent-footer-style', get_template_directory_uri() . '/assets/css/components/footer.css', array(), _S_VERSION );
    wp_enqueue_style( 'nexcent-buttons-style', get_template_directory_uri() . '/assets/css/components/buttons.css', array(), _S_VERSION );

    // Scripts
    wp_enqueue_script( 'nexcent-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'nexcent_enqueue_assets' );
