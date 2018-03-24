/*
	.fp_pin_dragger - element przyczepiany do górnej krawędzi ekranu
	.fp_pin_rail - element w obrębie którego dragger będzie przesuwany
*/

try{
	if( typeof $ !== 'function' ) throw 'Brak biblioteki jQuery';
	
	$(function(){
		$( '.fp_pin_rail .fp_pin_dragger' )
		.each( function(){
			var self = $(this);
			var rail_min = function(){
				return self.parents( '.fp_pin_rail:first' ).offset().top;
				
			};
			var rail_max = function(){
				return rail_min() + self.parents( '.fp_pin_rail:first' ).outerHeight();
				
			};
			var dragger_min = function(){
				return self.position().top;
				
			};
			var dragger_max = function(){
				return dragger_min() + self.outerHeight();
				
			};
			var view_range_min = function(){
				return $( 'html, body' ).prop( 'scrollTop' );
				
			};
			var view_range_max = function(){
				return view_range_min() + screen.availHeight;
				
			};
			
			if( self.css( 'position' ) === 'static' ){
				self.css( 'position', 'relative' );
			}
			
			$( window )
			.on({
				scroll: function( e ){
					/* console.log({
						dragger:{
							min: dragger_min(),
							max: dragger_max(),
							
						},
						rail:{
							min: rail_min(),
							max: rail_max(),
							
						},
						view:{
							min: view_range_min(),
							max: view_range_max(),
							
						},
						
					}); */
					
					var nTop = view_range_min() - rail_min();
					if( view_range_min() < rail_min() ){
						nTop = 0;

					}
					else if( view_range_min() + ( dragger_max() - dragger_min() ) > rail_max() ){
						nTop = rail_max() - rail_min() - ( dragger_max() - dragger_min() );
						
					}
					
					self
					.css({
						top: nTop,
						
					});
					
				},
				
			});
			
		} );
		
	});
	
}
catch( err ){
	console.error( err );
	
}