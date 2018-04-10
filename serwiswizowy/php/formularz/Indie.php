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
				'hint' => 'chodzi tu o nazwisko panieńskie,<br>
				jeśli nie było zmiany należy zostawić puste pole,<br>
				jeśli nie było trzeba wpisać n/a',
				
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
				'title' => 'Imię i nazwisko ojca',
				'required' => true,
				
			),
			array(
				'title' => 'Narodowość ojca',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce urodzenia ojca - kraj',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce urodzenia ojca - miejscowość',
				'required' => true,
				
			),
			array(
				'title' => 'Imię i nazwisko matki',
				'required' => true,
				
			),
			array(
				'title' => 'Narodowość matki',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce urodzenia matki - kraj',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce urodzenia matki - miejscowość',
				'required' => true,
				
			),
			array(
				'title' => 'Data wydania paszportu',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Data ważności paszportu',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce wydania paszportu',
				'hint' => 'Jeśli miejsce wydania jest inne niż Polska, wymagany jest kontakt w celu uzyskania dokładnych informacji – do wpisania kraj, województwo, miejscowość',
				'atts' => array(
					'value' => 'Polska',
					'readonly' => '',
					
				),
				
			),
			array(
				'title' => 'Religia',
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
			/* array(
				'title' => 'Adres korenspondencji',
				'name' => 'Kontakt - korenspondencja',
				'hint' => 'Podać jeśli jest inny niż adres zameldowania',
				'name' => 'Kontakt - korenspondencja',
				
			), */
			array(
				'title' => 'Adres kontaktowy',
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
				'title' => 'Wykształcenie',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'podstawowe',
						
					),
					array(
						'title' => 'średnie',
						
					),
					array(
						'title' => 'licencjat',
						
					),
					array(
						'title' => 'wyższe',
						
					),
					array(
						'title' => 'podyplomowe',
						
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
			array(
				'title' => 'Osoba do kontaktu',
				'hint' => 'dane osoby do kontaktu w nagłych sytuacjach (nazwisko, imię, obywatelstwo, zawód, pokrewieństwo, telefon kontaktowy)',
				'required' => true,
				'field_type' => 'textarea',
				
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
				'title' => 'Miejsce przylotu do Indii',
				'required' => true,
				
			),
			array(
				'title' => 'Cel wizyty',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'turystyczny',
					),
					array(
						'title' => 'biznesowy',
					),
					array(
						'title' => 'naukowy',
					),
					array(
						'title' => 'pracowniczy',
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
				'hint' => 'Tak/Nie (skontaktujemy się)',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące poprzednich wizyt',
		'fields' => array(
			array(
				'title' => 'Wiza do Indii',
				'hint' => 'jeśli była już wydana w przyszłości wiza do Indii I jest ona w paszporcie trzeba wskazać datę, kraj I miejsce wydania ostatniej wizy',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Czy pozwolenie na wizę lub przedłużenie pobytu zostało kiedykolwiek odmówione',
				'name' => 'odmowa',
				'hint' => 'nie/tak, – jeśli tak wskazać, kiedy nasępiła odmowa, kto odmówił wizyty/przedłużenia pobytu/ wskazać należy nr kontroli',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	array(
		'title' => 'Pozostałe dane',
		'fields' => array(
			array(
				'title' => 'Kraje odwiedzone w ciągu ostatnich 10 lat',
				'hint' => 'wskazać maksymalnie 4 kraje',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Czy odwiedzane były kraje SAARC w ciągu ostatni 3 lat',
				'name' => 'SAARC',
				'hint' => 'nie/tak, – jeśli taka wskazać, jaki kraj, w którym roku, ile razy<br>
				Kraje SAARC: Pakistan, Bangladesz, Sri Lankę, Nepal, Malediwy, Bhutan, Afganistan',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące ubezpieczenia',
		'fields' => array(
			array(
				'title' => 'Posiadam ubezpieczenie',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'nie, chcę zakupić',
					),
					array(
						'title' => 'tak',
					),
					
				),
				
			),
			
		),
		
	),
	
);

