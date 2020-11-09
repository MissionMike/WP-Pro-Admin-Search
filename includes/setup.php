<?php

/**
 * Plugin setup and hooks
 */

defined('ABSPATH') or die('No script kiddies please!');



/**
 * Action links on plugin page:
 * Add 'Settings' Link
 */
function pro_admin_search_action_links($actions, $plugin_file)
{
	static $plugin;

	if (!isset($plugin)) {
		$plugin = PRO_ADMIN_SEARCH_PLUGIN_BASENAME;
	}

	if ($plugin === $plugin_file) :

		$settings = array(
			'settings' => '<a href="' . esc_url(get_admin_url(null, 'options-general.php?page=pro-admin-search')) . '">' . __('Settings', 'General') . '</a>'
		);
		$actions = array_merge($settings, $actions);

	endif;

	return $actions;
}
add_filter('plugin_action_links', 'pro_admin_search_action_links', 10, 5);



/**
 * Add options on plugin activation
 */
function pro_admin_search_activate()
{
	add_option('pro_admin_search_settings');
}
register_activation_hook(__FILE__, 'pro_admin_search_activate');



/**
 * Remove plugin-specific options on plugin removal
 */
function pro_admin_search_remove()
{
	delete_option('pro_admin_search_settings');
}
register_deactivation_hook(__FILE__, 'pro_admin_search_remove');



/**
 * Add Pro Admin Search to Settings Menu
 */
function pro_admin_search_init_menu()
{
	function pro_admin_search_options_page()
	{
		include(plugin_dir_path(__FILE__) . '../pro-admin-search-settings.php');
	}
	add_options_page(__('Pro Admin Search', 'pro-admin-search'), __('Pro Admin Search', 'pro-admin-search'), 'manage_options', 'pro-admin-search', 'pro_admin_search_options_page');
}
add_action('admin_menu', 'pro_admin_search_init_menu');
