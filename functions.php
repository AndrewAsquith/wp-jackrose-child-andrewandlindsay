<?php
/**
 * Jack & Rose Child theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Andrew_&_Lindsay
 */

/**
 * Load Child Theme styles
 */
function jackrose_child_scripts() {
	$theme_data = wp_get_theme();
	wp_enqueue_style( 'andrewandlindsay', get_stylesheet_uri(), array( 'jackrose' ), $theme_data->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'jackrose_child_scripts' );

function google_fonts() {
	$query_args = array(
		'family' => 'Amatic+SC'
	);
	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }
            
add_action('wp_enqueue_scripts', 'google_fonts');

/**
 * Load Child Theme languages
 */
function jackrose_child_after_setup_theme() {
	load_child_theme_textdomain( 'jackrose', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'jackrose_child_after_setup_theme' );


function jackrose_child_remove_parent_theme_locations()
{

    // @link http://codex.wordpress.org/Function_Reference/unregister_nav_menu
	unregister_nav_menu( 'primary' );

}
//add_action( 'after_setup_theme', 'jackrose_child_remove_parent_theme_locations', 20 );
