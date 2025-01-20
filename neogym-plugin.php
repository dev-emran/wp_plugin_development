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
require_once plugin_dir_path(__FILE__) . 'inc/create-database.php';


register_activation_hook(__FILE__, 'neogym_database_create');


