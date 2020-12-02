<?php

/**
 * Configuration for Pulse
 * Directory Structure and Path locations 
 */

$cwd = __DIR__;
// var_dump($cwd);
return [
    "base_url" => "http://pulse.local",
    "homepage" => "views/pages/home",
    "layouts_path" => "views/layouts",
    "pages_path" => "views/pages",
    "partials_path" => "views/partials",
    "helpers_path" => "helpers",
    "core_path" => "core",
    "storage_path" => "storage",
    "default_layout" => "main.php",
    "layout_conf" => [
        "error.php" => ["404.php"]
    ],
];