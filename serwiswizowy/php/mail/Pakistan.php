<?php
$mail->Body = sprintf(
			'Wniosek o wizę do: %s

Dane osobowe klienta
-----------------------------
Imię/imiona: %s
Nazwisko: %s
Inne nazwiska: %s
Płeć: %s
Urodzony(a): %s, %s
Narodowość: %s
Poprzednia narodowość: %s
Wyznanie: %s
PESEL: %s
Stan cywilny: %s

Praca
-----------------------------
Zatrudnienie: %s
Praca wykonywana od: %s
Nazwa i adres firmy: %s

Poprzednia praca
-----------------------------
Zatrudnienie: %s
Poprzednie zatrudnienie od: %s
Poprzednie zatrudnienie do: %s
Obowiązki: %s
Nazwa zakładu pracy: %s

Dane ojca
-----------------------------
Imię i nazwisko: %s
Wiek: %s
Zawód: %s
Adres: %s

Dane matki
-----------------------------
Imię i nazwisko: %s
Wiek: %s
Zawód: %s
Adres: %s

Dane kontaktowe
-----------------------------
Zamieszkały(a): %s %s, %s %s, %s
Adres do korenspondencji: %s
Telefon: %s
Email: %s

Paszport
-----------------------------
Rodzaj: %s
Data wydania: %s

Wiza - wybrane opcje
-----------------------------
Pośrednictwo wizowe: tryb %s
Opłata konsularna: tryb %s
Polisa: %s

Podróż
-----------------------------
Cel wizyty: %s
Miejsce przylotu: %s
Miejsce odlotu: %s
Data wjazdu: %s
Data wyjazdu: %s
Plan podróży:
%s
Środek transportu: %s

Dodatkowe informacje
-----------------------------
Ilość wjazdów: %s
Transport dokumentów: %s
Sponsorem wyjazdu jest: %s
Posiadam bilet lotniczy: %s
W ciągu minionych 5 lat byłem(am) w Pakistanie: %s
Kraje, w których byłem w ciągu ostatnich 2 lat: %s
Odmówiono mi wizy: %s
Byłem(am) deportowana: %s
Posiadam swój bank: %s
W przeszłości byłem(aM) karany: %s
Posiadam ubezpieczenie: %s

---
Mail wygenerowany automatycznie na stronie %s',
	$formularz['kraj'],
	
	implode( " ", array( $formularz['Imię'], $formularz['Drugie_imię'] ) ),
	$formularz['Nazwisko'],
	$formularz['Płeć'],
	$formularz['Data_urodzenia'],
	$formularz['Miejsce_urodzenia_-_miejscowość'],
	$formularz['Miejsce_urodzenia_-_kraj'],
	$formularz['Narodowość'],
	$formularz['Poprzednia_narodowość'],
	$formularz['Religia'],
	$formularz['PESEL'],
	$formularz['Stan_cywilny'],
	
	$formularz['Zajęcie/Zatrudnienie'],
	$formularz['Od_kiedy_wykonywany_jest_podany_zawód'],
	$formularz['Nazwa_i_adres_firmy'],
	
	$formularz['Poprzednie_zajęcie/zatrudnienie'],
	$formularz['Data_rozpoczęcia_poprzedniego_zatrudnienia'],
	$formularz['Data_zakończenia_poprzedniego_zatrudnienia'],
	$formularz['Obowiązki_w_poprzedniej_firmie'],
	$formularz['Nazwa_poprzedniego_zakładu_pracy'],
	
	$formularz['Imię_i_nazwisko_ojca'],
	$formularz['Wiek_ojca'],
	$formularz['Zawód_ojca'],
	$formularz['Adres_ojca'],
	
	$formularz['Imię_i_nazwisko_matki'],
	$formularz['Wiek_matki'],
	$formularz['Zawód_matki'],
	$formularz['Adres_matki'],
	
	$formularz['Zameldowanie_-_ulica'],
	implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
	$formularz['Zameldowanie_-_kod_pocztowy'],
	$formularz['Zameldowanie_-_miejscowość'],
	$formularz['Zameldowanie_-_kraj'],
	$formularz['Kontakt_-_korenspondencja'],
	$formularz['Kontakt_-_telefon'],
	$formularz['Kontakt_-_email'],
	
	$formularz['Rodzaj_paszportu'],
	$formularz['Data_wydania_paszportu'],
	
	$formularz['pośrednictwo_tryb'],
	$formularz['Opłata_konsularna_tryb'],
	$formularz['Polisa_ubezpieczeniowa-opts'],
	
	$formularz['Cel_wizyty'],
	$formularz['Miejsce_przylotu_do_Pakistanu'],
	$formularz['Miejsce_wyjazdu/odlotu_do_Pakistanu'],
	$formularz['Data_wjazdu'],
	$formularz['Data_wyjazdu'],
	$formularz['Trasa_podróży'],
	$formularz['Środek_transportu'],
	
	$formularz['Ilość_wjazdów'],
	implode( ", ", $formularz['dokumenty-transport'] ),
	$formularz['sponsor'],
	$formularz['Posiadam_bilet_lotniczy'],
	$formularz['pakistan_5_lat'],
	$formularz['inne_kraje_2_lata'],
	$formularz['odmowa'],
	$formularz['deportacja'],
	$formularz['bank'],
	$formularz['karany'],
	$formularz['ubezpieczenie'],
	
	home_url()
	
);

