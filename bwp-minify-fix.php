<?php
/*
Plugin Name: BWP Minify Fix
Plugin URI: http://qccreative.com/
Description: Fixes BWP minify conflicts with admin bar styles.
Version: 0.1.0
Author: Josh Lee / QC Creative
Author URI: http://qccreative.com
License: GPLv3
*/
function qccwp_bwp_minify_fix() {
	//Exclude admin bar from bwp minify
	function qccwp_bwp_exclude_css($excluded)
	{
	    //admin-bar and dashicons are from wp
	    //boxes is for WordPress SEO by Yoast
	    //which adds a "score" icon to the admin
	    //bar.
	    $excluded = array('admin-bar','dashicons','boxes');
	    return $excluded;
	}
	add_filter('bwp_minify_style_ignore', 'qccwp_bwp_exclude_css');
}
add_action( 'init', 'qccwp_bwp_minify_fix' );
