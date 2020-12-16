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
 * config path function
 *
 * @return string
 */
function config_path(): string
{
    return core_config()->config_path;
}

/**
 * Layout Path function
 *
 * @return string
 */
function layout_path(): string
{
    return core_config()->layouts_path;
}

/**
 * Page Path function
 *
 * @return string
 */
function page_path(): string
{
    return core_config()->pages_path;
}

/**
 * Storage path function
 *
 * @return string
 */
function storage_path(): string
{
    return core_config()->storage_path;
}

/**
 * Default Layout function
 *
 * @return string
 */
function default_layout(): string
{
    return core_config()->default_layout;
}