<?php
	require_once( get_template_directory() . "/php/PHPMailer/PHPMailer.php" );
	require_once( get_template_directory() . "/php/PHPMailer/Exception.php" );
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	if( DMODE ){
		echo "<!--";
		print_r( $_POST );
		print_r( $_FILES );
		echo "-->";
		
	}
	
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
				$mail->addAddress( $_POST['Adres_e-mail'] );
				// $mail->addAddress( 'biuro@serwiswizowy.com' );
				
			}
			$mail->Subject = sprintf(
				'%s %s złożył(a) wniosek o voucher do Rosji',
				$_POST['Imiona'],
				$_POST['Nazwisko']
				
			);
			
			require get_template_directory() . "/php/mail/voucher_rosja.php";
			
			if( DMODE ) echo "<!--<div>{$mail->Body}</div>-->";
			
			if( $_FILES['Potwierdzenie']['size'] > 0 ){
				$mail->addAttachment( $_FILES["Potwierdzenie"]["tmp_name"], $_FILES["Potwierdzenie"]['name'] );
				
			}
			
			if( DMODE ){
				// $mail->send();
				
			}
			else{
				$mail->send();
				
			}
			
			$mail_status = sprintf(
				'Gratulacje. Twój wniosek został wysłany pomyślnie!<br>
				Na Twój adres e-mail: <a href="mailto:%1$s"><b>%1$s</b></a> wysłaliśmy szczegóły. Sprawdź skrzynkę.<br>
				W razie pytań jesteśmy do dyspozycji.',
				$_POST['Adres_e-mail']
				
			);
			
		}
		catch( Exception $e ){
			$mail_status = sprintf(
				'Próba wysłania maila zakończyła się niepowodzeniem.<br>Powód: %s',
				$mail->ErrorInfo
				
			);
			
		}
		
	}
	
?>
<div class="white-page o-firmie-single wiza formularz">
<!--
<?php
	// print_r( $imgs );
	// print_r( get_post_meta( $post->ID ) );
	
?>
-->
<div class="container wiza form">
	<div class="page-title">
		<h3><?php echo get_post( $post->post_parent )->post_title; ?></h3>
	</div>
	<div class="d-flex flex-wrap">
		<div class="col-md-4 d-none d-md-block fp_pin_rail">
			<div class="box-single-page fp_pin_dragger">
				<h3><?php echo $post->post_title; ?></h3>
				<a class='' href='<?php echo home_url( 'uslugi' ); ?>'>
					<i class="fa fa-angle-left fa-1x arrow-prev" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="box col-md-8 single-page-content">
			<?php if( isset( $mail_status ) ): ?>
				<?php echo "<div>{$mail_status}</div>"; ?>
			<?php else: ?>
			<div class='container'>
				<?php echo apply_filters( 'the_content', $post->post_content ); ?>
			</div>
			<h5 class='container'>
				UWAGA WAZNA INFORMACJA:  Po otrzymaniu wniosku voucherowego droga elektroniczną bez pośrednictwa wizowego przez Serwiswizowy.com należy zaaplikować o wizę w ciągu najbliższych 5 dni.
			</h5>
			<form method='post' enctype="multipart/form-data">
				<?php 
					genWizaDane( get_template_directory() . "/php/formularz/voucher_rosja.php" );
				?>
				<button type='submit' class="msg-button ml-auto d-flex align-items-center">
					<a class="hit-box"></a>
					<p class="msg-btn">
						Wyślij wniosek
					</p>
					<i class="fa fa-angle-right fa-1x arrow-send d-flex align-items-center justify-content-center"></i>
				</button>
				
			</form>
			<?php endif; ?>
			
		</div>
		
	</div>
</div>