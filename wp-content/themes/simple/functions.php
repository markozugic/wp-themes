<?php

/**
 * Simple Theme initial setup
 *
 * @return void
 */
function simple_theme_setup() {
    // Featured image
    add_theme_support( 'post-thumbnails' );

    // Menu
    register_nav_menus( array(
        'primary' => __('Primary Menu')
     ) );
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

/**
 * Simple Theme widget setup
 *
 * @param int $id
 * @return void
 */
function init_widgets( $id ) {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
     ) );
}

add_action( 'widgets_init', 'init_widgets' );
