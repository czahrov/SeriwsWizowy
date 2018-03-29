<?php
	if( empty( $_POST ) ){
		header( "Location:" . home_url( 'kraje' ) );
		exit;
		
	}
	
	$_SESSION[ 'formularz' ] = $_POST;
	
	$informacja = get_post_meta( get_post()->ID, 'informacja', true );
	$opis = get_post_meta( get_post()->ID, 'opis', true );
	
?>
<?php printBreadcrumb(); ?>
<!--
<?php if( DMODE ) print_r( $_POST ); ?>
-->
<div class="white-page wiza formularz">
	<div class="d-flex flex-column">
		<div class="view-steps d-flex flex-md-wrap">
			<div class="kraj p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
				<div class="icon-info"></div>
				<p>Wyszukaj kraj do którego potrzebujesz wizy</p>
			</div>
			<div class="opcje p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
				<div class="icon-info"></div>
				<p>Wybierz odpowiednie opcje i przejdź do nastepnego kroku</p>
			</div>
			<div class="wniosek p-2 step1-home d-flex align-items-center justify-content-around col-12 col-lg-3 active">
				<div class="icon-info"></div>
				<p>Wypełnij wniosek, a następnie kliknij przycisk "wyślij"</p>
			</div>
			<div class="gotowe p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
				<div class="icon-info"></div>
				<p>Gotowe! Na Twoją skrzynkę wysyłamy e-mail</p>
			</div>
		</div>
		<div class="main d-flex flex-wrap">
			<div class="col-md-4 d-none d-md-block">
				<div class="box-single-page">
					<?php
						printf(
							'<h3>Wiza do %s - formularz</h3>',
							$_POST[ 'kraj' ]
						);
						
					?>
					<a class='' href='<?php echo home_url( 'kraje' ); ?>'>
						<i class="btn_hover fa fa-angle-left fa-1x arrow-prev" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="box col-md-8 single-page-content">
				<h4 class='head d-md-none'>
					<?php
						printf(
							'Wiza do %s - formularz',
							$_POST[ 'kraj' ]
						);
						
					?>
				</h4>
				<div class='text col'>
					<?php echo apply_filters( 'the_content', $opis ); ?>
				</div>
				
			</div>
			
		</div>
		<form method='post' action='<?php echo home_url( 'gotowe' ); ?>'>
			<?php genWizaDane(); ?>
			<button type='submit' class="msg-button ml-auto d-flex align-items-center">
				<a class="hit-box"></a>
				<p class="msg-btn">
					Wyślij wniosek
				</p>
				<i class="fa fa-angle-right fa-1x arrow-send"></i>
			</button>
			
		</form>
		
		<?php if( !empty( $informacja ) ): ?>
		<div class="opis">
			<h4 class="">
				Co potem?
			</h4>
			<div class="text">
				<?php echo apply_filters( 'the_content', $informacja ); ?>
			</div>
			
		</div>
		<?php endif; ?>
		
	</div>
</div>
<!-- container -->