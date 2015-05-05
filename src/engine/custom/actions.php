<?php
/**
 * CBOX Theme: custom actions
 *
 * @author Marshall Sorenson <marshall@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2012-2015 CUNY Academic Commons, Bowe Frankema, Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package cbox-theme
 * @subpackage custom
 * @since 1.2
 */

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

/**
 * Automagically create a front page if one has not been set already
 */
function cbox_theme_auto_create_home_page()
{
	$is_root_blog = function_exists( 'bp_is_root_blog' ) ? bp_is_root_blog() : is_main_site();

	// if we're not on the root blog, do not auto create the homepage
	if ( ! $is_root_blog ) {
		return;
	}

	// get frontpage ID
	$front_page = get_option( 'page_on_front' );

	// no frontpage?
	if ( ! $front_page ) {

		// set our flag to create a page to true by default
		$create_page = true;

		// grab current auto-created home page id
		$home_page_id = get_option( '_cbox_theme_auto_create_home_page' );

		// we have a page ID, but does it still exist?
		if ( is_numeric( $home_page_id ) ) {
			// page exists, so set $create_page flag to false
			if ( get_post( $home_page_id ) ) {
				$create_page = false;
			}

		}

		// we need to create a new page
		if ( $create_page ) {
			// create the new page
			$home_page_id = wp_insert_post( array(
				'post_type'   => 'page',
				'post_title'  => 'Home Page',
				'post_status' => 'publish',
			) );

			// set the new page as the frontpage and use our homepage template
			update_post_meta( $home_page_id, '_wp_page_template', 'homepage-template.php' );
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $home_page_id );
			update_option( '_cbox_theme_auto_create_home_page', $home_page_id );
		}

	// check if front page still exists
	} else {
		// do this check only on 404 pages b/c if the front page doesn't exist,
		// the front page will 404, so we can run our check then to prevent
		// unnecessary DB queries on other pages
		if ( is_404() && get_post( $front_page ) === NULL ) {
			// front page no longer exists so purge the following options
			delete_option( 'page_on_front' );
			delete_option( '_cbox_theme_auto_create_home_page' );

			// redirect back to homepage
			wp_redirect( get_home_url() ); die();
		}
	}
}
add_action( 'wp', 'cbox_theme_auto_create_home_page' );

/**
 * Automagically set up sidebars on theme activation.
 */
function cbox_theme_magic_sidebars()
{
	// auto sidebar population
	infinity_sidebars_auto_populate();
}
add_action( 'infinity_dashboard_activated', 'cbox_theme_magic_sidebars' );

/**
 * Set additional sidebars during auto populate sequence.
 *
 * @param string $sidebar_id
 */
function cbox_theme_sidebars_auto_populate( $sidebar_id )
{
	// which sidebar id was just populated?
	switch( $sidebar_id ) {
		// Homepage Top Right
		case 'homepage-top-right':
			// Try to set CAC featured member
			infinity_sidebars_set_cacfc_member( 'homepage-top-right' );
			break;
	}
}
add_action( 'infinity_sidebars_auto_populate', 'cbox_theme_sidebars_auto_populate' );
