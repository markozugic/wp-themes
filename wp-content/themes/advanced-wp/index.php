<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <header>
            <div class="container">
                <h1>
                    <a href="index.html">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <small>
                        <?php bloginfo( 'description' ); ?>
                    </small>
                </h1>
                <div class="h_right">
                    <form method="get" action="<?php esc_url( home_url( '/' ) ); ?>">
                        <input type="text" name="s" placeholder="Search...">
                    </form>
                </div>
            </div>
        </header>

        <nav class="nav main-nav">
            <div class="container">
                <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                ?>
                <?php wp_nav_menu( $args ) ?>
            </div>
        </nav>

        <div class="container content">
            <div class="main block">
                <article class="post">
                    <h2>Blog Post 1</h2>
                    <p class="meta">Posted at 11:00 on May 9 by admin</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Eu mi bibendum neque egestas congue quisque egestas diam. Sapien nec sagittis
                        aliquam malesuada bibendum arcu vitae. Et molestie ac feugiat sed lectus. Tellus pellentesque eu tincidunt
                        tortor aliquam nulla facilisi cras fermentum. Praesent elementum facilisis leo vel fringilla est
                        ullamcorper eget. Tempus iaculis urna id volutpat lacus. Cras adipiscing enim eu turpis egestas pretium.
                        Id donec ultrices tincidunt arcu non. Viverra vitae congue eu consequat. Leo urna molestie at elementum eu
                        facilisis sed odio morbi. Lacus vestibulum sed arcu non odio. Eget arcu dictum varius duis at consectetur
                        lorem donec. Praesent semper feugiat nibh sed pulvinar proin. Et molestie ac feugiat sed lectus vestibulum
                        mattis ullamcorper. Consequat interdum varius sit amet. Integer quis auctor elit sed vulputate mi sit amet
                        mauris.
                        Vitae turpis massa sed elementum. Fermentum leo vel orci porta non pulvinar. Diam maecenas sed enim ut.
                        Id donec ultrices tincidunt arcu non. Porttitor leo a diam sollicitudin tempor id eu nisl. Scelerisque
                        purus semper eget duis at tellus at. Tellus id interdum velit laoreet id. Gravida dictum fusce ut placerat
                        orci nulla pellentesque. Arcu ac tortor dignissim convallis aenean et tortor. Arcu ac tortor dignissim
                        convallis. Suscipit tellus mauris a diam maecenas sed. Aenean et tortor at risus viverra adipiscing. M
                        auris nunc congue nisi vitae suscipit tellus mauris. Maecenas sed enim ut sem viverra aliquet eget. P
                        lacerat orci nulla pellentesque dignissim enim sit amet.
                    </p>
                    <a href="#" class="button">Read More</a>
                </article>
                <article class="post">
                    <h2>Blog Post 1</h2>
                    <p class="meta">Posted at 11:00 on May 9 by admin</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Eu mi bibendum neque egestas congue quisque egestas diam. Sapien nec sagittis
                        aliquam malesuada bibendum arcu vitae. Et molestie ac feugiat sed lectus. Tellus pellentesque eu tincidunt
                        tortor aliquam nulla facilisi cras fermentum. Praesent elementum facilisis leo vel fringilla est
                        ullamcorper eget. Tempus iaculis urna id volutpat lacus. Cras adipiscing enim eu turpis egestas pretium.
                        Id donec ultrices tincidunt arcu non. Viverra vitae congue eu consequat. Leo urna molestie at elementum eu
                        facilisis sed odio morbi. Lacus vestibulum sed arcu non odio. Eget arcu dictum varius duis at consectetur
                        lorem donec. Praesent semper feugiat nibh sed pulvinar proin. Et molestie ac feugiat sed lectus vestibulum
                        mattis ullamcorper. Consequat interdum varius sit amet. Integer quis auctor elit sed vulputate mi sit amet
                        mauris.
                        Vitae turpis massa sed elementum. Fermentum leo vel orci porta non pulvinar. Diam maecenas sed enim ut.
                        Id donec ultrices tincidunt arcu non. Porttitor leo a diam sollicitudin tempor id eu nisl. Scelerisque
                        purus semper eget duis at tellus at. Tellus id interdum velit laoreet id. Gravida dictum fusce ut placerat
                        orci nulla pellentesque. Arcu ac tortor dignissim convallis aenean et tortor. Arcu ac tortor dignissim
                        convallis. Suscipit tellus mauris a diam maecenas sed. Aenean et tortor at risus viverra adipiscing. M
                        auris nunc congue nisi vitae suscipit tellus mauris. Maecenas sed enim ut sem viverra aliquet eget. P
                        lacerat orci nulla pellentesque dignissim enim sit amet.
                    </p>
                    <a href="#" class="button">Read More</a>
                </article>
                <article class="post">
                        <h2>Blog Post 1</h2>
                        <p class="meta">Posted at 11:00 on May 9 by admin</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Eu mi bibendum neque egestas congue quisque egestas diam. Sapien nec sagittis
                            aliquam malesuada bibendum arcu vitae. Et molestie ac feugiat sed lectus. Tellus pellentesque eu tincidunt
                            tortor aliquam nulla facilisi cras fermentum. Praesent elementum facilisis leo vel fringilla est
                            ullamcorper eget. Tempus iaculis urna id volutpat lacus. Cras adipiscing enim eu turpis egestas pretium.
                            Id donec ultrices tincidunt arcu non. Viverra vitae congue eu consequat. Leo urna molestie at elementum eu
                            facilisis sed odio morbi. Lacus vestibulum sed arcu non odio. Eget arcu dictum varius duis at consectetur
                            lorem donec. Praesent semper feugiat nibh sed pulvinar proin. Et molestie ac feugiat sed lectus vestibulum
                            mattis ullamcorper. Consequat interdum varius sit amet. Integer quis auctor elit sed vulputate mi sit amet
                            mauris.
                            Vitae turpis massa sed elementum. Fermentum leo vel orci porta non pulvinar. Diam maecenas sed enim ut.
                            Id donec ultrices tincidunt arcu non. Porttitor leo a diam sollicitudin tempor id eu nisl. Scelerisque
                            purus semper eget duis at tellus at. Tellus id interdum velit laoreet id. Gravida dictum fusce ut placerat
                            orci nulla pellentesque. Arcu ac tortor dignissim convallis aenean et tortor. Arcu ac tortor dignissim
                            convallis. Suscipit tellus mauris a diam maecenas sed. Aenean et tortor at risus viverra adipiscing. M
                            auris nunc congue nisi vitae suscipit tellus mauris. Maecenas sed enim ut sem viverra aliquet eget. P
                            lacerat orci nulla pellentesque dignissim enim sit amet.
                        </p>
                        <a href="#" class="button">Read More</a>
                </article>
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

        <footer class="main-footer">
            <div class="container">
                <div class="f_left">
                    <p>&copy; 2016 - Advanced WP Theme</p>
                </div>
                <div class="f_right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
