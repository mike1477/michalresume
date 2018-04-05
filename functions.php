<?php

function mr_theme_setup(){
  //Register Menus
  register_nav_menus( array(
	'primary' => 'Header Menu'
  ) );
}

add_action('after_setup_theme', 'mr_theme_setup');
