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
Data wjazdu do Rosji: %s
Data wyjazdu z Rosji: %s
Plan podróży:
%s
Hotel: %s

---
Mail wygenerowany automatycznie na stronie %s',
	
	$_POST['Imiona'],
	$_POST['Nazwisko'],
	$_POST['Obywatelstwo'],
	$_POST['Data_urodzenia'],
	$_POST['Numer_paszportu'],
	$_POST['Adres_e-mail'],
	
	$_POST['Data_wjazdu_do_Rosji'],
	$_POST['Data_wyjazdu_z_Rosji'],
	$_POST['Miasto/a'],
	$_POST['hotel'],
	
	home_url()
	
);

