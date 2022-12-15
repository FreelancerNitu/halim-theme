<?php 

function halim_register_theme(){
  // Dynamic title tag
  add_theme_support('title-tag');
  
  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );
  
  // Post Thumbnails
  add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio'));
  
  // Load theme teatdomainay
  load_theme_textdomain('halim', get_template_directory_uri().'/languages');
  
  // Menu register
  register_nav_menus(array(
    'main-menu' => __('Primary Menu', 'halim'),
  ));
  /*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
  add_theme_support(
    'html5',
    array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
      'navigation-widgets',
    )
  );
}
add_action('after_setup_theme', 'halim_register_theme');