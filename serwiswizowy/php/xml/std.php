<?php

$xml = new SimpleXMLElement( '<?xml version="1.0" encoding="UTF-8"?><root></root>' );

$xml->addChild( "record" );

$xml->record->addChild( "imię_jak_w_paszporcie", $formularz['Imię'] );
$xml->record->addChild( "drugie_imię_jak_w_paszporcie", $formularz['Drugie_imię'] );
$xml->record->addChild( "nazwisko_jak_w_paszporcie", $formularz['Nazwisko'] );
$xml->record->addChild( "płeć", $formularz['Płeć'] );
$xml->record->addChild( "data_urodzenia", $formularz['Data_urodzenia'] );
$xml->record->addChild( "miejsce_urodzenia_miejscowość", $formularz['Miejsce_urodzenia_-_miejscowość'] );
$xml->record->addChild( "miejsce_urodzenia_kraj", $formularz['Miejsce_urodzenia_-_kraj'] );
$xml->record->addChild( "PESEL", $formularz['PESEL'] );
$xml->record->addChild( "narodowość", "Polska" );
$xml->record->addChild( "data_wydania_paszportu", $formularz['Data_wydania_paszportu'] );
$xml->record->addChild( "kraj_zameldowania_zamieszkania", $formularz['Zameldowanie_-_kraj'] );
$xml->record->addChild( "miasto_zameldowania_zamieszkania", $formularz['Zameldowanie_-_miejscowość'] );
$xml->record->addChild( "kod_pocztowy_zameldowania_zamieszkania", $formularz['Zameldowanie_-_kod_pocztowy'] );
$xml->record->addChild( "ulica_zameldowania_zamieszkania", $formularz['Zameldowanie_-_ulica'] );
$xml->record->addChild( "numer_domu_zameldowania_zamieszkania", $formularz['Zameldowanie_-_budynek'] );
$xml->record->addChild( "numer_lokalu_zameldowania_zamieszkania", $formularz['Zameldowanie_-_lokal'] );
$xml->record->addChild( "numer_telefonu", $formularz['Kontakt_-_telefon'] );
$xml->record->addChild( "email", $formularz['Kontakt_-_email'] );
$xml->record->addChild( "adres_kontaktowy_taki_sam_jak_zameldowania", empty( $formularz['Kontakt_-_korenspondencja'] )?( 'tak' ):( 'nie' ) );
$xml->record->addChild( "adres_kontaktowy", empty( $formularz['Kontakt_-_korenspondencja'] )?( '' ):( $formularz['Kontakt_-_korenspondencja'] ) );
$xml->record->addChild( "status_zatrudnienia_czy_pracuje", $formularz['Status_zatrudnienia'] == 'Pracuje'?( 'tak' ):( 'nie' ) );
$xml->record->addChild( "stan_cywilny", $formularz['Stan_cywilny'] );
$xml->record->addChild( "kategoria_wizy", '---' );
$xml->record->addChild( "ilość_wjazdów", $formularz['Ilość_wjazdów'] );
$xml->record->addChild( "data_przyjazdu", $formularz['Data_wjazdu'] );
$xml->record->addChild( "data_powrotu", $formularz['Data_wyjazdu'] );
$xml->record->addChild( "cel_wizyty", $formularz['Cel_wizyty'] );
$xml->record->addChild( "planowane_miejsca_odwiedzin", $formularz['Trasa_podróży'] );

?>