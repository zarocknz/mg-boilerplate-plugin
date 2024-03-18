<?php

/**
 * Adds a menu item for the plugin to the WordPress admin menu.
 */
function mg_boilerplate_plugin_add_admin_menu() {
	add_menu_page(
		__( 'Leads', 'mg-boilerplate-plugin' ),
		__( 'Leads', 'mg-boilerplate-plugin' ),
		'manage_options',
		'mg-boilerplate-plugin',
		'mg_boilerplate_plugin_admin_page',
		'dashicons-admin-generic'
	);
}

add_action( 'admin_menu', 'mg_boilerplate_plugin_add_admin_menu' );

/**
 * Displays the Leads admin page for the plugin.
 */
function mg_boilerplate_plugin_admin_page() {
	?>
	<div class="wrap">
		<h2><?php echo __( 'Leads', 'mg-boilerplate-plugin' ); ?></h2>
	</div>
	<?php
	// @todo - Implement the necessary logic here.
}
