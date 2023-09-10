<?php

spl_autoload_register(function ($class_name) {
    $file_path = "app/class/" . str_replace('\\', '/', $class_name) . '.php';
    if (is_file($file_path)) {
        include $file_path;
    }
});