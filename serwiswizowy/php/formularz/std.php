<?php
/*
	data = [
		[
			title
			fields = [
				field_type
				type
				name
				title
				hint
				required
				atts
				opts = [
					title,
					[
						title
						value
						
					],
				]
				
			],
		],
		
	]
*/

$data = array(
	array(
		'title' => 'Twoje dane',
		'fields' => array(
			array(
				'title' => 'Imię',
				'hint' => 'tak jak w paszporcie',
				'required' => true,
				
			),
			array(
				'title' => 'Drugie imię',
				'hint' => 'tak jak w paszporcie',
				
			),
			array(
				'title' => 'Nazwisko',
				'hint' => 'tak jak w paszporcie',
				'required' => true,
				
			),
			array(
				'title' => 'Płeć',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'Mężczyzna'
						
					),
					array(
						'title' => 'Kobieta'
						
					),
					
				),
				
			),
			array(
				'title' => 'Data urodzenia',
				'required' => true,
				'type' => 'date',
				
			),
			array(
				'title' => 'Miejsce urodzenia - kraj',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce urodzenia - miejscowość',
				'required' => true,
				
			),
			array(
				'title' => 'PESEL',
				'required' => true,
				'atts' => array(
					'pattern' => '\d{11}',
					'title' => 'Numer PESEL składa sie z 11 cyfr',
					
				),
				
			),
			array(
				'title' => 'Data wydania paszportu',
				'type' => 'date',
				'required' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Zameldowanie oraz dane kontaktowe',
		'fields' => array(
			array(
				'title' => 'Kraj',
				'name' => 'Zameldowanie - kraj',
				'required' => true,
				
			),
			array(
				'title' => 'Miejscowość',
				'name' => 'Zameldowanie - miejscowość',
				'required' => true,
				
			),
			array(
				'title' => 'Kod pocztowy',
				'name' => 'Zameldowanie - kod pocztowy',
				'required' => true,
				'atts' => array(
					'pattern' => '\d{2}-\d{3}',
					'title' => 'xx-xxx, x to cyfry 0-9. Na przykład: 22-345',
					
				),
				
			),
			array(
				'title' => 'Ulica',
				'name' => 'Zameldowanie - ulica',
				'required' => true,
				
			),
			array(
				'title' => 'Numer budynku',
				'name' => 'Zameldowanie - budynek',
				'required' => true,
				
			),
			array(
				'title' => 'Numer lokalu',
				'name' => 'Zameldowanie - lokal',
				
			),
			array(
				'title' => 'Numer kontaktowy',
				'name' => 'Kontakt - telefon',
				'type' => 'tel',
				'required' => true,
				
			),
			array(
				'title' => 'Adres e-mail',
				'name' => 'Kontakt - email',
				'type' => 'mail',
				'required' => true,
				
			),
			array(
				'title' => 'Adres korenspondencji',
				'hint' => 'Podać jeśli jest inny niż adres zameldowania',
				'name' => 'Kontakt - korenspondencja',
				
			),
			
		),
	),
	array(
		'title' => 'Zatrudnienie',
		'fields' => array(
			array(
				'title' => 'Status zatrudnienia',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'Niezatrudniony',
						
					),
					array(
						'title' => 'Uczy się',
						
					),
					array(
						'title' => 'Pracuje',
						
					),
					array(
						'title' => 'Rencista',
						
					),
					array(
						'title' => 'Emeryt',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Rodzina',
		'fields' => array(
			array(
				'title' => 'Stan cywilny',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'panna/kawaler',
						
					),
					array(
						'title' => 'zamężna/żonaty',
						
					),
					array(
						'title' => 'rozwiedziona(y)',
						
					),
					array(
						'title' => 'w separacji',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące wizy',
		'fields' => array(
			array(
				'title' => 'Ilość wjazdów',
				'hint' => 'Podać planowaną ilość wjazdów w przypadku wybrania wizy wielokrotnej',
				'type' => 'number',
				'atts' => array(
					'min' => 1,
					'step' => 1,
					
				),
			),
			
		),
		
	),
	array(
		'title' => 'Plan podróży',
		'fields' => array(
			array(
				'title' => 'Data wjazdu',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Data wyjazdu',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Cel wizyty',
				'required' => true,
				
			),
			array(
				'title' => 'Planowane miejsca odwiedzin',
				'name' => 'Trasa podróży',
				'field_type' => 'textarea',
				'required' => true,
				
			),
			
		),
		
	),
	
);

