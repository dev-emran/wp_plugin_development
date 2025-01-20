<?php
if (!defined('ABSPATH')) {
    exit;
}

if (! function_exists('neogym_admin_menu')) {
    function neogym_admin_menu()
    {
        add_menu_page(
            __('Contact Informtion', 'neogym'),
            __('Contact Info', 'neogym'),
            'manage_options',
            sanitize_key('contact_info'),
            'neogym_main_menu_page',
            'dashicons-email-alt',
            20,
        );
    }
}

if (! function_exists('neogym_main_menu_page')) {
    function neogym_main_menu_page()
    {
        ?>

        '<div class="wrap">';
            <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
        '</div>';

        <?php
    }
}

add_action('admin_menu', 'neogym_admin_menu');
