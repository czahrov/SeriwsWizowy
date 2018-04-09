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
				'hint' => 'chodzi tu o nazwisko panieńskie, jeśli nie było zmiany należy zostawić puste pole',
				
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
				'title' => 'Miejsce urodzenia - województwo',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce urodzenia - miejscowość',
				'required' => true,
				
			),
			array(
				'title' => 'Obywatelstwo',
				'required' => true,
				
			),
			array(
				'title' => 'Poprzednie obywatelstwo',
				'hint' => 'odp. Tak/Nie – jeśli tak, wpisać jakie',
				'required' => true,
				
			),
			array(
				'title' => 'Rodzaj paszportu',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'zwykły',
						
					),
					array(
						'title' => 'służbowy',
						
					),
					array(
						'title' => 'dyplomatyczny',
						
					),
					array(
						'title' => 'inny',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące zameldowania / zamieszkania',
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
					'pattern' => '^[\d ]+$',
					'title' => 'Cyfry i spacje'
					
				),
				
			),
			array(
				'title' => 'Adres e-mail',
				'name' => 'Kontakt - email',
				'type' => 'mail',
				'required' => true,
				'atts' => array(
					'pattern' => '^[^@]+@[^\.]+\..+$',
					'title' => '[login]@[domena]',
					
				),
				
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
		'title' => 'Dane dotyczące rodziny',
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
						'title' => 'wdowa/wdowiec',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące ubezpieczenia',
		'fields' => array(
			array(
				'title' => 'Ubezpieczenie w Białorusi',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'posiadam',
						
					),
					array(
						'title' => 'nie posiadam, chcę zakupić',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące wizy',
		'fields' => array(
			array(
				'title' => 'Rodzaj wizy',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'indywidualna',
						
					),
					array(
						'title' => 'grupowa',
						
					),
					
				),
				
			),
			array(
				'title' => 'Kategoria wizy',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'prywatna do 90 dni',
						
					),
					array(
						'title' => 'turystyczna',
						
					),
					array(
						'title' => 'tranzytowa',
						
					),
					array(
						'title' => 'biznesowa do 90  dni',
						
					),
					array(
						'title' => 'biznesowa powyżej 90  dni',
						
					),
					
				),
				
			),
			array(
				'title' => 'Ilość wjazdów',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => '1',
						
					),
					array(
						'title' => '2',
						
					),
					array(
						'title' => 'wiele',
						
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
				'title' => 'Planowany okres pobytu',
				'type' => 'number',
				'hint' => 'wiza turystyczna / pobytowa - proszę wpisać ilość dni,<br>
				wiza biznesowa - proszę wpisać ilość dni zgodnie z wydanym zaproszeniem,<br>
				wiza tranzytowa 1 i 2-krotna - proszę wpisać 2 dni (czas przejazdu przez Białoruś)',
				'required' => true,
				
			),
			array(
				'title' => 'Cel podróży',
				'field_type' => 'select',
				'required' => true,
				'hint' => 'zależy to od rodzaju wizy:<br>wiza turystyczna – zwiedzanie I inne,<br>
				wiza tranzytowa – cel tranzyt,<br>
				prywatna do 90 dni – wizyta u znajomych, wizyta u rodziny, inne,<br>
				wiza biznesowa – rozmowy handlowe, konsultacje techniczne, prezentacja oferty, koordynacja współpracy między firmami, szkolenie, inne',
				'opts' => array(
					array(
						'title' => 'zwiedzanie i inne',
						
					),
					array(
						'title' => 'tranzyt',
						
					),
					array(
						'title' => 'wizyta u znajomych, wizyta u rodziny, inne',
						
					),
					array(
						'title' => 'rozmowy handlowe, konsultacje techniczne, prezentacje oferty, koordynacja współpracy między firmami, szkolenie, inne',
						
					),
					
				),
				
			),
			array(
				'title' => 'Adres tymczasowego pobytu',
				'hint' => 'przy wizach turystycznych i biznesowych należy podać adres pobytu, jeśli jest to hotel – adres hotelu',
				
			),
			array(
				'title' => 'Źródło środków na wizytę w Białorusi',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'gotówka',
						
					),
					array(
						'title' => 'karta kredytowa',
						
					),
					array(
						'title' => 'czeki podróżne',
						
					),
					array(
						'title' => 'czeki bankowe',
						
					),
					
				),
				
			),
			array(
				'title' => 'Środek stransportu',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'samolot',
						
					),
					array(
						'title' => 'samochód',
						
					),
					array(
						'title' => 'pociąg',
						
					),
					array(
						'title' => 'autobus',
						
					),
					
				),
				
			),
			array(
				'title' => 'Trasa podróży',
				'required' => true,
				'hint' => 'Podać miasta',
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Czy posiadasz bilet lotniczy',
				'name' => 'Bilet lotniczy',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'nie',
						
					),
					array(
						'title' => 'tak',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące organu zapraszającego',
		'fields' => array(
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące poprzednich wizyt na Białorusi',
		'fields' => array(
			array(
				'title' => 'Czy byłeś wcześniej na Białorusi',
				'required' => true,
				'hint' => 'odp: nie/tak<br>
				jeśli tak należy wskazać daty od/do i miejsce',
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Dotychczasowe wizyty',
				'hint' => 'Liczba dotychczasowych wizyt na Białorusi w bieżącym roku',
				'required' => true,
				'type' => 'number',
				
			),
			array(
				'title' => 'Odmowa wizy',
				'hint' => 'Czy kiedykolwiek odmówiono wydania wizy na Białoruś lub wiza została anulowana<br>
				odp. Nie/tak<br>jeśli tak wskazać należy, kiedy',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	array(
		'title' => 'Pozostałe dane',
		'fields' => array(
			array(
				'title' => 'Czy kiedykolwiek odpowiadałeś za nieprzestrzeganie prawa na Białorusi',
				'name' => 'Nieprzestrzeganie prawa',
				'hint' => 'odp. Nie/tak<br>
				jeśli tak wskazać należy, kiedy i gdzie',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Czy byłeś deportowany z innego kraju',
				'hint' => 'odp. Nie/tak<br>
				jeśli tak wskazać należy, kiedy i z jakiego kraju',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	
);

