<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

// functions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get frontend assets from a Vite dev server OR from production built folder
// it is recommended to move it into wp-config.php
define(
	'IS_VITE_DEVELOPMENT',
	false
);


include "inc/inc.vite.php";

add_filter(
	'show_admin_bar',
	'__return_false'
);

add_filter(
	'wpcf7_autop_or_not',
	'__return_false'
);

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false,
		'position'   => '2'
	));
}

add_filter(
	'wp_nav_menu_objects',
	'my_wp_nav_menu_objects',
	10,
	2
);
