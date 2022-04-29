<?php 

// ---------------------------------------
//! Pagination
/*
	Place between Endwhile & Else in loop
	<?php if (function_exists("pagination")) {
		pagination($[wp_query_variable]->max_num_pages);
	} ?>
	
*/
// ---------------------------------------

function pagination($pages = '', $range = 2) {
	     $showitems = ($range * 2)+1;  
	 
	     global $paged;
	     if(empty($paged)) $paged = 1;
	 
	     if($pages == '')
	     {
	         global $wp_query;
	         $pages = $wp_query->max_num_pages;
	         if(!$pages)
	         {
	             $pages = 1;
	         }
	     }   
	 
	     if(1 != $pages)
	     {
	         //Display Postion + Number of Pages
	         //echo "<span>Page ".$paged." of ".$pages."</span>";
	         
	         echo '<div class="pagination blog-pagination">';
	         
	         //Display Previous Link
	         if($paged > 1){
		        echo '<a href="'.get_pagenum_link($paged - 1).'" class="prev"><svg width="7" height="13" viewBox="0 0 7 13" xmlns="http://www.w3.org/2000/svg"><path d="M2.133 11l3.58-4.095a.5.5 0 000-.658L2 2h0" stroke="#821B21" stroke-width="2.4" fill="none" fill-rule="evenodd" stroke-linecap="round"/></svg>Prev</a>';
		     }else {
			   echo '<a href="'.get_pagenum_link($paged - 1).'" class="prev hidden"><svg width="7" height="13" viewBox="0 0 7 13" xmlns="http://www.w3.org/2000/svg"><path d="M2.133 11l3.58-4.095a.5.5 0 000-.658L2 2h0" stroke="#821B21" stroke-width="2.4" fill="none" fill-rule="evenodd" stroke-linecap="round"/></svg>Prev</a>';
		     }
		   
			//Display Next Link
	        if ($paged < $pages) {
		        echo '<a href="'.get_pagenum_link($paged + 1).'" class="next">Next<svg width="7" height="13" viewBox="0 0 7 13" xmlns="http://www.w3.org/2000/svg"><path d="M2.133 11l3.58-4.095a.5.5 0 000-.658L2 2h0" stroke="#821B21" stroke-width="2.4" fill="none" fill-rule="evenodd" stroke-linecap="round"/></svg></svg></a>';
		    }else {
			    echo '<a href="'.get_pagenum_link($paged + 1).'" class="next hidden">Next<svg width="7" height="13" viewBox="0 0 7 13" xmlns="http://www.w3.org/2000/svg"><path d="M2.133 11l3.58-4.095a.5.5 0 000-.658L2 2h0" stroke="#821B21" stroke-width="2.4" fill="none" fill-rule="evenodd" stroke-linecap="round"/></svg></a>';
		    }

	        echo '</div>';
	        
	     }
	}
