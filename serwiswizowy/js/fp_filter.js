try{
	if( typeof $ !== 'function' ) throw "Brak biblioteki jQuery";
	
	$( '#country-filter' )
	.on({
		keypress: function( e ){
			var word = $(this).val();
			
			if( word.length > 0 ){
				var match = $( '.country-single .title > *' )
				.filter( function(){ 
					return new RegExp( word.toLowerCase() ).test( $(this).text().toLowerCase() );
					
				} );
				
				match
				.closest( '.country-single' )
				.css({
					opacity: 1,
					
				})
				.fadeIn();
				
				$( '.country-single .title > *' )
				.not( match )
				.closest( '.country-single' )
				.fadeOut();
				
			}
			else{
				$( '.country-single' ).fadeIn();
				
			}
			
		},
		keyup: function(){
			$(this).triggerHandler( 'keypress' );
			
		},
		
	});
	
}
catch( err ){
	console.error( err );
	
}
