<?php


function dreamfly_files()
{
    wp_enqueue_script('main-dreamfly-js', get_theme_file_uri('/build/index.js'), array(), 1.0, true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Pacifico');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/ad78e33356.js');
    wp_enqueue_style('dreamfly_main_styles', get_theme_file_uri('/build/style-index.css'));


}

add_action('wp_enqueue_scripts', 'dreamfly_files');


function dreamfly_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('packageLandscape', 400, 266, true);

}

add_action('after_setup_theme', 'dreamfly_features');


function disable_wp_auto_p($content)
{
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
    return $content;
}
add_filter('the_content', 'disable_wp_auto_p', 0);