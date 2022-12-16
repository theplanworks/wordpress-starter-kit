<?php

function no_function_admin_bar() {
	return false;
}
add_filter('show_admin_bar', 'no_function_admin_bar');

/* Theme Setup */
require get_stylesheet_directory() . '/includes/setup.php';

/* Customizer */
require get_stylesheet_directory() . '/includes/styles.php';
