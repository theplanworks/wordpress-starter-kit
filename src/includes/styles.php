<?php

function fmwp6_scripts() {
    wp_enqueue_style( 'fmwp6-base-style', get_stylesheet_uri(), array(), false );
    wp_enqueue_script( 'fmwp6-front', get_template_directory_uri() . '/app.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'fmwp6_scripts' );

function gutenberg_editor_css()
{
  $css = '/editor.css';
  $version = filemtime(get_stylesheet_directory().$css);
  wp_enqueue_style('editor-css', get_stylesheet_directory_uri().$css, [], $version);
}
add_action('enqueue_block_editor_assets', 'gutenberg_editor_css');