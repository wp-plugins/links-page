<?php
/*
Plugin Name: Links Page
Plugin URI: http://intlect.com/wordpress-links-page-plugin/
Description: A simple plugin to output your Wordpress Links (i.e. blogroll) to a Page or Post. Just add <code>&lt;!--links-page--&gt;</code> to a Page or Post and that's it.
Version: 1.0
Author: TJ
Author URI: http://intlect.com/
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