<?php
/**
 * Layouts Setup
**/
$layouts = array(
	/* One Column */
	'content' => array(
		'name'          => 'Content',
	),
);
$layouts_args = array(
	'default'           => 'content',
	'customize'         => false,
	'post_meta'         => false,
	'post_types'        => array( 'post'),
	'thumbnail'         => false,
);
add_theme_support( 'tamatebako-layouts', $layouts, $layouts_args );
