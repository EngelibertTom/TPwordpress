<?php
add_action('init', function () {
    register_taxonomy('métier', 'offres', [
        'labels' => [
            'name' => 'Métiers',
            'singular_name' => 'Métiers',
        ],
        'hierarchical' => true,
    ]);
    register_taxonomy('région/département', 'offres', [
        'labels' => [
            'name' => 'Types de projet',
            'singular_name' => 'Type de projet',
        ],
        'hierarchical' => true,
    ]);

    register_taxonomy('niveau', 'offres', [
        'labels' => [
            'name' => 'Clients',
            'singular_name' => 'Client',
        ],
        'hierarchical' => true,
    ]);
});
