<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'MCP_FLAIR_TITLE'	=> 'Profile Flair',

	'MCP_FLAIR_MANAGE_USERS'		=> 'Manage users’ flair',
	'MCP_FLAIR_USER'				=> '%s’s flair',
	'MCP_FLAIR_AVAILABLE'			=> 'Available flair',
	'MCP_FLAIR_NO_FLAIR'			=> 'No flair is assigned to this user’s profile.',
	'MCP_FLAIR_NO_AVAILABLE'		=> 'There are no flair items available.',
	'MCP_FLAIR_ADD_TITLE'			=> 'Add the specified number of “%1$s” to %2$s’s profile',
	'MCP_FLAIR_REMOVE_TITLE'		=> 'Remove the specified number of “%1$s” from %2$s’s profile',
	'MCP_FLAIR_REMOVE_ALL_TITLE'	=> 'Remove all “%1$s” from %2$s’s profile',
));
