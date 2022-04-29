<?php 

// -----------------------------------------------------------------------------
//! Title Tags
// -----------------------------------------------------------------------------

function analygence_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'analygence_setup' );


// -----------------------------------------------------------------------------
//! Add Body Class
// -----------------------------------------------------------------------------	
	
add_filter('body_class', 'add_section_to_body_class');

function add_section_to_body_class($classes){
	global $post;
	
	if( is_object( $post ) ) {
		if($post->post_type == "page" && $post->post_parent){
			$ancestors = array_reverse(get_post_ancestors($post));
			
			if($ancestors) $classes[] = 'section-' . $ancestors[0];
		}
		elseif($post->post_type == "page" && $post->post_parent == 0){
			$classes[] = 'section-' . $post->ID;
		}
	}
	return $classes;
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );



// -----------------------------------------------------------------
//! Remove Emoji stuff 
// -----------------------------------------------------------------
	
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	add_filter( 'emoji_svg_url', '__return_false' );

