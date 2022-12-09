<?php
add_action('after_setup_theme', function() {
    add_theme_support( 'title-tag' );
});

define('DS', DIRECTORY_SEPARATOR);
require dirname(__FILE__) . DS . 'inc' . DS . 'assets.php';



?>
