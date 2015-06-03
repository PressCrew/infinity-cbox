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

// load libs
ICE_Loader::load_lib( 'utils/compat' );
ICE_Loader::load_lib( 'utils/upgrade' );


/**
 * Trigger an upgrade attempt upon theme activation.
 */
function cbox_theme_upgrade()
{
	// new upgrade instance
	$upgrade = new CBOX_Upgrade_1_1( 'cbox_upgrade' );

	// run it
	$upgrade->run();
}
add_action( 'infinity_dashboard_activated', 'cbox_theme_upgrade' );

//
// Classes
//

/**
 * Upgrades required for version 1.1.
 */
class CBOX_Upgrade_1_1 extends ICE_Upgrade
{
	/**
	 */
	public function run()
	{
		// current version less than 1.1?
		if ( true === $this->version_compare( '1.1', '<' ) ) {

			// rename/import deprecated options
			ice_rename_options( array(
				// buttons
				'cbox_button_color' => 'buttons.custom-color',
				// post thumbs
				'cbox-thumb-height' => 'thumbs.image-height',
				'cbox-thumb-width' => 'thumbs.image-width',
				// slider
				'cbox_flex_slider' => 'slider.mode',
				'cbox-flex-slider-height' => 'slider.height',
				'cbox-flex-slider-width' => 'slider.width',
				'cbox_flex_slider_amount' => 'slider.amount',
				'cbox_flex_slider_time' => 'slider.time',
				'cbox_flex_slider_transition' => 'slider.transition',
				'cbox_flex_slider_category' => 'slider.category',
				// bp protect
				'cbox-buddypress-protect.toggle' => 'bp-protect.toggle',
				// bp tour
				'cbox-buddypress-tour.start' => 'bp-tour.start',
				'cbox-buddypress-tour.all' => 'bp-tour.all',
				'cbox-buddypress-tour.friends' => 'bp-tour.friends',
				'cbox-buddypress-tour.groups' => 'bp-tour.groups',
				'cbox-buddypress-tour.mentions' => 'bp-tour.mentions',
				'cbox-buddypress-tour.favorites' => 'bp-tour.favorites',
				'cbox-buddypress-tour.filter' => 'bp-tour.filter',
				'cbox-buddypress-tour.update' => 'bp-tour.update'
			) );

			// rename all deprecated slider postmeta keys used in previous versions.
			ICE_Compat_Posts::rename_postmeta_key( '_cbox_custom_url', '_infext_slider_custom_url' );
			ICE_Compat_Posts::rename_postmeta_key( '_cbox_hide_caption', '_infext_slider_hide_caption' );
			ICE_Compat_Posts::rename_postmeta_key( '_cbox_slider_excerpt', '_infext_slider_excerpt' );
			ICE_Compat_Posts::rename_postmeta_key( '_cbox_enable_custom_video', '_infext_slider_video_enable' );
			ICE_Compat_Posts::rename_postmeta_key( '_cbox_video_url', '_infext_slider_video_url' );

			// bump the version
			$this->version_bump( '1.1' );
		}

		// all done
		return;
	}
}
