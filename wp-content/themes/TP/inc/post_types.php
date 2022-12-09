<?php
add_action('init', function () {
    register_post_type('Offre d\'emploi', [
        'labels' => [
           'singular' => 'Offre d\'emploi',
            'name' => 'Offre d\'emploi',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
});