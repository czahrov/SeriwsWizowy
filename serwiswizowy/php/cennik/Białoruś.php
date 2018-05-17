<?php

/*
	data = [
		title 				(string)		(tytuł wyświetlany na stronie)
		name			(string)		(nazwa pola w formularzu)
		value			(string)		(wartość pola w formularzu)
		opts_name	(string)		(nazwa pól wariantów w formularzu)
		hint				(string)		(podpowiedź)
		type				(string)		(rodzaj inputu)
		required		(boolean)	(pole zaznaczone na stałe)
		selected		(boolean)	(pole domyślnie zaznaczone)
		opts = [
			title			(string)		(tytuł wyświetlany na stronie)
			value		(string)		(wartość pola w formularzu)
			hint			(string)		(podpowiedź)
			type			(string)		(rodzaj inputu)			
			price			(float)		(cena opcji)
			selected	(boolean)	(opcja domyślnie zaznaczona)
		]
		
	]
*/

$euro = 4.6;

$data = array(
	array(
		'title' => 'Opłata konsularna za wydanie wizy jednokrotnej',
		'name' => 'krotność wizy',
		'value' => 'jednokrotna',
		'type' => 'radio',
		'opts_name' => 'rodzaj wizy',
		// 'required' => true,
		'selected' => true,
		'opts' => array(
			array(
				'title' => 'biznesowa 30-dniowa',
				'hint' => 'Opis:<br>
				- biznes, wizyty na targach, rozmowy handlowe.<br>
				Ważność wiz: - wg. dat podanych na wniosku,<br>
				- do 30 dni pobytu.',
				'price' => 25 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'prywatna 30-dniowa',
					'hint' => nl2br( "Opis:
					- wyjazdy prywatne, odwiedziny; krewnych / znajomych, grobów bliskich.
					
					Ważność wiz:
					- wg. dat podanych na wniosku,
					- do 30 dni pobytu." ),
				'price' => 25 * $euro,
				'selected' => true,
				
			),
			array(
				'title' => 'turystyczna 14-dniowa',
					'hint' => nl2br( "Opis:
					- turystyka.
					
					Ważność wiz:
					- wg. dat podanych na wniosku,
					
					- do 14 dni pobytu." ),
				'price' => 25 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'tranzytowa 2-dniowa',
					'hint' => nl2br( "Opis:
					- tranzyt.
					
					Ważność wiz:
					- wg dat ważności wizy rosyjskiej plus 2 dni przed rozpoczęciem wizy do Rosji i 2 dni po jej zakończeniu." ),
				'price' => 25 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'przepustka do puszczy Białowieskiej 3-dniowa',
					'hint' => nl2br( "Opis:
					- wizyta w Puszczy Białowieskiej
					
					Ważność wiz:
					- 3 dni" ),
				'price' => 25 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'przepustka do Grodna i Kanał Augustowski 5-dniowa',
					'hint' => nl2br( "Opis:
					- wizyta w Grodnie i przeprawa Kanałem Augustowskim
					
					Ważność wiz:
					- 5 dni" ),
				'price' => 25 * $euro,
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy jednokrotnej ekspresowej',
		'name' => 'krotność wizy',
		'value' => 'jednokrotna (ekspres)',
		'type' => 'radio',
		'opts_name' => 'rodzaj wizy',
		// 'required' => true,
		'selected' => true,
		'opts' => array(
			array(
				'title' => 'biznesowa 30-dniowa',
				'hint' => 'Opis:<br>
				- biznes, wizyty na targach, rozmowy handlowe.<br>
				Ważność wiz: - wg. dat podanych na wniosku,<br>
				- do 30 dni pobytu.',
				'price' => 50 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'prywatna 30-dniowa',
					'hint' => nl2br( "Opis:
					- wyjazdy prywatne, odwiedziny; krewnych / znajomych, grobów bliskich.
					
					Ważność wiz:
					- wg. dat podanych na wniosku,
					- do 30 dni pobytu." ),
				'price' => 50 * $euro,
				'selected' => true,
				
			),
			array(
				'title' => 'turystyczna 14-dniowa',
					'hint' => nl2br( "Opis:
					- turystyka.
					
					Ważność wiz:
					- wg. dat podanych na wniosku,
					
					- do 14 dni pobytu." ),
				'price' => 50 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'tranzytowa 2-dniowa',
					'hint' => nl2br( "Opis:
					- tranzyt.
					
					Ważność wiz:
					- wg dat ważności wizy rosyjskiej plus 2 dni przed rozpoczęciem wizy do Rosji i 2 dni po jej zakończeniu." ),
				'price' => 50 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'przepustka do puszczy Białowieskiej 3-dniowa',
					'hint' => nl2br( "Opis:
					- wizyta w Puszczy Białowieskiej
					
					Ważność wiz:
					- 3 dni" ),
				'price' => 50 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'przepustka do Grodna i Kanał Augustowski 5-dniowa',
					'hint' => nl2br( "Opis:
					- wizyta w Grodnie i przeprawa Kanałem Augustowskim
					
					Ważność wiz:
					- 5 dni" ),
				'price' => 50 * $euro,
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy dwukrotnej',
		'name' => 'krotność wizy',
		'value' => 'dwukrotna',
		'type' => 'radio',
		'opts_name' => 'rodzaj wizy',
		// 'required' => true,
		// 'selected' => true,
		'opts' => array(
			array(
				'title' => 'biznesowa 30-dniowa',
				'hint' => nl2br( "Opis:
				- biznes, wizyty na targach, rozmowy handlowe.

				Ważność wiz:
				- wg. dat podanych na wniosku,
				- do 30 dni pobytu(ŁACZNIE DWA WJAZDY)" ),
				'price' => 35 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'prywatna 30-dniowa',
				'hint' => nl2br( "Opis:
				- wyjazdy prywatne, odwiedziny: krewnych / znajomych, grobów bliskich.

				Ważność wiz:
				- wg. dat podanych na wniosku,
				- do 30 dni pobytu." ),
				'price' => 35 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'tranzytowa 2-dniowa',
				'hint' => nl2br( "Opis: 
				- tranzyt.

				Ważność wiz: 
				- wg dat ważności wizy rosyjskiej plus 2 dni przed rozpoczęciem wizy do Rosji i 2 dni po jej zakończeniu,
				- 2-krotna" ),
				'price' => 35 * $euro,
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy dwukrotnej ekspresowej',
		'name' => 'krotność wizy',
		'value' => 'dwukrotna (ekspres)',
		'type' => 'radio',
		'opts_name' => 'rodzaj wizy',
		// 'required' => true,
		// 'selected' => true,
		'opts' => array(
			array(
				'title' => 'biznesowa 30-dniowa',
				'hint' => nl2br( "Opis:
				- biznes, wizyty na targach, rozmowy handlowe.

				Ważność wiz:
				- wg. dat podanych na wniosku,
				- do 30 dni pobytu(ŁACZNIE DWA WJAZDY)" ),
				'price' => 60 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'prywatna 30-dniowa',
				'hint' => nl2br( "Opis:
				- wyjazdy prywatne, odwiedziny: krewnych / znajomych, grobów bliskich.

				Ważność wiz:
				- wg. dat podanych na wniosku,
				- do 30 dni pobytu." ),
				'price' => 60 * $euro,
				// 'selected' => true,
				
			),
			array(
				'title' => 'tranzytowa 2-dniowa',
				'hint' => nl2br( "Opis: 
				- tranzyt.

				Ważność wiz: 
				- wg dat ważności wizy rosyjskiej plus 2 dni przed rozpoczęciem wizy do Rosji i 2 dni po jej zakończeniu,
				- 2-krotna" ),
				'price' => 60 * $euro,
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata konsularna za wydanie wizy wielokrotnej',
		'name' => 'krotność wizy',
		'value' => 'wielokrotna',
		'type' => 'radio',
		'opts_name' => 'rodzaj wizy',
		// 'required' => true,
		// 'selected' => true,
		'opts' => array(
			array(
				'title' => 'biznesowa 90-dniowa',
				'hint' => nl2br( "Opis:
				- biznes, wizyty na targach, rozmowy handlowe.

				Ważność wiz:
				- wg. dat podanych na wniosku,
				- do 90 dni pobytu(ŁACZNIE Wszystkie WJAZDY)" ),
				'price' => 260,
				// 'selected' => true,
				
			),
			array(
				'title' => 'biznesowa 365-dniowa',
				'hint' => nl2br( "Opis:
				- biznes, wizyty na targach, rozmowy handlowe.

				Ważność wiz:
				- wg. dat podanych na wniosku,max 365 dni" ),
				'price' => 260,
				// 'selected' => true,
				
			),
			array(
				'title' => 'tranzytowa 2-dniowa',
				'hint' => nl2br( "Opis: 
				- tranzyt.

				Ważność wiz: 
				- wg dat ważności wizy rosyjskiej plus 2 dni przed rozpoczęciem wizy do Rosji i 2 dni po jej zakończeniu,
				- wielokrotna,
				- każdy pobyt maks. 2 dni." ),
				'price' => 260,
				// 'selected' => true,
				
			),
			array(
				'title' => 'tranzytowa dla kierowców 2-dniowa',
				'hint' => nl2br( "Opis: 
				- tranzyt dla kierowców.

				Ważność wiz: 
				- wg dat ważności wizy rosyjskiej plus 2 dni przed rozpoczęciem wizy do Rosji i 2 dni po jej zakończeniu,
				- wielokrotna,
				- każdy pobyt maks. 2 dni." ),
				'price' => 260,
				// 'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Pośrednictwo wizowe',
		'value' => 'tak',
		'opts_name' => 'pośrednictwo tryb',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'tryb normalny',
				'value' => 'normalny',
				'price' => 100,
				'selected' => true,
				
			),
			array(
				'title' => 'tryb ekspresowy',
				'value' => 'ekspresowy',
				'price' => 140,
				
			),
			
		),
		
	),
	array(
		'title' => 'Polisa ubezpieczeniowa',
		'value' => 'tak',
		'hint' => 'O kosztach polisy ubezpieczeniowej zostaną Państwo poinformowani indywidualnie',
		'opts_name' => 'Polisa na dni',
		'opts' => array(
			array(
				'title' => 'Polisa do 7 dni',
				'value' => '7',
				'price' => 0,
				
			),
			array(
				'title' => 'Polisa do 14 dni',
				'value' => '14',
				'price' => 0,
				
			),
			array(
				'title' => 'Polisa do 30 dni',
				'value' => '30',
				'price' => 0,
				
			),
			
		),
		
	),
	
);

