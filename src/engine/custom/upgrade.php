<?php
/**
 * CBOX Theme: upgrade logic
 *
 * @author Marshall Sorenson <marshall@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2015 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package cbox-theme
 * @subpackage custom
 * @since 1.2
 */

/**
 * Special actions to perform when ICE is upgraded to v1.2.
 *
 * @param ICE_Upgrade $ice_upgrade
 */
function cbox_theme_upgrade_ice_1_2( ICE_Upgrade $ice_upgrade )
{
	// was ICE upgraded to at least 1.2?
	if ( true === $ice_upgrade->version_compare( '1.2', '>=' ) ) {

		// yes, rename deprecated options
		ice_rename_options( array(
			// buttons
			'cbox_button_color' => 'buttons_custom-color',
			// post thumbs
			'cbox-thumb-height' => 'thumbs_image-height',
			'cbox-thumb-width' => 'thumbs_image-width',
			// slider
			'cbox_flex_slider' => 'slider_mode',
			'cbox-flex-slider-height' => 'slider_height',
			'cbox-flex-slider-width' => 'slider_width',
			'cbox_flex_slider_amount' => 'slider_amount',
			'cbox_flex_slider_time' => 'slider_time',
			'cbox_flex_slider_transition' => 'slider_transition',
			'cbox_flex_slider_category' => 'slider_category'
		) );

	}
}
add_action( 'ice_theme_upgraded',  'cbox_theme_upgrade_ice_1_2' );
