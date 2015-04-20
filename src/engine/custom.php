<?php
/**
 * Infinity Theme: custom functionality
 *
 * @author Marshall Sorenson <marshall@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2015 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package Infinity
 * @subpackage base
 * @since 1.2
 */

// This file is for the convenience of Infinity forks.
// It is loaded after Infinity's core includes, immediately before initialization.

/**
 * Tweak some option settings after core config is loaded.
 */
function cbox_theme_customize_options()
{
	// use custom cbox favicon
	ice_register_option(
		array(
			'group' => 'core',
			'name' => 'custom-favicon',
			'default_value' => 'assets/images/favicon-cbox.png'
		)
	);

	// use custom cbox logo
	ice_register_option(
		array(
			'group' => 'header-logo',
			'name' => 'image',
			'default_value' => 'assets/images/logo-cbox.png'
		)
	);
}
add_action( 'infinity_config_loaded', 'cbox_theme_customize_options' );
