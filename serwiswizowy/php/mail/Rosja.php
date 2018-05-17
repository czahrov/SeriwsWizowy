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
Zamieszkały(a): %s %s, %s %s, %s
Telefon: %s
Email: %s
Status zatrudnienia: %s

Dane Zakładu pracy
-----------------------------
Nazwa: %s
Adres: %s
Telefon: %s
FAX: %s
Email: %s

Paszport
-----------------------------
Miejsce wydania: %s
Numer: %s
Data wydania: %s
Ważny do: %s

Wiza - wybrane opcje
-----------------------------
Rodzaj: %s
Pośrednictwo wizowe: tryb %s
Opłata serwisowa: %s
Opłata konsularna: tryb %s
Polisa: %s
Voucher/zaproszenie do Rosji: %s

Podróż
-----------------------------
Data wjazdu: %s
Data wyjazdu: %s
Plan podróży:
%s

Dodatkowe informacje
-----------------------------
Transport dokumentów: %s
Ilość wjazdów: %s
Ilość odbytych wizyt: %s
Obywatelstwo Rosji: %s
Posiadał(a) obywatelstwo: %s
Rodzina w Rosji: %s
Posiada ubezpieczenie: %s
Dzieci:
%s
Zapoznałem(am) się z regulaminem i akceptuję jego warunki: %s

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
			$formularz['Zameldowanie_-_ulica'],
			implode( "/", array( $formularz['Zameldowanie_-_budynek'], $formularz['Zameldowanie_-_lokal'] ) ),
			$formularz['Zameldowanie_-_kod_pocztowy'],
			$formularz['Zameldowanie_-_miejscowość'],
			$formularz['Zameldowanie_-_kraj'],
			$formularz['Kontakt_-_telefon'],
			$formularz['Kontakt_-_email'],
			$formularz['Status_zatrudnienia'],
			
			$formularz['Nazwa_zakładu_pracy'],
			$formularz['Adres_zakładu_pracy'],
			$formularz['Telefon_do_zakładu_pracy'],
			$formularz['FAX_Zakładu_pracy'],
			$formularz['E-mail_zakładu_pracy'],
			
			$formularz['Miejsce_wydania_paszportu'],
			$formularz['Numer_paszportu'],
			$formularz['Data_wydania_paszportu'],
			$formularz['Data_ważności_paszportu'],
			
			$formularz['rodzaj_wizy'],
			$formularz['pośrednictwo_tryb'],
			$formularz['Opłata_serwisowa'],
			$formularz['Opłata_konsularna_tryb'],
			$formularz['Polisa_ubezpieczeniowa-opts'],
			empty( $formularz['voucher'] )?( 'brak' ):( $formularz['voucher'] ),
			
			$formularz['Data_wjazdu'],
			$formularz['Data_wyjazdu'],
			$formularz['Trasa_podróży'],
			
			$formularz['dokumenty-transport'],
			$formularz['Ilość_wjazdów'],
			$formularz['Dane_dotyczące_poprzednich_wizyt'],
			$formularz['Obywatelstwo_Rosji'],
			$formularz['Posiadał(a)_obywatelstwo_Rosji'],
			$formularz['Posiada_rodzinę_w_Rosji'],
			$formularz['Posiada_Rosyjskie_ubezpiecznie'],
			$formularz['Dzieci'],
			
			$formularz['regulamin'] === 'on'?( 'tak' ):( 'nie' ),
			
			home_url()
			
		);
		
		