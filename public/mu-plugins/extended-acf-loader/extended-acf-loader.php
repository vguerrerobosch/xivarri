<?php
/**
 * Plugin Name: Vinkla Extended ACF Loader Plugin
 * Description: Loads vinkla/extended-acf when Composer is not available.
 * Version: 14.6.0
 * Author: Victor Guerrero
 * Author URI: https://vguerrerobosch.com
 * Plugin URI: https://github.com/vinkla/extended-acf
 */

// Prevent direct access
defined('ABSPATH') or die('No script kiddies please!');

// Include Composer's autoloader
require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
