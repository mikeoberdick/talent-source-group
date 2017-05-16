<?php
/**
 * D4TW register theme styles
 *
 * @package understrap
 */

// Add the theme styles
function d4tw_enqueue_styles () {
    wp_enqueue_style( 'Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans' );
    wp_enqueue_style( 'Slabo', 'https://fonts.googleapis.com/css?family=Slabo+13px' );
    wp_enqueue_style( 'Cabin', 'https://fonts.googleapis.com/css?family=Cabin' );
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_styles');