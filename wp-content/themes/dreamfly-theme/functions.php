<?php


function dreamfly_files()
{
    wp_enqueue_script('main-dreamfly-js', get_theme_file_uri('/build/index.js'), array(), 1.0, true);
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('dreamfly_main_styles', get_theme_file_uri('/build/style-index.css'));

}

add_action('wp_enqueue_scripts', 'dreamfly_files');


function dreamfly_features()
{
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'dreamfly_features');
