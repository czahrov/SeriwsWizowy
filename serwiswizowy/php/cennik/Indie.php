<?php

/*
	data = [
		title 				(string)		(tytuł wyświetlany na stronie)
		name			(string)		(nazwa pola w formularzu)
		value			(string)		(wartość pola w formularzu)
		opts_name	(string)		(nazwa pól wariantów w formularzu)
		hint				(string)		(podpowiedź)
		type				(string)		(rodzaj inputu)
		required		(boolean)	(pole zaznaczone na stałe)
		selected		(boolean)	(pole domyślnie zaznaczone)
		opts = [
			title			(string)		(tytuł wyświetlany na stronie)
			value		(string)		(wartość pola w formularzu)
			hint			(string)		(podpowiedź)
			type			(string)		(rodzaj inputu)			
			price			(float)		(cena opcji)
			selected	(boolean)	(opcja domyślnie zaznaczona)
		]
		
	]
*/

$data = array(
	array(
		'title' => 'Opłata konsularna za wydanie wizy jednokrotnej',
		// 'name' => 'opłata konsularna',
		'name' => 'krotność wizy',
		'value' => 'jednokrotna',
		'type' => 'radio',
		'opts_name' => 'rodzaj wizy',
		'selected' => true,
		'opts' => array(
			array(
				'title' => 'turystyczna (E-visa)',
				'hint' => '- wyjazd turystyczny, <br>
				- spotkania biznesowe <br>
				- wizyta na targach <br>
				- odwiedziny u przyjaciół i rodziny, <br>
				- zabiegi medyczne , <br>
				- kursy jogi<br>
				Wiza ważna 34 dni od momentu wydania (czas na przekroczenie granicy z Indiami)<br>
				- 30 dni od momentu wjazdu do Indii (czas na pobyt w Indiach)',
				'price' => 225,
				'selected' => true,
				
			),
			array(
				'title' => 'biznesowa',
				'hint' => '- spotkania biznesowe, <br>
				- uczestnictwo w targach jako wystawca, <br>
				- podpisanie/aktualizacja umów z firmą indyjską, <br>
				- kontrola produktów, <br>
				- kupno produktów, <br>
				- badanie rynku, <br>
				- udział w szkoleniu<br>
				Wiza ważna 34 dni od momentu wydania (czas na przekroczenie granicy z Indiami)<br>
				- 30 dni od momentu wjazdu do Indii (czas na pobyt w Indiach)',
				'price' => 225,
				
			),
			array(
				'title' => 'medyczna (E-visa)',
				'hint' => '- zabiegi medyczne<br>
				Wiza ważna 34 dni od momentu wydania (czas na przekroczenie granicy z Indiami)<br>
				- 30 dni od momentu wjazdu do Indii (czas na pobyt w Indiach)',
				'price' => 225,
				
			),
			array(
				'title' => 'konferencyjna',
				'hint' => 'Opis: - udział w konferencji, sympozjum<br>
				Wiza ważna 180 dni od momentu wydania.',
				'price' => 446,
				
			),
			array(
				'title' => 'tranzytowa dla marynarzy',
				'hint' => '- wydawana marynarzom, którzy przesiadają się na statek<br>
				Ważność wiz: - wg dat na piśmie delegującym',
				'price' => 170,
				
			),
			array(
				'title' => 'AIESEC',
				'hint' => 'Opis: - staż, praktyki<br>
				Ważność wiz: - wg dat podanych na zaproszeniu',
				'price' => 745,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy dwukrotnej',
		// 'name' => 'opłata konsularna',
		'name' => 'krotność wizy',
		'value' => 'dwukrotna',
		'type' => 'radio',
		'opts_name' => 'rodzaj wizy',
		'opts' => array(
			array(
				'title' => 'turystyczna (E-visa)',
				'hint' => 'Opis: - wyjazd turystyczny, <br>
				- spotkania biznesowe <br>
				- wizyta na targach <br>
				- odwiedziny u przyjaciół i rodziny, <br>
				- zabiegi medyczne , <br>
				- kursy jogi<br>
				Ważność wiz: -120 dni od momentu wydania (czas na przekroczenie granicy z Indiami)<br>
				- 60 dni od momentu wjazdu do Indii (czas na pobyt w Indiach)',
				'price' => 225,
				
			),
			array(
				'title' => 'biznesowa (E-visa)',
				'hint' => 'Opis: - wyjazd turystyczny, <br>
				- spotkania biznesowe <br>
				- wizyta na targach <br>
				- odwiedziny u przyjaciół i rodziny, <br>
				- zabiegi medyczne , <br>
				- kursy jogi<br>
				Ważność wiz: -120 dni od momentu wydania (czas na przekroczenie granicy z Indiami)<br>
				- 60 dni od momentu wjazdu do Indii (czas na pobyt w Indiach)',
				'price' => 225,
				
			),
			array(
				'title' => 'medyczne (E-visa)',
				'hint' => 'Opis: - zabiegi medyczne<br>
				Ważność wiz: - 34 dni od momentu wydania (czas na przekroczenie granicy z Indiami)<br>
				- 30 dni od momentu wjazdu do Indii (czas na pobyt w Indiach)- Tranzytowa 2-dniowa, Opis: - tranzyt.<br>
				Ważność wiz:  120 dni od momentu wydania (czas na przekroczenie granicy z Indiami)<br>
				- 60 dni od momentu wjazdu do Indii (czas na pobyt w Indiach)',
				'price' => 225,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy wielokrotnej',
		// 'name' => 'opłata konsularna',
		'name' => 'krotność wizy',
		'value' => 'wielokrotna',
		'type' => 'radio',
		'opts_name' => 'rodzaj wizy',
		'opts' => array(
			array(
				'title' => 'turystyczna (E-visa)',
				'hint' => 'Opis: - wyjazd turystyczny, <br>
				- spotkania biznesowe <br>
				- wizyta na targach <br>
				- odwiedziny u przyjaciół i rodziny, <br>
				- zabiegi medyczne , <br>
				- kursy jogi<br>
				Ważność wiz: - 180 dni od momentu wydania.',
				'price' => 538,
				
			),
			array(
				'title' => 'biznesowa',
				'hint' => 'Opis: - spotkania biznesowe, <br>
				- uczestnictwo w targach jako wystawca, <br>
				- podpisanie/aktualizacja umów z firmą indyjską, <br>
				- kontrola produktów, <br>
				- kupno produktów, <br>
				- badanie rynku, <br>
				- udział w szkoleniu<br>
				Ważność wiz: - 180 dni od momentu wydania.',
				'price' => 745,
				
			),
			array(
				'title' => 'AIESEC',
				'hint' => 'Opis: - staż, praktyki<br>
				Ważność wiz: - wg dat podanych na zaproszeniu',
				'price' => 745,
				
			),
			array(
				'title' => 'rodzinna (entry visa / dependent) 180-dniowa',
				'hint' => 'Opis: - entry visa wydawana osobom, których małżonka/małżonek jest obywatelem Indii; dependent wydawana członkom rodziny osoby, która jest zatrudniona w firmie indyjskiej i przebywa w Indiach na podstawie wizy pracowniczej<br>
				Ważność wiz: - 6 miesięcy',
				'price' => 445,
				
			),
			array(
				'title' => 'rodzinna (entry visa / dependent) 365-dniowa',
				'hint' => 'Opis: - entry visa wydawana osobom, których małżonka/małżonek jest obywatelem Indii; dependent wydawana członkom rodziny osoby, która jest zatrudniona w firmie indyjskiej i przebywa w Indiach na podstawie wizy pracowniczej<br>
				Ważność wiz: - 12 miesięcy',
				'price' => 730,
				
			),
			
		),
		
	),
	array(
		'title' => 'Pośrednictwo wizowe',
		'value' => 'tak',
		'opts_name' => 'pośrednictwo tryb',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'tryb normalny',
				'value' => 'normalny',
				'price' => 125,
				'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata podawcza pobierana przez Centrum Obsługi Wniosków Wizowych BLS INTERNATIONAL',
		'value' => 'tak',
		// 'opts_name' => 'pośrednictwo tryb',
		'opts_name' => 'opłata podawcza',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'tryb normalny',
				'value' => 'normalny',
				'price' => 40,
				'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Polisa ubezpieczeniowa',
		// 'value' => 'tak',
		// 'opts_name' => 'Polisa na dni',
		'hint' => 'O kosztach polisy ubezpieczeniowej zostaną Państwo poinformowani indywidualnie',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'nie',
				'price' => 0,
				'selected' => true,
				
			),
			array(
				'title' => 'tak',
				'price' => 0,
				
			),
			
		),
		
	),
	array(
		'title' => 'Transport dokumentów',
		'name' => 'dokumenty kierunek',
		'opts_name' => 'dokumenty-transport',
		'hint' => '',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'Jedna strona',
				'hint' => 'Odesłanie gotowej wizy wraz z dokumentami',
				'price' => 26,
				'type' => 'radio',
				
			),
			array(
				'title' => 'Obie strony',
				'hint' => 'Kurier po dokumenty oraz odesłanie gotowej wizy z dokumentami',
				'price' => 47,
				'type' => 'radio',
				
			),
			array(
				'title' => 'List polecony',
				'hint' => 'List polecony z potwierdzeniem odbioru',
				'price' => 22,
				'type' => 'radio',
				'selected' => true,
				
			),
			
		),
		
	),
	
);

