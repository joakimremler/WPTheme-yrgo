<?php
add_action('after_setup_theme', function() {
  add_theme_support('title-tag');
});

// Register student custom post type.
require get_template_directory().'/post-types/employee.php';

// Register course taxonomy for the student custom post type.
require get_template_directory().'/taxonomies/location.php';


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


// declare(strict_types=1);
// // Add theme supported features.
// add_action('after_setup_theme', function () {
//     add_theme_support('title-tag');
// });
// // Enqueue styles and scripts the right way.
// add_action('wp_enqueue_scripts', function () {
//     wp_deregister_script('jquery');
//     wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
//     wp_register_script('jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', '', '', true);
//     wp_register_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', '', '', true);
//     wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', '', '', true);
//     wp_enqueue_script('jquery');
//     wp_enqueue_script('tether');
//     wp_enqueue_script('bootstrap');
// });
