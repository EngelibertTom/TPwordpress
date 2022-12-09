<!DOCTYPE HTML>
<html>
<head>
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class();?>>

<?php
wp_nav_menu([
    'theme_location' => 'primary_nav'
]);
?>
