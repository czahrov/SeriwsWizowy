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
				'title' => 'Inne nazwiska',
				'hint' => 'chodzi tu o nazwisko panieńskie,<br>jeśli nie było zmiany należy zostawić puste pole',
				
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
				'title' => 'Obywatelstwo Rosji',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'Nie',
						
					),
					array(
						'title' => 'Tak',
						
					),
					
				),
				
			),
			array(
				'title' => 'Obywatelstwo Rosji (w przeszłości)',
				'name' => 'Posiadał(a) obywatelstwo Rosji',
				'hint' => 'czy posiadałeś wcześniej obywatelstwo Rosji',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'Nie',
						
					),
					array(
						'title' => 'Tak',
						
					),
					
				),
				
			),
			array(
				'title' => 'Numer paszportu',
				'hint' => 'Numer paszportu składa się z dwóch liter (tzw seria) oraz siedmiu cyfr.<br>Przykład: AA 1234567',
				'required' => true,
				'atts' => array(
					'pattern' => '[a-zA-Z]{2}\s*\d{7}',
					
				),
				
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
				'hint' => 'W przypadku wydania paszportu poza granicami Polski prosimy o wcześniejszy kontakt',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'Polska'
					),
					
				),
				
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
					'pattern' => '^\d[\d \-]+$',
					'title' => 'dozwolone znaki: cyfry, myślniki i spacje'
					
				),
				
			),
			array(
				'title' => 'Adres e-mail',
				'name' => 'Kontakt - email',
				'type' => 'mail',
				'required' => true,
				'atts' => array(
					'pattern' => '^[^@]+@.+\..+$',
					'title' => '[login]@[domena] np: jan@kowalski.pl',
					
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
			array(
				'title' => 'Nazwa zakładu pracy',
				// 'required' => true,
				
			),
			array(
				'title' => 'Adres zakładu pracy',
				// 'required' => true,
				
			),
			array(
				'title' => 'Telefon do zakładu pracy',
				'type' => 'tel',
				// 'required' => true,
				'atts' => array(
					'pattern' => '^\d[\d \-]+$',
					'title' => 'dozwolone znaki: cyfry, myślniki i spacje'
					
				),
				
			),
			array(
				'title' => 'FAX Zakładu pracy',
				'type' => 'tel',
				
			),
			array(
				'title' => 'E-mail zakładu pracy',
				'type' => 'mail',
				'atts' => array(
					'pattern' => '^[^@]+@.+\..+$',
					'title' => '[login]@[domena] np: jan@kowalski.pl',
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Rodzina',
		'fields' => array(
			array(
				'title' => 'Czy starający się o wizę posiada rodzinę w Rosji',
				'name' => 'Posiada rodzinę w Rosji',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'Nie',
						
					),
					array(
						'title' => 'Tak',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Ubezpieczenie',
		'fields' => array(
			array(
				'title' => 'Czy starający się o wizę posiada ważne w Rosji ubezpieczenie',
				'name' => 'Posiada Rosyjskie ubezpiecznie',
				'hint' => 'Do Rosji wymagane jest ubezpieczenie ważne w Rosji (koszty leczenia min. 30 000 euro)',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => 'Nie ( chcę zakupić )',
						
					),
					array(
						'title' => 'Tak',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Plan podróży',
		'fields' => array(
			array(
				'title' => 'Data wjazdu do Rosji',
				'name' => 'Data wjazdu',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Data wyjazdu z Rosji',
				'name' => 'Data wyjazdu',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Ilość wjazdów',
				'type' => 'number',
				'required' => true,
				'atts' => array(
					'min' => 1,
					'step' => 1,
					
				),
				
			),
			array(
				'title' => 'Trasa podróży',
				'field_type' => 'textarea',
				'hint' => nl2br( 'Miejscowości które planujesz odwiedzić.
				Maksymalnie 5' ),
				'required' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Instytuacja',
		'fields' => array(
			array(
				'title' => 'Do jakiej instytucji Pan/Pani się wybiera',
				'name' => 'Odwiedzana instytucja',
				'hint' => nl2br( '- jeśli posiadasz już Voucher - wpisz dane z Vouchera -  podanie nazwę oraz numer indeksowy przyjmującej firmy turystycznej, jeśli zakupujesz Voucher u nas pozostaw puste pole - wypełnimy je za Ciebie.
				- w przypadku wyjazdu w celu biznesowym prosimy o podanie nazwy przyjmującej organizacji lub firmy oraz miasta.
				- w przypadku wyjazdu w celu prywatnym prosimy o podanie nazwiska, imienia oraz adresu zamieszkania osoby zapraszającej.' ),
				
			),
			
		),
		
	),
	array(
		'title' => 'Poprzednie wizyty',
		'fields' => array(
			array(
				'title' => 'Dane dotyczące poprzednich wizyt',
				'type' => 'number',
				'hint' => 'Chodzi tutaj o liczbę wizyt w Rosji, od 1 do 10 i więcej',
				'atts' => array(
					'min' => 1,
					'max' => 999,
					'step' => 1,
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Dzieci',
		'fields' => array(
			array(
				'title' => 'Dzieci do lat 16 podróżujące razem do Rosji',
				'name' => 'Dzieci',
				'field_type' => 'textarea',
				'hint' => 'Jeśli tak, należy podać dane personalne i adres',
				
			),
			
		),
		
	),
	
);

