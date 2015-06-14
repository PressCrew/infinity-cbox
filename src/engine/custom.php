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
 * CBOX actions
 */
require_once INFINITY_CUSTOM_PATH . '/actions.php';

/**
 * CBOX filters
 */
require_once INFINITY_CUSTOM_PATH . '/filters.php';

/**
 * CBOX upgrades
 */
require_once INFINITY_CUSTOM_PATH . '/upgrade.php';