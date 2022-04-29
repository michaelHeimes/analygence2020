<?php 
	
// -----------------------------------------------------------------------------
//! jQuery Insert From Google
// -----------------------------------------------------------------------------

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "https" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", false, null);
	wp_enqueue_script('jquery');
}






function analygence_load_scripts() {
	wp_register_script( 'vimeo', 'https://player.vimeo.com/api/player.js', array('wp-mediaelement'), null, true );
	wp_enqueue_script('vimeo');
}

add_action( 'wp_enqueue_scripts', 'analygence_load_scripts' );
