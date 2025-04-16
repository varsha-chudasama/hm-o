<?php
$curious_includes = [
  'lib/assets.php',  // Scripts and stylesheets
  'lib/extras.php',  // Custom functions
  'lib/setup.php',   // Theme setup
  'lib/titles.php',  // Page titles
  'lib/wrapper.php'  // Theme wrapper class
];

foreach ($curious_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title' => 'Header',
      'menu_title' => 'Header',
      'menu_slug' => 'header-options',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
  acf_add_options_page(
    array(
      'page_title' => 'Footer',
      'menu_title' => 'Footer',
      'menu_slug' => 'footer-options',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
}


add_action('init', 'our_people');
function our_people()
{
  register_post_type(
    'team',
    array(
      'labels' => array(
        'name' => __("Teams", 'textdomain'),
        'singular_name' => __("Team", 'textdomain'),
        'add_new' => __("Add New Team"),
        'add_new_item' => __("Add New Team"),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'team', 'with_front' => false),
      'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'),
    )
  );
}


add_image_size('thumbnail', 700, 700, true);
add_image_size('medium', 1200, 1200, true);
add_image_size('fullscreen', 2700, 2700, true);
add_filter('wpcf7_autop_or_not', '__return_false');