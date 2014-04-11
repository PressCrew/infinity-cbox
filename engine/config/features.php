<?php
/**
 * Infinity Features Configuration.
 *
 * !!! DO NOT EDIT THIS FILE !!!
 * Only edit files in a child theme.
 *
 * This file is a work in progress.
 *
 * @package Infinity
 * @subpackage config
 */

// overlay image defaults
$overlay_image = array(
	'type' => 'css/overlay-image',
	'file_directory' => 'assets/images/textures'
);

// Core WordPress Features

$this->register(
	'infinity-core-sidebar-setup',
	array(
		'type' => 'default',
		'title' => 'Sidebar Setup',
		'description' => 'Sidebar Registration'
	)
);

$this->register(
	'infinity-top-menu-setup',
	array(
		'type' => 'default',
		'title' => 'Above Header Menu Setup',
		'description' => 'Register the menu above the header.'
	)
);

$this->register(
	'infinity-main-menu-setup',
	array(
		'type' => 'default',
		'title' => 'Inside Header Menu Setup',
		'description' => 'Register the menu inside the header.'
	)
);

$this->register(
	'infinity-sub-menu-setup',
	array(
		'type' => 'default',
		'title' => 'Below Header Menu Setup',
		'description' => 'Register the menu below the header.'
	)
);

$this->register(
	'infinity-footer-menu-setup',
	array(
		'type' => 'default',
		'title' => 'Footer Menu Setup',
		'description' => 'Register the footer menu.'
	)
);

$this->register(
	'infinity-pagination',
	array(
		'type' => 'default',
		'title' => 'Pagination',
		'description' => 'Enable pagination for your (custom) posts'
	)
);

$this->register(
	'infinity-post-avatars',
	array(
		'type' => 'default',
		'title' => 'Post Avatars',
		'description' => 'Enable Post avatars being displayed on single posts and pages'
	)
);

$this->register(
	'infinity-author-box',
	array(
		'type' => 'default',
		'title' => 'Author Box',
		'description' => 'Enable About the Author Boxes being displayed on single posts and author archives'
	)
);

$this->register(
	'infinity-introduction-boxes',
	array(
		'type' => 'default',
		'title' => 'Introduction Boxes',
		'description' => 'Introduction boxes that show above category, tag and author archives'
	)
);

// Base Stylesheets

$this->register(
	'infinity-font-iconsweets',
	array(
		'type' => 'default',
		'title' => 'The Icon Font-Face being used',
		'description' => 'Icons',
		'style' => 'assets/fonts/iconsweets.css'
	)
);

$this->register(
	'infinity-wp-support',
	array(
		'type' => 'default',
		'title' => 'Wordpress Support',
		'description' => 'Enables WordPress support',
		'style' => 'assets/css/wordpress.css'
	)
);

$this->register(
	'infinity-bp-support',
	array(
		'type' => 'bp/support',
		'title' => 'BuddyPress Support',
		'description' => 'Enables BuddyPress support',
		'style' => 'assets/css/buddypress.css'
	)
);

$this->register(
	'infinity-ext-support',
	array(
		'type' => 'default',
		'title' => 'Extension Styles',
		'description' => 'Enables extensions support',
		'style' => 'assets/css/extensions.css'
	)
);

$this->register(
	'infinity-resp-support',
	array(
		'type' => 'responsive/layout',
		'title' => 'Responsive Layout',
		'description' => 'Enables responsive layout support',
		'style' => 'assets/css/responsive.css'
	)
);

// Base feature styling toggles

$this->register(
	'infinity-wp-style',
	array(
		'type' => 'default',
		'title' => 'wordpress Styles',
		'description' => 'The base WordPress styling',
		'body_class' => 'infinity-wp'
	)
);

$this->register(
	'infinity-bp-style',
	array(
		'type' => 'default',
		'title' => 'BuddyPress Styles',
		'description' => 'The base BuddyPress styles',
		'body_class' => 'infinity-bp'
	)
);

$this->register(
	'infinity-typog-style',
	array(
		'type' => 'default',
		'title' => 'Typography Styles',
		'description' => 'The base Typography styling',
		'body_class' => 'infinity-typog'
	)
);

$this->register(
	'infinity-layout-style',
	array(
		'type' => 'default',
		'title' => 'layout Styles',
		'description' => 'The base layout styling',
		'body_class' => 'infinity-layout'
	)
);

$this->register(
	'infinity-buttons-style',
	array(
		'type' => 'default',
		'title' => 'extras Styles',
		'description' => 'The base buttons styling',
		'body_class' => 'infinity-btns'
	)
);

