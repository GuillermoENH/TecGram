<?php
/**
	* Define Theme Version
 */
define( 'ARBUDA_THEME_VERSION', '1.7' );	
	
function arbuda_css() {
	$parent_style = 'aravalli-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'arbuda-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('arbuda-color-default',get_stylesheet_directory_uri() .'/assets/css/color/default.css');
	wp_dequeue_style('aravalli-color-default');
	
	wp_enqueue_style('arbuda-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('aravalli-media-query');
}
add_action( 'wp_enqueue_scripts', 'arbuda_css',999);
   	

function arbuda_setup()	{	
	add_theme_support( 'custom-header', apply_filters( 'arbuda_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'aravalli_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'arbuda_setup' );

/**
 * Called all the Customize file.
 */
require( get_stylesheet_directory() . '/inc/customize/arbuda-premium.php');

/**
 * Import Options From Parent Theme
 *
 */
function arbuda_parent_theme_options() {
	$aravalli_mods = get_option( 'theme_mods_aravalli' );
	if ( ! empty( $aravalli_mods ) ) {
		foreach ( $aravalli_mods as $aravalli_mod_k => $aravalli_mod_v ) {
			set_theme_mod( $aravalli_mod_k, $aravalli_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'arbuda_parent_theme_options' );