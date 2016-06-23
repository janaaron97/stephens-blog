<?php // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');


function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_menu');



?>