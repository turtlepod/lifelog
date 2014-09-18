<?php
/**
 * Text String / Translatable string used in tamatebako
 * @since 0.1.0
 */
function tamatebako_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Paged Title Tag
	 * Translators: 1 is the page title and separator. 2 is the page number.
	 * Example Output: "{post title} | Page {page number}"
	 */
	$text['paged'] = _x( '%1$s Page %2$s', 'paged title tag', 'lifelog' );

	/* Skip to content (accessibility) */
	$text['skip-to-content'] = _x( 'Skip to content', 'skip to content (accessibility)', 'lifelog' );

	/* Read More */
	$text['read-more'] = _x( 'Continue reading', 'content read more', 'lifelog' );

	/* Entry Permalink */
	$text['permalink'] = _x( 'Permalink', 'entry permalink', 'lifelog' );

	/* Next, Previous */
	$text['next'] = _x( 'Next', 'next in pagination and navigation (accessibility)', 'lifelog' );
	$text['previous'] = _x( 'Previous', 'previous in pagination and navigation (accessibility)', 'lifelog' );

	/* Search */
	$text['search'] = _x( 'Search&hellip;', 'search text', 'lifelog' );
	$text['search-button'] = _x( 'Search', 'search button (accessibility)', 'lifelog' );
	$text['expand-search-form'] = _x( 'Expand Search Form', 'expand search form button (accessibility)', 'lifelog' );

	/* Comments error */
	$text['comments-closed-pings-open'] = _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comments notice', 'lifelog' );
	$text['comments-closed'] = _x( 'Comments are closed.', 'comments notice', 'lifelog' );

	/* Content error */
	$text['error'] = _x( '404 Not Found', '404 title', 'lifelog' );
	$text['error-msg'] = _x( 'Apologies, but no entries were found.', '404 content', 'lifelog' );

	/* Theme Layout */
	$text['global-layout'] = '';
	$text['layout'] = '';

	$text = apply_filters( 'tamatebako_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}


/**
 * Text String / Translatable string used in this theme
 * To keep track on language usage and separate from Hybrid Core.
 * @since 0.1.0
 */
function lifelog_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Register Menus */
	$text['menu-primary-name'] = _x( 'Navigation', 'nav menu location', 'lifelog' );

	$text = apply_filters( 'lifelog_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}
