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
		// 'opts_name' => 'Opłata konsularna tryb',
		'opts_name' => 'rodzaj wizy',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'turystyczna 30-dniowa normalna',
				'hint' => nl2br( 'Opis: 
				- turystyka 
				- udział w targach jako zwiedzający
				Ważność wiz: 
				- 90 dni od momentu wydania,
				- do 30 dni pobytu.' ),
				'price' => 260,
				'selected' => true,
				
			),
			array(
				'title' => 'turystyczna 30-dniowa ekspresowa',
				'hint' => nl2br( 'Opis: 
				- turystyka 
				- udział w targach jako zwiedzający
				Ważność wiz: 
				- 90 dni od momentu wydania,
				- do 30 dni pobytu.' ),
				'price' => 370,
				// 'selected' => true,
				
			),
			array(
				'title' => 'biznesowa normalna',
				'hint' => nl2br( 'Opis: 
				- spotkania biznesowe, handlowe 
				- udział w targach jako wystawca
				
				Ważność wiz:
				- 90 dni od momentu wydania,
				- do 30 dni pobytu.' ),
				'price' => 260,
				// 'selected' => true,
				
			),
			array(
				'title' => 'biznesowa ekspresowa',
				'hint' => nl2br( 'Opis: 
				- spotkania biznesowe, handlowe 
				- udział w targach jako wystawca
				
				Ważność wiz:
				- 90 dni od momentu wydania,
				- do 30 dni pobytu.' ),
				'price' => 370,
				// 'selected' => true,
				
			),
			array(
				'title' => 'naukowa 30-dniowa normalna',
				'hint' => nl2br( 'Opis: 
				- wyjazd na konferencję, resarch, 
				- badania naukowe bez pobierania wynagrodzenia

				Ważność wiz: - 90 dni od momentu wydania,
				- do 30 dni pobytu.' ),
				'price' => 260,
				// 'selected' => true,
				
			),
			array(
				'title' => 'naukowa 30-dniowa ekspresowa',
				'hint' => nl2br( 'Opis: 
				- wyjazd na konferencję, resarch, 
				- badania naukowe bez pobierania wynagrodzenia

				Ważność wiz: - 90 dni od momentu wydania,
				- do 30 dni pobytu.' ),
				'price' => 370,
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy dwukrotnej',
		// 'name' => 'opłata konsularna',
		'name' => 'krotność wizy',
		'value' => 'dwukrotna',
		// 'opts_name' => 'Opłata konsularna tryb',
		'opts_name' => 'rodzaj wizy',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'turystyczna 30-dniowa normalna',
				'hint' => nl2br( 'Opis: 
				- turystyka 
				- udział w targach jako zwiedzający
				Ważność wiz: 
				- 90 dni od momentu wydania,
				- do 30 dni pobytu.' ),
				'price' => 260,
				'selected' => true,
				
			),
			array(
				'title' => 'turystyczna 30-dniowa ekspresowa',
				'hint' => nl2br( 'Opis: 
				- turystyka 
				- udział w targach jako zwiedzający
				Ważność wiz: 
				- 90 dni od momentu wydania,
				- do 30 dni pobytu.' ),
				'price' => 370,
				'selected' => true,
				
			),
			array(
				'title' => 'biznesowa 30-dniowa normalna',
				'hint' => nl2br( 'Opis: 
				- spotkania biznesowe, handlowe, 
				- udział w targach jako wystawca

				Ważność wiz: 
				- 180 dni od momentu wydania,
				- do 30 dni pobytu' ),
				'price' => 260,
				'selected' => true,
				
			),
			array(
				'title' => 'turystyczna 30-dniowa ekspresowa',
				'hint' => nl2br( 'Opis: 
				- spotkania biznesowe, handlowe, 
				- udział w targach jako wystawca

				Ważność wiz: 
				- 180 dni od momentu wydania,
				- do 30 dni pobytu' ),
				'price' => 370,
				'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy wielokrotnej',
		// 'name' => 'opłata konsularna',
		'name' => 'krotność wizy',
		'value' => 'wielokrotna',
		// 'opts_name' => 'Opłata konsularna tryb',
		'opts_name' => 'rodzaj wizy',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'biznesowa 365-dniowa normalna',
				'hint' => nl2br( 'Opis: 
				- spotkania biznesowe, handlowe, 
				- udział w targach jako wystawca
				
				Ważność wiz: 
				- 365 dni od momentu wydania,
				- każdy pobyt do 30 dni' ),
				'price' => 260,
				'selected' => true,
				
			),
			array(
				'title' => 'biznesowa 365-dniowa ekspresowa',
				'hint' => nl2br( 'Opis: 
				- spotkania biznesowe, handlowe, 
				- udział w targach jako wystawca
				
				Ważność wiz: 
				- 365 dni od momentu wydania,
				- każdy pobyt do 30 dni' ),
				'price' => 370,
				'selected' => true,
				
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

