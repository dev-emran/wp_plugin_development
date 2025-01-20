<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/*
		 * Plugin Name:       NeoGym Plugin
		 * Plugin URI:        https://github.com/ehossin3/
		 * Description:       Handle the basics with this plugin.
		 * Version:           1.10.3
		 * Requires at least: 5.2
		 * Requires PHP:      7.2
		 * Author:            Emran
		 * Author URI:        https://github.com/dev-emran3/
		 * License:           GPL v2 or later
		 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
		 * Update URI:        https://example.com/my-plugin/
		 * Text Domain:       dsmb-plugin
		 * Domain Path:       /languages
		 * Requires Plugins:  
 	*/

require_once plugin_dir_path(__FILE__) . 'inc/admin-menu.php';
// require_once plugin_dir_path(__FILE__) . 'inc/create-database.php';

if (! function_exists('neogym_database_create')) {
    function neogym_database_create()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'contact_info';
        if ($wpdb->get_var("SHOW TABLES LIKE '{$table_name}'") !== $table_name) {
            $charset_collate = $wpdb->get_charset_collate();
            $sql             = "CREATE TABLE $table_name (
                id mediumint(9) NOT NULL AUTO_INCREMENT,
                name varchar(255) NOT NULL,
                email varchar(50) NOT NULL,
                phone_no varchar(50) NOT NULL,
                message text,
                PRIMARY KEY  (id)
            ) $charset_collate;";

            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
            dbDelta($sql);
        }
    }
}
register_activation_hook(__FILE__, 'neogym_database_create');

if(!function_exists('neogym_delete_database')){
	function neogym_dlete_database()
	{
		global $wpdb;
		$table_name = $wpdb->prefix . 'contact_info';
		$wpdb->query("DROP TABLE IF EXISTS '{$table_name}'");

	}
}
register_uninstall_hook(__FILE__, 'neogym_delete_database');


