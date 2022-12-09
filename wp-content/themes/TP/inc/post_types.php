<?php
add_action('init', function () {
    register_post_type('offres', [
        'labels' => [
            'singular' => 'Offres',
            'name' => 'Offres',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'excerpt','thumbnail'],
    ]);
});