<!DOCTYPE html>
<html <?php language_attributes (); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container">
        <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/images/copaLogo.png')?>" width="115px" alt="Logo"></a>
        <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>中国海外石油校友会</strong></a></h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li class="nav-list-item"><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li class="nav-list-item"><a href="<?php echo site_url('/events') ?>">Events</a></li>
              <li class="nav-list-item"><a href="<?php echo site_url('/photos') ?>">Photo Gallery</a></li>
              <li class="nav-list-item"><a href="<?php echo site_url('/legal') ?>">Legal</a></li>
              <li class="nav-list-item"><a href="<?php echo site_url('/contact-us') ?>">Contact</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="<?php echo site_url('/members') ?>" class="btn btn--small btn-turquoise float-left push-right">Members Sign Up</a>
            <!-- <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a> -->
            <!-- <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
          </div>
        </div>
    </div>
  </header>
        

