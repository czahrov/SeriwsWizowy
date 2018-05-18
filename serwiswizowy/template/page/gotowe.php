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
		
		// mail z danymi
		$mail->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", 'serwiswizowy.com' );
		if( DMODE ){
			$mail->addAddress( 'sprytne@scepter.pl' );
		}
		else{
			// $mail->addAddress( $formularz['Kontakt_-_email'] );
			$mail->addAddress( 'serwiswizowy@serwiswizowy.com' );	
		}
		
		$mail->Subject = sprintf(
			'%s %s złożył(a) wniosek o wizę do: %s',
			$formularz['Imię'],
			$formularz['Nazwisko'],
			$formularz['kraj']
			
		);
		
		$base = get_template_directory() . "/php/mail/";
		if( file_exists( $base . "{$formularz['kraj']}.php" ) ){
			require $base . "{$formularz['kraj']}.php";
			
		}
		elseif( $base . "std.php" ){
			require $base . "std.php";
			
		}
		else return false;
		
		if( DMODE ) echo "<!--<div>{$mail->Body}</div>-->";
		
		/* XML */
		
		// ładowanie tekstu XML z szablonu
		// generowanie pliku XML
		// zapisywanie do tymczasowego pliku
		// załączanie pliku do maila
		// wysyłka maila
		// kasowanie pliku XML
		
		$base = get_template_directory() . "/php/xml/";
		if( file_exists( $base . "{$formularz['kraj']}.php" ) ){
			require $base . "{$formularz['kraj']}.php";
			
		}
		elseif( $base . "std.php" ){
			require $base . "std.php";
			
		}
		
		// $xml = new SimpleXMLElement( $xml_note );
		$file_dir = sprintf( '%s/tmp/', __DIR__ );
		$file_name = sprintf( 'tmp_%s.xml', time() );
		$file_path = sprintf( '%s%s', $file_dir, $file_name );
		
		if( !file_exists( $file_dir ) ) mkdir( $file_dir, 755, true );
		
		$file = fopen( $file_path, 'w' );
		fwrite( $file, $xml->asXML() );
		fclose( $file );
		$mail->addAttachment( $file_path, 'formularz.xml' );
		
		/* /XML */
		
		if( DMODE ){
			printf(
				'<!--
				%s
				-->',
				file_get_contents( $file_path )
				
			);
			
			$mail->send();
			unlink( $file_path );
			
		}
		else{
			$mail->send();
			unlink( $file_path );
			
		}
		
		$mail_status = sprintf(
			'Gratulacje. Twój wniosek został wysłany pomyślnie!<br>
			Na Twój adres e-mail: <a href="mailto:%1$s"><b>%1$s</b></a> wysłaliśmy szczegóły. Sprawdź skrzynkę.<br>
			W razie pytań jesteśmy do dyspozycji.',
			$formularz['Kontakt_-_email']
			
		);
		
		
		
		// mail zwrotny do klienta
		$mail->clearAddresses();
		$mail->clearAttachments();
		
		if( DMODE ){
			$mail->addAddress( 'sprytne@scepter.pl' );
		}
		else{
			$mail->addAddress( $formularz['Kontakt_-_email'] );
		}
		
		$mail->Subject = sprintf(
			'Potwierdzenie przyjęcia wniosku o wizę do: %s',
			$formularz['kraj']
		);
		
		$mail->Body = sprintf(
'Szanowny Kliencie, dziękujemy za skorzystanie z usług z serwiswizowy.com
Twoje zgłoszenie zostało zarejestrowane.

W celu realizacji zgłoszenia prosimy o uregulowanie płatności:

%s

Numer rachunku bankowego: %s,
Dane do przelewu: Filmar sp zoo, ul. Człuchowska 74/15, 01-360 Warszawa 
Tytuł przelewu: %s %s/%s

Po zaksięgowaniu opłaty otrzymasz od nas drogą elektroniczną wniosek wizowy, który należy przeczytać i podpisać, przygotować dokumenty oraz przesłać je do nas ( w zależności od wybranej formy dostarczenia ).

Jeśli masz jakiekolwiek pytania prosimy o kontakt telefoniczny lub mailowy:
%s

Pozdrawiamy serdecznie,
zespół serwiswizowy.com

---
Mail wygenerowany automatycznie na %s',
			implode( "\r\n", $formularz['koszt'] ),
			get_post_meta( 14, 'konto_bankowe', true ),
			$formularz['Imię'],
			$formularz['Nazwisko'],
			$formularz['kraj'],
			strip_tags( get_post_meta( 14, 'kontakt', true ) ),
			home_url()
			
		);
		
		if( DMODE ){
			$mail->send();
			
		}
		else{
			$mail->send();
			
		}
		
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
	<!--
	<?php
		if( DMODE ) print_r( $_SESSION );
	?>
	-->
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
					<h3>Wysyłka wniosku</h3>
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
							<a href='mailto:serwiswizowy@serwiswizowy.com'>
								serwiswizowy@serwiswizowy.com
							</a>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
</div>
