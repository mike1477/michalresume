<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
      <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <section id="top-header" class="top-header navigation">
        <div>
          <div class="top-site-title">
            <h1><?php bloginfo('name') ?></h1>
            <p><?php bloginfo('description') ?></p>
            <div class="down">
              <a href="#" id="down" class="menu-item"><i class="fas fa-chevron-circle-down"></i></a>
            </div>
          </div>
        </div>
        <header class="nav-header nav-header-bottom">
          <div class="site-title">
            <h2><a href="#" class="gohome">michal <span class="green">harrison</span></a></h2>
          </div>
          <div class="cellToggleButton">
            <button type="button" name="button" id="cellbutton"><i class='fas fa-chevron-down'></i></button>
          </div>
          <nav class = "header-nav" style="display:none">
            <?php
             wp_nav_menu( array(
               'theme_location' => 'primary'
              ) );
             ?>
          </nav>
        </header>
      </section>

       <div class="container">
