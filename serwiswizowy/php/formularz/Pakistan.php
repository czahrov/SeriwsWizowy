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
				'title' => 'Grupa krwi',
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
					'pattern' => '^\d{11}$',
					'title' => 'Numer PESEL składa sie z 11 cyfr',
					
				),
				
			),
			array(
				'title' => 'Narodowość',
				'required' => true,
				
			),
			array(
				'title' => 'Poprzednia narodowość',
				'required' => true,
				
			),
			array(
				'title' => 'Imię i nazwisko ojca',
				'required' => true,
				
			),
			array(
				'title' => 'Wiek ojca',
				'required' => true,
				'type' => 'number',
				
			),
			array(
				'title' => 'Zawód ojca',
				'required' => true,
				
			),
			array(
				'title' => 'Adres ojca',
				'required' => true,
				
			),
			array(
				'title' => 'Imię i nazwisko matki',
				'required' => true,
				
			),
			array(
				'title' => 'Wiek matki',
				'required' => true,
				'type' => 'number',
				
			),
			array(
				'title' => 'Zawód matki',
				'required' => true,
				
			),
			array(
				'title' => 'Adres matki',
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
				'title' => 'Data wydania paszportu',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Religia',
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
				'title' => 'Zajęcie/Zatrudnienie',
				'required' => true,
			),
			array(
				'title' => 'Początek zatrudnienia',
				'name' => 'Od kiedy wykonywany jest podany zawód',
				'hint' => 'Od kiedy wykonywany jest podany zawód',
				'type' => 'date',
				// 'required' => true,
			),
			array(
				'title' => 'Nazwa i adres firmy',
				// 'required' => true,
				'field_type' => 'textarea',
			),
			array(
				'title' => 'Początek poprzedniego zatrudnienia',
				'name' => 'Data rozpoczęcia poprzedniego zatrudnienia',
				'type' => 'date',
				// 'required' => true,
			),
			array(
				'title' => 'Koniec poprzedniego zatrudnienia',
				'name' => 'Data zakończenia poprzedniego zatrudnienia',
				'type' => 'date',
				// 'required' => true,
			),
			array(
				'title' => 'Poprzedni zakład pracy',
				'name' => 'Nazwa poprzedniego zakładu pracy',
				// 'required' => true,
			),
			array(
				'title' => 'Poprzednie zajęcie/zatrudnienie',
				// 'required' => true,
			),
			array(
				'title' => 'Obowiązki w poprzedniej firmie',
				// 'required' => true,
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
						'title' => 'rozwód',
						
					),
					array(
						'title' => 'w separacji',
						
					),
					
				),
				
			),
			array(
				'title' => 'Dzieci',
				'name' => 'Dzieci poniżej 18 roku życia',
				'hint' => 'Dzieci poniżej 18 roku życia<br>Nie/Tak - wymienić jeśli tak',
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
		
	),
	array(
		'title' => 'Dane dotyczące podróży',
		'fields' => array(
			array(
				'title' => 'Okres ważności wizy',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'poniżej m-ca',
						'selected' => true,
					),
					array(
						'title' => '6 mcy',
					),
					array(
						'title' => '1 rok',
					),
					array(
						'title' => '2 lata',
					),
					array(
						'title' => '5 lat',
					),
					
				),
				
			),
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
				'title' => 'Adres na czas pobytu',
				'hint' => 'Adres i telefon',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Planowane miejsca odwiedzin',
				'name' => 'Trasa podróży',
				'field_type' => 'textarea',
				'required' => true,
				
			),
			array(
				'title' => 'Źródło środków',
				'name' => 'Czy podróż pokryta jest ze środków własnych?',
				'hint' => 'Czy podróż pokryta jest ze środków własnych?<br>Nie/Tak - jeśli tak, wskazać imię i nazwisko/nazwę organizacji płacącej za wyjazd',
				'name' => 'sponsor',
				'field_type' => 'textarea',
				'required' => true,
				
			),
			array(
				'title' => 'Środek transportu',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'samolot',
						'selected' => true,
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
				'title' => 'Miejsce przylotu',
				'name' => 'Miejsce przylotu do Pakistanu',
				'required' => true,
			),
			array(
				'title' => 'Miejsce wyjazdu/odlotu',
				'name' => 'Miejsce wyjazdu/odlotu do Pakistanu',
				'required' => true,
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
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące poprzednich wizyt',
		'fields' => array(
			array(
				'title' => 'Ostatni pobyt',
				'name' => 'pakistan 5 lat',
				'hint' => 'Czy byłeś w Pakistanie w przeciągu ostatnich 5-ciu lat<br>Odp nie/tak- jeśli tak wskazać datę od/do, miejsce , cel date wydania wizy, nr wizy, miejsce wydania(kraj, miasto',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Pobyt za granicą',
				'name' => 'inne kraje 2 lata',
				'hint' => 'podróże do innych krajów w ciągu 2 lat<br>Odp nie/tak – jeśli tak wskazać kraj, date początku wizyty i datę zakończenia',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Odmowa wizy',
				'name' => 'odmowa',
				'hint' => 'Czy kiedykowiek odmówiono wydania  wizy do Pakistanu lub wiza została anulowana<br>Odp nie/tak – jeśli tak wyjaśnić',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Deportacja',
				'name' => 'deportacja',
				'hint' => 'Czy był Pan(i) zmuszony do opuszczenia lub deportowany z Pakistanu lub innego kraju<br>Odp nie/tak – data deortacji, kraj deportacji,powod deportacji, nr referencyjny',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Konto bakowe',
				'name' => 'bank',
				'hint' => 'Czy posiada Pan(i) konto bankowe w Pakistanie?<br>Jeśli tak podać',
				
			),
			
		),
		
	),
	array(
		'title' => 'Pozostałe dane',
		'fields' => array(
			array(
				'title' => 'Popełnione przestępstwa',
				'name' => 'karany',
				'hint' => 'Czy był(a) Pan(i) kiedykolwiek aresztowany(a), karany(a) za popełnienie przestępstwa, nawet jeśli potem uległ(a) Pan(i), zwolnieniu lub innym legalnym działaniom<br>Odp nie/tak – jeśli tak podac kiedy, kraj, zarzut, wyrok',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące ubezpieczenia',
		'fields' => array(
			array(
				'title' => 'Ubezpieczeine',
				'name' => 'ubezpieczenie',
				'hint' => 'Czy posiada Pan(i) ubezpieczenie w Pakistanie',
				'field_type' => 'select',
				'required' => true,
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

