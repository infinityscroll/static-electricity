<?php
/**
 * Plugin Name: Static Electricity
 * Description: Use your WordPress instance to generate static HTML
 * Version: 0.1-dev
 * Author: infinityScroll
 * Author URI: https://infinityscroll.dev
 * License: GPL-3.0+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: static-electricity
 * Domain Path: /languages
 * Requires PHP: 8.0
 */

namespace infinityScroll\staticElectricity;

class Plugin {

	private static $instance;

	public function __construct() {
		static::$instance = $this;
		add_action( 'plugins_loaded', [ $this, 'load' ] );
	}

	public static function instance() {
		return static::$instance;
	}

	public function load() {

	}
}

new Plugin();
