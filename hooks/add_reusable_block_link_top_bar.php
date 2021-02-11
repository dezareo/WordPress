<?php

/* Add Reusable Block link into top WordPress bar
** Notice: this function related to Gutenberg block editor
*/

function dez_add_reusable_block_link_top_bar() {

	global $wp_admin_bar;
	$wp_admin_bar->add_menu( array(
		'id' => 'reusable_blocks',
		'title' => 'Reusable Blocks',
		'href' => 'http://example-website.com/wp-admin/edit.php?post_type=wp_block'
	 ));

}
add_action('wp_before_admin_bar_render', 'dez_add_reusable_block_link_top_bar');
