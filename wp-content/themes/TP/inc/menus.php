<?php

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary_nav' => __( 'Primary Navigation', 'TP'),
        'secondary_nav' => __( 'Secondary Navigation', 'TP')
    ]);

    // register_nav_menu('primary_nav','Primary');
});