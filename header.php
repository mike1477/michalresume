<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
       <header>
         <div class="site-title">
           <h1><?php bloginfo('name') ?></h1>
         </div>
         <nav>
           <?php
            wp_nav_menu( array(
              'theme_location' => 'primary'
             ) );
            ?>
         </nav>
       </header>
