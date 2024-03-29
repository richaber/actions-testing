<?php
/**
 * The plugin bootstrap file.
 *
 * @wordpress-plugin
 * Plugin Name:       Github Actions Testing
 * Plugin URI:        PLUGIN SITE HERE
 * Description:       PLUGIN DESCRIPTION HERE
 * Author:            YOUR NAME HERE
 * Author URI:        YOUR SITE HERE
 * Version:           0.1.0-dev
 * Requires at least: 5.7
 * Requires PHP:      7.4
 * License:           GNU General Public License v2.0
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       actions-testing
 * Domain Path:       /languages
 *
 * Core reads the first 8 KB of the bootstrap file
 * to get the "plugin headers."
 *
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 * @package RichAber\ActionsTesting
 * @since   0.1.0-dev
 */

/**
 * Ensure this plugin bootstrap file is only run by WordPress
 * and cannot be executed through direct access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * The full path of this bootstrap file.
 *
 * Multiple WordPress plugin functions require the path to the bootstrap  __FILE__.
 *
 * @since 0.1.0-dev
 */
define(
	'ACTIONSTESTING_FILE',
	__FILE__
);

/**
 * The full path to this bootstrap file's directory with trailing slash.
 *
 * Eases the inclusion of other files that ship with this plugin.
 *
 * @since 0.1.0-dev
 */
define(
	'ACTIONSTESTING_DIR',
	__DIR__ . '/'
);

/**
 * The URL to this plugin directory with trailing slash.
 *
 * Eases linking to assets that ship with this plugin.
 *
 * @since 0.1.0-dev
 */
define(
	'ACTIONSTESTING_PLUGIN_URL',
	plugins_url(
		'/',
		ACTIONSTESTING_FILE
	)
);

/**
 * WPCS compliant comment.
 */
function actionstesting_init() {
	// WPCS compliant comment.
	esc_html_e( 'Hello, world!', 'actions-testing' );
}

$actionstesting_globalvar = 'globalvar';
