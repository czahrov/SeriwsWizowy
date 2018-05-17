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

$euro = 4.6;

$data = array(
	array(
		'title' => 'Opłata konsularna za wydanie wizy jednokrotnej',
		'name' => 'opłata konsularna',
		'type' => 'radio',
		'selected' => true,
		'opts_name' => 'rodzaj wizy',
		'opts' => array(
			array(
				'title' => 'turystyczna',
				'value' => 'turystyczna, jednokrotna',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>voucher turystyczny</b><hr>cel zwiedzanie, turystyka, ważność według dat określonych na wniosku wizowym, max. 30 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 147,
				'selected' => true,
				
			),
			array(
				'title' => 'biznesowa',
				 'value' => 'biznesowa, jednokrotna',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>zaproszenie biznesowe</b><hr>cel współpraca z rosyjskim partnerem, udział w targach, obsługa serwisowa, udział w spotakniach służbowych, ważność zgodnie z zaproszeniem, max. 90 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 147,
				
			),
			array(
				'title' => 'tranzytowa',
				'value' => 'tranzytowa, jednokrotna',
				'hint' => 'cel tranzyt - jeśli Rosja jest krajem przejazdowym, ważność 3 dni w jedną stronę drogą lotniczą, do 10 dni w jedną stronę drogą lądową',
				'type' => 'radio',
				'price' => 147,
				
			),
			array(
				'title' => 'dziennikarska',
				'value' => 'dziennikarska, jednokrotna',
				'hint' => 'dla dziennikarzy i pracowników technicznych jadących wykonywać zadania dziennikarskie, ważność wizy wg dat określonych we wniosku wizowym potwierdzonych przez list z redakcji lub agencji prasowej',
				'type' => 'radio',
				'price' => 147,
				
			),
			array(
				'title' => 'studencka',
				'value' => 'studencka, jednokrotna',
				'hint' => 'cel podjęcie studiów, stażu, kursów, ważność wizy wg dat określonych we wniosku wizowym,  do 90 dni od daty wydania z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjne',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'humanitarna',
				'value' => 'humanitarna, jednokrotna',
				'hint' => 'wydawana jest osobom biorącym udział w działaniach naukowych, kulturalnych i artystycznych, w tym programach uniwersyteckich i innych programach wymiany, ważność według dat określonych na wniosku wizowym, max. 90 dni',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'prywatna',
				'value' => 'prywatna, jednokrotna',
				'hint' => 'cel wizyta u rodziny lub zanajomych, sprawy prywatne, ważność według dat określonych na wniosku wizowym, max. 90 dni od daty wydania',
				'type' => 'radio',
				'price' => 369,
				
			),
			array(
				'title' => 'pracownicza',
				'value' => 'pracownicza, jednokrotna',
				'hint' => '- cel praca , ważność wg dat określonych we wniosku wizowym,<br>- do 90 dni z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjnej',
				'type' => 'radio',
				'price' => 300,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy jednokrotnej ekspresowej',
		'name' => 'opłata konsularna',
		'type' => 'radio',
		// 'required' => true,
		'opts_name' => 'rodzaj wizy',
		'opts' => array(
			array(
				'title' => 'turystyczna',
				'value' => 'turystyczna, jednokrotna, ekspresowa',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>voucher turystyczny</b><hr>cel zwiedzanie, turystyka, ważność według dat określonych na wniosku wizowym, max. 30 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 290,
				// 'selected' => true,
				
			),
			array(
				'title' => 'biznesowa',
				 'value' => 'biznesowa, jednokrotna, ekspresowa',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>zaproszenie biznesowe</b><hr>cel współpraca z rosyjskim partnerem, udział w targach, obsługa serwisowa, udział w spotakniach służbowych, ważność zgodnie z zaproszeniem, max. 90 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 290,
				
			),
			array(
				'title' => 'tranzytowa',
				'value' => 'tranzytowa, jednokrotna, ekspresowa',
				'hint' => 'cel tranzyt - jeśli Rosja jest krajem przejazdowym, ważność 3 dni w jedną stronę drogą lotniczą, do 10 dni w jedną stronę drogą lądową',
				'type' => 'radio',
				'price' => 290,
				
			),
			array(
				'title' => 'dziennikarska',
				'value' => 'dziennikarska, jednokrotna, ekspresowa',
				'hint' => 'dla dziennikarzy i pracowników technicznych jadących wykonywać zadania dziennikarskie, ważność wizy wg dat określonych we wniosku wizowym potwierdzonych przez list z redakcji lub agencji prasowej',
				'type' => 'radio',
				'price' => 290,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy dwukrotnej',
		'name' => 'opłata konsularna',
		'type' => 'radio',
		// 'required' => true,
		'opts_name' => 'rodzaj wizy',
		'opts' => array(
			array(
				'title' => 'prywatna',
				'value' => 'prywatna, dwukrotna',
				'hint' => 'cel wizyta u rodziny lub zanajomych, sprawy prywatne, ważność według dat określonych na wniosku wizowym, max. 995 dni od daty wydania',
				'type' => 'radio',
				'price' => 590,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy wielokrotnej',
		'name' => 'opłata konsularna',
		'type' => 'radio',
		// 'required' => true,
		'opts_name' => 'rodzaj wizy',
		'opts' => array(
			array(
				'title' => 'pracownicza',
				'value' => 'prywatna, wielokrotna',
				'hint' => 'cel wizyta u rodziny lub zanajomych, sprawy prywatne, ważność według dat określonych na wniosku wizowym, max. 995 dni od daty wydania',
				'type' => 'radio',
				'price' => 898,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata serwisowa pobierana przez Rosyjskie Centrum Wizowe',
		'value' => 'tak',
		'opts_name' => 'Opłata serwisowa',
		'required' => true,
		'opts' => array(
			array(
				'title' => '',
				'value' => 'tak',
				'price' => round( 25 * $euro, 2 ),
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
				'price' => 120,
				'selected' => true,
				
			),
			array(
				'title' => 'tryb ekspresowy',
				'value' => 'ekspresowy',
				'price' => 160,
				
			),
			
		),
		
	),
	array(
		'title' => 'Voucher do Rosji i zaproszenie biznesowe',
		// 'value' => 'tak',
		'opts_name' => 'voucher',
		// 'required' => true,
		'opts' => array(
			array(
				'title' => 'posiadam',
				'hint' => '',
				'price' => 0,
				'selected' => true,
				
			),
			array(
				'title' => 'voucher',
				'hint' => 'Dokument niezbędny do uzyskania <b>wizy turystycznej</b>',
				'price' => 90,
				
			),
			array(
				'title' => 'zaproszenie biznesowe',
				'hint' => 'Cena zaproszenie ustalana jest indywidualnie w zależności od potrzeb i wymagań klienta.<hr>Dokument niezbędny do uzyskania <b>wizy biznesowej</b>',
				'price' => 0,
				
			),
			
		),
		
	),
	array(
		'title' => 'Polisa ubezpieczeniowa',
		// 'opts_name' => 'Polisa na dni',
		'hint' => 'O kosztach polisy ubezpieczeniowej zostaną Państwo poinformowani indywidualnie',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'nie',
				'price' => 0,
				'selected' => true
				
			),
			array(
				'title' => 'tak',
				'price' => 0,
				
			),
			
		),
		
	),
	
);

