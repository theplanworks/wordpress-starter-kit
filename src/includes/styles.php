<?php

function theme_styles()
{
    wp_enqueue_style('theme-style', mix('style.css'));
}
add_action('wp_print_styles', 'theme_styles');
