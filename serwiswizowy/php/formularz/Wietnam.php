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
		'title' => 'Dane personalne',
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
			/* array(
				'title' => 'Inne nazwiska',
				'hint' => '',
				
			), */
			array(
				'title' => 'Płeć',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'Mężczyzna',
						
					),
					array(
						'title' => 'Kobieta',
						
					),
					
				),
				
			),
			array(
				'title' => 'Data urodzenia',
				'required' => true,
				'type' => 'date',
				
			),
			array(
				'title' => 'Kraj urodzenia',
				'name' => 'Miejsce urodzenia - kraj',
				'required' => true,
				
			),
			/* array(
				'title' => 'Województwo urodzenia',
				'name' => 'Miejsce urodzenia - województwo',
				'required' => true,
				
			), */
			array(
				'title' => 'Miejscowość urodzenia',
				'name' => 'Miejsce urodzenia - miejscowość',
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
				'title' => 'Obywatelstwo',
				'required' => true,
				
			),
			array(
				'title' => 'Numer paszportu',
				'required' => true,
				'atts' => array(
					'pattern' => '[a-zA-Z]{2}\s?\d{7}',
					'title' => 'Numer paszportu składa się z dwóch liter (tzw seria) oraz 7 cyfr',
					
				),
				
			),
			/* array(
				'title' => 'Data wydania paszportu',
				'type' => 'date',
				'required' => true,
				
			), */
			array(
				'title' => 'Miejsce wydania paszportu',
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
				'atts' => array(
					'pattern' => '^(\d+\s?)+$',
					'title' => 'Dozwolone znaki: cyfry oraz spacja',
					
				),
				
			),
			array(
				'title' => 'Adres e-mail',
				'name' => 'Kontakt - email',
				'type' => 'mail',
				'required' => true,
				'atts' => array(
					'pattern' => '^[^@]+@[^\.]+\..+$',
					'title' => '[login]@[domena] np: jan@kowalski.pl',
					
				),
				
			),
			array(
				'title' => 'Adres Kontaktowy',
				'name' => 'Kontakt - korenspondencja',
				'hint' => 'Podać jeśli jest inny niż adres zameldowania',
				'name' => 'Kontakt - korenspondencja',
				
			),
			
		),
	),
	/* array(
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
		
	), */
	/* array(
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
		
	), */
	/* array(
		'title' => 'Dane dotyczące wizy',
		'fields' => array(
			array(
				'title' => 'Ilość wjazdów',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'pojedynczy',
						'selected' => true,
					),
					array(
						'title' => 'podwójny',
						
					),
					array(
						'title' => 'potrójny',
						
					),
					array(
						'title' => 'wielokrotny',
						
					),
					
				),
			),
			
		),
		
	),*/
	array(
		'title' => 'Dane dotyczące podróży',
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
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'turystyczny',
						'selected' => true,
					),
					array(
						'title' => 'biznesowy',
						
					),
					array(
						'title' => 'inny',
						
					),
					
				),
				
			),
			array(
				'title' => 'Miejsce przylotu',
				'name' => 'Miejsce wjazdu do Wietnamu - lotnisko',
				'hint' => 'Miejsce wjazdu do Wietnamu - lotnisko',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'SGN',
						'selected' => true,
					),
					array(
						'title' => 'HAN',
						
					),
					array(
						'title' => 'DAD',
						
					),
					
				),
				
			),
			array(
				'title' => 'Posiadam bilet lotniczy',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'nie',
						'selected' => true,
					),
					array(
						'title' => 'tak',
						
					),
					
				),
				
			),
			/* array(
				'title' => 'Planowane miejsca odwiedzin',
				'name' => 'Trasa podróży',
				'field_type' => 'textarea',
				'required' => true,
				
			), */
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące ubezpieczenia',
		'fields' => array(
			array(
				'title' => 'Posiadam ubezpieczenie',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'nie, chcę zakupić',
						'selected' => true,
					),
					array(
						'title' => 'tak',
						
					),
					
				),
				
			),
			
		),
		
	),
	
);

