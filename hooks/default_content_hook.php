<?php

//Hook to display default text in WP visual editor
function my_editor_content ( $content ){

	$content = "If you enjoyed this post, make sure to subscribe to my rss feed.";
	return $content;
}

add_filter('default_content', 'my_editor_content');