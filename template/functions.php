<?php 

function dentist_concept_files() {
  wp_enqueue_style( 'main_styles', get_stylesheet_uri() );
  wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swa' );
  wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/da6ddca0ed.js' );
  wp_enqueue_script( 'js', get_template_directory_uri() . '/js/scripts.js' );
}

add_action('wp_enqueue_scripts', 'dentist_concept_files');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}