$this->register(
	'infinity-icons-style',
	array(
		'type' => 'default',
		'title' => 'The Icons used across the theme',
		'description' => 'Icons',
		'body_class' => 'infinity-icons'
	)
);

$this->register(
	'infinity-design-style',
	array(
		'type' => 'default',
		'title' => 'Design Styles',
		'description' => 'The styles which fancy things up a bit',
		'body_class' => 'infinity-design'
	)
);

// Base Scripts

$this->register(
	'infinity-base-script',
	array(
		'type' => 'default',
		'title' => 'Base Javascript',
		'description' => 'Some jQuery to spice up the Base Theme',
		'script' => 'assets/js/base.js',
		'script_depends' => array(
			'jquery'
		)
	)
);

$this->register(
	'infinity-responsive-menu',
	array(
		'type' => 'responsive/menu',
		'title' => 'Responsive Menu',
		'description' => 'Enables the responsive menu javascript',
		'target_selector' => '.sf-menu',
		'switch_width' => 770,
		'top_option_text' => 'Where to?',
		'prepend_to' => 'div.mobile-menu-container'
	)
);

$this->register(
	'infinity-responsive-videos',
	array(
		'type' => 'responsive/videos',
		'title' => 'Responsive Videos',
		'description' => 'Enables the responsive videos javascript',
		'target_selector' => '#wrapper'
	)
);

// Global Options Feature

$this->register(
	'infinity-core-options',
	array(
		'type' => 'default',
		'title' => 'Custom CSS',
		'description' => 'Core set of options included with Infinity Base'
	)
);

$this->register_suboption_defaults(
	'infinity-core-options',
	array(
		'section' => 'global'
	)
);

$this->register_suboption(
	'infinity-core-options',
	'text-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Text Color',
		'description' => 'Choose a text color',
		'style_selector' => 'body.theme-option',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-core-options',
	'link-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Link Color',
		'description' => 'Choose a link color',
		'style_selector' => 'body.theme-option a, body.theme-option a:visited',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-core-options',
	'custom-favicon',
	array(
		'type' => 'upload',
		'title' => 'Site Favicon',
		'description' => 'Upload a favicon for your site'
	)
);

$this->register_suboption(
	'infinity-core-options',
	'sidebar-position',
	array(
		'section' => 'sidebar',
		'title' => 'Sidebar Position',
		'description' => 'Choose on which side you want to display the sidebar',
		'type' => 'radio',
		'default_value' => 'right',
		'field_options' => array(
			'left' => 'Left',
			'right' => 'Right'
		)
	)
);

$this->register_suboption(
	'infinity-core-options',
	'sidebar-size',
	array(
		'section' => 'sidebar',
		'title' => 'Sidebar Size',
		'description' => 'Select a sidebar size',
		'type' => 'select',
		'default_value' => 'eleven',
		'field_options' => array(
			'fourteen' => '15 percent',
			'thirteen' => '20 percent',
			'twelve' => '25 percent',
			'eleven' => '30 precent',
			'ten' => '35 percent',
			'nine' => '40 percent',
			'eight' => '50 percent',
			'disable' => 'Disable'
		)
	)
);

$this->register_suboption(
	'infinity-core-options',
	'google-analytics',
	array(
		'type' => 'textarea',
		'title' => 'Google Analytics Code',
		'description' => 'Paste your GA Tracking code in the text area below. Including the script tags!'
	)
);

$this->register_suboption(
	'infinity-core-options',
	'footer-text',
	array(
		'section' => 'footer',
		'type' => 'textarea',
		'title' => 'Footer Text',
		'description' => 'The footer text that appears at the bottom of every page, below the widgetized footer areas. This is commonly used for copyright, designed by, and powered by text. HTML tags are allowed.',
		'default_value' => 'Infinity by <a href=http://infinity.presscrew.com>PressCrew</a> and powered by <a href=http://wordpress.org>WordPress</a>.'
	)
);

// Custom CSS Feature

$this->register(
	'infinity-custom-css',
	array(
		'type' => 'default',
		'title' => 'Custom CSS',
		'description' => 'Allow custom CSS to be provided with theme options'
	)
);

$this->register_suboption(
	'infinity-custom-css',
	'markup',
	array(
		'section' => 'global',
		'type' => 'css/custom',
		'title' => 'Custom CSS',
		'description' => 'Enter custom CSS markup to fine tune the look of your site'
	)
);

