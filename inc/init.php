<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Auto-include all PHP files inside /inc folder
 */
$inc_files = glob( get_template_directory() . '/inc/*.php' );

foreach ( $inc_files as $file ) {
    if ( basename( $file ) !== 'init.php' ) {
        require_once $file;
    }
}
