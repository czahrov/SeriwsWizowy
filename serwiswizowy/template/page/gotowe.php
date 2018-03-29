<?php
	if( empty( $_POST ) ){
		header( "Location:" . home_url( 'kraje' ) );
		exit;
		
	}
	
	$_SESSION['formularz'] = array_merge(
		$_POST,
		$_SESSION['formularz']
		
	);
	
	$formularz = $_SESSION['formularz'];
	
	require get_template_directory() . "/php/PHPMailer/PHPMailer.php";
	require get_template_directory() . "/php/PHPMailer/Exception.php";
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	$mail = new PHPMailer(true);
	try{
		$mail->CharSet = 'utf8';
		$mail->Encoding = 'base64';
		$mail->setLanguage( 'pl', get_template_directory() . "/php/PHPMailer/" );
		
		$mail->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", 'serwiswizowy.pl' );
		if( DMODE ){
			$mail->addAddress( 'sprytne@scepter.pl' );
		}
		else{
			$mail->addAddress( $formularz['Kontakt_-_email'] );
			// $mail->addAddress( 'biuro@serwiswizowy.com' );
		}
		$mail->Subject = sprintf(
			'%s %s złożył(a) wniosek o wizę do: %s',
			$formularz['Imię'],
			$formularz['Nazwisko'],
			$formularz['kraj']
			
		);
		$mail->Body = sprintf(
			'Wniosek o wizę do: %s

Dane osobowe klienta
-----------------------------
Imię/imiona: %s
Nazwisko: %s
Inne nazwiska: %s
Płeć: %s
Urodzony(a): %s, %s, %s
Zamieszkały(a): %s %s, %s %s, %s
Telefon: %s
Email: %s
Status zatrudnienia: %s

Dane Zakładu pracy
-----------------------------
Nazwa: %s
Adres: %s
Telefon: %s
FAX: %s
Email: %s

Paszport
-----------------------------
Miejsce wydania: %s
Numer: %s
Data wydania: %s
Ważny do: %s

Wiza - wybrane opcje
-----------------------------
Rodzaj: %s
Krotność: %s
Pośrednictwo wizowe: tryb %s
Opłata serwisowa: %s
Opłata konsularna: tryb %s
Polisa: %s
Voucher do Rosji: %s

Podróż
-----------------------------
Data wjazdu: %s
Data wyjazdu: %s
Plan podróży:
%s

Dodatkowe informacje
-----------------------------
Ilość wjazdów: %s
Ilość odbytych wizyt: %s
Obywatelstwo Rosji: %s
Posiadał(a) obywatelstwo: %s
Rodzina w Rosji: %s
Posiada ubezpieczenie: %s
Dzieci:
%s

---
Mail wygenerowany automatycznie na stronie %s',
			$formularz['kraj'],
			implode( " ", array( $formularz['Imię'], $formularz['Drugie_imię'] ) ),
			$formularz['Nazwisko'],
			$formularz['Inne_nazwiska'],
			$formularz['Płeć'],
			$formularz['Data_urodzenia'],
			$formularz['Miejsce_urodzenia_-_miejscowość'],
			$formularz['Miejsce_urodzenia_-_kraj'],
			$formularz['Zameldowanie_-_ulica'],
			implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
			$formularz['Zameldowanie_-_kod_pocztowy'],
			$formularz['Zameldowanie_-_miejscowość'],
			$formularz['Zameldowanie_-_kraj'],
			$formularz['Kontakt_-_telefon'],
			$formularz['Kontakt_-_email'],
			$formularz['Status_zatrudnienia'],
			$formularz['Nazwa_zakładu_pracy'],
			$formularz['Adres_zakładu_pracy'],
			$formularz['Telefon_do_zakładu_pracy'],
			$formularz['FAX_Zakładu_pracy'],
			$formularz['E-mail_zakładu_pracy'],
			$formularz['Miejsce_wydania_paszportu'],
			$formularz['Numer_paszportu'],
			$formularz['Data_wydania_paszportu'],
			$formularz['Data_ważności_paszportu'],
			strpos( $formularz['rodzaj_wizy'], 'jedno')?( $formularz['wiza_jednokrotna'] ):(
				strpos( $formularz['rodzaj_wizy'], 'dwu')?( $formularz['wiza_dwukrotna'] ):(  $formularz['wiza_wielokrotna']  )
			),
			$formularz['rodzaj_wizy'],
			$formularz['pośrednictwo_tryb'],
			$formularz['Opłata_serwisowa'],
			$formularz['Opłata_konsularna_tryb'],
			$formularz['Polisa_ubezpieczeniowa'] === 'tak'?( "na {$formularz['Polisa_na_dni']} dni" ):( $formularz['Polisa_ubezpieczeniowa'] ),
			$formularz['Voucher_do_Rosji'] === 'tak'?( "na {$formularz['voucher_na']}" ):( $formularz['Voucher_do_Rosji'] ),
			$formularz['Data_wjazdu_do_Rosji'],
			$formularz['Data_wyjazdu_z_Rosji'],
			$formularz['Trasa_podróży'],
			$formularz['Ilość_wjazdów'],
			$formularz['Dane_dotyczące_poprzednich_wizyt'],
			$formularz['Obywatelstwo_Rosji'],
			$formularz['Posiadał(a)_obywatelstwo_Rosji'],
			$formularz['Posiada_rodzinę_w_Rosji'],
			$formularz['Posiada_Rosyjskie_ubezpiecznie'],
			$formularz['Dzieci'],
			home_url()
			
		);
		
		if( DMODE ) echo "<!--<div>{$mail->Body}</div>-->";
		
		$mail->send();
		
		$mail_status = sprintf(
			'Gratulacje. Twój wniosek został wysłany pomyślnie!<br>
			Na Twój adres e-mail: <a href="mailto:%1$s"><b>%1$s</b></a> wysłaliśmy szczegóły. Sprawdź skrzynkę.<br>
			W razie pytań jesteśmy do dyspozycji.',
			$formularz['Kontakt_-_email']
			
		);
		
	}
	catch( Exception $e ){
		$mail_status = sprintf(
			'Próba wysłania maila zakończyła się niepowodzeniem.<br>Powód: %s',
			$mail->ErrorInfo
			
		);
		
	}
	
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
					<a class='' href='<?php echo home_url( 'kraje' ); ?>'>
						<i class="btn_hover fa fa-angle-left fa-1x arrow-prev" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="box col-md-8 single-page-content">
				<div class='head d-md-none'>
					Pomyślnie wysłano wniosek
				</div>
				<div class='content mr-auto'>
					<?php echo $mail_status; ?>
				</div>
				<div class='kontakt d-flex flex-wrap align-items-center'>
					<img class='img' src='media/ikony/phone.png' />
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
