<?php
/**
 * Plugin Name:       Wp React Plugin
 * Description:       Wordpress and React compatibility Plugin.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Devang vachheta
 * License:           GPL-2.0-or-later
 * Text Domain:       wpreactplugin
 */

add_action( 'admin_menu', 'wpreact_init_menu' );

/**
 * Init Admin Menu.
 *
 * @return void
 */
function wpreact_init_menu() {
    add_menu_page( __( 'Wp React Plugin', 'wpreactplugin'), __( 'Wp React Plugin', 'wpreactplugin'), 'manage_options', 'wpreactplugin', 'wpreact_admin_page', 'dashicons-buddicons-replies', '99' );
}

/**
 * Init Admin Page.
 *
 * @return void
 */
function wpreact_admin_page() {
    echo '<div id="wpreact-dev"><h2>Loading...</h2></div>';
}

add_action( 'admin_enqueue_scripts', 'wpreact_admin_enqueue_scripts' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function wpreact_admin_enqueue_scripts() {
    wp_enqueue_style( 'wpreact-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
    wp_enqueue_script( 'wpreact-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
}