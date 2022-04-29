<?php 
	
// -----------------------------------------------------------------------------
//! Add Menu
// -----------------------------------------------------------------------------


add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menus( 
	array(
			'primary-menu' => __( 'Primary Menu' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
}


