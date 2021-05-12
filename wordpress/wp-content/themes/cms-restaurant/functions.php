<?php 
//=====================Remove Gutenberg====================
// for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  
// for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);

// to display in appearance the menus
  add_theme_support('menus');

// Install Bootstrap and CSS configuration

function load_style(){
  // Bootstrap = The name of the file & the path
  wp_register_style('bootstrap_v5', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap_v5');
  // Css = the name of the file & the path
  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
  // fontawesome
  wp_register_style('fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0' , 'all' );
  wp_enqueue_style('fontawesome');

}
add_action('wp_enqueue_scripts', 'load_style');

// add jquery 

function include_jquery()
  {
      wp_deregister_script('jquery');
      wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js',
       '', 1, true);
       add_action('wp_enqueue_scripts', 'jquery');
  }
  add_action('wp_enqueue_scripts', 'include_jquery');

 // add javascript 

function load_script()
{

    wp_register_script('costumjs', get_template_directory_uri() . '/js/scripts.js',
     '', 1, true);
     wp_enqueue_script('costumjs');

}
add_action('wp_enqueue_scripts', 'load_script');



