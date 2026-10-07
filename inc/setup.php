<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}





function nexcent_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Register Header Navigation Location
    register_nav_menus( array(
        'header' => __( 'Header Navigation', 'nexcent' ),
    ) );
}
add_action( 'after_setup_theme', 'nexcent_theme_setup' );

/**
 * Register ACF Pro Options Page & Field Group for Auth Buttons
 */
if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page( array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => 'dashicons-admin-generic'
    ) );
}

if ( function_exists( 'acf_add_local_field_group' ) ) {
    acf_add_local_field_group( array(
        'key' => 'group_theme_settings',
        'title' => 'Header Auth Buttons',
        'fields' => array(
            array(
                'key' => 'field_login_text',
                'label' => 'Login Button Text',
                'name' => 'login_text',
                'type' => 'text',
                'default_value' => 'Login',
            ),
            array(
                'key' => 'field_signup_text',
                'label' => 'Sign Up Button Text',
                'name' => 'signup_text',
                'type' => 'text',
                'default_value' => 'Sign Up',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-settings',
                ),
            ),
        ),
    ) );
}
