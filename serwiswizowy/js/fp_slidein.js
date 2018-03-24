/*
	.fp_slidein - klasa elementów, które mają być animowane
*/

try{
	if( typeof $ !== 'function' ) throw 'Brak biblioteki jQuery';
	if( typeof TweenLite !== 'function' ) throw 'Brak biblioteki TweenLite';
	
	$(function(){
		$( '.fp_slidein' ).each( function(){
			var self = $(this);
			var page_position_top = function(){
				return $( 'body, html' ).prop( 'scrollTop' );
				
			};
			var view_range_min = function(){
				return page_position_top();
				
			};
			var view_range_max = function(){
				return page_position_top() + screen.availHeight;
				
			};
			var item_position_min = function(){
				return self.offset().top;
				
			};
			var item_position_max = function(){
				return self.offset().top + self.outerHeight(true);
				
			};
			
			if( item_position_max() > view_range_max() ){
				self
				.attr( 'fp_wait', '' );
				
				TweenLite.set(
					self,
					{
						opacity: 0,
					}
				);
				
			}
			
			$( window ).on({
				scroll: function( e ){
					
					if( typeof self.attr( 'fp_wait' ) !== 'undefined' && item_position_max() <= view_range_max() ){
						
						/* console.info({
							item: self,
							item_pos_max: item_position_max(),
							view_range_max: view_range_max(),
							
						}); */
						
						self.attr( 'fp_wait', null );
						
						TweenLite.fromTo(
							self,
							.5,
							{
								opacity: 0,
								y: 100,
								
							},
							{
								opacity: 1,
								y: 0,
								ease: Power4.easeOut,
								onStart: function(){
									// console.log( self );
									
								},
								
							}
							
						);
						
					}
					
				}
				
			});
			
		} );
		
	});
	
}
catch( err ){
	console.error( err );
	
}