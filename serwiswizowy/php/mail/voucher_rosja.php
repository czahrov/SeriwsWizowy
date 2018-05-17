<?php
$mail->Body = sprintf(
'Wniosek o Voucher do Rosji

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
Voucher zamawiany na: %s
Data wjazdu do Rosji: %s
Data wyjazdu z Rosji: %s
Plan podróży:
%s
Rezerwacja w hotelu: %s
Dane hotelu:
%s
Potwierdzenie: %s

---
Mail wygenerowany automatycznie na stronie %s',
	
	implode( ", ", array( $_POST['Imię'], $_POST['Drugie imię'] ) ),
	$_POST['Nazwisko'],
	$_POST['Obywatelstwo'],
	$_POST['Data_urodzenia'],
	$_POST['Numer_paszportu'],
	$_POST['Adres_e-mail'],
	
	$_POST['Ważność_vouchera'],
	$_POST['Data_wjazdu_do_Rosji'],
	$_POST['Data_wyjazdu_z_Rosji'],
	$_POST['Miasto/a'],
	$_POST['Rezerwacja_w_hotelu'],
	$_POST['Dane_hotelu'],
	isset( $_FILES['Potwierdzenie'] )?( 'w załączniku' ):( 'brak' ),
	
	home_url()
	
);

