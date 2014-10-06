<?php
/**
 * Theme Functions
** ---------------------------- */

/* Load text string used in theme */
require_once( trailingslashit( get_template_directory() ) . 'includes/string.php' );

/* Load base theme functionality. */
require_once( trailingslashit( get_template_directory() ) . 'includes/tamatebako.php' );

/* Load theme general setup */
add_action( 'after_setup_theme', 'lifelog_setup' );

/**
 * General Setup
 * @since 0.1.0
 */
function lifelog_setup(){

	/* === DEBUG === */
	$debug_args = array(
		'mobile'         => 0,
		'no-js'          => 0,
		'media-queries'  => 1,
	);
	//add_theme_support( 'tamatebako-debug', $debug_args );

	/* === Post Formats === */
	$post_formats_args = array(
		'aside',
		'image',
		'gallery',
		'link',
		'quote',
		'status',
		'video',
		'audio',
		'chat'
	);
	add_theme_support( 'post-formats', $post_formats_args );

	/* Remove Infinity */
	remove_filter( 'hybrid_aside_infinity', 'tamatebako_aside_infinity' );

	/* === Theme Layouts === */
	$layouts = array(
		/* One Column */
		'content' => 'Content',
	);
	$layouts_args = array(
		'default'   => 'content',
		'customize' => false,
		'post_meta' => false,
	);
	add_theme_support( 'theme-layouts', $layouts, $layouts_args );

	/* === Register Menus === */
	$menus_args = array(
		"primary" => lifelog_string( 'menu-primary-name' ),
	);
	add_theme_support( 'tamatebako-menus', $menus_args );

	/* Custom Header */
	$header_args = array(
		'width'                  => 160,
		'height'                 => 160,
		'admin-head-callback'    => 'lifelog_custom_header_admin_head_cb',
		'header-text'            => false,
	);
	add_theme_support( 'custom-header', $header_args );

	/* === Load Stylesheet === */
	$style_args = array(
		'theme-open-sans-font',
		'dashicons',
		'theme-reset',
		'theme-menus',
		'parent',
		'style',
		'media-queries'
	);
	add_theme_support( 'hybrid-core-styles', $style_args );

	/* === Editor Style === */
	$editor_css = array(
		'css/reset.min.css',
		'style.css',
		tamatebako_google_open_sans_font_url()
	);
	add_editor_style( $editor_css );

	/* === Customizer Mobile View === */
	add_theme_support( 'tamatebako-customize-mobile-view' );

	/* === Set Content Width === */
	hybrid_set_content_width( 650 );
}


/**
 * Custom Header Admin CB
 * @since 0.1.0
 */
function lifelog_custom_header_admin_head_cb(){
?><style type="text/css" id="lifelog-admin-header-preview-css">
	.appearance_page_custom-header .available-headers label img{
		width: 50px;
		height: 50px;
		border-radius: 50%;
	}
	.appearance_page_custom-header #headimg{
		border-radius: 50%;
	}
</style><?php
}

do_action( 'lifelog_after_setup_theme' );