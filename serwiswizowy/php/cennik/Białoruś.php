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

$euro = 4.2027475;

$data = array(
	array(
		'title' => 'Opłata konsularna za wydanie wizy tranzytowej pojedynczej',
		'name' => 'opłata konsularna - termin',
		'value' => 'tranzytowa, jednoosobowa',
		'type' => 'radio',
		'opts_name' => 'Opłata konsularna - tryb',
		// 'required' => true,
		// 'selected' => true,
		'opts' => array(
			array(
				'title' => 'jednokrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 10 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'jednokrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 20 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'dwukrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 15 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'dwukrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 30 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'wielokrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 35 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'wielokrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 70 * $euro, 2 ),
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy tranzytowej grupowej',
		'name' => 'opłata konsularna - termin',
		'value' => 'tranzytowa, grupowa',
		'type' => 'radio',
		'opts_name' => 'Opłata konsularna - tryb',
		// 'required' => true,
		// 'selected' => true,
		'opts' => array(
			array(
				'title' => 'jednokrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 10 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'jednokrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 20 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'dwukrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 15 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'dwukrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 30 * $euro, 2 ),
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy krótkoterminowej pojedynczej',
		'name' => 'opłata konsularna - termin',
		'value' => 'krótkoterminowa, jednoosobowa',
		'type' => 'radio',
		'opts_name' => 'Opłata konsularna - tryb',
		// 'required' => true,
		'selected' => true,
		'opts' => array(
			array(
				'title' => 'jednokrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 25 * $euro, 2 ),
				'selected' => true,
				
			),
			array(
				'title' => 'jednokrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 50 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'dwukrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 35 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'dwukrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 70 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'wielokrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 60 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'wielokrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 120 * $euro, 2 ),
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy krótkoterminowej grupowej',
		'name' => 'opłata konsularna - termin',
		'value' => 'krótkoterminowa, grupowa',
		'type' => 'radio',
		'opts_name' => 'Opłata konsularna - tryb',
		// 'required' => true,
		// 'selected' => true,
		'opts' => array(
			array(
				'title' => 'jednokrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 10 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'jednokrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 20 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'dwukrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 18 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'dwukrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 36 * $euro, 2 ),
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy długoterminowej pojedynczej',
		'name' => 'opłata konsularna - termin',
		'value' => 'długoterminowa, jednoosobowa',
		'type' => 'radio',
		'opts_name' => 'Opłata konsularna - tryb',
		// 'required' => true,
		// 'selected' => true,
		'opts' => array(
			array(
				'title' => 'wielokrotna, tryb normalny',
				'hint' => 'czas oczekiwania: 5 dni',
				'price' => round( 60 * $euro, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'wielokrotna, tryb ekspresowy',
				'hint' => 'czas oczekiwania: 48 godzin',
				'price' => round( 120 * $euro, 2 ),
				// 'selected' => true,
				
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
				'price' => 100,
				'selected' => true,
				
			),
			array(
				'title' => 'tryb ekspresowy',
				'value' => 'ekspresowy',
				'price' => 140,
				
			),
			
		),
		
	),
	array(
		'title' => 'Polisa ubezpieczeniowa',
		'value' => 'tak',
		'opts_name' => 'Polisa na dni',
		'opts' => array(
			array(
				'title' => 'Polisa do 7 dni',
				'value' => '7',
				'price' => 0,
				
			),
			array(
				'title' => 'Polisa do 14 dni',
				'value' => '14',
				'price' => 0,
				
			),
			array(
				'title' => 'Polisa do 30 dni',
				'value' => '30',
				'price' => 0,
				
			),
			
		),
		
	),
	array(
		'title' => 'Transport dokumentów',
		'name' => 'dokumenty kierunek',
		'opts_name' => 'dokumenty kierunek',
		'hint' => '',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'Jedna strona',
				'hint' => 'Odesłanie gotowej wizy wraz z dokumentami',
				'price' => 26,
				'type' => 'radio',
				'selected' => true,
				
			),
			array(
				'title' => 'Obie strony',
				'hint' => 'Kurier po dokumenty oraz odesłanie gotowej wizy z dokumentami',
				'price' => 47,
				'type' => 'radio',
				
			),
			
		),
		
	),
	array(
		'title' => 'Transport dokumentów - tryb',
		'name' => 'dokumenty tryb',
		'opts_name' => 'dokumenty tryb',
		'hint' => '',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'Ekspress do 10',
				'hint' => '',
				'price' => 75,
				'type' => 'radio',
				
			),
			array(
				'title' => 'Ekspress do 12',
				'hint' => '',
				'price' => 42,
				'type' => 'radio',
				'selected' => true,
				
			),
			array(
				'title' => 'List polecony',
				'hint' => 'List polecony z potwierdzeniem odbioru',
				'price' => 22,
				'type' => 'radio',
				
			),
			
		),
		
	),
	
);

