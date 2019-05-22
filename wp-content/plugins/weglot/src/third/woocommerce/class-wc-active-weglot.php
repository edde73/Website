<?php

namespace WeglotWP\Third\Woocommerce;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


use WeglotWP\Models\Third_Active_Interface_Weglot;



/**
 * WC_Active_Weglot
 *
 * @since 2.0
 */
class WC_Active_Weglot implements Third_Active_Interface_Weglot {

	/**
	 * WooCommerce is active ?
	 * @since 2.0
	 *
	 * @return boolean
	 */
	public function is_active() {
		if ( ! function_exists( 'is_plugin_active' ) ) {
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		}

		if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
			return false;
		}

		return true;
	}
}