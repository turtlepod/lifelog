<?php
/**
 * Post Formats
**/

$post_formats_args = array(
	'aside',
	'image',
	'gallery',
	'link',
	'quote',
	'status',
	'video',
	'audio',
	'chat',
);
add_theme_support( 'post-formats', $post_formats_args );

/* Remove aside infinity */
add_filter( 'tamatebako_post_format_aside_infinity', '__return_false' );


/* === POST FORMATS RELATED TEMPLATE FUNCTIONS === */


/**
 * Outputs a link to the post format archive.
 * @since  2.0.0
 */
function lifelog_post_format_link() {
	echo lifelog_get_post_format_link();
}

/**
 * Generates a link to the current post format's archive.  If the post doesn't have a post format, the link 
 * will go to the post permalink.
 * This function is taken from Hybrid Core v.2
 * @author Justin Tadlock <justin@justintadlock.com>
 * @since 2.0.0
 */
function lifelog_get_post_format_link() {
	$format = get_post_format();
	$url    = empty( $format ) ? get_permalink() : get_post_format_link( $format );
	return sprintf( '<a href="%s" class="post-format-link">%s</a>', esc_url( $url ), get_post_format_string( $format ) );
}