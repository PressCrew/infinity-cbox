<?php
/**
 * ICE API: screen class file
 *
 * @author Marshall Sorenson <marshall@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package ICE-components
 * @subpackage screens
 * @since 1.0
 */

ICE_Loader::load( 'base/component' );

/**
 * Make a display screen easy
 *
 * @package ICE-components
 * @subpackage screens
 */
abstract class ICE_Screen extends ICE_Component
{
	/**
	 * Target of the screen menu link.
	 *
	 * @var string
	 */
	protected $target;

	/**
	 * URL where to find the screen.
	 *
	 * @var string
	 */
	protected $url;

	/**
	 */
	public function get_property( $name )
	{
		switch ( $name ) {
			case 'target':
			case 'url':
				return $this->$name;
			default:
				return parent::get_property( $name );
		}
	}

	/**
	 */
	protected function configure()
	{
		// RUN PARENT FIRST!
		parent::configure();

		// import settings
		$this->import_settings( array(
			'target',
			'url'
		));
	}
}
