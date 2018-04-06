$(function(){
	
	// prev link
	(function( btn ){
		btn.click( function( e ){
			window.history.go(-1);
			
		} );
		
	})
	(
		$( 'a.btn_prev' )
	);
	
	// visa select
	(function( select, items ){
		select
		.on({
			change: function( e ){
				var uri = $(this).find( 'option:selected' ).attr( 'uri' );
				if( uri !== undefined ) window.location = uri;
				
			},
			
		});
		
	})
	(
		$( '.visa-select' ),
		$( '.visa-select option' )
	);
	
});