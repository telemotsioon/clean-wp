<?php
define( 'NAKED_VERSION', 1.0 );

add_theme_support( 'automatic-feed-links' );
load_theme_textdomain( 'nortal', templatepath . '/languages' );

register_nav_menus( 
	array(
		'primary' => __('Primary Menu', 'naked')
	)
);

function create_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar',
		'description' => 'Primary sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'empty_title'=> ''
	));
} 
add_action('widgets_init', 'create_sidebars');