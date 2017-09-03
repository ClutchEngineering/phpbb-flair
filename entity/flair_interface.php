<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace stevotvr\flair\entity;

/**
 * Profile Flair flair entity interface.
 */
interface flair_interface extends entity_interface
{
	/**
	 * @return boolean The item is a category
	 */
	public function is_category();

	/**
	 * @param bool $is_category The item is a category
	 */
	public function set_category($is_category);

	/**
	 * @return int The database ID of the parent
	 */
	public function get_parent();

	/**
	 * @param int $parent_id The database ID of the parent
	 */
	public function set_parent($parent_id);

	/**
	 * @return string The name of this flair item
	 */
	public function get_name();

	/**
	 * @param string $name The name of this flair item
	 *
	 * @throws \stevotvr\flair\exception\unexpected_value
	 */
	public function set_name($name);

	/**
	 * @return string The description of this flair item for editing
	 */
	public function get_desc_for_edit();

	/**
	 * @return string The description of this flair item for display
	 */
	public function get_desc_for_display();

	/**
	 * @param string $desc The description of this flair item
	 *
	 * @throws \stevotvr\flair\exception\unexpected_value
	 */
	public function set_desc($desc);

	/**
	 * @return boolean BBCode is enabled on the description
	 */
	public function is_bbcode_enabled();

	/**
	 * @param boolean	$enable	Enable BBCode on the description.
	 */
	public function set_bbcode_enabled($enable);

	/**
	 * @return boolean URL parsing is enabled on the description
	 */
	public function is_magic_url_enabled();

	/**
	 * @param boolean	$enable	Enable URL parsing on the description.
	 */
	public function set_magic_url_enabled($enable);

	/**
	 * @return boolean Smilies are enabled on the description
	 */
	public function is_smilies_enabled();

	/**
	 * @param boolean	$enable	Enable smilies on the description.
	 */
	public function set_smilies_enabled($enable);

	/**
	 * @return int The order of this flair item
	 */
	public function get_order();

	/**
	 * @param int $order The order of this flair item
	 *
	 * @throws \stevotvr\flair\exception\out_of_bounds
	 */
	public function set_order($order);

	/**
	 * @return string The hex color string for this flair item
	 */
	public function get_color();

	/**
	 * @param string $color The hex color string for this flair item
	 *
	 * @throws \stevotvr\flair\exception\out_of_bounds
	 */
	public function set_color($color);

	/**
	 * @return string The identifier for the font icon
	 */
	public function get_icon();

	/**
	 * @param string $icon The identifier for the font icon
	 *
	 * @throws \stevotvr\flair\exception\unexpected_value
	 */
	public function set_icon($icon);

	/**
	 * @return string The hex color string for the icon
	 */
	public function get_icon_color();

	/**
	 * @param string $color The hex color string for the icon
	 *
	 * @throws \stevotvr\flair\exception\out_of_bounds
	 */
	public function set_icon_color($color);

	/**
	 * @return string The hex color string for the count font
	 */
	public function get_font_color();

	/**
	 * @param string $color The hex color string for the count font
	 *
	 * @throws \stevotvr\flair\exception\out_of_bounds
	 */
	public function set_font_color($color);

	/**
	 * @return bool Show this item on user profile pages
	 */
	public function show_on_profile();

	/**
	 * @param bool $show_on_profile Show this item on user profile pages
	 */
	public function set_show_on_profile($show_on_profile);

	/**
	 * @return bool Show this item in the user info on each post
	 */
	public function show_on_posts();

	/**
	 * @param bool $show_on_posts Show this item in the user info on each post
	 */
	public function set_show_on_posts($show_on_posts);
}
