<?php




function dreamfly_post_types()
{

    register_post_type(
        'offer',
        array(
            'map_meta_cap' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt'),
            'rewrite' => array('slug' => 'offers'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Offers',
                'add_new_item' => 'Add New Offer',
                'edit_item' => 'Edit Offer',
                'all_items' => 'All Offers',
                'singular_name' => 'Offer'
            ),
            'menu_icon' => 'dashicons-megaphone'
        )
    );



}











add_action('init', 'dreamfly_post_types');






?>