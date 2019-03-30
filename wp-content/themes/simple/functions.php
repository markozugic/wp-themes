<?php

/**
 * Simple Theme initial setup
 *
 * @return void
 */
function simple_theme_setup() {
    // Featured image setup
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'simple_theme_setup' );

/**
 * Set custom excerpt length
 *
 * @return int
 */
function set_excerpt_length() {
    return 60;
}

add_filter( 'excerpt_length', 'set_excerpt_length' );
