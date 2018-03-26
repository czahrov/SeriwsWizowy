/*
	
*/
try{
	if( typeof window.$ !== 'function' ) throw "brak biblioteki jQuery";
	
	$(function(){
		
		(function( box, items, opcje ){
			box
			.on({
				init: function( e ){
					
				},
				refresh: function( e ){
					
				},
				add: function( e, id, name, price ){
					$(
						items
						.filter( '[hidden]' )
						.clone()
						.attr({
							hidden: null,
							id: id,
							
						})
						.children( '.name' )
						.text( name )
						.siblings( '.cost' )
						.text( price )
					)
					.insertBefore(
						items
						.filter( '.total' )
						
					);
					
				},
				del: function( e, id ){
					box
					.find( '.wiersz[id="'+ id +'"]' )
					.remove();
					
				},
				
			});
			
			opcje
			.click( function( e ){
				var self = $(this);
				var id_general = self.closest( '.opt-single' ).prevAll( '.opt-single:not(.sub):first' ).children( 'input' ).attr( 'id' );
				
				if( !items.filter( '[id="'+ id_general +'"]' ).length ){
					var name_general = self.closest( '.opt-single' ).prevAll( '.opt-single:not(.sub):first' ).find( '.text' ).text().trim();
					var name_opt = self.next( 'label' ).find( '.text' ).text().trim();
					var price = self.attr( 'price' );
					box.triggerHandler( 'add', [ id_general, name_general + ": " + name_opt, price ] );
					
				}
				
				
			} );
			
		})
		(
			$( '.box-wiza > .mid' ),
			$( '.box-wiza > .mid > .wiersz' ),
			$( '.opcje > form input[price]' )
			
		);
		
	});
	
}
catch( err ){
	window.error( err );
	
}