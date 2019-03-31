<?php get_header(); ?>

    <div class="container content">
        <div class="main block">
            <h1 class="page-header">
                <?php avd_get_archives_by_type(); ?>
            </h1>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="archive-post">
                        <h4>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h4>
                        <p>Posted on: <?php the_time( 'F j, Y g:i a' ); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php wpautop( 'Sorry, not posts were found' ); ?>
            <?php endif; ?>
        </div>

        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p>convallis. Suscipit tellus mauris a diam maecenas sed. Aenean et tortor at risus viverra adipiscing. M
                    auris nunc congue nisi vitae suscipit tellus mauris. Maecenas sed enim ut sem viverra aliquet eget. P
                    lacerat orci nulla pellentesque dignissim enim sit amet.
                </p>
                <a href="#" class="button">More</a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
