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
 * Helpers path function
 *
 * @return string
 */
function helpers_path(): string
{
    return core_config()->helpers_path;
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

function set_page()
{
    $exts = ["php", "html", "htm"];
    $page_name = uri_segment(0);
    $pages_path = page_path();
    $homepage = core_config()->homepage;
    
    foreach ($exts as $ext) {
        $filename = $pages_path."/".$page_name.".".$ext;

        if (empty($page_name)) {
            $filename = $pages_path."/".$homepage.".".$ext;
        }

        if (file_exists($filename)) {
            return $filename;
        }
    }

    return "";
}

function get_page()
{
    if (empty(set_page())) {
        require_once page_path()."/404.php";
    } else {
        require_once set_page();
    }
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

/**
 * Current Layout function
 *
 * @return void
 */
function current_layout() 
{
    $exts = ['php', 'html', 'htm'];
    $layout_path = layout_path();
    $layout_conf = core_config()->layout_conf;
    $page_path = page_path();
    $page_name = set_page();
   
    foreach ($layout_conf as $layout => $pages) {
        foreach ($pages as $page) {
            if ($page_path."/".$page == $page_name) {
                return $layout_path."/".$layout;
            }
        }
    }

    return $layout_path."/".default_layout(); 
}
