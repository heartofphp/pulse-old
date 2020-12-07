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