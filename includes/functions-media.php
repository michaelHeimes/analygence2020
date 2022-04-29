<?php 
	
// -----------------------------------------------------------------------------
//! Featured Images
// -----------------------------------------------------------------------------

add_theme_support('post-thumbnails', array('page','post') );


// -----------------------------------------------------------------------------
//! Image Sizes
// -----------------------------------------------------------------------------
add_image_size( 'project', 842, 540, true);
add_image_size( 'hero', 1440, 550, true);
add_image_size( 'leader', 200, 300, true);
add_image_size( 'sidebar', 408, 9999, true);



// -----------------------------------------------------------------------------
//! Use Relative Image Links instead of full path when uploading
// -----------------------------------------------------------------------------

add_filter('get_image_tag', 'theme_get_image_tag');
function theme_get_image_tag($html) 
{
    return str_replace(get_bloginfo('url'), '', $html);
}

