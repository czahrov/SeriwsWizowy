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
Stan cywilny: %s
Status zatrudnienia: %s

Dane kontaktowe
-----------------------------
Zamieszkały(a): %s %s, %s %s, %s
Telefon: %s
Email: %s

Wiza - wybrane opcje
-----------------------------
Opłata konsularna krotność wizy i tryb: %s, %s
Pośrednictwo wizowe: tryb %s
Polisa: %s

Podróż
-----------------------------
Rodzaj paszportu: %s
Organ zapraszający:
%s
Cel podróży: %s
Data wjazdu: %s
Data wyjazdu: %s
Planowany okres pobytu: %s
Adres tymczasowego pobytu: %s
Plan podróży:
%s

Dodatkowe informacje
-----------------------------
Był(a) wcześniej w Białorusi: %s
Był(a) deportowany(a) z innego kraju: %s
Był(a) karany za nieprzestrzeganie prawa: %s
Źródło środków na czas pobytu w Białorusi: %s
Środek transportu: %s
Ubezpieczenie w Białorusi: %s
Ilość wjazdów: %s
Dotychczasowe wizyty: %s
Odmowa wizy: %s
Posiada bilet lotniczy: %s
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
			$formularz['Stan_cywilny'],
			$formularz['Status_zatrudnienia'],
			
			$formularz['Zameldowanie_-_ulica'],
			implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
			$formularz['Zameldowanie_-_kod_pocztowy'],
			$formularz['Zameldowanie_-_miejscowość'],
			$formularz['Zameldowanie_-_kraj'],
			$formularz['Kontakt_-_telefon'],
			$formularz['Kontakt_-_email'],
			
			$formularz['opłata_konsularna_-_termin'],
			$formularz['Opłata_konsularna_-_tryb'],
			$formularz['pośrednictwo_tryb'],
			$formularz['Polisa_ubezpieczeniowa'] === 'tak'?( "na {$formularz['Polisa_na_dni']} dni" ):( $formularz['Polisa_ubezpieczeniowa'] ),
			
			$formularz['Rodzaj_paszportu'],
			$formularz['organ_zapraszający'],
			$formularz['Cel_podróży'],
			$formularz['Data_wjazdu'],
			$formularz['Data_wyjazdu'],
			$formularz['Planowany_okres_pobytu'],
			$formularz['Adres_tymczasowego_pobytu'],
			$formularz['Trasa_podróży'],
			
			$formularz['Czy_byłeś_wcześniej_na_Białorusi'],
			$formularz['Czy_byłeś_deportowany_z_innego_kraju'],
			$formularz['Nieprzestrzeganie_prawa'],
			$formularz['Źródło_środków_na_wizytę_w_Białorusi'],
			$formularz['Środek_stransportu'],
			$formularz['Ubezpieczenie_w_Białorusi'],
			$formularz['Ilość_wjazdów'],
			$formularz['Dotychczasowe_wizyty'],
			$formularz['Odmowa_wizy'],
			$formularz['Bilet_lotniczy'],
			$formularz['dokumenty_kierunek'],
			$formularz['dokumenty_tryb'],
			
			
			home_url()
			
		);
		
		