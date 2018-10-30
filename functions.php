<?php

// Setup


// Includes

include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );


// Hooks

add_action( 'wp_enqueue_scripts', 'gl_enqueue' );
add_action( 'after_setup_theme', 'gl_setup_theme' );

// Shortcodes

add_filter( 'get_custom_logo', 'change_logo_class' );


// Cabiarle la clase al logo

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'logo', $html );

    return $html;
}

?>