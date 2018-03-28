<?php
	$uwaga = get_post_meta( get_post()->ID, 'uwaga', true );
	$faq = get_post_meta( get_post()->ID, 'faq', true );
	$informacje = get_post_meta( get_post()->ID, 'informacje', true );
	
?>
<div class="white-page wiza wniosek">
<div class="">
	<div class="view-steps d-flex flex-md-wrap">
		<div class="kraj p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
			<div class="icon-info"></div>
			<p>Wyszukaj kraj do którego potrzebujesz wizy</p>
		</div>
		<div class="opcje p-2 step1-home d-flex align-items-center justify-content-around col-12 col-lg-3 active">
			<div class="icon-info"></div>
			<p>Wybierz odpowiednie opcje i przejdź do nastepnego kroku</p>
		</div>
		<div class="wniosek p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
			<div class="icon-info"></div>
			<p>Wypełnij wniosek, a następnie kliknij przycisk "wyślij"</p>
		</div>
		<div class="gotowe p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
			<div class="icon-info"></div>
			<p>Gotowe! Na Twoją skrzynkę wysyłamy e-mail</p>
		</div>
	</div>
	<div class="main d-flex flex-wrap">
		<div class="side col-md-4 d-none d-md-block fp_pin_rail">
			<div class="box-wiza fp_pin_dragger">
				<div class='top'>
					<h4 class=''><?php printf( "Wiza do: %s", get_post()->post_title ); ?></h4>
				</div>
				<div class='mid'>
					<div class='wiersz d-none d-lg-flex' hidden>
						<div class='name col d-flex align-items-center'></div>
						<div class='cost d-flex align-items-center justify-content-center'></div>
						
					</div>
					<div class='wiersz total d-flex flex-wrap'>
						<div class='name col-12 col-lg d-flex align-items-center'>
							Całkowity koszt
						</div>
						<div class='cost col-12 col-lg-auto d-flex align-items-center justify-content-center'>---</div>
					
					</div>
				</div>
			</div>
		</div>
		<div class="box col-md-8 single-page-content">
			<div class='opcje'>
				<h4 class='page-title'>
					Wybierz interesujące Cię opcje
				</h4>
				<form method='post' action='<?php echo home_url( 'formularz' ); ?>' class='d-flex flex-wrap'>
					<?php genWizaOpts(); ?>
					<input type='hidden' name='kraj' value='<?php echo get_post()->post_title; ?>'>
					<button type='submit' class="msg-button ml-auto">
						<a class="hit-box"></a>
						<p class="msg-btn">
							Przejdź do kolejnego kroku
						</p>
						<i class="fa fa-angle-right fa-1x arrow-send"></i>
					</button>
				</form>
				
			</div>
			<?php if( !empty( $uwaga ) ): ?>
			<div class='uwaga'>
				<h4 class='page-title'>
					Uwaga!
				</h4>
				<div class='text'>
					<?php echo $uwaga; ?>
				</div>
				
			</div>
			<?php endif; ?>
			<?php if( !empty( $faq ) ): ?>
			<div class='opis'>
				<h4 class='page-title'>
					FAQ
				</h4>
				<div class='text'>
					<?php echo apply_filters( 'the_content', $faq ); ?>
					
				</div>
				
			</div>
			<?php endif; ?>
			<?php if( !empty( $informacje ) ): ?>
			<div class="informacje d-flex flex-wrap align-items-center">
				<h4 class='page-title col-12'>
					Informacje
				</h4>
				<ul class="accordion col-12">
					<?php foreach( explode( "\n", trim( $informacje ) ) as $line ): ?>
					<li>
						<?php
							$part = explode( "|", $line );
						?>
						<a><?php echo $part[ 0 ]; ?></a>
						<p><?php echo $part[ 1 ]; ?></p>
					</li>
					<?php endforeach; ?>
					
				</ul>
				<!-- / accordion -->
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
</div>
