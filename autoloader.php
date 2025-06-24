<?php

spl_autoload_register(function ($class_name) {
    $directoy = __DIR__."/classes/";
    $file = $directoy.$class_name.".php";
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Class file for {$class_name} not found in {$file}");
    }
});
