<?php

// require config file
require_once __DIR__ . "/../config.php";
require_once "debug.php";

/**
 * Encode an array and retrieve as an object
 *
 * @param array $array
 * @return void
 */
function objectify(array $array)
{
    if (is_array($array)) {
        $array = json_encode($array);
        return json_decode($array);
    }

    throw new Exception("Parameter must be array", 1);
    
    return false;
}

/**
 * Initialize configuration
 * Set $config variable globally
 *
 * @return array
 */
function init_config(): array
{
    // Get $config variable from config/config.php file
    // globally
    global $config;

    return $config;
}

/**
 * Function to scan and clean directories
 * from ./ and ../  
 *
 * @param string $directory
 * @return array
 */
function filter_directory($directory = '')
{
    $files = scandir($directory);
    unset($files[0]);
    unset($files[1]);
    return $files;
}