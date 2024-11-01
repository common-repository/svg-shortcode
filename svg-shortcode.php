<?php
/*	
Plugin Name: SVG Shortcode
Plugin URI: http://wordpress.org/extend/plugins/svg-shortcode/
Description: A plugin that allows SVG-files (Scalable Vector Graphics) to be uploaded through the media browser and adds an SVG shortcode for using SVG-files on your WordPress site. The plugin has a fallback attribute to display an image if the browser doesn't support SVG-files.
Version: 1.0.1
Author: Martin Amrén
Author URI: http://www.amrendesign.se/en/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*  Copyright 2013  Martin Amrén  (email : martin.amren@amrendesign.se)

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

// Allow SVG uploads
	add_filter('upload_mimes', 'custom_upload_mimes'); 
	function custom_upload_mimes ( $existing_mimes=array() ) { 
		$existing_mimes['svg'] = 'mime/type'; 
		return $existing_mimes; }

// SVG shortcode with fallback attribute
function svg_shortcode( $atts, $content = null ) {
	extract( shortcode_atts(array(
		'fallback' => '',
		'width' => '',
		'height' => '',
		), $atts ) );

	return '<object 
	data="' . $content . '" 
	type="image/svg+xml"
	width="' . esc_attr($width) . '"
	height="' . esc_attr($height) . '"
	>
	<img src="' . esc_attr($fallback) . '" /></object>';
}
add_shortcode( 'svg', 'svg_shortcode' );

?>