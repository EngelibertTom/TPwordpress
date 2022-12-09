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
            'name' => 'Régions/Département',
            'singular_name' => 'Régions/Département',
        ],
        'hierarchical' => true,
    ]);

    register_taxonomy('niveau', 'offres', [
        'labels' => [
            'name' => 'Niveau',
            'singular_name' => 'Niveau',
        ],
        'hierarchical' => true,
    ]);
});
