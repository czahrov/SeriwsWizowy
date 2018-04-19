<?php
$mail->Body = sprintf(
			'Wniosek o ubezpieczenie

Dane osobowe klienta
-----------------------------
Imiona: %s
Nazwisko: %s
Data urodzenia: %s
Obywatelstwo: %s
Adres zameldowania: %s %s, %s, %s
Numer dowodu osobistego: %s
PESEL: %s
Numer paszportu: %s

Dane kontaktowe
-----------------------------
Numer telefonu: %s
Adres e-mail: %s
Adres do korenspondencji: %s

---
Mail wygenerowany automatycznie na stronie %s',
	
	$_POST['Imiona'],
	$_POST['Nazwisko'],
	$_POST['Data_urodzenia'],
	$_POST['Obywatelstwo'],
	$_POST['zam-ulica'],
	implode( "/", array( $_POST['zam-budynek'], $_POST['zam-lokal'] )  ),
	$_POST['zam-poczta'],
	$_POST['zam-miejscowość'],
	$_POST['Numer_dowodu_osobistego'],
	$_POST['PESEL'],
	$_POST['Numer_paszportu'],
	
	$_POST['Numer_telefonu'],
	$_POST['Adres_e-mail'],
	$_POST['Adres_do_korenspondencji'],
	
	home_url()
	
);

