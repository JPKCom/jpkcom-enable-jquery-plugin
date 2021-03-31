<?php
/*
Plugin Name: JPKCom Enable jQuery plugin
Plugin URI: https://github.com/JPKCom/jpkcom-enable-jquery-plugin
Description: A plugin to include WordPress' own version of jQuery in the frontend.
Version: 1.0.0
Author: Jean Pierre Kolb
Author URI: https://www.jpkc.com/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'JPKCOM_ENJQ_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'JPKCOM_ENJQ_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


/**
 * Enqueue jQuery.
 */
if ( ! function_exists( 'jpkcom_enjq_enqueue_jquery' ) ) {

    function jpkcom_enjq_enqueue_jquery() {

        wp_enqueue_script( 'jquery' );

	}

}
add_action( 'wp_enqueue_scripts', 'jpkcom_enjq_enqueue_jquery' );
