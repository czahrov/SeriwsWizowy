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
					'title' => 'np: 22-333',
					
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
			array(
				'title' => 'Nazwa zakładu pracy',
				'required' => true,
				
			),
			array(
				'title' => 'Adres zakładu pracy',
				'required' => true,
				
			),
			array(
				'title' => 'Telefon do zakładu pracy',
				'type' => 'tel',
				'required' => true,
				
			),
			array(
				'title' => 'FAX Zakładu pracy',
				'type' => 'tel',
				
			),
			array(
				'title' => 'E-mail zakładu pracy',
				'type' => 'mail',
				
			),
			
		),
		
	),
	array(
		'title' => 'Wiza',
		'fields' => array(
			array(
				'title' => 'Krotność wizy',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'Jednokrotna',
						
					),
					array(
						'title' => 'Dwukrotna',
						
					),
					array(
						'title' => 'Wielokrotna',
						
					),
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Rodzina',
		'fields' => array(
			array(
				'title' => 'Czy starający się o wizę posiada rodzinę w Rosji',
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
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Data wyjazdu z Rosji',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Ilość wjazdów',
				'type' => 'number',
				'required' => true,
				'atts' => array(
					'min' => 1,
					'max' => 999,
					'step' => 1,
					
				),
				
			),
			array(
				'title' => 'Cel wizyty',
				'field_type' => 'select',
				'required' => true,
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
						'title' => 'kulturalny',
						
					),
					array(
						'title' => 'pracowniczy',
						
					),
					array(
						'title' => 'prywatny',
						
					),
					array(
						'title' => 'tranzyt',
						
					),
					
				),
				
			),
			array(
				'title' => 'Trasa podróży',
				'field_type' => 'textarea',
				'hint' => 'Maksymalnie 5 miejscowości',
				'required' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Instytuacja',
		'fields' => array(
			array(
				'title' => 'Do jakiej instytucji Pan/Pani się wybiera',
				'hint' => '- W przypadku wyjazdu turystycznego prosimy o podanie nazwy oraz numeru indeksowego przyjmującej firmy turystycznej. <br>
				- W przypadku wyjazdu w celu biznesowym prosimy o podanie nazwy przyjmującej organizacji lub firmy oraz miasta. <br>
				- W przypadku wyjazdu w celu prywatnym prosimy o podanie nazwiska, imienia oraz adresu zamieszkania osoby zapraszającej',
				
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
				'field_type' => 'textarea',
				'hint' => 'Jeśli tak, należy podać dane personalne i adres',
				
			),
			
		),
		
	),
	
);

