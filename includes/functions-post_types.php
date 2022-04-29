<?php 

// -----------------------------------------------------------------------------
//! Using Extended CPTs for quick + easy custom post types
//! See https://github.com/johnbillion/extended-cpts/wiki for documentation
// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------
//! News
// -----------------------------------------------------------------------------

register_extended_post_type( 'news', array(
	
	# Change Title Prompt
	'enter_title_here' => 'News Title',
	
	# Change Menu Icon
	'menu_icon' => 'dashicons-megaphone',
	
	#Hierarchical?
	'hierarchical' => false,

	# Archive?
	'has_archive' => true,
	
	# Public?
	'public' => true,
	'show_in_nav_menus' => true,
	
), array(

    # Override the base names used for labels:
    'singular' => 'News',
    'plural'   => 'News',
    'slug'     => 'news'
    
));

