<?php
// An experiment to try and understand why styles are not loading
// wp_enqueue_style('test-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');


if (!function_exists('myfirsttheme_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which runs
   * before the init hook.
   */
  function myfirsttheme_setup()
  {
    // Add support for block styles.
    add_theme_support('wp-block-styles');

    // Enqueue editor styles.
    add_editor_style('editor-style.css');
  }
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'myfirsttheme_setup');

function myfirsttheme_enqueue_styles()
{
  // Enqueue Pico.css
  wp_enqueue_style('pico', get_template_directory_uri() . '/css/pico.css');

  // Enqueue your main style
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myfirsttheme_enqueue_styles');
