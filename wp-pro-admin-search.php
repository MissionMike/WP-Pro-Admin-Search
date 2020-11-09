<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.missionmike.dev/wordpress/pro-admin-search/
 * @since             1.0.0
 * @package           WP_Pro_Admin_Search
 *
 * @wordpress-plugin
 * Plugin Name: WP Pro Admin Search
 * Plugin URI: https://www.missionmike.dev/wordpress/pro-admin-search/
 * Description: Search WordPress admin - find posts, pages, custom post types, content... with ease.
 * Version: 1.0.0
 * Author: Michael R. Dinerstein (Mission Mike)
 * Author URI: https://www.missionmike.dev/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-pro-admin-search
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('PRO_ADMIN_SEARCH_PLUGIN_BASENAME', plugin_basename(__FILE__));

// include('include/data.php');

// include('include/enqueue.php');

// include('include/setup.php');

/**
 * Currently plugin version.
 * Starts at version 1.0.0 and uses SemVer - https://semver.org
 */
define('WP_PRO_ADMIN_SEARCH_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-pro-admin-search-activator.php
 */
function activate_plugin_name()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-wp-pro-admin-search-activator.php';
    WP_Pro_Admin_Search_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-pro-admin-search-deactivator.php
 */
function deactivate_plugin_name()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-wp-pro-admin-search-deactivator.php';
    WP_Pro_Admin_Search_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_plugin_name');
register_deactivation_hook(__FILE__, 'deactivate_plugin_name');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-wp-pro-admin-search.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_pro_admin_search()
{

    $plugin = new WP_Pro_Admin_Search();
    $plugin->run();
}
run_wp_pro_admin_search();
