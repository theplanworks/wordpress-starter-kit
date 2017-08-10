<?php

function no_function_admin_bar() {
	return false;
}
add_filter('show_admin_bar', 'no_function_admin_bar');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

/* Theme Setup */
require get_template_directory() . '/includes/setup.php';

/* Nav */
require get_template_directory() . '/includes/nav/clean_nav_walker.php';
require get_template_directory() . '/includes/nav/simple_menu.php';

/* Customizer */
require get_template_directory() . '/includes/styles.php';