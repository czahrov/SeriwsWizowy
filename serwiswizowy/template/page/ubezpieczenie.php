<?php
	require_once( get_template_directory() . "/php/PHPMailer/PHPMailer.php" );
	require_once( get_template_directory() . "/php/PHPMailer/Exception.php" );
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	if( DMODE ){
		echo "<!--";
		print_r( $_POST );
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
				// $mail->addAddress( $_POST['Adres_e-mail'] );
				$mail->addAddress( 'serwiswizowy@serwiswizowy.com' );
				
			}
			$mail->Subject = sprintf(
				'%s %s złożył(a) wniosek ubezpieczenie',
				$_POST['Imiona'],
				$_POST['Nazwisko']
				
			);
			
			require get_template_directory() . "/php/mail/ubezpieczenie.php";
			
			if( DMODE ) echo "<!--<div>{$mail->Body}</div>-->";
			
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
				<a class='btn_prev'>
					<i class="fa fa-angle-left fa-1x arrow-prev" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="box col-md-8 single-page-content">
			<?php if( isset( $mail_status ) ): ?>
				<?php echo "<div>{$mail_status}</div>"; ?>
			<?php else: ?>
			<div class='container'>
				<?php echo apply_filters( 'the_content', get_post()->post_content ); ?>
			</div>
			<form method='post'>
				<?php 
					genWizaDane( get_template_directory() . "/php/formularz/ubezpieczenie.php" );
				?>
				<button type='submit' class="msg-button ml-auto d-flex align-items-center">
					<a class="hit-box"></a>
					<p class="msg-btn">
						Wyślij wniosek
					</p>
					<i class="fa fa-angle-right fa-1x arrow-send d-flex align-items-center justify-content-center"></i>
				</button>
				
			</form>
			<div class='container'>
				<?php echo apply_filters( 'the_content', get_post_meta( get_post()->ID, 'pod_formularzem', true ) ); ?>
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
</div>