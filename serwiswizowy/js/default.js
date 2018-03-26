$(function(){
	
	// prev link
	(function( btn ){
		btn.click( function( e ){
			window.history.go(-1);
			
		} );
		
	})
	(
		$( 'a.btn_prev' )
	)
	
});