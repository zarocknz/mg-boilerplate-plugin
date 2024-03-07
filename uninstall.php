<?php

/**
 *
 * Fired when the plugin is uninstalled.
 *
 * @link            https://example.com
 * @since           1.0.0
 * @package         Mg_Boilerplate_Plugin
 */

// If uninstall is not called from WordPress, exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

// @todo - Implement the necessary logic here.

// Delete the option.
delete_option( 'mg_boilerplate_plugin_db_version' );
