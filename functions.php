<?php
/**
 * Theme Functions
** ---------------------------- */

/* Load Library. */
require_once( trailingslashit( get_template_directory() ) . 'library/tamatebako.php' );

/* Load External Library. */
if( ! function_exists( 'get_the_image' ) ){
	tamatebako_include( 'includes/get-the-image' );
}

/* Load theme general setup */
add_action( 'after_setup_theme', 'lifelog_setup', 5 );

/**
 * Setup
 */
function lifelog_setup(){

	/* === MINIMUM SYSTEM REQ === */
	$back_compat_args = array(
		'theme_name'   => 'LifeLog',
		'wp_requires'  => '4.1.0',
		'php_requires' => '5.2.4',
	);
	add_theme_support( 'tamatebako-back-compat', $back_compat_args );
	if( ! tamatebako_minimum_requirement( $back_compat_args ) ) return;

	/* === DEPRECATED FUNCTIONS === */
	//tamatebako_include( 'includes/deprecated/deprecated-hybrid-core' );
	//tamatebako_include( 'includes/deprecated/deprecated-tamatebako' );

	/* === TRANSLATION === */
	tamatebako_include( 'includes/translation' );

	/* === SCRIPTS === */
	tamatebako_include( 'includes/scripts' );

	/* === SETUP: Sidebars, Menus, Image Sizes, Content Width === */
	tamatebako_include( 'includes/setup' );

	/* === LAYOUTS === */
	tamatebako_include( 'includes/layouts' );

	/* === UTILITY: Mobile View, Custom CSS === */
	tamatebako_include( 'includes/utility' );

}

do_action( 'tamatebako_after_setup' );