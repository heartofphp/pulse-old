<?php

/**
 * Encode an array and retrieve as an object
 *
 * @param array $array
 * @return void
 */
function objectify(array $array)
{
    if (is_array($array)) {
        $array = json_encode($array, JSON_THROW_ON_ERROR);
        return json_decode($array, null, 512, JSON_THROW_ON_ERROR);
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

/**
 * Core_config function to get config values 
 * for doing core functionalities
 * 
 * @param [type] $key
 * @param [type] $config
 * @return object
 */
function core_config($key = null)
{
    $object = '';
    
    $config = init_config() ?? [];

    $object = objectify($config);

    if ($key === null) {
        return $object;
    }

    if (! $object->$key) {
        throw new Exception("Object key does not exist");
    }

    return $object->$key;

}

function uri_segment($num=null)
{
    $url = $_SERVER["REQUEST_URI"];
    $uri_dir = uri_dir();
    if (!empty($uri_dir)) {
        $url = str_replace($uri_dir."/", "", $url);
    }
    $url = substr($url, 1);

    if ($url == null) {
        return $url;
    }
    $url = explode("/", $url);
    return $url[$num];

}

function uri_protocol()
{
    $base_url = core_config()->base_url;
    $url = explode("//", $base_url);
    return $url[0]."//";

}

function uri_domain()
{
    $base_url = core_config()->base_url;
    $url = explode("//", $base_url);
    $url_end = explode("/", $url[1]);
    return $url_end[0];
}

function uri_dir()
{
    $base_url = core_config()->base_url;
    $url = explode("//", $base_url);
    $url_end = explode("/", $url[1]);
    return $url_end[1];
}

function redirect($path) 
{
    header("Location: " . $path);
    exit;
}