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
		'title' => 'Opłata konsularna za wydanie wizy',
		'name' => 'opłata konsularna',
		'value' => 'tak',
		'opts_name' => 'Opłata konsularna tryb',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'tryb normalny',
				'value' => 'normalny',
				'hint' => '7 - 9 dni',
				'price' => 147,
				'selected' => true,
				
			),
			array(
				'title' => 'tryb ekspresowy',
				'value' => 'ekpresowy',
				'hint' => '3 dni<br>Tylko dla wiz biznesowych oraz turystycznych',
				'price' => 290,
				
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
				'price' => 115,
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
	array(
		'title' => 'Wiza jednokrotna',
		'name' => 'rodzaj wizy',
		'opts_name' => 'wiza jednokrotna',
		'type' => 'radio',
		'hint' => 'Wizy jednokrotne i dwukrotne czas wyrabiania:<br>
		Standardowy do 7 dni roboczych<br>
		Ekspres do 3-4 dni roboczych ',
		'selected' => true,
		'opts' => array(
			array(
				'title' => 'turystyczna',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>voucher turystyczny</b><hr>cel zwiedzanie, turystyka, ważność według dat określonych na wniosku wizowym, max. 30 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 0,
				'selected' => true,
				
			),
			array(
				'title' => 'biznesowa',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>zaproszenie biznesowe</b><hr>cel współpraca z rosyjskim partnerem, udział w targach, obsługa serwisowa, udział w spotakniach służbowych, ważność zgodnie z zaproszeniem, max. 90 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'prywatna',
				'hint' => 'cel wizyta u rodziny lub zanajomych, sprawy prywatne, ważność według dat określonych na wniosku wizowym, max. 90 dni od daty wydania',
				'type' => 'radio',
				'price' => 224,
				
			),
			array(
				'title' => 'humanitarna',
				'hint' => 'wydawana jest osobom biorącym udział w działaniach naukowych, kulturalnych i artystycznych, w tym programach uniwersyteckich i innych programach wymiany, ważność według dat określonych na wniosku wizowym, max. 90 dni',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'pracownicza',
				'hint' => '- cel praca , ważność wg dat określonych we wniosku wizowym,<br>- do 90 dni z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjnej',
				'type' => 'radio',
				'price' => 153,
				
			),
			array(
				'title' => 'tranzytowa',
				'hint' => 'cel tranzyt - jeśli Rosja jest krajem przejazdowym, ważność 3 dni w jedną stronę drogą lotniczą, do 10 dni w jedną stronę drogą lądową',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'studencka',
				'hint' => 'cel podjęcie studiów, stażu, kursów, ważność wizy wg dat określonych we wniosku wizowym,  do 90 dni od daty wydania z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjne',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'dziennikarska',
				'hint' => 'dla dziennikarzy i pracowników technicznych jadących wykonywać zadania dziennikarskie, ważność wizy wg dat określonych we wniosku wizowym potwierdzonych przez list z redakcji lub agencji prasowej',
				'type' => 'radio',
				'price' => 0,
				
			),
			
		),
		
	),
	array(
		'title' => 'Wiza dwukrotna',
		'name' => 'rodzaj wizy',
		'opts_name' => 'wiza dwukrotna',
		'type' => 'radio',
		'hint' => 'Wizy jednokrotne i dwukrotne czas wyrabiania:<br>
		Standardowy do 7 dni roboczych<br>
		Ekspres do 3-4 dni roboczych ',
		'opts' => array(
			array(
				'title' => 'turystyczna',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>voucher turystyczny</b><hr>cel zwiedzanie, turystyka, ważność według dat określonych na wniosku wizowym, max. 395 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'biznesowa',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>zaproszenie biznesowe</b><hr>cel współpraca z rosyjskim partnerem, udział w targach, obsługa serwisowa, udział w spotakniach służbowych, ważność zgodnie z zaproszeniem, max. 995 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'prywatna',
				'hint' => 'cel wizyta u rodziny lub zanajomych, sprawy prywatne, ważność według dat określonych na wniosku wizowym, max. 995 dni od daty wydania',
				'type' => 'radio',
				'price' => 445,
				
			),
			array(
				'title' => 'humanitarna',
				'hint' => 'wydawana jest osobom biorącym udział w działaniach naukowych, kulturalnych i artystycznych, w tym programach uniwersyteckich i innych programach wymiany, ważność według dat określonych na wniosku wizowym, max. 995 dni',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'tranzytowa',
				'hint' => 'cel tranzyt - jeśli Rosja jest krajem przejazdowym, ważność 3 dni w jedną stronę drogą lotniczą, do 195 dni w jedną stronę drogą lądową',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'studencka',
				'hint' => 'cel podjęcie studiów, stażu, kursów, ważność wizy wg dat określonych we wniosku wizowym,  do 995 dni od daty wydania z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjne',
				'type' => 'radio',
				'price' => 0,
				
			),
			
		),
		
	),
	array(
		'title' => 'Wiza wielokrotna',
		'name' => 'rodzaj wizy',
		'opts_name' => 'wiza wielokrotna',
		'type' => 'radio',
		'hint' => 'Wizy wielokrotne i dwukrotne czas wyrabiania:<br>
		Standardowy do 7 dni roboczych<br>
		Ekspres do 3-4 dni roboczych ',
		'opts' => array(
			array(
				'title' => 'biznesowa',
				'hint' => nl2br( 'Dokument niezbędny do uzyskania wizy: <b>zaproszenie biznesowe</b><hr>cel współpraca z rosyjskim partnerem, udział w targach, obsługa serwisowa, udział w spotakniach służbowych, ważność zgodnie z zaproszeniem, max. 90 dni od daty wydania' ),
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'humanitarna',
				'hint' => 'wydawana jest osobom biorącym udział w działaniach naukowych, kulturalnych i artystycznych, w tym programach uniwersyteckich i innych programach wymiany, ważność według dat określonych na wniosku wizowym, max. 90 dni',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'pracownicza',
				'hint' => '- cel praca , ważność wg dat określonych we wniosku wizowym,<br>- do 90 dni z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjnej',
				'type' => 'radio',
				'price' => 753,
				
			),
			array(
				'title' => 'studencka',
				'hint' => 'cel podjęcie studiów, stażu, kursów, ważność wizy wg dat określonych we wniosku wizowym,  do 90 dni od daty wydania z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjne',
				'type' => 'radio',
				'price' => 0,
				
			),
			array(
				'title' => 'dziennikarska',
				'hint' => 'dla dziennikarzy i pracowników technicznych jadących wykonywać zadania dziennikarskie, ważność wizy wg dat określonych we wniosku wizowym potwierdzonych przez list z redakcji lub agencji prasowej',
				'type' => 'radio',
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

