=== Plugin Name ===
Contributors: Source Elements
Tags: iframe, embed, resize, content, advanced, shortcode, modify css, widget 
Requires at least: 2.8.6
Tested up to: 3.9.1
Stable tag: 5.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add Source-Connect Now to your WordPress installation using a Shortcode.

== Description ==
Add Source-Connect Now to your WordPress installation using a Shortcode.

= Shortcode for Source-Connect Now =
By entering the shortcode '[source-connect-now username=""]' you can embed your Source-Connect Now into your site. 

All settings can be set with shortcode attributes

=	Quick start guide =
To embed Source-Connect Now to your page please check the first:

* You have a Source-Connect username

== Installation ==
There are 2 ways to install the Source-Connect Now embed:

*Using the Wordpress Admin screen*

1. Click Plugins, Add New
2. Search for advanced iframe
3. Install and Activate it
4. Place '[source-connect-now username=""]' in your pages or posts. Make sure to add your username.
5. Optionally change the settings with shortcode attributes (see below).

*Using FTP*

1. Upload 'source-connect-now' to the '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place '[advanced_iframe securitykey=""]' in your pages or posts. the security key can be found at Settings -> Advanced iframe

== Other Notes ==
= Source-Connect Now attributes =

Below you find all possible shortcode attributes. 

[source-connect-now 
  username=""	
  width=""   
  height="" 
  template=""
]

username: your Source-Connect Now username
width: Width to display. Default: '500'
height: Height to display. Default: '870'
template: Template to display. Default: 'default'

== Frequently Asked Questions ==
Please ask questions on the Community Forum:
http://www.tinywebgallery.com/blog/advanced-iframe/advanced-iframe-faq/

== Upgrade Notice ==
Simply overwrite all files from your previous installation.
If you have some radio elements empty after the update simply 
select the one you like and save again.

== Changelog ==

= 1.0 =
First version.