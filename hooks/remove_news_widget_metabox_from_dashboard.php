<?php

//Remove news widget from WordPress dashboard

function dez_remove_dashboard_widget() {
      remove_meta_box( 'dashboard_primary', 'dashboard', 'side');
}

add_action( 'wp_dashboard_setup', 'dez_remove_dashboard_widget');
