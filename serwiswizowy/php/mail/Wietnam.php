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

Dane kontaktowe
-----------------------------
Zamieszkały(a): %s %s, %s %s, %s
Adres do korenspondencji: %s
Telefon: %s
Email: %s

Paszport
-----------------------------
Numer: %s
Miejsce wydania: %s

Wiza - wybrane opcje
-----------------------------
Krotność: 
Rodzaj: 
Pośrednictwo wizowe: tryb %s
Promesa: tryb %s
Polisa: %s

Podróż
-----------------------------
Cel wizyty: %s
Lotnisko: %s
Data wjazdu: %s
Data wyjazdu: %s

Dodatkowe informacje
-----------------------------
Posiadam ubezpieczenie: %s
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
			$formularz['PESEL'],
			
			$formularz['Zameldowanie_-_ulica'],
			implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
			$formularz['Zameldowanie_-_kod_pocztowy'],
			$formularz['Zameldowanie_-_miejscowość'],
			$formularz['Zameldowanie_-_kraj'],
			$formularz['Kontakt_-_korenspondencja'],
			$formularz['Kontakt_-_telefon'],
			$formularz['Kontakt_-_email'],
			
			$formularz['Numer_paszportu'],
			$formularz['Miejsce_wydania_paszportu'],
			
			$formularz['krotność_wizy'],
			$formularz['typ_wizy'],
			$formularz['pośrednictwo_tryb'],
			$formularz['Promesa_tryb'],
			$formularz['Polisa_ubezpieczeniowa-opts'],
			
			$formularz['Cel_wizyty'],
			$formularz['Miejsce_wjazdu_do_Wietnamu_-_lotnisko'],
			$formularz['Data_wjazdu'],
			$formularz['Data_wyjazdu'],
			
			$formularz['Posiadam_ubezpieczenie'],
			$formularz['dokumenty_kierunek'],
			$formularz['dokumenty_tryb'],
			
			home_url()
			
		);
		
		