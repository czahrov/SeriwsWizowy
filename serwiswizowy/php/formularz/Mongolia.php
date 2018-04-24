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
			array(
				'title' => 'Inne nazwiska',
				'hint' => 'chodzi tu o nazwisko panieńskie-, jeśli nie było zmiany należy zostawić puste pole',
				
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
			/* array(
				'title' => 'Miejsce urodzenia - województwo',
				'required' => true,
				
			), */
			array(
				'title' => 'Miejsce urodzenia - miejscowość',
				'required' => true,
				
			),
			array(
				'title' => 'Narodowość',
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
				'title' => 'Rodzaj paszportu',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'zwykły',
						'selected' => true,
					),
					array(
						'title' => 'służbowy',
					),
					array(
						'title' => 'dyplomatyczny',
					),
					
				),
				
			),
			array(
				'title' => 'Numer paszportu',
				'required' => true,
				'atts' => array(
					'pattern' => '^[a-zA-Z]{2}\s?\d{7}$',
					'title' => 'Dwie litery (tzw seria) i 7 cyfr',
					
				),
				
			),
			/* array(
				'title' => 'Data wydania paszportu',
				'type' => 'date',
				'required' => true,
				
			), */
			array(
				'title' => 'Data ważności paszportu',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce wydania paszportu',
				'required' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące zameldowania/zamieszkania',
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
				'title' => 'Adres korenspondencji',
				'name' => 'Kontakt - korenspondencja',
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
			array(
				'title' => 'Stanowisko',
				
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
			array(
				'title' => 'Dane dzieci poniżej 16 roku życia podróżujące razem',
				'name' => 'dzieci',
				'hint' => 'jeśli są trzeba podać ich wszystkie dane personalne- narodowość, nazwisko, imię, data urodzenia, związek z podróżującym',
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące wizy',
		'fields' => array(
			array(
				'title' => 'Ilość wjazdów',
				'field_type' => 'select',
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
		
	),
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
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'turystyczny',
						'selected' => true,
					),
					array(
						'title' => 'biznesowy',	
					),
					array(
						'title' => 'studia',
					),
					array(
						'title' => 'praca',
					),
					array(
						'title' => 'odwiedziny u rodziny',
					),
					array(
						'title' => 'tranzyt',
					),
					array(
						'title' => 'prywatny',
					),
					array(
						'title' => 'inny',
					),
					
				),
				
			),
			array(
				'title' => 'Nazwa hotelu',
				
			),
			array(
				'title' => 'Adres pobytu w Mongolii',
				'required' => true,
				
			),
			array(
				'title' => 'Czy posiada Pan(i) bilet lotniczy',
				'name' => 'bilet',
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
		'title' => 'Dane dotyczące organu zapraszającego',
		'fields' => array(
			array(
				'title' => 'Organ zapraszający',
				'hint' => 'Nazwa organu zapraszającego, adres',
				'required' => true,
				'field_type' => 'textarea',
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące poprzednich wizyt',
		'fields' => array(
			array(
				'title' => 'Czy kiedolwiek odmówiono w misji dyplomatycznej w Mongolii',
				'name' => 'odmowa',
				'hint' => "Odp. nie/tak,<br>
				jeśli tak należy wskazać okoliczności",
				'required' => true,
				'field_type' => 'textarea',
			),
			array(
				'title' => 'Czy kiedolwiek ubiegano się o wizę do Mongolii pod innym imieniem/nazwiskiem?',
				'name' => 'inne nazwisko',
				'hint' => "Odp. nie/tak,<br>– jeśli tak wskazać okoliczności",
				'required' => true,
				'field_type' => 'textarea',
			),
			
		),
		
	),
	array(
		'title' => 'Pozostałe dane',
		'fields' => array(
			array(
				'title' => 'Czy wniosek był wypełniany przez inną osobę',
				'name' => 'inna osoba',
				'hint' => "odp. nie/tak,<br>
				– jeśli tak wskazać ta osobę- imię, nazwisko, związek z osoba wypełniająca",
				'required' => true,
				'field_type' => 'textarea',
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące ubezpieczenia',
		'fields' => array(
			array(
				'title' => 'Ubezpieczenie',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'nie, chcę kupić',
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

