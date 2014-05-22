<?php
/*
Plugin Name: Source-Connect Now
Plugin URI: http://source-elements.com/now/account/embed/
Version: 1.0
Date: May 2014
Author: Source Elements
Author URI: http://www.source-elements.com
Description: This plugin includes Source-Connect Now as a shortcode in an Source-Connect Now.

Usage:
[source-connect-now username="my_username"]

Optional: Width, height and template
[source-connect-now username="my_username" width="500" height="870" template="default"]

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


//Register the Source-Connect Now shortcode
add_shortcode("source-connect-now", "source_connect_now_handler");

function source_connect_now_handler( $atts ) {

    //Extract user options
    $scnow = shortcode_atts( array(
        'username' => '',
        'width' => '500',
	'height' => '870',
	'template' => 'default'
    ), $atts );
	
    // Display the custom iFrame
    return "<iframe src='https://source-elements.com/now/embed/".$scnow['username']."/".$scnow['template']."' width='".$scnow['width']."' height='".$scnow['height']."'></iframe>";
}


?>