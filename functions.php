<?php

// -----------------------------------------------------------------------------
//! Include Libraries
// -----------------------------------------------------------------------------

	require_once 'includes/extended-cpts/extended-cpts.php';
	require_once 'includes/extended-taxos/extended-taxos.php';	
		
// -----------------------------------------------------------------------------
//! Function Partials
// -----------------------------------------------------------------------------	

	foreach( glob(TEMPLATEPATH . '/includes/{functions-}*.php', GLOB_BRACE ) as $functions_file ) {
		include $functions_file;
	}
	
