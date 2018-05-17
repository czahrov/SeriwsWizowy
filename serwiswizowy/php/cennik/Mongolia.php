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
		'title' => 'Opłata konsularna za wydanie wizy',
		'name' => 'opłata konsularna',
		'value' => 'tak',
		'opts_name' => 'rodzaj wizy',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'entry jednokrotna',
				'hint' => '',
				'price' => 60 * $euro,
				'selected' => true,
				
			),
			array(
				'title' => 'entry dwukrotna',
				'hint' => '',
				'price' => 70 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'transit jednokrotna',
				'hint' => '',
				'price' => 40 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'transit dwukrotna',
				'hint' => '',
				'price' => 50 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'multiple do 6 m-cy',
				'hint' => '',
				'price' => 100 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'multiple od 6 m-cy do 1 roku',
				'hint' => '',
				'price' => 150 * $euro,
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
				'price' => 115,
				'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata bankowa',
		'value' => 'tak',
		// 'opts_name' => 'pośrednictwo tryb',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'Opłata bankowa',
				'value' => 'tak',
				'price' => 20,
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
		
);

