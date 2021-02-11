<?php

/** 
** Remove + new link from top WordPress bar 
**/

function dez_remove_plus_new_link_top_bar() {

	global $wp_admin_bar;

	$wp_admin_bar->remove_menu('new-content');
}
add_action('wp_before_admin_bar_render', 'dez_remove_plus_new_link_top_bar');
