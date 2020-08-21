<?php
/*
Plugin Name: Pro Admin Search
Plugin URI: https://www.missionmike.dev/wordpress/pro-admin-search/
Description: Search WordPress admin - find posts, pages, custom post types, content... with ease.
Version: 0.0.1
Author: Michael R. Dinerstein (Mission Mike)
Author URI: https://www.missionmike.dev/
License: GPL2
*/

defined('ABSPATH') or die('');

define('PRO_ADMIN_SEARCH_PLUGIN_BASENAME', plugin_basename(__FILE__));

include('include/data.php');

include('include/enqueue.php');

include('include/setup.php');
