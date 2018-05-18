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
				'price' => 192,
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
				'price' => 675,
				
			),
			array(
				'title' => 'studencka',
				'hint' => '',
				'price' => 353,
				
			),
			array(
				'title' => 'tranzytowa dla marynarzy',
				'hint' => '- wydawana marynarzom, którzy przesiadają się na statek<br>
				Ważność wiz: - wg dat na piśmie delegującym',
				'price' => 92,
				
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
	
);

