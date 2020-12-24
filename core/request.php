<?php

/*
 * This file is part of Pulse.
 *
 * (c) Kwame Oteng Appiah-Nti <me@developerkwame.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Post function
 *
 * @param string|null $key
 * @return string|array
 */
function post($key = null)
{

    if (is_null($key)) {
        return $_POST;
    }

    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return false;
}

/** 
 * Get Function
 * @param string|null $key
 * @return string|array
 */
function get($key = null)
{
    if (is_null($key)) {
        return $_GET;
    }

    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return false;
}