<?php

function theme_styles() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}
add_action('wp_print_styles', 'theme_styles');