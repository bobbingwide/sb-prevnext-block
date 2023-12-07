=== SB PrevNext block ===
Contributors:      bobbingwide
Tags:              block
Requires at least: 5.3.2
Tested up to:      6.4.2
Stable tag:        0.1.1
Requires PHP:      7.3.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Display Previous and Next links.

== Description ==
Displays Previous and Next links for pages with the PrevNext block ( sb/sb-prevnext-block ).

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/sb-prevnext-block` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress


== Frequently Asked Questions ==

= Why not use the core previous and next blocks? =

I'm not sure if they work for Pages.

= Will the block name change? =
Most likely; sb isn't a unique prefix.

It'll probably become sb-prevnext-block/prevnext


== Screenshots ==

1. None yet

== Upgrade Notice ==
= 0.1.1 = 
Update for support for PHP 8.1, PHP 8.2 and PHP 8.3 

= 0.1.0 =
Version required for use on sneak-peek.me 


== Changelog ==
= 0.1.1 =
* Changed: Change import for ServerSideRender #1
* Changed: Update wp-scripts to v26.18.0 #3
* Added: Add PHPUnit tests for PHP 8.1, PHP 8.2 and PHP 8.3 #2
* Tested: With WordPress 6.4.2 and WordPress Multisite
* Tested: With Gutenberg 17.1.4
* Tested: With PHP 8.1, PHP 8.2 and PHP 8.3
* TestedL With PHPUnit 9.6


= 0.1.0 =
* Changed: update build to production version
* Changed: improve SCSS for styling the grid
* Changed: Update package-lock.json because people say it's a good thing to do
* Changed: Put previous on the left and next on the right in the front-end and editor using grid css
* Added: Copy/cobble prevnext logic from @andrewmleonard
* Tested: With WordPress 5.7.1 and WordPress Multi Site
* Tested: With Gutenberg 10.5.3
* Tested: With PHP 8.0

= 0.1.0-alpha-24321 =
* Changed: Build with `npm run build` to help test Gutenberg issue 24321,[github bobbingwide sb-prevnext-block issues 1]
* Changed: Add Fragment and InspectorControls to see what happens after building with `npm run build`
* Added: Create an sb/prevnext-block using npx @wordpress/create-block