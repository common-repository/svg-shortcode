=== SVG Shortcode ===
Contributors: amrendesign
Donate link: http://www.amrendesign.se
Tags: svg, vector, scalable vector graphics, embed, object, image, images
Requires at least: 3.3
Tested up to: 3.8.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

SVG shortcode plugin allowing SVG-files to be uploaded and easily used in pages and posts with a shortcode

== Description ==

A plugin that allows SVG-files (Scalable Vector Graphics) to be uploaded through the media browser and adds an SVG shortcode for using SVG-files on your WordPress site. 
The plugin has a fallback attribute to display an image if the browser doesn't support SVG-files.

== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the [svg] shortcode like this: 
   [svg]url-to-your-svg-file[/svg]
1. For an image fallback you can use the fallback attribute like this:
   [svg fallback="url-to-your-fallback-image"]url-to-your-svg-file[/svg]

== Frequently Asked Questions ==
= 1. How do I use the plugin? =
Use the SVG shortcode as follows:
[svg]url-to-your-svg-file[/svg]

= 2. What attributes are supported? =
fallback, width, height

Let me know if you need others supported

= 3. How do I use the attributes? =
F.ex. using the width attribute:
[svg width="100px"]url-to-your-svg-file[/svg]

== Changelog ==

= 1.0 =
* First version

= 1.0.1 =
* Added support for width and height properties

== Upgrade Notice ==

= 1.0 =
First version
