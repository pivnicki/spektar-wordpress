<?php
//Set Up
add_theme_support('menus');
// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
//Includes
//front end
include(get_template_directory().'/includes/enqueue.php');
//setup 
include(get_template_directory().'/includes/setup.php');
//widgets
include(get_template_directory().'/includes/widgets.php');
 
//Actions & Filters Hooks
remove_action('wp_head', 'wp_generator');

add_action('wp_enqueue_scripts','spektrum_enqueue');
add_action('after_setup_theme','spektrum_setup_theme');
add_action('widgets_init','spektrum_widgets');
 
 // Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}
 
 
// add_action( 'widgets_init', 'spektrum_widgets_init' );
// add_action( 'widgets_init', 'spektrum_newsletter_init');
// add_action( 'widgets_init', 'spektrum_searchbar_init');
//Shortcodes
 
 
 
 