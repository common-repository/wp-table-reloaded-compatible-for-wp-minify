<?php
/*
Plugin Name: WP-Table Reloaded compatible for WP Minify
Description: Make the plugin "WP-Table Reloaded" compatible for "WP Minify"
Author: Julius Fischer
Version: 1.0
Author URI: http://www.it-gecko.de/
*/

/*  Copyright 2011  Julius Fischer  (email : julius.f@gmx.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_filter('wp_table_reloaded_default_css', 'wp_table_reloaded_compatible_for_wp_minify');

function wp_table_reloaded_compatible_for_wp_minify($a)
{
	foreach($a as $c)
		  echo "\n".'<link rel="stylesheet" href="' . substr($c, 13, -3) . '" type="text/css" media="screen" />'."\n";

	return (array)'';
}
?>