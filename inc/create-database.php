<?php
if (! function_exists('neogym_database_create')) {
    function neogym_database_create()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'contact_info';
        if ($wpdb->get_var("SHOW TABLES LIKE `{$table_name}`") !== $table_name) {
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
