<?php

//disable autosave option in dashboard posts and pages 
function disableAutoSsave() {

	wp_deregister_script('autosave');
}

add_action( 'wp_print_scripts', 'disableAutoSave');