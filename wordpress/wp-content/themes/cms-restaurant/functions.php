<?php 
//=====================Remove Gutenberg====================
// for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);

// To display in appearance the menus
add_theme_support('menus');

//