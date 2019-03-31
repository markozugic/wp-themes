<?php get_header(); ?>

    <div class="container content">
        <div class="main block">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="post">
                        <h2><?php the_title(); ?></h2>
                        <p class="meta">
                            Posted at
                            <?php the_time( 'F j, Y g:i' ); ?>
                            on May 9 by
                            <?php avd_get_author_meta(); ?>
                            Posted in
                            <?php avd_get_categories_for_post(); ?>
                        </p>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail() ?>
                            </div>
                        <?php endif; ?>
                        <p><?php the_content(); ?></p>
                    </article>
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
