try{
	if( typeof $ !== 'function' ) throw 'Brak biblioteki jQuery';
	
	/*
		Funkcja zwijajaca/rozwijająca dodatkowe pola w formularzu
	*/
	
	$( 'form' )
	.each( function(){
		var self = $(this);
		var items = self.find( '.opt-single' );
		
		var items_hidder = ( fast ) => {
			// ukrywanie opcji dodatkowych
			items
			.not( '.sub' )
			.find( 'input' )
			.not( ':checked' )
			.each( function(){
				var id = $(this).attr( 'id' );
				
				var to_hide = items
				.find( 'input[id^="'+id+'-"]' )
				.prop( 'checked', false )
				.closest( '.opt-single' )
				
				if( fast === true){
					to_hide.hide();
					
				}
				else{
					to_hide.fadeOut();
					
				}
				
			} );
			
		};
		
		items_hidder( true );
		
		// przełączanie widoczności
		items
		.not( '.sub' )
		.find( 'input' )
		.change( function( e ){
			var id = $(this).attr( 'id' );
			
			items
			.find( 'input[id^="' + id + '-"]' )
			.closest( '.opt-single' )
			.fadeIn();
			
			items_hidder();
			
		} );
		
	} );
	
}
catch( err ){
	console.error( err );
	
}