<?php 

add_action('after_setup_theme', 'mythirdwp_setup');
function mythirdwp_setup() {
  add_theme_support('post-thumbnails');
  load_theme_textdomain('mythirdwp', get_template_directory() . '/languages');
}

add_action('wp_enqueue_scripts', 'mythirdwp_files');
function mythirdwp_files() {
  wp_enqueue_style('theme-style', get_stylesheet_uri());
}