<?php
/**
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Copyright 2017-2021 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {

	die( 'These aren\'t the droids you\'re looking for.' );
}

if ( ! class_exists( 'WpssoUlFiltersMessages' ) ) {

	class WpssoUlFiltersMessages {

		private $p;	// Wpsso class object.
		private $a;     // WpssoUl class object.

		/**
		 * Instantiated by WpssoUlFilters->__construct().
		 */
		public function __construct( &$plugin, &$addon ) {

			$this->p =& $plugin;
			$this->a =& $addon;

			$this->p->util->add_plugin_filters( $this, array( 
				'messages_tooltip' => 2,
			) );
		}

		public function filter_messages_tooltip( $text, $msg_key ) {

			if ( strpos( $msg_key, 'tooltip-ul_' ) !== 0 ) {

				return $text;
			}

			switch ( $msg_key ) {

				case 'tooltip-ul_menu_icon':	// Toolbar Menu Icon

					$text = __( 'An icon to prefix the title string used in the WordPress toolbar menu (uses the "translation" icon by default). Select "[None]" to disable the toolbar menu icon.', 'wpsso-user-locale' );

					break;

				case 'tooltip-ul_menu_title':	// Toolbar Menu Title

					$text = __( 'The title string used in the WordPress toolbar menu. The "%s" parameter is replaced by the current user locale value (example: "User Locale (%s)").', 'wpsso-user-locale' );

					break;

				case 'tooltip-ul_front_end':	// User Locale on Front-End

					$text = __( 'Show the user locale selector in the front-end toolbar and set the user locale as the WordPress locale.', 'wpsso-user-locale' );

					break;
			}

			return $text;
		}
	}
}
