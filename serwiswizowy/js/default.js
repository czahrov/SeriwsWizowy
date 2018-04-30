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
	
	// dodawanie cen do formularza
	(function( form, subBtn, tabela ){
		
		subBtn.on({
			click: function( e ){
				// e.preventDefault();
				
				tabela
				.children( '.wiersz:gt(0)' )
				.each( function(){
					// console.log( $(this) );
					var value = [ $(this).children( '.name' ).text().trim().replace( ':', ' - ' ), $(this).children( '.cost' ).text().trim() + ' zł' ].join( ': ' );
					form
					.append( "<input type='hidden' name='koszt[]' value='"+ value +"'>" );
					
				} );
				
				console.log( form.serializeArray() );
				
			},
			
		});
		
	})
	(
		$( '.wiza.wniosek .opcje form' ),
		$( '.wiza.wniosek .opcje form button[type="submit"]' ),
		$( '.wiza.wniosek .main .side .box-wiza .mid' )
	);
	
});