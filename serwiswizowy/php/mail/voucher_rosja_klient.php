<?php

switch( $_POST['Ważność_vouchera'] ){
	case '14 dni':
		$price = 95;
	break;
	default:
		$price = 145;
		
}

$mail->clearAllRecipients();
$mail->clearAttachments();

$mail->Subject = 'Potwierdzenie wniosku o voucher do Rosji';

if( DMODE ){
	$mail->addAddress( 'sprytne@scepter.pl' );
}
else{
	$mail->addAddress( "{$_POST['Adres_e-mail']}" );
}

$mail->Body = sprintf(
'Szanowny Klienicie dziękujemy za skorzystanie z usług z Serwisuwizowego.com  

Twoje zgłoszenie zostało zarejestrowane.

Wniosek o Voucher do Rosji

Dane osobowe klienta
-----------------------------
Imiona: %s
Nazwisko: %s
Obywatelstwo: %s
Data urodzenia: %s
Numer paszportu: %s
Adres e-mail: %s

Informacje o podróży
-----------------------------
Data wjazdu do Rosji: %s
Data wyjazdu z Rosji: %s
Plan podróży:
%s

Rezerwacja w hotelu: %s
Dane hotelu:
%s

Potwierdzenie: %s

Do zapłaty: %.2f

W celu realizacji zgłoszenia prosimy o uregulowanie platnści na na poniższy nr rachunku:

%s
Filmar sp zoo
Ul. Człuchowska 74/15
01-360 Warszawa 

tytułem: %s %s/Voucher do Rosji 

Po zaksięgowaniu opłaty otrzymasz od nas drogą elektroniczną Voucher turystyczny do Federacji Rosyjskiej. 

Jeśli masz jakiekolwiek pytania prosimy o kontakt:
telefoniczny pod nr tel 511 717 110
bądż mailowy pomocwiza@serwiswizowy.com lub serwiswizowy@serwiswizowy.com. 

Pozdrawiamy serdecznie, 
Zespół serwiswizowy.com

---
Wiadomość wygenerowana automatycznie na %s',
	implode( " ", array( $_POST['Imię'], $_POST['Drugie_imię'] ) ),
	$_POST['Nazwisko'],
	$_POST['Obywatelstwo'],
	$_POST['Data_urodzenia'],
	$_POST['Numer_paszportu'],
	$_POST['Adres_e-mail'],
	
	$_POST['Data_wjazdu_do_Rosji'],
	$_POST['Data_wyjazdu_z_Rosji'],
	$_POST['Miasto/a'],
	$_POST['Rezerwacja_w_hotelu'],
	$_POST['Dane_hotelu'],
	
	isset( $_FILES['Potwierdzenie'] )?( 'w załączniku' ):( 'brak' ),
	
	$price,
	
	get_post_meta( 14, 'konto_bankowe', true ),

	$_POST['Imię'],
	$_POST['Nazwisko'],
	
	home_url()
);

if( DMODE ){
	echo "<!--VOUCHER\r\n{$mail->Body}\r\n-->";
	// $mail->send();
	
}
else{
	$mail->send();
	
}
