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
		'title' => 'Dane osobowe',
		'fields' => array(
			array(
				'title' => 'Imiona',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'Nazwisko',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'Data urodzenia',
				'hint' => '',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Miejsce urodzenia',
				'hint' => 'Miejscowość, województwo, kraj',
				'required' => true,
				'atts' => array(
					'pattern' => '^([^,]+,\s*){2}([^,]+)$',
					'title' => 'Miejscowość, województwo, kraj',
					
				),
				
			),
			array(
				'title' => 'Obywatelstwo',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'PESEL',
				'hint' => '',
				'required' => true,
				'atts' => array(
					'pattern' => '^\d{11}$',
					'title' => '11 cyfr',
					
				),
				
			),
			array(
				'title' => 'Numer dowodu osobistego',
				'hint' => '',
				'required' => true,
				'atts' => array(
					'pattern' => '^[a-zA-Z]{3}\s*\d{6}$',
					'title' => '3 litery ( tzw seria ) i 6 cyfr, np: ABC 123456',
					
				),
				
			),
			array(
				'title' => 'Numer paszportu',
				'hint' => '',
				'required' => true,
				'atts' => array(
					'pattern' => '^[a-zA-Z]{2}\s*\d{7}$',
					'title' => '2 litery i 7 cyfr, np: AB 1234567',
					
				),
				
			),
			
		),
		
	),
	array(
		'title' => 'Zameldowanie',
		'fields' => array(
			array(
				'title' => 'Kraj',
				'name' => 'zam-kraj',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'Miejscowość',
				'name' => 'zam-miejscowość',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'Kod pocztowy',
				'name' => 'zam-poczta',
				'hint' => '',
				'required' => true,
				'atts' => array(
					'pattern' => '^\d{2}-\d{3}$',
					'title' => 'np: 23-456',
					
				),
				
			),
			array(
				'title' => 'Ulica',
				'name' => 'zam-ulica',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'Numer budynku',
				'name' => 'zam-budynek',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'Numer lokalu',
				'name' => 'zam-lokal',
				'hint' => '',
				// 'required' => true,
				
			),
			
		),
		
	),
	
	array(
		'title' => 'Dane kontaktowe',
		'fields' => array(
			array(
				'title' => 'Numer telefonu',
				'hint' => '',
				'required' => true,
				'atts' => array(
					'pattern' => '^(\d+[\- ]*)+$',
					'title' => 'Dozwolone znaki: cyfry, myślniki i spacje',
					
				),
				
			),
			array(
				'title' => 'Adres e-mail',
				'hint' => '',
				'required' => true,
				'atts' => array(
					'pattern' => '^[^@]+@.+\..+$',
					'title' => '[login]@[domena] np: jan@kowalski.pl',
					
				),
				
			),
			array(
				'title' => 'Adres do korenspondencji',
				'hint' => 'Podać jeśli inny niż adres zameldowania',
				// 'required' => true,
				'field_type' => 'textarea',
				'atts' => array(
					'pattern' => '^[^,]+,\s*\d{2}-\d{3},\s*[^,]+,\s*.+$',
					'title' => '[ulica i numer mieszkania], [kod pocztowy], [Miejscowość], [Kraj]',
					
				),
				
			),
			
		),
		
	),
	
);

