<?php 

function halim_css_js_calling(){
  // Css Load
  wp_enqueue_style('style-css', get_stylesheet_uri());
  wp_enqueue_style('poppins-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.1.0', 'all');
  wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.6.3', 'all');
  wp_enqueue_style( 'font-awesome-6', get_template_directory_uri().'/assets/css/font-awesome.css', array(), '6.1.1', 'all' );
  wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', 'all');
  wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0', 'all');
  wp_enqueue_style('animate', get_template_directory_uri().'/assets/vendor/animate/animate.css', array(), '3.7.0', 'all');
  wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all');
  wp_enqueue_style('responsive-css', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all');
  
  // JS Load
  wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '4.1.0', true);
  wp_enqueue_script('owl.carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
  wp_enqueue_script('isotope.min.js', get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'), '3.0.5', true);
  wp_enqueue_script('imageloaded.min.js', get_template_directory_uri().'/assets/js/imageloaded.min.js', array('jquery'), '4.1.4', true);
  wp_enqueue_script('counterup.min.js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('waypoint.min.js', get_template_directory_uri().'/assets/js/waypoint.min.js', array('jquery'), '4.0.0', true);
  wp_enqueue_script('wow.min.js', get_template_directory_uri().'/assets/vendor/WOW/wow-min.js', array('jquery'), '1.3.0', true);
  wp_enqueue_script('main.js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'halim_css_js_calling'); 