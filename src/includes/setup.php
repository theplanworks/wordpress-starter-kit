<?php

if (!function_exists('theme_setup')):
	function theme_setup() {

		add_theme_support('title-tag');
		add_theme_support('wp-block-styles');

		/* -- Example custom block style registration -- */

		// $linesBG = get_stylesheet_directory_uri() . "/images/line-background.svg";

		// register_block_style(
		// 	'core/columns',
		// 	array(
		// 		'name' => 'lines-bg',
		// 		'label' => __('Lines BG', 'lines-bg'),
		// 		'inline_style' => '.wp-block-columns.is-style-lines-bg{
		// 		          background-image: url("' . $linesBG . '"); background-size: cover;background-position:center;}',
		// 	)
		// );

		// register_block_style(
		// 	'core/button',
		// 	array(
		// 		'name' => 'icon-email',
		// 		'label' => __('Email Icon', 'icon-email'),
		// 	)
		// );

	}
endif; // theme_setup
add_action('after_setup_theme', 'theme_setup');

function fmwp6_register_pattern_categories() {
	register_block_pattern_category(
		'custom-themed',
		array('label' => __('Custom Themed', 'fmwp6'))
	);
}
add_action('init', 'fmwp6_register_pattern_categories');

function register_main_menu() {
	register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_main_menu');
