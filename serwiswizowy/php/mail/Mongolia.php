<?php
$mail->Body = sprintf(
			'Wniosek o wizę do: %s

Dane osobowe klienta
-----------------------------
Imię/imiona: %s
Nazwisko: %s
Inne nazwiska: %s
Płeć: %s
Urodzony(a): %s, %s, %s
PESEL: %s
Narodowość: %s
Stan cywilny: %s
Status zatrudnienia: %s
Stanowisko: %s

Dane kontaktowe
-----------------------------
Zamieszkały(a): %s %s, %s %s, %s
Adres do korenspondencji: %s
Telefon: %s
Email: %s

Paszport
-----------------------------
Rodzaj: %s
Numer: %s
Data ważności: %s
Miejsce wydania: %s

Wiza - wybrane opcje
-----------------------------
Pośrednictwo wizowe: tryb %s
Opłata konsularna: tryb %s
Polisa: %s
Odmówiono wizy: %s

Podróż
-----------------------------
Cel wizyty: %s
Data wjazdu: %s
Data wyjazdu: %s
Dzieci:
%s
Ubiegałem(am) się o wizę w Mongolii pod innym imieniem: %s
ubezpieczenie: %s

Dodatkowe informacje
-----------------------------
Nazwa hotelu: %s
Adres pobytu w Mongolii: %s
Ilość wjazdów: %s
Organ zapraszający: %s
Wniosek został wypełniony przez inną osobę: %s
Transport dokumentów: %s
Opłata bankowa: %s

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
	$formularz['PESEL'],
	$formularz['Obywatelstwo'],
	$formularz['Stan_cywilny'],
	$formularz['Status_zatrudnienia'],
	$formularz['Stanowisko'],
	
	$formularz['Zameldowanie_-_ulica'],
	implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
	$formularz['Zameldowanie_-_kod_pocztowy'],
	$formularz['Zameldowanie_-_miejscowość'],
	$formularz['Zameldowanie_-_kraj'],
	$formularz['Kontakt_-_korenspondencja'],
	$formularz['Kontakt_-_telefon'],
	$formularz['Kontakt_-_email'],
	
	$formularz['Rodzaj_paszportu'],
	$formularz['Numer_paszportu'],
	$formularz['Data_ważności_paszportu'],
	$formularz['Miejsce_wydania_paszportu'],
	
	$formularz['pośrednictwo_tryb'],
	$formularz['rodzaj_wizy'],
	$formularz['Polisa_ubezpieczeniowa-opts'],
	$formularz['odmowa'],
	
	$formularz['Cel_wizyty'],
	$formularz['Data_wjazdu'],
	$formularz['Data_wyjazdu'],
	$formularz['dzieci'],
	$formularz['inne_nazwisko'],
	$formularz['Ubezpieczenie'],
	
	$formularz['Nazwa_hotelu'],
	$formularz['Adres_pobytu_w_Mongolii'],
	$formularz['Ilość_wjazdów'],
	$formularz['Organ_zapraszający'],
	$formularz['inna_osoba'],
	$formularz['dokumenty-transport'],
	$formularz['Opłata_bankowa-opts'],
	
	home_url()
	
);

