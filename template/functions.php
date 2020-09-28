<?php 

function load_files() {
  wp_enqueue_style( 'main_styles', get_stylesheet_uri() );
  wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swa' );
  wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/da6ddca0ed.js' );
}

add_action('wp_enqueue_scripts', 'load_files');

add_filter( 'excerpt_length', function( $length ) { return 28; } );

function add_features() {
  add_theme_support('post-thumbnails');
  add_image_size('pageBanner', 2000, 800, true);
}

add_action('after_setup_theme', 'add_features');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}


// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'dentist-concept' ),
  'footer-menu' => esc_html__( 'Footer Menu', 'dentist-concept' ),
] );

?>