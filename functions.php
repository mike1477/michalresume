<?php
// Pull in Styles and Scripts
function mr_enqueue_scripts() {
  wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans', array(), 'false', 'all' );
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.9/css/all.css', array(), '5.0.9', 'all' );
  wp_enqueue_style( 'css-circle-style', get_template_directory_uri() . '/assets/css/css-circle.css', array(), false, 'all' );
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all' );
  wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), false, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'mr_enqueue_scripts' );

function mr_theme_setup(){
  //Register Menus
  register_nav_menus( array(
	'primary'  => 'Header Menu',
  'primary2' => 'Video Header Menu'
  ) );

  //Include thumbnail features
  add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'mr_theme_setup');
