<?php
/*
Plugin Name: Links Page
Plugin URI: http://intlect.com/wordpress-links-page-plugin/
Description: A simple plugin to output your Wordpress Links (i.e. blogroll) to a Page or Post. Just add <code>&lt;!--links-page--&gt;</code> to a Page or Post and that's it.
Version: 1.0.1
Author: TJ
Author URI: http://intlect.com/

Copyright (C) 2010 TJ, intlect.com (tj@intlect.com)
Based on the Blogroll Links Page plugin by Mark Allen of byte-me.org

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function linkspage($text) {

	if (preg_match("|<!--links-page-->|", $text)) {
		$links = wp_list_bookmarks();
		$text = preg_replace("|<!--links-page-->|", $links, $text);
	}
	return $text;
} 
add_filter('the_content', 'linkspage', 2);
?>