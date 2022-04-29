<?php	
// -----------------------------------------------------------------------------
//! Remove Less-than-useful Dashboard Widgets
// -----------------------------------------------------------------------------
	
	add_action( 'wp_dashboard_setup', 'remove_default_dashboard_widgets' );
	function remove_default_dashboard_widgets() {
		global $wp_meta_boxes;
		
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
	}

// -----------------------------------------------------------------------------
//! Remove Some Sidebar Menu Items that are often confusing to clients
// -----------------------------------------------------------------------------
	
	
	function remove_menus_not_in_use(){
		
		//Remove Menus
		//remove_menu_page( 'edit.php' );               	//Posts
		remove_menu_page( 'edit-comments.php' );      	//Comments
		//remove_menu_page( 'tools.php' );					//Tools
		//remove_menu_page( 'themes.php' );					//Appearance
		//remove_menu_page( 'plugins.php' );          		//Plugins
		//remove_menu_page( 'edit.php?post_type=acf-field-group' ); 	//Custom Fields
				
		//Remove Submenus
		$page = remove_submenu_page( 'themes.php', 'theme-editor.php' );
		//$page = remove_submenu_page( 'themes.php', 'themes.php' );
		//$page = remove_submenu_page( 'index.php', 'update-core.php' );
		
		// Remove Customize
		global $submenu;
		unset($submenu['themes.php'][6]); 
	  
	}
	add_action( 'admin_menu', 'remove_menus_not_in_use', 999 );


// -----------------------------------------------------------------------------
//! Remove Comments From Other Places
// -----------------------------------------------------------------------------

	// Removes from post and pages
	add_action('init', 'remove_comment_support', 100);
	
	function remove_comment_support() {
	    remove_post_type_support( 'post', 'comments' );
	    remove_post_type_support( 'page', 'comments' );
	}
	// Removes from admin bar
	function mytheme_admin_bar_render() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('comments');
	}
	add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
	

// -----------------------------------------------------------------------------
//! Remove Some Admin Bar Items
// -----------------------------------------------------------------------------

	// Customize links
	add_action( 'wp_before_admin_bar_render', function() {
		global $wp_admin_bar;
		
		// Ditch the WP Links
		$wp_admin_bar->remove_menu( 'wp-logo' );
		
		
	} );


	
// -----------------------------------------------------------------------------
//! Login Customization
// -----------------------------------------------------------------------------

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/build/admin/logo.png);
            background-size:280px 23px;
            width:280px;
            height:23px;
        }
        #login form {
	        background: #821B21;
	        border-radius: 3px;
				
        }
        #login form label {
	        color:#fff;
        }
		#login form input[type='text']:focus,
		#login form input[type='password']:focus{
			box-shadow: 0 1px 0 #821B21;
			border-color: #6A0D12;
		}
        #login form input[type='submit']{
	        color:#262b38;
	        background:#fff;
	        text-shadow: none;
	        border-color:#6A0D12;
	        box-shadow: 0 1px 0 #6A0D12;
        }
        #login #login_error, #login .message {
	        border-color:#821B21;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Return to Homepage';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


// -----------------------------------------------------------------------------
//! Preview ACF
// -----------------------------------------------------------------------------

/*
   Debug preview with custom fields
   Taken from: http://support.advancedcustomfields.com/forums/topic/preview-solution/
   See also: http://support.advancedcustomfields.com/forums/topic/2nd-every-other-post-preview-throws-notice/
*/
add_filter('_wp_post_revision_fields', 'add_field_debug_preview');
function add_field_debug_preview($fields){
   $fields["debug_preview"] = "debug_preview";
   return $fields;
}
add_action( 'edit_form_after_title', 'add_input_debug_preview' );
function add_input_debug_preview() {
   echo '<input type="hidden" name="debug_preview" value="debug_preview">';
}