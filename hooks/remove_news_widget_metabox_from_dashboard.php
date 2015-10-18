<?php

//hoo who remove new widget from WP dashboard

function remove_dashboard_widget() {
      remove_meta_box( 'dashboard_primary', 'dashboard', 'post_container_1');
}

add_action( 'admin_init', 'remove_dashboard_widget');