// Body Layout Feature

$this->register(
	'infinity-body-layout',
	array(
		'type' => 'default',
		'title' => 'Body Layout',
		'description' => 'Change the Body according to your taste'
	)
);

$this->register_suboption_defaults(
	'infinity-body-layout',
	array(
		'section' => 'layout'
	)
);

$this->register_suboption(
	'infinity-body-layout',
	'width',
	array(
		'type' => 'css/length-px',
		'title' => 'Maximum Width',
		'description' => 'Set the maximum width of the site\'s content between %min% and %max% pixels by moving the slider.',
		'min' => 900,
		'max' => 1250,
		'step' => 10,
		'style_selector' => '#wrapper',
		'style_property' => 'max-width'
	)
);

$this->register_suboption(
	'infinity-body-layout',
	'background-color',
	array(
		'type' => 'css/bg-color',
		'style_selector' => 'body.theme-option'
	)
);

$this->register_suboption(
	'infinity-body-layout',
	'background-image',
	array(
		'type' => 'css/bg-image',
		'style_selector' => 'body.theme-option',
		'default_value' => 'assets/images/design/bg.png'
	)
);

$this->register_suboption(
	'infinity-body-layout',
	'background-repeat',
	array(
		'type' => 'css/bg-repeat',
		'style_selector' => 'body.theme-option',
		'parent' => '%feature%.background-image'
	)
);

$this->register_suboption(
	'infinity-body-layout',
	'overlay-image',
	$overlay_image +
	array(
		'style_selector' => 'body.theme-option'
	)
);

