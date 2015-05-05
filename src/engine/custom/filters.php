<?php
/**
 * CBOX Theme: custom filters
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
 * Options page title and menu title
 */
function cbox_theme_menu_title()
{
	return __( 'CBOX Theme Options', 'cbox' );
}
add_filter( 'infinity_dashboard_menu_setup_page_title', 'cbox_theme_menu_title' );
add_filter( 'infinity_dashboard_menu_setup_menu_title', 'cbox_theme_menu_title' );