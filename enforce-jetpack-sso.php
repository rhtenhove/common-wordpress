<?php

/**
 * Plugin Name:       Enforce Jetpack SSO
 * Plugin URI:        https://github.com/rhtenhove/enforce-jetpack-sso
 * Description:       This plugin enforces Jetpack's SSO setting
 * Version:           1
 * Author:            Ruben ten Hove
 * Author URI:        https://github.com/rhtenhove
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter( 'jetpack_sso_require_two_step', '__return_true' );
