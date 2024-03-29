<?php
/* This file is part of dokan-child, dokan child theme.

  All functions of this file will be loaded before of parent theme functions.
  Learn more at https://codex.wordpress.org/Child_Themes.

  Note: this function loads the parent stylesheet before, then child theme stylesheet
  (leave it in place unless you know what you are doing.)
 */
function dokan_child_enqueue_child_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
            'child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme()->get('Version')
    );

    wp_enqueue_style('new_style', get_stylesheet_directory_uri() . '/css/style.css', array(), '5.61');

    
}

add_action('wp_enqueue_scripts', 'dokan_child_enqueue_child_styles');

