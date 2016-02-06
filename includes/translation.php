<?php
/**
 * Make Framework Translatable
**/

/* Load Text Domain */
load_theme_textdomain( 'lifelog', get_template_directory() . '/assets/languages' );

/* Make all string in the framework translatable. */
$texts = array(

	/* functions/template/accessibility.php */
	'skip_to_content'             => _x( 'Skip to content', 'accessibility', 'lifelog' ),

	/* functions/template/general.php */
	'next_posts'                  => _x( 'Next', 'pagination', 'lifelog' ),
	'previous_posts'              => _x( 'Previous', 'pagination', 'lifelog' ),

	/* functions/template/menu.php */
	'menu_search_placeholder'     => _x( 'Search&hellip;', 'nav menu', 'lifelog' ),
	'menu_search_button'          => _x( 'Search', 'nav menu', 'lifelog' ),
	'menu_search_form_toggle'     => _x( 'Expand Search Form', 'nav menu', 'lifelog' ),
	'menu_default_home'           => _x( 'Home', 'nav menu', 'lifelog' ),

	/* functions/template/entry.php */
	'error_title'                 => _x( '404 Not Found', 'entry', 'lifelog' ),
	'error_message'               => _x( 'Apologies, but no entries were found.', 'entry', 'lifelog' ),
	'next_post'                   => _x( 'Next', 'entry', 'lifelog' ),
	'previous_post'               => _x( 'Previous', 'entry', 'lifelog' ),

	/* functions/template/comment.php */
	'next_comment'                => _x( 'Next', 'comment', 'lifelog' ),
	'previous_comment'            => _x( 'Previous', 'comment', 'lifelog' ),
	'comments_closed_pings_open'  => _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comment', 'lifelog' ),
	'comments_closed'             => _x( 'Comments are closed.', 'comment', 'lifelog' ),

	/* functions/setup.php */
	'untitled'                    => _x( '(Untitled)', 'entry', 'lifelog' ),
	'read_more'                   => _x( 'Start reading', 'entry', 'lifelog' ),
	'search_title_prefix'         => _x( 'Search:', 'archive title', 'lifelog' ),
	'comment_moderation_message'  => _x( 'Your comment is awaiting moderation.', 'comment', 'lifelog' ),
);

/* Add text to tamatebako */
tamatebako_load_strings( $texts );