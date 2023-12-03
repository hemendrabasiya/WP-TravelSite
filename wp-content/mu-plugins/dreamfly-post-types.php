<?php




function dreamfly_post_types()
{

    register_post_type(
        'package',
        array(
            'map_meta_cap' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'packages'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Packages',
                'add_new_item' => 'Add New Package',
                'edit_item' => 'Edit Package',
                'all_items' => 'All Packages',
                'singular_name' => 'Package'
            ),
            'menu_icon' => 'dashicons-megaphone'
        )
    );



}











add_action('init', 'dreamfly_post_types');






?>