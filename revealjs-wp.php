<?php
/**
 * RevealJS_WP
 *
 * Display a reveal.js slideshow as a WordPress post.
 *
 * @package   RevealJS_WP
 * @author  Payton Swick <payton@foolord.com>
 * @license   MIT
 * @link      http://example.com
 * @copyright 2013 Payton Swick
 *
 * @wordpress-plugin
 * Plugin Name: RevealJS_WP
 * Plugin URI:  http://example.com
 * Description: Display a reveal.js slideshow as a WordPress post.
 * Version:     0.0.1
 * Author:      Payton Swick <payton@foolord.com>
 * Text Domain: plugin-name-locale
 * License:     MIT
 * License URI: http://opensource.org/licenses/MIT
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-revealjs-wp.php' );

// Register hooks that are fired when the plugin is activated or deactivated.
// When the plugin is deleted, the uninstall.php file is loaded.
register_activation_hook( __FILE__, array( 'RevealJS_WP', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'RevealJS_WP', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'RevealJS_WP', 'get_instance' ) );
