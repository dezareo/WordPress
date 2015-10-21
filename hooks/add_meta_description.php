<?php

//add meta description in <head></head> of header.php

function hook_meta_description() {

	echo '<meta name="description" content="This is meta description for this page." />' . "";
}

add_action ('wp_head', 'hook_meta_description');

/* add <?php do_action('wp_head'); ?>
* in <head></head> section of your header.php file
*/