<?php
/**
 * D4TW register theme styles
 *
 * @package understrap
 */

// Add the theme styles
function d4tw_enqueue_styles () {
    wp_enqueue_style( 'Playfair Display', 'https://fonts.googleapis.com/css?family=Playfair+Display' );
    wp_enqueue_style( 'Cabin', 'https://fonts.googleapis.com/css?family=Cabin' );
    wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat' );
    
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_styles');