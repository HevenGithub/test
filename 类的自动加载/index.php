<?php
spl_autoload_register('load');

function load($className) {
    $file = __DIR__ . '/' .$className. '.php';
    if (file_exists($file)) {
        require $file;
    }
}

new Demo();