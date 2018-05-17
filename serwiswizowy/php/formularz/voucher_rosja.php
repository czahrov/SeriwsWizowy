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
				'title' => 'Imię',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'Drugie imię',
				'hint' => '',
				// 'required' => true,
				
			),
			array(
				'title' => 'Nazwisko',
				'hint' => '',
				'required' => true,
				
			),
			array(
				'title' => 'Obywatelstwo',
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
				'title' => 'Numer paszportu',
				'hint' => '',
				'required' => true,
				'atts' => array(
					'pattern' => '^[a-zA-Z]{2}\s*\d{7}$',
					'title' => '2 litery i 7 cyfr',
					
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
			
		),
		
	),
	array(
		'title' => 'Informacje o podróży',
		'fields' => array(
			array(
				'title' => 'Ważność vouchera',
				'hint' => 'Voucher turystyczny zamawiany do wizy na wskazaną liczbę dni pobytu',
				'required' => true,
				'field_type' => 'select',
				'opts' => array(
					array(
						'title' => '14 dni',
						
					),
					array(
						'title' => '30 dni',
						
					),
					
				),
				
			),
			array(
				'title' => 'Data wjazdu do Rosji',
				'hint' => '',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Data wyjazdu z Rosji',
				'hint' => '',
				'type' => 'date',
				'required' => true,
				
			),
			array(
				'title' => 'Miasto/a',
				'hint' => '',
				'field_type' => 'textarea',
				'required' => true,
				
			),
			/* array(
				'title' => 'hotel',
				'hint' => 'Jeżeli posiadają Państwo rezerwację prosimy o wpisanie pełnego adresu i nazwy hotelu, wraz z numerem telefonu i załączenie potwierdzenia jego rezerwacji',
				// 'required' => true,
				
			), */
			array(
				'title' => 'Rezerwacja w hotelu',
				'hint' => '',
				'field_type' => 'select',
				'required' => true,
				'opts' => array(
					array(
						'title' => 'nie mam',
						'value' => 'nie',
						
					),
					array(
						'title' => 'mam już rezerwację w hotelu w Rosji',
						'value' => 'tak',
						
					),
					
				),
				
			),
			array(
				'title' => 'Dane hotelu',
				'hint' => 'Wypełnić jeśli posiadasz rezerwację hotelową',
				
			),
			array(
				'title' => 'Potwierdzenie',
				'hint' => 'Potwierdzenie rezerwacji hotelowej w Rosji',
				'type' => 'file',
				
			),
			
		),
		
	),
	
);

