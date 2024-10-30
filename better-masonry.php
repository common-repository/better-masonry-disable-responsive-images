<?php
/*
Plugin Name: 	Better Masonry (Disable Responsive Images)
Plugin URI: 	http://wpmasters.org/make-it-easy
Description: 	Enable to disable srcset :) It is necessary to disable default responsive images sometimes, especially in older themes. This plugin will make it easy. 
Author: 		Dannci
Author URI: 	http://wpmasters.org/
Version: 		1.1
License:		GPL2+
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function better_masonry_disable_srcset( $sources ) {return false;}
add_filter( 'wp_calculate_image_srcset', 'better_masonry_disable_srcset' );

?>
