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
	Obywatelstwo: %s
	Stan cywilny: %s
	Religia: %s
	Status zatrudnienia: %s
	Wykształcenie: %s
	
	Dane osobowe ojca
	-----------------------------
	Imię i nazwisko: %s
	Narodowość: %s
	Miejsce urodzenia: %s, %s
	
	Dane osobowe matki
	-----------------------------
	Imię i nazwisko: %s
	Narodowość: %s
	Miejsce urodzenia: %s, %s
	
	Dane kontaktowe
	-----------------------------
	Zamieszkały(a): %s %s, %s %s, %s
	Adres kontaktowy: %s
	Telefon: %s
	Email: %s
	Osoba do kontaktu:
	%s
	
	Paszport
	-----------------------------
	Data wydania: %s
	Data ważności: %s
	Miejsce wydania: %s
	
	Wiza - wybrane opcje
	-----------------------------
	Krotność: 
	Rodzaj wizy: 
	Pośrednictwo wizowe: tryb %s
	Wiza do Inii:
	%s
	Polisa: %s
	
	Podróż
	-----------------------------
	Data wjazdu: %s
	Data wyjazdu: %s
	Miejsce przylotu do Indii: %s
	Cel wizyty: %s
	Organ zapraszający:
	%s
	Posiadam ubezpieczenie: %s
	
	Dodatkowe informacje
	-----------------------------
	Odmowa wjazdu: %s
	Kraje odwiedzone w ciągu ostatnich 10 lat:
	%s
	Odwiedzone kraje SAARC w ciągu ostatnich 3 lat:
	%s
	Posiadam bilet lotniczy: %s
	Transport dokumentów: %s
	Opłata podawcza tryb: %s
	
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
	$formularz['Religia'],
	$formularz['Status_zatrudnienia'],
	$formularz['Wykształcenie'],

	$formularz['Imię_i_nazwisko_ojca'],
	$formularz['Narodowość_ojca'],
	$formularz['Miejsce_urodzenia_ojca_-_miejscowość'],
	$formularz['Miejsce_urodzenia_ojca_-_kraj'],

	$formularz['Imię_i_nazwisko_matki'],
	$formularz['Narodowość_matki'],
	$formularz['Miejsce_urodzenia_matki_-_miejscowość'],
	$formularz['Miejsce_urodzenia_matki_-_kraj'],

	$formularz['Zameldowanie_-_ulica'],
	implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
	$formularz['Zameldowanie_-_kod_pocztowy'],
	$formularz['Zameldowanie_-_miejscowość'],
	$formularz['Zameldowanie_-_kraj'],
	$formularz['Kontakt_-_korenspondencja'],
	$formularz['Kontakt_-_telefon'],
	$formularz['Kontakt_-_email'],
	$formularz['Osoba_do_kontaktu'],
	
	$formularz['Data_wydania_paszportu'],
	$formularz['Data_ważności_paszportu'],
	$formularz['Miejsce_wydania_paszportu'],

	$formularz['krotność_wizy'],
	$formularz['rodzaj_wizy'],
	$formularz['pośrednictwo_tryb'],
	$formularz['Wiza_do_Indii'],
	$formularz['Polisa_ubezpieczeniowa-opts'],

	$formularz['Data_wjazdu'],
	$formularz['Data_wyjazdu'],
	$formularz['Miejsce_przylotu_do_Indii'],
	$formularz['Cel_wizyty'],
	$formularz['Organ_zapraszający'],
	$formularz['Posiadam_ubezpieczenie'],

	$formularz['Ilość_wjazdów'],
	$formularz['odmowa'],
	$formularz['Kraje_odwiedzone_w_ciągu_ostatnich_10_lat'],
	$formularz['SAARC'],
	$formularz['Posiadam_bilet_lotniczy'],
	implode( ", ", $formularz['dokumenty-transport'] ),
	$formularz['opłata_podawcza'],

	home_url()

);
	
	