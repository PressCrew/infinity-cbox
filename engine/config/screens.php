<?php
/**
 * Infinity Screens Configuration.
 *
 * !!! DO NOT EDIT THIS FILE !!!
 * Only edit files in a child theme.
 *
 * @package Infinity
 * @subpackage config
 */

$this->register(
	'start',
	array(
		'type' => 'cpanel',
		'title' => 'Start',
		'priority' => 10,
		'template' => 'dashboard/templates/screens/start.php'
	)
);

$this->register(
	'options',
	array(
		'type' => 'cpanel',
		'title' => 'Options',
		'priority' => 20,
		'template' => 'dashboard/templates/screens/options.php'
	)
);
