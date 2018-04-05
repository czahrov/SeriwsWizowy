/*
	
*/
try{
	if( typeof window.$ !== 'function' ) throw "brak biblioteki jQuery";
	
	$(function(){
		
		(function( box, form, pin ){
			var items = function(){
				return box.children( '.wiersz' );
			};
			var opcje = function(){
				return form.find( 'input[price]' );
			};
			
			box
			.on({
				init: function( e ){
					box.triggerHandler( 'refresh' );
					
				},
				refresh: function( e ){
					// czyszczenie listy wybranych opcji
					items()
					.filter( ':not(.total):not([hidden])' )
					.remove();
					
					// generowanie aktualnej listy wybranych opcji
					var price_total = 0;
					
					opcje()
					.filter( ':checked' )
					.each( function(){
						price_total += box.triggerHandler( 'add', $(this) ).price;
						
					} );
					
					items()
					.filter( '.total' )
					.children( '.cost' )
					.text( price_total );
					
					$( '#price .cost' )
					.text( price_total );
					
				},
				add: function( e, item ){
					var id_general = $( item ).closest( '.opt-single' ).prevAll( '.opt-single:not(.sub):first' ).children( 'input' ).attr( 'id' );
					var name_general = $( item ).closest( '.opt-single' ).prevAll( '.opt-single:not(.sub):first' ).find( '.text' ).text().trim();
					var name_opt = $( item ).next( 'label' ).find( '.text' ).text().trim();
					var price = $( item ).attr( 'price' );
					
					var proto = items()
					.filter( '[hidden]' )
					.clone();
					
					proto
					.attr({
						hidden: null,
						id: 'side_' + id_general,
						
					})
					.children( '.name' )
					.html( name_general + ":<br>" + name_opt )
					.siblings( '.cost' )
					.html( price )
					
					proto
					.insertBefore(
						items()
						.filter( '.total' )
						
					);
					
					return{
						price: parseInt( price ),
						
					};
					
				}
				
			});
			
			form
			.on( 'change', 'input', function( e ){
				box.triggerHandler( 'refresh' );
				
			} );
			
			box.triggerHandler( 'init' );
			
		})
		(
			$( '.box-wiza > .mid' ),
			$( '.opcje > form' ),
			$( '.wiza.wniosek > #price' )
			
		);
		
	});
	
}
catch( err ){
	window.error( err );
	
}