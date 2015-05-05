<?php
/**
 * Infinity Theme: menus
 *
 * @author Marshall Sorenson <marshall@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2012 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package Infinity
 * @subpackage base
 * @since 1.1
 */

//
// Actions
//

/**
 * Automagically set up menus on theme activiation.
 *
 * @global int $blog_id
 */
function infinity_menus_auto_populate()
{
	global $blog_id;

	// make sure we are on the root bp blog
	if ( (int) BP_ROOT_BLOG === (int) $blog_id ) {
		// create our default sub-menu
		infinity_menus_create_default_sub_menu();
	}
}
add_action( 'infinity_dashboard_activated', 'infinity_menus_auto_populate' );

//
// Functions
//

/**
 * Register and create a custom BuddyPress menu
 */
function infinity_register_bp_menu( $menu_name )
{
	global $blog_id;

	// check BP reqs and if our custom default menu already exists
	if (
		function_exists( 'bp_core_get_directory_pages' ) &&
		BP_ROOT_BLOG == $blog_id &&
		!is_nav_menu( $menu_name )
	) {
		// doesn't exist, create it
		$menu_id = wp_create_nav_menu( $menu_name );

		// get bp pages
		$pages = bp_core_get_directory_pages();

		// allowed pages
		$pages_ok = array(
			'activity' => true,
			'blogs' => true,
			'forums' => true,
			'groups' => true,
			'links' => true,
			'members' => true
		);

		// loop all pages
		foreach( $pages as $config ) {
			// make sure we support this page
			if ( array_key_exists( $config->name, $pages_ok ) ) {
				// yep, add page as a nav item
				wp_update_nav_menu_item( $menu_id, 0, array(
					'menu-item-type' => 'post_type',
					'menu-item-status' => 'publish',
					'menu-item-object' => 'page',
					'menu-item-object-id' => $config->id,
					'menu-item-title' => $config->title,
					'menu-item-attr-title' => $config->title,
					'menu-item-classes' => 'icon-' . $config->name
				));
			}
		}

		// get location settings
		$locations = get_theme_mod( 'nav_menu_locations' );

		// is main menu location set yet?
		if ( empty( $locations['main-menu'] ) ) {
			// nope, set it
			$locations['main-menu'] = $menu_id;
			// update theme mode
			set_theme_mod( 'nav_menu_locations', $locations );
		}
	}
}

/**
 * Add a filter for every displayed user navigation item
 */
function infinity_bp_nav_inject_options_setup()
{
	global $bp;

	// loop all nav components
	foreach ( (array)$bp->bp_nav as $user_nav_item ) {
		// add navigation filter
		add_filter(
			'bp_get_displayed_user_nav_' . $user_nav_item['css_id'],
			'infinity_bp_nav_inject_options_filter',
			999,
			2
		);
	}
}

/**
 * Inject options nav onto end of active displayed user nav component
 *
 * @param string $html
 * @param array $user_nav_item
 * @return string
 */
function infinity_bp_nav_inject_options_filter( $html, $user_nav_item )
{
	// slug of nav item being filtered
	$component = $user_nav_item[ 'slug' ];
	
	// show options nav?
	$show = bp_is_current_component( $component );
	
	// special hack to handle profile in BP versions < 1.7
	if (
		'profile' == $component &&
		-1 == version_compare( BP_VERSION, '1.7') &&
		false == bp_is_my_profile()
	) {
		// force hide it
		$show = false;
	}

	// filter the show var because i love developers
	$show = (boolean) apply_filters( 'infinity_bp_nav_inject_options_show', $show, $user_nav_item );

	// ok, finally... should we show it?
	if ( true === $show ) {

		// yes, need to capture options nav output
		ob_start();

		// run options nav template tag
		bp_get_options_nav();

		// grab buffer and wipe it
		$nav = trim( (string) ob_get_clean() );

		// make sure the result has some meat
		if ( '' != $nav ) {
			// yep, inject options nav onto end of list item wrapped in special <ul>
			return preg_replace(
				'/(<\/li>.*)$/',
				'<ul class="profile-subnav">' . $nav . '</ul>$1',
				$html,
				1
			);
		}
	}

	// no changes
	return $html;
}

/**
 * Creates a default sub menu and .
 */
function infinity_menus_create_default_sub_menu()
{
	// load menu utils
	ICE_Loader::load( 'utils/menus' );

	// new menu manager using our special name
	$menu_mgr = new ICE_Menu_Manager( 'infinity-sub-menu' );

	// try to register it
	if ( true === $menu_mgr->register() ) {

		// add home page
		$menu_mgr->add_item(
			array(
				'title'		=> _x( 'Home', 'the link in the header navigation bar', 'infinity' ),
				'position'	=> 0,
				'url'		=> home_url( '/' )
			)
		);
		// add members page
		$menu_mgr->add_bp_page(
			'members',
			array(
				'title'		=> _x( 'People', 'the link in the header navigation bar', 'infinity' ),
				'position'	=> 10
			)
		);
		// add groups page
		$menu_mgr->add_bp_page(
			'groups',
			array(
				'title'		=> _x( 'Groups', 'the link in the header navigation bar', 'infinity' ),
				'position'	=> 20
			)
		);
		// add blogs page
		$menu_mgr->add_bp_page(
			'blogs',
			array(
				'title'		=> _x( 'Blogs', 'the link in the header navigation bar', 'infinity' ),
				'position'	=> 30
			)
		);
		// add activity page
		$menu_mgr->add_bp_page(
			'activity',
			array(
				'title'		=> _x( 'Activity', 'the link in the header navigation bar', 'infinity' ),
				'position'	=> 50
			)
		);
		// is BuddyPress Docs Wiki plugin loaded?
		if ( infinity_plugin_supported( 'buddypress-docs-wiki' ) ) {
			// yep, add wiki page
			$menu_mgr->add_item(
				array(
					'title'		=> _x( 'Wiki', 'the link in the header navigation bar', 'infinity' ),
					'position'	=> 40,
					'url'		=> home_url( 'wiki' )
				)
			);
		}

		// set location
		$menu_mgr->add_location( 'sub-menu' );
	}
}
