try{
	if( typeof $ !== 'function' ) throw "Brak biblioteki jQuery";
	
	(function( form, fakeSubmit, submit ){
		fakeSubmit.click( function(){
			submit.click()
			
		} );
		
	})(
		$( '#kontakt_form' ),
		$( '#kontakt_form .msg-button' ),
		$( '#kontakt_form input[type="submit"]' )
		
	);
	
}
catch( err ){
	console.error( err );
	
}