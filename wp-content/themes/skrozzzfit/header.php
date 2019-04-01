<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta <?php bloginfo( 'description' ); ?>>
    
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  </head>
  <body>
      <!-- START: header -->
      <header role="banner" class="probootstrap-header">
          <div class="container-fluid">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="probootstrap-logo">
                SkrozzzFit<span>.</span>
              </a>

              <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
              <div class="mobile-menu-overlay"></div>
              <nav role="navigation" class="probootstrap-nav hidden-xs">
                  <ul class="probootstrap-main-nav">
                      <li class="active"><a href="index.html">Home</a></li>
                      <li><a href="programs.html">Programs</a></li>
                      <li><a href="gallery.html">Gallery</a></li>
                      <li><a href="about.html">About Me</a></li>
                      <li><a href="contact.html">Contact</a></li>
                  </ul>
                  <ul class="probootstrap-header-social hidden-xs">
                      <li><a href="#"><i class="icon-twitter"></i></a></li>
                      <li><a href="#"><i class="icon-facebook2"></i></a></li>
                      <li><a href="#"><i class="icon-instagram2"></i></a></li>
                  </ul>
                  <div class="extra-text visible-xs">
                      <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                      <h5>Connect With Me</h5>
                      <ul class="social-buttons">
                          <li><a href="#"><i class="icon-twitter"></i></a></li>
                          <li><a href="#"><i class="icon-facebook2"></i></a></li>
                          <li><a href="#"><i class="icon-instagram2"></i></a></li>
                      </ul>
                  </div>
              </nav>
          </div>
      </header>
      <!-- END: header -->