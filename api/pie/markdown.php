<?php
/**
 * PIE markdown class file
 *
 * @author Marshall Sorenson <marshall.sorenson@gmail.com>
 * @link http://marshallsorenson.com/
 * @copyright Copyright (C) 2010 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package pie
 * @subpackage markdown
 * @since 1.0
 */

// Try to set these to false before loading markdown lib
@define( 'MARKDOWN_WP_POSTS', false );
@define( 'MARKDOWN_WP_COMMENTS', false );

// load the markdown lib
require_once
	PIE_EASY_VENDORS_DIR .
	DIRECTORY_SEPARATOR . 'markdown' .
	DIRECTORY_SEPARATOR . 'markdown.php';

/**
 * Make Markdown parsing easy
 */
final class Pie_Easy_Markdown
{
	public static function parse( $text )
	{
		return Markdown( $text );
	}
}

?>
