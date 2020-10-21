<?php

/**
 * Plugin Name:       Common Wordpress
 * Plugin URI:        https://github.com/rhtenhove/common-wordpress
 * Description:       This plugin enables some features which I'd like to have enabled on all Wordpress sites
 * Version:           2
 * Author:            Ruben ten Hove
 * Author URI:        https://github.com/rhtenhove
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// Force Jetpack SSO to require two step authentication
add_filter( 'jetpack_sso_require_two_step', '__return_true' );

//Disable plugin auto-update email notification
add_filter('auto_plugin_update_send_email', '__return_false');
 
//Disable theme auto-update email notification
add_filter('auto_theme_update_send_email', '__return_false');
