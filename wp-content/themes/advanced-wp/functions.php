<?php

if ( ! function_exists( 'adv_theme_support' ) ) {

    /**
     * Setup Advanced WP Theme support
     *
     * @return void
     */
    function adv_theme_support() {

        /**
         * Add Featured image support
         */
        add_theme_support( 'post-thumbnails' );

        /**
         *  Register Navigation
         */
        register_nav_menus( array(
            'primary' => __( 'Primary Menu' ),
            'footer'  => __( 'Footer Menu' )
        ) );
    }

    add_action( 'after_setup_theme', 'adv_theme_support' );
}

if ( ! function_exists( 'adv_set_excerpt_length' ) ) {

    /**
     * Set custom excerpt length for Advanced WP Theme
     *
     * @return int
     */
    function adv_set_excerpt_length() {
        return 25;
    }

    add_filter( 'excerpt_length', 'adv_set_excerpt_length' );
}



if ( ! function_exists( 'avd_get_categories_for_post' ) ) {

    /**
     * Get all categories for blog post
     *
     * @return void
     */
    function avd_get_categories_for_post() {
        $categories = get_the_category();
        $separator = ', ';
        $output = '';

        if ( $categories ) {
            foreach ( $categories as $category ) {
                $output .=
                    '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">'
                    . $category->name .
                    '</a>' . $separator;
            }
        }

        echo trim( $output, $separator );
    }
}

if ( ! function_exists( 'avd_get_author_meta' ) ) {

    /**
     * Get the post author and his meta
     *
     * @return void
     */
    function avd_get_author_meta() {
        ?>
        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
            <?php the_author(); ?>
        </a>
        <?php
    }
}

if ( ! function_exists( 'avd_get_archives_by_type' ) ) {

    /**
     * Get archives by type
     *
     * @return void
     */
    function avd_get_archives_by_type() {
        if ( is_category() ) {
            single_cat_title();
        } else if ( is_author() ) {
            echo 'Archives by author: ' . get_the_author();
        } else if ( is_tag() ) {
            single_tag_title();
        } else if ( is_day() ) {
            echo 'Archives by day: ' . get_the_date();
        } else if ( is_month() ) {
            echo 'Archives by month: ' . get_the_date( 'F Y' );
        } else if ( is_year() ) {
            echo 'Archives by year: ' . get_the_date( 'Y' );
        } else {
            echo 'Archives';
        }
    }
}
