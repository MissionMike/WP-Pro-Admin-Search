<?php

/**
 * All things pertaining to enqueueing scripts
 */

defined('ABSPATH') or die('');

/**
 * Register styles/scripts
 */
function pro_admin_search_register_scripts()
{

    $version = '20200806';

    wp_register_style('pro-admin-search-style', plugins_url('public/assets/css/styles.min.css', dirname(__FILE__)), false, $version);
    wp_register_script('pro-admin-search-scripts', plugins_url('public/assets/js/main.min.js', dirname(__FILE__)), false, $version);
}
add_action('admin_init', 'pro_admin_search_register_scripts');

/**
 * Enqueue styles/scripts
 */
function pro_admin_search_enqueue_scripts()
{

    wp_enqueue_style('pro-admin-search-style');
    wp_enqueue_script('jquery');
    wp_enqueue_script('pro-admin-search-scripts');
}
add_action('admin_enqueue_scripts', 'pro_admin_search_enqueue_scripts');
