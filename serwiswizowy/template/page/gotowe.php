<?php
	$_SESSION['formularz'] = array_merge(
		$_POST,
		$_SESSION['formularz']
		
	);
	
?>
<?php printBreadcrumb(); ?>
<div class="white-page wiza gotowe">
	<div class="">
		<div class="view-steps d-flex flex-md-wrap">
			<div class="kraj p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
				<div class="icon-info"></div>
				<p>Wyszukaj kraj do którego potrzebujesz wizy</p>
			</div>
			<div class="opcje p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
				<div class="icon-info"></div>
				<p>Wybierz odpowiednie opcje i przejdź do nastepnego kroku</p>
			</div>
			<div class="wniosek p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
				<div class="icon-info"></div>
				<p>Wypełnij wniosek, a następnie kliknij przycisk "wyślij"</p>
			</div>
			<div class="gotowe p-2 step1-home d-flex align-items-center justify-content-around col-12 col-lg-3 active">
				<div class="icon-info"></div>
				<p>Gotowe! Na Twoją skrzynkę wysyłamy e-mail</p>
			</div>
		</div>
		<div class="main d-flex flex-wrap">
			<!--
			<?php print_r( $_SESSION['formularz'] ); ?>
			-->
			<div class="col-md-4 d-none d-md-block">
				<div class="box-single-page">
					<h3>Pomyślnie wysłano wniosek</h3>
					<a class='btn_prev'>
						<i class="btn_hover fa fa-angle-left fa-1x arrow-prev" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="box col-md-8 single-page-content">
				<div class='head d-md-none'>
					Pomyślnie wysłano wniosek
				</div>
				<div class='content mr-auto'>
					Gratulacje. Twój wniosek został wysłany pomyślnie!<br>
					Na Twój adres e-mail: <a href='mailto:mail@mail.com'><b>mail@mail.com</b></a> wysłaliśmy szczegóły. Sprawdź skrzynkę.<br>
					W razie pytań jesteśmy do dyspozycji.
					
				</div>
				<div class='kontakt d-flex flex-wrap align-items-center'>
					<img class='img' src='img/ikony/phone.png' />
					<div class='text d-flex flex-column align-items-between'>
						<div class='cell'>
							<a href='tel:+22241222444'>
								+22 241 222 444
							</a>
						</div>
						<div class='cell'>
							<a href='mailto:biuro@serwiswizowy.com'>
								biuro@serwiswizowy.com
							</a>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
</div>
