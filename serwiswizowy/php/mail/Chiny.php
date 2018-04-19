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
Obywatelstwo: %s
Poprzednie obywatelstwo: %s
PESEL: %s
Numer dowodu osobistego: %s
Stan cywilny: %s
Status zatrudnienia: %s

Dane kontaktowe
-----------------------------
Zamieszkały(a): %s %s, %s %s, %s
Telefon: %s
Email: %s

Paszport
-----------------------------
Rodzaj paszportu: %s

Wiza - wybrane opcje
-----------------------------
Krotność wizy: %s
Rodzaj wizy: %s
Pośrednictwo wizowe: tryb %s
Polisa: %s

Podróż
-----------------------------
Najdłuższy z planowanych pobytow w Chinach (dni): %s
Data wjazdu: %s
Data wyjazdu: %s
Adres pobytu: %s

Dodatkowe informacje
-----------------------------
Dane członka rodziny:
%s
Osoba do kontaktu:
%s
Organ zapraszający:
%s
Ostatnia wiza do Chin:
%s
Ilość wyjazdów za granicę w ciągu ostatnich 12 miesięcy ( nie licząc Chin ): %s
Karany w Chinach:
%s
Choroby zakaźne: %s
Przekroczyłem(am) czas pobytu w Chinach: %s
Odmówiono mi wizy do Chin: %s
Posiadam ważne ubezpieczenie: %s
Posiadam bilet lotniczy: %s
Transport dokumentów: %s
Transport dokumentów - tryb: %s

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
			$formularz['Obywatelstwo'],
			$formularz['Poprzednie_obywatelstwo'],
			$formularz['PESEL'],
			$formularz['Numer_dowodu_osobistego'],
			$formularz['Stan_cywilny'],
			$formularz['Status_zatrudnienia'],
			
			$formularz['Zameldowanie_-_ulica'],
			implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
			$formularz['Zameldowanie_-_kod_pocztowy'],
			$formularz['Zameldowanie_-_miejscowość'],
			$formularz['Zameldowanie_-_kraj'],
			$formularz['Kontakt_-_telefon'],
			$formularz['Kontakt_-_email'],
			
			$formularz['Rodzaj_paszportu'],
			
			$formularz['krotność_wizy'],
			$formularz['rodzaj_wizy'],
			$formularz['pośrednictwo_tryb'],
			$formularz['Polisa_ubezpieczeniowa'] === 'tak'?( "na {$formularz['Polisa_na_dni']} dni" ):( $formularz['Polisa_ubezpieczeniowa'] ),
			
			$formularz['najdłuższy_pobyt'],
			$formularz['Data_wjazdu'],
			$formularz['Data_wyjazdu'],
			$formularz['Adres_pobytu'],
			
			$formularz['Dane_członka_rodziny'],
			$formularz['Osoba_do_kontaktu'],
			$formularz['Organ_zapraszający'],
			$formularz['Ostatnia_wiza_do_Chin'],
			$formularz['Ilość_wyjazdów'],
			$formularz['karany'],
			$formularz['Choroby'],
			$formularz['przekroczony_czas'],
			$formularz['odmowa'],
			$formularz['ubezpieczenie'],
			$formularz['Bilet_lotniczy'],
			$formularz['dokumenty_kierunek'],
			$formularz['dokumenty_tryb'],
			
			home_url()
			
		);
		
		