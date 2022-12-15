<?php 

function halim_widgets(){
  // Sidebar
  register_sidebar(array(
    'name' => __('Mani Sidebar', 'halim'),
    'id' => 'main_sidebar',
    'description' => __('Main sidebar for Blog page', 'halim'),
    'before_widget' => '<div class="single-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));
  
  // Footer One
  register_sidebar(array(
    'name' => __('Footer Sidebar 1', 'halim'),
    'id' => 'footer_sidebar1',
    'description' => __('Footer widget One for footer widget', 'halim'),
    'before_widget' => '<div class="single-footer footer-logo">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
   // Footer Two
   register_sidebar(array(
    'name' => __('Footer Sidebar 2', 'halim'),
    'id' => 'footer_sidebar2',
    'description' => __('Footer widget two for footer widget', 'halim'),
    'before_widget' => '<div class="single-footer">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
   // Footer Three
   register_sidebar(array(
    'name' => __('Footer Sidebar 3', 'halim'),
    'id' => 'footer_sidebar3',
    'description' => __('Footer widget three for footer widget', 'halim'),
    'before_widget' => '<div class="single-footer">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  // Footer Four
  register_sidebar(array(
    'name' => __('Footer Sidebar 4', 'halim'),
    'id' => 'footer_sidebar4',
    'description' => __('Footer widget four for footer widget', 'halim'),
    'before_widget' => '<div class="single-footer contact-box">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
}
add_action('widgets_init', 'halim_widgets');