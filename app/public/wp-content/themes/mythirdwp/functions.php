<?php

add_action('after_setup_theme', 'mythirdwp_setup');
function mythirdwp_setup()
{
  add_theme_support('post-thumbnails');
  load_theme_textdomain('mythirdwp', get_template_directory() . '/languages');
}

add_action('wp_enqueue_scripts', 'mythirdwp_files');
function mythirdwp_files()
{
  // CSS
  wp_enqueue_style('theme-style', get_stylesheet_uri());
  wp_enqueue_style('bs-style', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('fa-style', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
  wp_enqueue_style('slick-style', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
  wp_enqueue_style('slick-theme-style', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
  wp_enqueue_style('lightbox-style', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css');
  wp_enqueue_style('app-style', get_theme_file_uri('/assets/css/app.css'));

  // SCRIPT
  wp_enqueue_script('bs-script', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', NULL, '5.0.2', true);
  wp_enqueue_script('lightbox-script', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.js', NULL, '2.11.3', true);
  wp_enqueue_script('jquery-script', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js', NULL, '3.6.0', true);
  wp_enqueue_script('slick-script', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', NULL, '1.8.1', true);
  wp_enqueue_script('app-script', get_theme_file_uri('/assets/js/app.js'), NULL, '1.0', true);
}