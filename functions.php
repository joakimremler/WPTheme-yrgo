<?php
add_action('after_setup_theme', function() {
  add_theme_support('title-tag');
});


function WPThemeYrgo_script_enqueue() {
  //loading style.css
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  //loading bootstrap
  wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' );

  //loading scripts
  wp_enqueue_script( 'jquery-3.1.1.slim.min.js', 'https://code.jquery.com/jquery-3.1.1.slim.min.js' );
  wp_enqueue_script( 'tether.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' );
  wp_enqueue_script( 'bootstrap.min.js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js' );

  //loding my main.js script from local directory
  wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true);
}


add_action( 'wp_enqueue_scripts', 'WPThemeYrgo_script_enqueue' );
