<?php
	if( DMODE ){
		echo "index";
		
	}
	else{
		header( "Location:" . home_url() );
		
	}
	
?>
