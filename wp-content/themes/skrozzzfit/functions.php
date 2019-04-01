<?php

/**
 * Main functions file for SkrozzzFit Theme
 */

if ( ! function_exists( 'sf_theme_setup' ) ) {

    /**
     * SkrozzzFit Theme initial setup
     *
     * @return void
     */
    function sf_theme_setup() {
        /**
         * Set featured image support
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Register Primary menu
         */
        register_nav_menus( array(
            'primary' => __('Primary Menu')
        ) );
    }
}

