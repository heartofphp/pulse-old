<?php

/**
 * Configuration for Pulse
 * Directory Structure and Path locations 
 */

$cwd = __DIR__;

$rootpath = $cwd . DIRECTORY_SEPARATOR;

$config = [
    "base_url" => "http://pulse.local",
    "homepage" => $rootpath . "views/pages/home",
    "layouts_path" => $rootpath . "views/layouts",
    "pages_path" => $rootpath . "views/pages",
    "partials_path" => $rootpath . "views/partials",
    "helpers_path" => $rootpath . "helpers",
    "core_path" =>  $rootpath . "core",
    "storage_path" => $rootpath . "storage",
    "default_layout" => "main.php",
    "layout_conf" => [
        "error.php" => ["404.php"]
    ],
];