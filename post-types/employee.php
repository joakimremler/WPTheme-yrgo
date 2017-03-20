<?php
declare(strict_types=1);
add_action('init', function () {
    register_post_type('employee', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Employee'),
            'edit_item' => __('Edit Employee'),
            'name' => __('Employee'),
            'search_items' => __('Search Employee'),
            'singular_name' => __('Employee'),
        ],
        'menu_icon' => 'dashicons-palmtree',
        'menu_position' => 5,
        'public' => true,
    ]);
});
