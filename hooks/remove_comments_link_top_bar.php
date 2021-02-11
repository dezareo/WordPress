<?php

/**
** Remove comments link from top WordPress bar 
**/

function dez_remove_comments_link_top_bar() {

	global $wp_admin_bar;

	$wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'dez_remove_comments_link_top_bar');
