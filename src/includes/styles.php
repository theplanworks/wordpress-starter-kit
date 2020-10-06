<?php

function theme_styles()
{
    wp_enqueue_style('theme-style', mix('build/css/styles.css'));
}
add_action('wp_print_styles', 'theme_styles');
