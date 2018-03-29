<?php
	require get_template_directory() . "/php/PHPMailer/PHPMailer.php";
	require get_template_directory() . "/php/PHPMailer/Exception.php";
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	if( !empty( $_POST ) ){
		
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
			$mail->AddReplyTo( $_POST['mail'], "{$_POST['imie']} {$_POST['nazwisko']}" );
			$mail->Subject = sprintf(
				'%s przesyła pytanie',
				$_POST['imie']
				
			);
			$mail->Body = sprintf(
				'Formularz kontaktowy
--------------------------
%s %s
email: %s
telefon kontaktowy: %s

Wiadomość:
%s

---
Wiadomość wygenerowana automatycznie na stronie %s',
				$_POST['imie'],
				$_POST['nazwisko'],
				$_POST['mail'],
				$_POST['tel'],
				$_POST['message'],
				home_url( 'kontakt' )
				
			);
			
			if( DMODE ) echo "<!--<div>{$mail->Body}</div>-->";
			
			$mail->send();
			
			$mail_status = "<div id='msg' class='d-flex justify-content-center ok'>Mail został wysłany pomyślnie</div>";
			
		}
		catch( Exception $e ){
			$mail_status = sprintf(
				"<div id='msg' class='d-flex justify-content-center err'>Próba wysłania maila zakończyła się niepowodzeniem.<br>Powód: %s</div>",
				$mail->ErrorInfo
				
			);
			
		}
		
	}
	
	if( DMODE ){
		echo "<!--<div>";
		print_r( $_POST );
		echo "</div>-->";
		
	}
	
	$kontakt = get_post_meta( get_post()->ID, 'kontakt', true );
	$adresowe = get_post_meta( get_post()->ID, 'dane_adresowe', true );
	$konto = get_post_meta( get_post()->ID, 'konto_bankowe', true );
	
?>
<?php printBreadcrumb(); ?>
<div class="white-page kontakt">
	<div class="container">
		<div class="page-title">
			<h3>Skontaktuj się z nami</h3>
		</div>
	</div>
	<!-- container -->
	<?php
		if( isset( $mail_status ) ) echo $mail_status;
	?>
	<div class="violet-bg">
		<div class="container">
			<div class="box d-flex justify-content-between flex-wrap fast-contact">
				<div class="page-title col-12 col-lg  d-flex align-items-center">
					<h3>Szybki kontakt</h3>
				</div>
				<!-- / page-title col-12 col-md-3 -->
				<div class="content col-12 col-md-4 col-lg d-flex">
					<div class="contact-icon">
						<img src="/media/ikony/phone_white.png">
					</div>
					<div class="contact-content">
						<h4>Kontakt</h4>
						<?php echo apply_filters( 'the_content', $kontakt ); ?>
					</div>
				</div>
				<!-- / col-12-->
				<div class="content col-12 col-md-4 col-lg d-flex">
					<div class="contact-icon">
						<img src="/media/ikony/pin.png">
					</div>
					<div class="contact-content">
						<h4>Dane adresowe</h4>
						<?php echo apply_filters( 'the_content', $adresowe ); ?>
					</div>
				</div>
				<!-- / col-12-->
				<div class="content col-12 col-md-4 col-lg d-flex">
					<div class="contact-icon">
						<img src="/media/ikony/cards.png">
					</div>
					<div class="contact-content">
						<h4>Konto bankowe</h4>
						<?php echo apply_filters( 'the_content', $konto ); ?>
					</div>
				</div>
				<!-- / col-12-->
			</div>
			<!-- / box d-flex justify-content-between flex-wrap fast-contact -->
		</div>
		<!-- / container -->
	</div>
	<!-- / violet-bg -->
	<div class="container">
		<div class="box d-flex justify-content-between flex-wrap">
			<div class="section-title page-title col-12 col-md-3 contact-section-title">
				<h3>Formularz kontaktowy</h3>
				<p>Masz pytanie? Wyślij do nas wiadomość</p>
			</div>
			<!-- / page-title col-12 col-md-3 -->
			<div class="formularz page-title col-12 col-md-9 contact-form-section-title  d-flex align-items-center no-gutters">
				<form id='kontakt_form' class="d-flex flex-wrap" method='post'>
					<div class="form-single flex-column d-flex col-12 col-md-6">
						<label for="name">Imię</label>
						<input type="text" id="imie" name="imie"  required pattern='[a-zęóąśżźćńA-ZĘÓĄŚŁŻŹĆŃ \-]+' title='Dozwolone znaki to: litery, myślinki oraz spacje'>
					</div>
					<div class="form-single flex-column d-flex col-12 col-md-6">
						<label for="name">Nazwisko</label>
						<input type="text" id="nazwisko" name="nazwisko" required pattern='[a-zęóąśżźćńA-ZĘÓĄŚŁŻŹĆŃ \-]+' title='Dozwolone znaki to: litery, myślinki oraz spacje'>
					</div>
					<div class="form-single flex-column d-flex col-12 col-md-6">
						<label for="name">Numer telefonu</label>
						<input type="text" id="tel" name="tel" required pattern='^(\d+[ \-]?)+$' title='Dozwolone znaki to: cyfry, myślniki oraz spacje'>
					</div>
					<div class="form-single flex-column d-flex col-12 col-md-6">
						<label for="name">Adres e-mail</label>
						<input type="text" id="mail" name="mail" required pattern='^\w+@\w+\.\w+$' title='Format pola: [nazwa użytkownika]@[domena], np: jan.kowalski@hog.xom'>
					</div>
					<div class="form-single flex-column d-flex col-12">
						<label for="name">Treść Twojej wiadomości</label>
						<textarea name="message" id="message" required pattern='^[^<>]+$' title='Niedozwolone znaki: > oraz <'></textarea>
					</div>
					<button class="msg-button ml-auto" type='submit'>
						<a class="hit-box"></a>
						<p class="msg-btn"> wyślij wiadomość</p>
						<i class="fa fa-angle-right fa-1x arrow-send"></i>
					</button>
					
					<!-- / d-flex flex-wrap col -->
				</form>
				
			</div>
			<!-- / page-title col-12 col-md-3 -->
		</div>
		<div class="box d-flex justify-content-between flex-wrap">
			<div class="section-title page-title col-12 col-md-3 contact-section-title">
				<h3>Jak dojechać?</h3>
				<p>ul. Człuchowska 74/15,</p>
				<p>01-360 Warszawa</p>
			</div>
			<!-- / page-title col-12 col-md-3 -->
			<div class="mapa page-title col-12 col-md-9 contact-form-section-title  d-flex align-items-center">
				<iframe src="https://snazzymaps.com/embed/53174" width="" height="350px" style="border:none;" class="google-map"></iframe>
			</div>
			<!-- / page-title col-12 col-md-3 -->
		</div>
		<?php
			$faq = get_post_meta( get_post()->ID, 'faq', true );
			if( !empty( $faq ) ):
		?>
		<div class="box d-flex justify-content-between flex-wrap">
			<div class="section-title page-title col-12 col-md-3 contact-section-title">
				<h3>FaQ</h3>
				<p>Najczęściej zadawane pytania</p>
			</div>
			<!-- / page-title col-12 col-md-3 -->
			<div class="page-title col-12 col-md-9 contact-form-section-title  d-flex align-items-center">
				<ul class="accordion accordion-contact">
					<?php foreach( explode( "\n", trim( $faq ) ) as $line ): ?>
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
			<!-- / page-title col-12 col-md-3 -->
		</div>
		<?php endif; ?>
	</div>
	<!-- / container -->