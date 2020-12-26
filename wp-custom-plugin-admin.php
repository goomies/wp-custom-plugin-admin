<?php
/*
Plugin Name: WP Custom Plugin Admin
Plugin URI: https://github.com/goomies/wp-custom-plugin-admin
Description: Minimalist Wordpress plugin for a personalized administration interface.
Author: Rémy Manescau @goomies (GitHub - GitLab)
Author URI: https://www.remymanescau.com/
Version: 1.0
*/

add_action('admin_init', 'wp_custom_plugin_admin');

function wp_custom_plugin_admin() {
    wp_register_style('wpcustompluginadminstylesheet', '/wp-content/plugins/wp-custom-plugin-admin/css/admin.css');
    add_action('admin_print_styles' 'wp_custom_plugin_admin_style');

    function wp_custom_plugin_admin_style() {
        wp_enqueue_style('wpcustompluginadminstylesheet');
    }
}