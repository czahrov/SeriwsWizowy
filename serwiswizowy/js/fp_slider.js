// sprawdzanie dostępności wymaganych bibliotek
try{
	if( typeof $ !== 'function' ) throw "Brak biblioteki jQuery";
	if( typeof TweenLite !== 'function' ) throw "Brak biblioteki TweenLite GSAP";
	
	$(function(){
		/*
			.fpslider - element główny
			.fpslider[autoplay] - automatyczne przewijanie
			.fpslider[swipe] - włącza swipe
			.fpslider[duration=xxx] - czas trwania animacji [ms]
			.fpslider[delay=xxx] - opóźnienie pomiędzy kolejnymi animacjami [ms]
			.fpslider[min-width=0] - minimalna szerokość ekranu na jakiej slider ma działać
			.fpslider[max-width=null] - maksymalna szerokość ekranu na jakiej slider ma działać
			.fpslider[scroll-with=box] - wartość o jaką ma być przewijany slider [single/int] ( int > 1 - traktowany jako piksele, int <= 1 - traktowany jako procent szerokości boxa )
			.fpslider_view - przewijana warstwa ze slajdami
			.fpslider_slide - pojedynczy slajd
			.fpslider_nav_[next/prev] - przełączanie slajdów następny/poprzedni
			.fpslider_pagin - numer elementu wskazuje na który slajd należy ustawić slider
			
		*/
		(function( slider ){
			slider
			.each( function(){
				var self = $(this);
				var lock = false;
				var itrv = null;
				var current = 0;
				var items = self.find( '.fpslider_slide' );
				var play = false;
				var widthTest = function(){
					return screen.availWidth >= min_width && ( max_width === null || screen.availWidth <= max_width );
					
				};
				
				var autoplay = false;
				var duration = 1000;
				var delay = 3000;
				var min_width = 0;
				var max_width = null;
				var scroll_with = 'single';
				var swipe = false;
				
				self
				.on({
					init: function( e ){
						autoplay = self.attr( 'autoplay' ) !== undefined;
						swipe = self.attr( 'swipe' ) !== undefined;
						duration = self.attr( 'duration' ) === undefined?( duration ):( parseInt( self.attr( 'duration' ) ) );
						delay = self.attr( 'delay' ) === undefined?( delay ):( parseInt( self.attr( 'delay' ) ) );
						min_width = self.attr( 'min-width' ) === undefined?( min_width ):( parseInt( self.attr( 'min-width' ) ) );
						max_width = self.attr( 'max-width' ) === undefined?( max_width ):( parseInt( self.attr( 'max-width' ) ) );
						scroll_with = self.attr( 'scroll-with' ) === undefined?( scroll_with ):( parseInt( self.attr( 'scroll-with' ) ) );
						
						if( autoplay && widthTest() ) self.triggerHandler( 'start' );
						
						$( window )
						.on({
							resize: function( e ){
								if( autoplay ){
									if( widthTest() ){
										self.triggerHandler( 'start' );
										
									}
									else{
										self.triggerHandler( 'stop' );
										
									}
									
								}
								
							},
							
						})
						
					},
					set: function( e ){
						// pozycja do której należy przewinąć "wizjer" ( px )
						var scrollX;
						
						// przewijanie po pojedynczym slajdzie
						if( scroll_with === 'single' ){
							// ilość slajdów biorąc pod uwagę, że na końcu są slajdy, które nie są już dalej przewijane
							var t_items = items.length - Math.floor( self.find( '.fpslider_view' ).outerWidth() / items.first().outerWidth() ) + 1;
							
							if( current < 0 ) current = t_items - 1;
							current %= t_items;
							scrollX = items.eq( current ).position().left + self.find( '.fpslider_view' ).prop( 'scrollLeft' );
							
						}
						else if( typeof scroll_with === 'number' ){
							// przewijanie o daną ilość px
							if( scroll_with > 1 ){
								
							}
							// przewijanie o dany procent szerokości wizjera
							else{
								
							}
							
						}
						
						TweenLite.to(
							self.find( '.fpslider_view' ),
							duration/1000,
							{
								scrollLeft: scrollX,
								ease: Power2.easeInOut,
								onComplete: function(){
									lock = false;
									
								},
								
							}
						);
						
					},
					start: function( e ){
						play = true;
						self.triggerHandler( 'stop' );
						itrv = window.setInterval( function(){
							self.triggerHandler( 'next' );
							
						}, delay );
						
					},
					stop: function( e ){
						play = false;
						window.clearInterval( itrv );
						
					},
					next: function( e ){
						if( !lock ){
							lock = true;
							current++;
							self.triggerHandler( 'set' );
							
						}
						
					},
					prev: function( e ){
						if( !lock ){
							lock = true;
							current--;
							self.triggerHandler( 'set' );
							
						}
						
					},
					mouseenter: function( e ){
						if( autoplay ) self.triggerHandler( 'stop' );
						
					},
					mouseleave: function( e ){
						if( autoplay && widthTest() ) self.triggerHandler( 'start' );
						
					},
					
				});
				
				self
				.find( '.fpslider_nav_next' )
				.click( function( e ){
					self.triggerHandler( 'next' );
					
				} );
				
				self
				.find( '.fpslider_nav_prev' )
				.click( function( e ){
					self.triggerHandler( 'prev' );
				} );
				
				self
				.find( '.fpslider_pagin' )
				.click( function( e ){
					current = $( this ).index();
					self.triggerHandler( 'set' );
					
				} );
				
				self.triggerHandler( 'init' );
				
				if( swipe ){
					
					if( typeof $().swipe !== 'function' ) throw "Brak biblioteki touchSwipe";
						
					self
					.find( '.fpslider_view' )
					.swipe({
						swipeLeft: function( e ){
							self.triggerHandler( 'next' );
							
						},
						swipeRight: function( e ){
							self.triggerHandler( 'prev' );
							
						},
						
					})
					
				}
				
			} );
			
		})
		(
			$( '.fpslider' )
		);
		
	});
	
}
catch( err ){
	console.error( err );
	
}