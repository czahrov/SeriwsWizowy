<?php
$mail->Body = sprintf(
			'Wniosek o wizę do: %s

Dane osobowe klienta
-----------------------------
Imię/imiona: %s
Nazwisko: %s
Inne nazwiska: %s
Płeć: %s
Urodzony(a): %s, %s, %s, %s
PESEL: %s
Stan cywilny: %s
Status zatrudnienia: %s

Dane kontaktowe
-----------------------------
Zamieszkały(a): %s %s, %s %s, %s
Adres do korenspondencji: %s
Telefon: %s
Email: %s

Paszport
-----------------------------
Data wydania: %s

Wiza - wybrane opcje
-----------------------------
Pośrednictwo wizowe: tryb %s
Opłata konsularna: tryb %s
Polisa: %s

Podróż
-----------------------------
Data wjazdu: %s
Data wyjazdu: %s
Plan podróży:
%s

Dodatkowe informacje
-----------------------------
Ilość wjazdów: %s
Transport dokumentów: %s

---
Mail wygenerowany automatycznie na stronie %s',
	$formularz['kraj'],
	
	implode( " ", array( $formularz['Imię'], $formularz['Drugie_imię'] ) ),
	$formularz['Nazwisko'],
	$formularz['Inne_nazwiska'],
	$formularz['Płeć'],
	$formularz['Data_urodzenia'],
	$formularz['Miejsce_urodzenia_-_miejscowość'],
	$formularz['Miejsce_urodzenia_-_województwo'],
	$formularz['Miejsce_urodzenia_-_kraj'],
	$formularz['PESEL'],
	$formularz['Stan_cywilny'],
	$formularz['Status_zatrudnienia'],
	
	$formularz['Zameldowanie_-_ulica'],
	implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
	$formularz['Zameldowanie_-_kod_pocztowy'],
	$formularz['Zameldowanie_-_miejscowość'],
	$formularz['Zameldowanie_-_kraj'],
	$formularz['Kontakt_-_korenspondencja'],
	$formularz['Kontakt_-_telefon'],
	$formularz['Kontakt_-_email'],
	
	$formularz['Data_wydania_paszportu'],
	
	$formularz['pośrednictwo_tryb'],
	$formularz['Opłata_konsularna_tryb'],
	$formularz['Polisa_ubezpieczeniowa'] === 'tak'?( "na {$formularz['Polisa_na_dni']} dni" ):( $formularz['Polisa_ubezpieczeniowa'] ),
	
	$formularz['Data_wjazdu'],
	$formularz['Data_wyjazdu'],
	$formularz['Trasa_podróży'],
	
	$formularz['Ilość_wjazdów'],
	$formularz['dokumenty-transport'],
	
	home_url()
	
);

