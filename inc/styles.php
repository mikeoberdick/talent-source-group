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
    wp_enqueue_style( 'bxSlider CSS', get_stylesheet_directory_uri() . '/bx-slider/jquery.bxslider.min.css' ); 
    wp_enqueue_style( 'Featherlight CSS', get_stylesheet_directory_uri() . '/fl/featherlight.css' );
    wp_enqueue_style( 'AOS CSS', get_stylesheet_directory_uri() . '/aos/aos.css' );
    wp_enqueue_script( 'Countdown JS', get_stylesheet_directory_uri() . '/countdown/jquery.countdown.min.js', array('jquery'), '1.0.0', true );
    
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_styles');