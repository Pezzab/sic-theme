<?php

function sic_theme_enqueue_styles() {
$parent_style = 'parent-style';
   wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
//    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
}
add_action( 'wp_enqueue_scripts', 'sic_theme_enqueue_styles' ); 


function webussed_child_add_fonts() {

    // font-heading

    wp_register_style('bebas-neue-async-defer', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    wp_enqueue_style('bebas-neue-async-defer'); // "Bebas Neue"

    // font-sans

    wp_register_style('lexend-deca-async-defer', 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap'); // "Lexend Deca"
    wp_enqueue_style('lexend-deca-async-defer');

    wp_register_style('roboto-async-defer', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap'); // "Roboto"
    wp_enqueue_style('roboto-async-defer');

    wp_register_style('roboto-condensed-async-defer', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap'); // "Roboto Condensed"
    wp_enqueue_style('roboto-condensed-async-defer');

    wp_register_style('birthstone-async-defer', 'https://fonts.googleapis.com/css2?family=Birthstone&display=swap'); // "Roboto Condensed"
    wp_enqueue_style('birthstone-async-defer'); // Birthstone


    // https://fonts.googleapis.com/css2?family=Playwrite+DE+SAS+Guides&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap

}

add_action( 'wp_enqueue_scripts', 'webussed_child_add_fonts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';