$this->register_suboption(
	'infinity-body-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => 'body.theme-option:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Header Logo Feature

$this->register(
	'infinity-header-logo',
	array(
		'type' => 'header-logo'
	)
);

$this->register_suboption_defaults(
	'infinity-header-logo',
	array(
		'section' => 'header'
	)
);

// Header Layout Feature

$this->register(
	'infinity-header-layout',
	array(
		'type' => 'default',
		'title' => 'Header Styles',
		'description' => 'Customize the layout and colors of the header'
	)
);

$this->register_suboption_defaults(
	'infinity-header-layout',
	array(
		'section' => 'header',
		'style_selector' => '#header'
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'min-height',
	array(
		'type' => 'css/length-px',
		'title' => 'Height',
		'description' => 'Select the height of the header by moving the slider',
		'min' => 100,
		'max' => 500,
		'step' => 10,
		'style_property' => 'height'
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'margin-top',
	array(
		'type' => 'css/length-px',
		'title' => 'Top Margin',
		'description' => 'The margin (spacing) between the top of the header and the top of the page.',
		'min' => 0,
		'max' => 100,
		'step' => 2,
		'style_property' => 'margin-top'
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'padding-top',
	array(
		'type' => 'css/length-px',
		'title' => 'Top Padding',
		'description' => 'The padding (spacing) between the top of the header and the header content.',
		'min' => 0,
		'max' => 100,
		'step' => 2,
		'style_property' => 'padding-top'
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'margin-bottom',
	array(
		'type' => 'css/length-px',
		'title' => 'Bottom Margin',
		'description' => 'The margin (spacing) between the bottom of the header and the top of the content section.',
		'min' => 0,
		'max' => 100,
		'step' => 2,
		'style_property' => 'margin-bottom'
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'padding-bottom',
	array(
		'type' => 'css/length-px',
		'title' => 'Bottom Padding',
		'description' => 'The padding (spacing) between the bottom of the header and the header content.',
		'min' => 0,
		'max' => 100,
		'step' => 2,
		'style_property' => 'padding-bottom'
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'background-color',
	array(
		'type' => 'css/bg-color',
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'background-image',
	array(
		'type' => 'css/bg-image',
		'default_value' => 'assets/images/design/header-background.jpg',
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'background-repeat',
	array(
		'type' => 'css/bg-repeat',
		'parent' => '%feature%.background-image'
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'overlay-image',
	$overlay_image +
	array(
		'style_selector' => '#header'
	)
);

$this->register_suboption(
	'infinity-header-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => '#header:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Main Menu Layout Feature

$this->register(
	'infinity-main-menu-layout',
	array(
		'type' => 'default',
		'title' => 'Main Menu Styles',
		'description' => 'Customize the layout and colors of the menu inside the header.'
	)
);

$this->register_suboption_defaults(
	'infinity-main-menu-layout',
	array(
		'section' => 'menus-main',
		'style_selector' => '.main-menu'
	)	
);

$this->register_suboption(
	'infinity-main-menu-layout',
	'color-link',
	array(
		'type' => 'colorpicker',
		'title' => 'Font Color',
		'description' => 'Choose a font color for links of the menu inside the header.',
		'style_selector' => '.main-menu ul li a span',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-main-menu-layout',
	'font-weight',
	array(
		'type' => 'select',
		'title' => 'Font Weight',
		'description' => 'Choose a font weight for links of the menu inside the header.',
		'style_selector' => '.main-menu ul li a span',
		'style_property' => 'font-weight'
	)
);

$this->register_suboption(
	'infinity-main-menu-layout',
	'padding',
	array(
		'type' => 'css/length-px',
		'title' => 'Padding',
		'description' => 'Select the padding (spacing) around the menu links by moving the slider.',
		'max' => 30,
		'style_property' => 'padding'
	)
);

$this->register_suboption(
	'infinity-main-menu-layout',
	'background-color',
	array(
		'type' => 'css/bg-color'
	)
);

$this->register_suboption(
	'infinity-main-menu-layout',
	'overlay-image',
	$overlay_image
);

$this->register_suboption(
	'infinity-main-menu-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => '.main-menu:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Top Menu Layout Feature

$this->register(
	'infinity-top-menu-layout',
	array(
		'type' => 'default',
		'title' => 'Sub Menu Styles',
		'description' => 'Customize the layout and colors of the menu above the header.'
	)
);

$this->register_suboption_defaults(
	'infinity-top-menu-layout',
	array(
		'section' => 'menus-top',
		'style_selector' => '.top-menu'
	)
);

$this->register_suboption(
	'infinity-top-menu-layout',
	'color-link',
	array(
		'type' => 'colorpicker',
		'title' => 'Font Color',
		'description' => 'Choose a font color for links of the menu above the header.',
		'style_selector' => '.top-menu ul li a span',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-top-menu-layout',
	'font-weight',
	array(
		'type' => 'select',
		'title' => 'Font Weight',
		'description' => 'Choose a font weight for links of the menu above the header.',
		'style_selector' => '.top-menu ul li a span',
		'style_property' => 'font-weight'
	)
);

$this->register_suboption(
	'infinity-top-menu-layout',
	'background-color',
	array(
		'type' => 'css/bg-color'
	)
);

$this->register_suboption(
	'infinity-top-menu-layout',
	'background-color-subitem',
	array(
		'type' => 'css/bg-color',
		'title' => 'Sub-item Background',
		'description' => 'Choose a background color for the submenu items of the menu above the header.',
		'style_selector' => '.top-menu ul ul'
	)
);

$this->register_suboption(
	'infinity-top-menu-layout',
	'overlay-image',
	$overlay_image
);

$this->register_suboption(
	'infinity-top-menu-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => '.top-menu:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Sub Menu Feature

$this->register(
	'infinity-sub-menu-layout',
	array(
		'type' => 'default',
		'title' => 'Sub Menu Styles',
		'description' => 'Customize the layout and colors of the menu below the header.'
	)
);

$this->register_suboption_defaults(
	'infinity-sub-menu-layout',
	array(
		'section' => 'menus-sub',
		'style_selector' => '.sub-menu'
	)
);

$this->register_suboption(
	'infinity-sub-menu-layout',
	'color-link',
	array(
		'type' => 'colorpicker',
		'title' => 'Font Color',
		'description' => 'Choose a font color for links of the menu below the header.',
		'style_selector' => '.sub-menu ul li a span',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-sub-menu-layout',
	'font-weight',
	array(
		'type' => 'select',
		'title' => 'Font Weight',
		'description' => 'Choose a font weight for links of the menu below the header.',
		'style_selector' => '.sub-menu ul li a span',
		'style_property' => 'font-weight'
	)
);

$this->register_suboption(
	'infinity-sub-menu-layout',
	'background-color',
	array(
		'type' => 'css/bg-color'
	)
);

$this->register_suboption(
	'infinity-sub-menu-layout',
	'background-color-subitem',
	array(
		'type' => 'css/bg-color',
		'title' => 'Sub-item Background',
		'description' => 'Choose a background color for the submenu items of the menu below the header.',
		'style_selector' => '.sub-menu ul ul'
	)		
);

$this->register_suboption(
	'infinity-sub-menu-layout',
	'overlay-image',
	$overlay_image
);

$this->register_suboption(
	'infinity-sub-menu-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => '.sub-menu:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Content Styles

$this->register(
	'infinity-content-layout',
	array(
		'type' => 'default',
		'title' => 'Content Styles',
		'description' => 'Customize the layout and colors of the content section.'
	)
);

$this->register_suboption_defaults(
	'infinity-content-layout',
	array(
		'section' => 'content',
		'style_selector' => '#content'
	)
);

$this->register_suboption(
	'infinity-content-layout',
	'text-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Text Color',
		'description' => 'Choose a color for text inside the content section.',
		'style_selector' => '#content a',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-content-layout',
	'link-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Link Color',
		'description' => 'Choose a color for links inside the content section.',
		'style_selector' => '#content a',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-content-layout',
	'background-color',
	array(
		'type' => 'css/bg-color',
	)
);

$this->register_suboption(
	'infinity-content-layout',
	'background-image',
	array(
		'type' => 'css/bg-image'
	)
);

$this->register_suboption(
	'infinity-content-layout',
	'background-repeat',
	array(
		'type' => 'css/bg-repeat',
		'parent' => '%feature%.background-image'
	)
);

$this->register_suboption(
	'infinity-content-layout',
	'overlay-image',
	$overlay_image
);

$this->register_suboption(
	'infinity-content-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => '#content:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Sidebar Styles

$this->register(
	'infinity-sidebar-layout',
	array(
		'type' => 'default',
		'title' => 'sidebar Styles',
		'description' => 'Customize the layout and colors of the sidebar'
	)
);

$this->register_suboption_defaults(
	'infinity-sidebar-layout',
	array(
		'section' => 'sidebar',
		'style_selector' => '#sidebar'
	)
);

$this->register_suboption(
	'infinity-sidebar-layout',
	'text-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Text Color',
		'description' => 'Choose a color for text in the sidebar.',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-sidebar-layout',
	'link-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Link Color',
		'description' => 'Choose a color for links in the sidebar.',
		'style_selector' => '#sidebar a',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-sidebar-layout',
	'background-color',
	array(
		'type' => 'css/bg-color'
	)
);

$this->register_suboption(
	'infinity-sidebar-layout',
	'background-image',
	array(
		'type' => 'css/bg-image'
	)
);

$this->register_suboption(
	'infinity-sidebar-layout',
	'background-repeat',
	array(
		'type' => 'css/bg-repeat',
		'parent' => '%feature%.background-image'
	)
);

$this->register_suboption(
	'infinity-sidebar-layout',
	'overlay-image',
	$overlay_image +
	array(
		'style_selector' => '#sidebar'
	)
);

$this->register_suboption(
	'infinity-sidebar-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => '#sidebar:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Widget Layout Feature

$this->register(
	'infinity-widget-layout',
	array(
		'type' => 'default',
		'title' => 'Widget Styling',
		'description' => 'Customize the layout and colors of widgets.'
	)
);

$this->register_suboption_defaults(
	'infinity-widget-layout',
	array(
		'section' => 'widgets',
		'style_selector' => '#sidebar .widget'
	)
);

$this->register_suboption(
	'infinity-widget-layout',
	'color-link',
	array(
		'type' => 'colorpicker',
		'title' => 'Widget Title Color',
		'description' => 'Choose a font color for widget titles.',
		'style_selector' => '#sidebar .widget h4',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-widget-layout',
	'font-weight',
	array(
		'type' => 'select',
		'title' => 'Font Weight',
		'description' => 'Choose a font weight for widget titles.',
		'style_selector' => '#sidebar .widget h4',
		'style_property' => 'font-weight'
	)
);

$this->register_suboption(
	'infinity-widget-layout',
	'padding',
	array(
		'type' => 'css/length-px',
		'title' => 'Padding',
		'description' => 'The padding (spacing) between any widget border and it\'s content.',
		'max' => 30,
		'style_property' => 'padding'
	)
);

$this->register_suboption(
	'infinity-widget-layout',
	'background-color',
	array(
		'type' => 'css/bg-color'
	)
);

$this->register_suboption(
	'infinity-widget-layout',
	'overlay-image',
	$overlay_image
);

$this->register_suboption(
	'infinity-widget-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => '#sidebar .widget:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Footer Layout Feature

$this->register(
	'infinity-footer-layout',
	array(
		'type' => 'default',
		'title' => 'footer Styles',
		'description' => 'Customize the layout and colors of the footer'
	)
);

$this->register_suboption_defaults(
	'infinity-footer-layout',
	array(
		'section' => 'footer',
		'style_selector' => '.footer-wrap'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'text-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Text Color',
		'description' => 'Choose a color for text inside the footer section.',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'text-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Text Color',
		'description' => 'Choose a color for text inside the footer section.',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'link-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Link Color',
		'description' => 'Choose a color for links inside the footer section.',
		'style_selector' => '.footer-wrap a',
		'style_property' => 'color'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'margin-top',
	array(
		'type' => 'css/length-px',
		'title' => 'Top Margin',
		'description' => 'The margin (spacing) between the bottom of the content section and the top of the footer.',
		'min' => 0,
		'max' => 100,
		'step' => 2,
		'style_property' => 'margin-top'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'background-color',
	array(
		'type' => 'css/bg-color'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'background-image',
	array(
		'type' => 'css/bg-image'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'background-repeat',
	array(
		'type' => 'css/bg-repeat',
		'parent' => '%feature%.background-image'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'background-repeat',
	array(
		'type' => 'css/bg-repeat',
		'parent' => '%feature%.background-image'
	)
);

$this->register_suboption(
	'infinity-footer-layout',
	'overlay-image',
	$overlay_image
);

$this->register_suboption(
	'infinity-footer-layout',
	'overlay-opacity',
	array(
		'type' => 'css/overlay-opacity',
		'style_selector' => '.footer-wrap:before',
		'parent' => '%feature%.overlay-image',
		'linked_image' => '%feature%.overlay-image'
	)
);

// Additional BuddyPress features

$this->register(
	'infinity-bp-fbconnect',
	array(
		'type' => 'bp/fb-autoconnect',
		'class' => 'info-box register-intro'
	)
);

$this->register_suboption_defaults(
	'infinity-bp-fbconnect',
	array(
		'section' => 'buddypress'
	)
);

$this->register(
	'infinity-bp-sidebar-setup',
	array(
		'type' => 'default',
		'title' => 'BuddyPress Sidebar',
		'description' => 'Special BuddyPress sidebar registration',
		'required_feature' => 'infinity-bp-support'
	)
);

// Post Gravatar Feature

$this->register(
	'infinity-post-gravatar',
	array(
		'type' => 'gravatar',
		'title' => 'Post Gravatars',
		'description' => 'Total control over post gravatars',
		'image_class' => 'infinity-post-gravatar'
	)
);

$this->register_suboption_defaults(
	'infinity-post-gravatar',
	array(
		'section' => 'gravatars'
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'size',
	array(
		'type' => 'text',
		'title' => 'Size',
		'description' => 'Enter the size in pixels for the Gravatar image'
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'default-set',
	array(
		'type' => 'select',
		'title' => 'Default Image Set',
		'description' => 'Select the default image set to use',
		'default_value' => 'mm',
		'field_options' => array(
			'404' => 'Return 404 Error',
			'mm' => 'Mystery Man',
			'identicon' => 'Identicon',
			'monsterid' => 'Monster ID',
			'wavatar' => 'Wavatar',
			'retro' => 'Retro'
		)
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'default-img',
	array(
		'type' => 'upload',
		'title' => 'Default Image File',
		'description' => 'Upload a default Gravatar image (overrides default set)'
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'default-force',
	array(
		'type' => 'toggle/yes-no',
		'title' => 'Force Default',
		'description' => 'Force default image to always load?',
		'default_value' => false
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'rating',
	array(
		'type' => 'select',
		'title' => 'Rating',
		'description' => 'Select highest image rating to display',
		'default_value' => 'g',
		'field_options' => array(
			'g' => 'G (suitable for display on all websites with any audience type)',
			'pg' => 'PG (may contain rude gestures, provocatively dressed individuals, the lesser swear words, or mild violence)',
			'r' => 'R (may contain such things as harsh profanity, intense violence, nudity, or hard drug use)',
			'x' => 'X (may contain hardcore sexual imagery or extremely disturbing violence)'
		)
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'border-width',
	array(
		'type' => 'text',
		'title' => 'Border Width',
		'description' => 'Enter a border width in pixels for the Gravatar image'
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'border-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Border Color',
		'description' => 'Select a color for the Gravatar image border'
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'padding',
	array(
		'type' => 'text',
		'title' => 'Padding',
		'description' => 'Enter a padding size in pixels for the Gravatar image'
	)
);

$this->register_suboption(
	'infinity-post-gravatar',
	'bg-color',
	array(
		'type' => 'colorpicker',
		'title' => 'Background Color',
		'description' => 'Select a background color for the Gravatar image'
	)
);
