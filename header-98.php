<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="nav-header">
          <div class="site-title">
            <h2><a href="<?php echo get_home_url(); ?>" class="gohome">michal <span class="green">harrison</span></a></h2>
          </div>
          <nav>
            <?php
             wp_nav_menu( array(
               'theme_location' => 'primary2'
              ) );
             ?>
          </nav>
        </header>
       <div class="container">
