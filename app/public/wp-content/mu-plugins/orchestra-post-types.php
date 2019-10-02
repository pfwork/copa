<?php

function orchestra_post_types() {
    register_post_type('events', array(
        'supports' => array(
            'title', 'editor', 'excerpt'
        ),
        // 'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add Event',
            'edit_item' => 'Edit Events',
            'all_items' => 'All Events',
            // 'singular_name' => 'Event'
            'show_in_rest' => true,
            'supports' => array('editor')

        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    // register_post_type('announcements', array(
    //     'supports' => array(
    //         'title', 'editor', 'excerpt'
    //     ),
    //     // 'rewrite' => array('slug' => 'events'),
    //     'has_archive' => true,
    //     'public' => true,
    //     'labels' => array(
    //         'name' => 'Announcements',
    //         'add_new_item' => 'Add Announcement',
    //         'edit_item' => 'Edit Announcements',
    //         'all_items' => 'All Announcements',
    //         // 'singular_name' => 'Announcements

    //     ),
    //     'menu_icon' => 'dashicons-format-status'
    // ));

    register_post_type('photos', array(
        'supports' => array(
            'title', 'editor', 'shortcode'
        ),
        // 'rewrite' => array('slug' => 'photos'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Photos',
            'add_new_item' => 'Add New Photos',
            'edit_item' => 'Edit Photos',
            'all_items' => 'All Photos',
            // 'singular_name' => 'Event'

        ),
        'menu_icon' => 'dashicons-camera'
    ));

}

add_action('init', 'orchestra_post_types');