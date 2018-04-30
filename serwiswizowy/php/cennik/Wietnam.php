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
		'title' => 'Promesa wizowa',
		'value' => 'tak',
		'opts_name' => 'Promesa tryb',
		// 'required' => true,
		'opts' => array(
			array(
				'title' => 'tryb normalny',
				'value' => 'normalny',
				'hint' => '',
				'price' => 45,
				'type' => 'checkbox',
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
				'price' => 55,
				'selected' => true,
				
			),
			array(
				'title' => 'tryb ekspresowy',
				'value' => 'ekspres',
				'price' => 70,
				
			),
			
		),
		
	),
	array(
		'title' => 'Wiza jednokrotna',
		'name' => 'krotność wizy',
		'value' => 'jednokrotna',
		'type' => 'radio',
		'opts_name' => 'typ wizy',
		'selected' => true,
		'opts' => array(
			array(
				'title' => 'turystyczna/biznesowa ( promesa ) normalna 30-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna 30 dni od daty podanej na wniosku wizowym',
				'price' => 45,
				'selected' => true,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( promesa ) ekspressowa 30-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna 30 dni od daty podanej na wniosku wizowym',
				'price' => 95,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( promesa ) normalna 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna 30 dni od daty podanej na wniosku wizowym',
				'price' => 75,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( promesa ) ekspresowa 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna 30 dni od daty podanej na wniosku wizowym',
				'price' => 135,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( wklejana w konsulacie ) normalna 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna wg dat zaznaczonych we wniosku',
				'price' => 250,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( wklejana w konsulacie ) ekspresowa 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna wg dat zaznaczonych we wniosku',
				'price' => 300,
				
			),
			
		),
		
	),
	array(
		'title' => 'Wiza wielokrotna',
		'name' => 'krotność wizy',
		'value' => 'wielokrotna',
		'type' => 'radio',
		'opts_name' => 'typ wizy',
		'opts' => array(
			array(
				'title' => 'turystyczna/biznesowa ( promesa ) normalna 30-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna 30 dni od daty podanej na wniosku wizowym',
				'price' => 60,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( promesa ) ekspres 30-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna 30 dni od daty podanej na wniosku wizowym',
				'price' => 115,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( promesa ) normalna 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna 30 dni od daty podanej na wniosku wizowym',
				'price' => 185,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( promesa ) ekspres 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna 30 dni od daty podanej na wniosku wizowym',
				'price' => 235,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( wklejana w konsulacie ) normalna 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna wg dat zaznaczonych we wniosku',
				'price' => 300,
				
			),
			array(
				'title' => 'turystyczna/biznesowa ( wklejana w konsulacie ) ekspres 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- turystyka, zwiedzanie, biznes,<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna wg dat zaznaczonych we wniosku',
				'price' => 350,
				
			),
			array(
				'title' => 'biznesowa ( wklejana w konsulacie ) normalna 90-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna wg dat zaznaczonych we wniosku',
				'price' => 300,
				
			),
			array(
				'title' => 'biznesowa ( wklejana w konsulacie ) ekspres 85-dniowa',
				'hint' => 'Promesa --> wiza wklejana na lotnisku<br>
				- wizyty na targach, u rodziny / znajomych,<br>
				- sprawy prywatne.<br>
				Wiza ważna wg dat zaznaczonych we wniosku',
				'price' => 350,
				
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

