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
	
);

