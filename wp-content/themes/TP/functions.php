<?php

define('DS', DIRECTORY_SEPARATOR);

$core_inc = [
    'assets',
    'menus',
    'post_types'

];

foreach ($core_inc as $file) {
    require dirname(__FILE__) . DS . 'inc' . DS . $file . '.php';
}





?>
