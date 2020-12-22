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
 * @param [type] $key
 * @return void
 */
function post($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    return false;
}