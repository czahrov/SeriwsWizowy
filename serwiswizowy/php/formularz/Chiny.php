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
				'hint' => 'chodzi tu o nazwisko panieńskie,<br>jeśli nie było zmiany należy zostawić puste pole,<br>
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
				'title' => 'Kraj urodzenia',
				'name' => 'Miejsce urodzenia - kraj',
				'required' => true,
				
			),
			array(
				'title' => 'Województwo urodzenia',
				'name' => 'Miejsce urodzenia - województwo',
				'required' => true,
				
			),
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
				'title' => 'Poprzednie obywatelstwo',
				'hint' => 'jeśli nie było trzeba wpisać n/a',
				
			),
			array(
				'title' => 'Rodzaj paszportu',
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
			array(
				'title' => 'Numer dowodu osobistego',
				'required' => true,
				'atts' => array(
					'pattern' => '^[a-zA-Z]{3}\s?\d{6}$',
					'title' => '3 litery ( seria dowodu ) i 6 cyfr',
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące zameldowania/zamieszkania',
		'fields' => array(
			array(
				'title' => 'Kraj',
				'name' => 'Zameldowanie - kraj',
				'atts' => array(
					'value' => 'POLAND',
					'readonly' => '',
					
				),
				
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
						'title' => 'w separacji',
						
					),
					
				),
				
			),
			array(
				'title' => 'Dane członka rodziny',
				'hint' => 'małżonek, rodzic, dziecko- takie dane jak: nazwisko, imię, obywatelstwo, zawód, pokrewieństwo',
				'field_type' => 'textarea',
				'required' => true,
				
			),
			array(
				'title' => 'Osoba do kontaktu',
				'hint' => 'odp. Tak/ nie, – jeśli jest odpowiedz nie, trzeba wpisać osobę do kontaktu:<br> nazwisko, imię, obywatelstwo, zawód, pokrewieństwo, telefon kontaktowy',
				'field_type' => 'textarea',
				'required' => true,
				
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
				'title' => 'Najdłuższy pobyt',
				'name' => 'najdłuższy pobyt',
				'hint' => 'Najdłuższy z planowanych pobytów w Chinach,<br>Ambasada zaokrągla do 10 dni<br>– może być 10,20,30, 180 ( dotyczy tylko wizy studenckiej )',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 10,
						
					),
					array(
						'title' => 20,
						
					),
					array(
						'title' => 30,
						
					),
					array(
						'title' => 180,
						
					),
					
				),
				
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
						'title' => 'podjęcie zatrudnienia',
						
					),
					array(
						'title' => 'podjęcia nauki do 180 dni',
						
					),
					array(
						'title' => 'krótka wizyta u obywatela Chin lub obcokrajowca posiadającego kartę stałego pobytu',
						
					),
					array(
						'title' => 'krótka wizyta u obcokrajowca przebywającego na terenie Chin w celu podjęcia pracy',
						
					),
					array(
						'title' => 'podjęcia nauki lub innej czasowej formie pobytu',
						
					),
					array(
						'title' => 'urzędowy',
						
					),
					array(
						'title' => 'wymiana doświadczeń',
						
					),
					array(
						'title' => 'promowanie talentu',
						
					),
					array(
						'title' => 'obsługa statku lub samolotu',
						
					),
					array(
						'title' => 'krótka wizyta dziennikarska',
						
					),
					array(
						'title' => 'dziecko pod opieką rodziców',
						
					),
					array(
						'title' => 'wizyta u obywatela Chin lub obcokrajowca ze stałą kartą pobytu na okres powyżej 180 dni',
						
					),
					array(
						'title' => 'dłuższa wizyta w celu odwiedzenia obcokrajowca przebywającego na ternie Chin w celu podjęcia pracy',
						
					),
					array(
						'title' => 'podjęcia nauki lub innej czasowej formie pobytu',
						
					),
					array(
						'title' => 'pobieranie nauki na okres powyżej 180 dni',
						
					),
					array(
						'title' => 'akredytowany dziennikarz',
						
					),
					array(
						'title' => 'inne',
						
					),
					
				),
				
			),
			array(
				'title' => 'Adres pobytu',
				'field_type' => 'textarea',
				'required' => true,
				'hint' => 'podać nazwę hotelu – a jeśli nie jest znany trzeba wpisać hotel i miasto',
				
			),
			array(
				'title' => 'Płacący',
				'name' => 'Kto pokrywa koszty podróży',
				'hint' => 'Kto pokrywa koszty podróży',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'wnioskodawca',
					),
					array(
						'title' => 'zapraszający',
					),
					array(
						'title' => 'firma',
					),
					array(
						'title' => 'rodzice lub opiekunowie',
					),
					
				),
				
			),
			array(
				'title' => 'Bilet lotniczy',
				'name' => 'Bilet lotniczy',
				'hont' => 'Czy posiada Pan(i) bilet lotniczy',
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
			array(
				'title' => 'Organ zapraszający',
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące poprzednich wizyt',
		'fields' => array(
			array(
				'title' => 'Ostatnia wiza do Chin',
				'hint' => 'jeśli była już wydana w przyszłości wiza do Chin i jest ona w paszporcie trzeba wskazać datę, kraj i miejsce wydania ostatniej wizy',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			
		),
		
	),
	array(
		'title' => 'Pozostałe dane',
		'fields' => array(
			array(
				'title' => 'Wyjazdy za granicę',
				'name' => 'Ilość wyjazdów',
				'hint' => 'Ile razy w ciągu ostatnich 12 miesięcy był(a) Pan(i) za granicą, nie licząc wjazdów do Chin<br>Podać liczę i wymienić te kraje',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Problemy z prawem',
				'name' => 'karany',
				'hint' => 'Czy był Pan(i) kiedykolwiek karany(a) za popełnione przestępstwo<br>Tak/Nie,<br>
				Jeśli tak - podać okoliczności',
				'required' => true,
				'field_type' => 'textarea',
				
			),
			array(
				'title' => 'Choroba zakaźna',
				'name' => 'Choroby',
				'hint' => 'Czy cierpi Pan(i) na jakąś chorobę z listy chorób:<br>
				poważne zaburzenia psychiczne,<br>
				gruźlica zakaźna,<br>
				inna choroba zakaźna potencjalnie niebezpieczna dla otoczenia',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'nie'
						
					),
					array(
						'title' => 'tak'
						
					),
					
				),
				
			),
			array(
				'title' => 'Przekroczony czas pobytu',
				'name' => 'przekroczony czas',
				'hint' => 'Czy przekroczył Pan(i) czas pobytu w Chinach',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'nie'
						
					),
					array(
						'title' => 'tak'
						
					),
					
				),
				
			),
			array(
				'title' => 'Odmowa wizy',
				'name' => 'odmowa',
				'hint' => 'Czy kiedykolwiek odmówiono Panu(i) wizy do Chin lub nie wpuszczono na jego terytorium',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'nie'
						
					),
					array(
						'title' => 'tak'
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Dane dotyczące ubezpieczenia',
		'fields' => array(
			array(
				'title' => 'Ubezpieczenie',
				'name' => 'ubezpieczenie',
				'hint' => 'Czy Posiada Pan(i) ważne ubezpieczenie',
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

