<?php

/**
 * Plugin Name: WP Plugin Skeleton
 * Plugin URI: https://packagist.org/packages/adrianoferreira/wp-plugin-skeleton
 * Description: A simple skeleton for building WordPress plugins
 * Author: Adriano Ferreira
 * Author URI: https://github.com/adrianosferreira/
 * Version: 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

define( 'PLUGIN_NAME_PATH', __DIR__ );
define( 'PLUGIN_NAME_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'PLUGIN_NAME_TEXTDOMAIN', 'plugin-name' );

require_once PLUGIN_NAME_PATH . '/vendor/autoload.php';

$hooks = [
    ( new \PluginMainNamespace\Hooks\Menu() ),
];

foreach( $hooks as $hook ) {
    $hook->registerHooks();
}