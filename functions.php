<?php
add_action('after_setup_theme', function() {
  add_theme_support('title-tag');
});


function add_theme_scripts() {
  //loading style.css
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  //loading bootstrap
  wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' );

  //loading scripts
  wp_enqueue_script( 'jquery-3.1.1.slim.min.js', 'https://code.jquery.com/jquery-3.1.1.slim.min.js' );
  wp_enqueue_script( 'tether.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' );
  wp_enqueue_script( 'bootstrap.min.js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js' );

  // wp_register_script('main.js', plugins_url('main.js', _FILE_), array('jquery'), '1.1', true);
	// wp_enqueue_script('main.js');
  // wp_enqueue_script( 'main.js', 'http://localhost/Skola/projekt/wordpress//wp-content/themes/WPTheme-yrgo/main.js' );
    // wp_enqueue_script( 'main.js', get_template_directory_uri() . 'main.js', array(), '1', true );
 // wp_enqueue_script( 'main.js', plugin_dir_url( __FILE__ ) , 'main.js', array( 'jquery' ) );

  // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //     wp_enqueue_script( 'comment-reply' );
  //   }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
