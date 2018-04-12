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

$usd = 3.39445617;

$data = array(
	array(
		'title' => 'Opłata konsularna za wydanie wizy',
		'name' => 'opłata konsularna',
		'value' => 'tak',
		// 'opts_name' => 'Opłata konsularna tryb',
		'opts_name' => 'rodzaj wizy',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'turystyczna jednokrotna',
				'hint' => "dokumenty niezbędne do ubiegania się o wizę:<br>
				- 2 wypełnione kopie formularzy z oryginalnymi podpisami, 4 fotografie paszportowe, paszport ważny przynajmniej 3 miesiące od daty planowanego powrotu,<br>
				- czas na jaki wiza jest wydawana: wiza jest ważna przez 3 miesiące, w tym na terytorium Pakistanu można być maksymalnie 30 dni,<br>
				- Wizy turystyczne obecnie wydawane są bardzo niechętnie lub wręcz nie są wydawane!",
				'price' => round( $usd * 40, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'turystyczna wielokrotna',
				'hint' => "dokumenty niezbędne do ubiegania się o wizę:<br>
				- 2 wypełnione kopie formularzy z oryginalnymi podpisami, 4 fotografie paszportowe, paszport ważny przynajmniej 3 miesiące od daty planowanego powrotu,<br>
				- czas na jaki wiza jest wydawana: 1 rok (w tym czasie możemy na teren Pakistanu wjechać maksymalnie 6 razy),<br>
Wizy turystyczne obecnie wydawane są bardzo niechętnie lub wręcz nie są wydawane!",
				'price' => round( $usd * 75, 2 ),
				// 'selected' => true,
				
			),
			array(
				'title' => 'tranzytowa jednorazowa',
				'hint' => "dokumenty niezbędne do ubiegania się o wizę:<br>
				- 2 wypełnione kopie formularzy z oryginalnymi podpisami, 4 fotografie paszportowe, paszport ważny przynajmniej 3 miesiące od daty planowanego powrotu, wymagana jest również wiza (wizy) kraju docelowego,<br>
				- czas na jaki wiza jest wydawana: wiza jest ważna przez 3 miesiące, w tym na terytorium Pakistanu można być maksymalnie 15 dni,<br>
				czas oczekiwania na wizę: około 3 tygodnie",
				'price' => round( $usd * 15, 2 ),
				
			),
			array(
				'title' => 'tranzytowa dwukrotna (tam i z powrotem)',
				'hint' => "dokumenty niezbędne do ubiegania się o wizę:<br>
				- 2 wypełnione kopie formularzy z oryginalnymi podpisami, 4 fotografie paszportowe, paszport ważny przynajmniej 3 miesiące od daty planowanego powrotu, wymagana jest również wiza (wizy) kraju docelowego,<br>
				- czas na jaki wiza jest wydawana: wiza jest ważna przez 3 miesiące, w tym na terytorium Pakistanu można być maksymalnie 30 dni,<br>
				czas oczekiwania na wizę: około 3 tygodnie<br>
				Wizę tę można przedłużyć na miejscu w oddziale MSZ, nie powinno być z tym problemu.",
				'price' => round( $usd * 30, 2 ),
				
			),
			array(
				'title' => 'biznesowa jednorazowa',
				'hint' => "dokumenty niezbędne do ubiegania się o wizę:<br>
				- 2 wypełnione kopie formularzy z oryginalnymi podpisami, 4 fotografie paszportowe, paszport ważny przynajmniej 3 miesiące od daty planowanego powrotu, list polecający z firmy do której się jedzie, list delegujący z firmy polskiej, adres oraz nr telefonu osoby delegowanej, rezerwacja biletu lotniczego<br>
				- czas na jaki wiza jest wydawana: 30 dni z możliwością przedłużenia do 60 dni (na jej wykorzystanie mamy 3 miesiące),<br>
				czas oczekiwania na wizę: około 3 tygodnie",
				'price' => 252,
				
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
				'price' => 130,
				'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Opłata podawcza pobierana przez Centrum Obsługi Wniosków Wizowych BLS INTERNATIONAL',
		'value' => 'tak',
		// 'opts_name' => 'pośrednictwo tryb',
		'opts_name' => 'opłata podawcza',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'tryb normalny',
				'value' => 'normalny',
				'price' => 40,
				'selected' => true,
				
			),
			
		),
		
	),
	array(
		'title' => 'Polisa ubezpieczeniowa',
		'value' => 'tak',
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
	array(
		'title' => 'Transport dokumentów',
		'name' => 'dokumenty kierunek',
		'opts_name' => 'dokumenty kierunek',
		'hint' => '',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'Jedna strona',
				'hint' => 'Odesłanie gotowej wizy wraz z dokumentami',
				'price' => 26,
				'type' => 'radio',
				'selected' => true,
				
			),
			array(
				'title' => 'Obie strony',
				'hint' => 'Kurier po dokumenty oraz odesłanie gotowej wizy z dokumentami',
				'price' => 47,
				'type' => 'radio',
				
			),
			
		),
		
	),
	array(
		'title' => 'Transport dokumentów - tryb',
		'name' => 'dokumenty tryb',
		'opts_name' => 'dokumenty tryb',
		'hint' => '',
		'required' => true,
		'opts' => array(
			array(
				'title' => 'Ekspress do 10',
				'hint' => '',
				'price' => 75,
				'type' => 'radio',
				
			),
			array(
				'title' => 'Ekspress do 12',
				'hint' => '',
				'price' => 42,
				'type' => 'radio',
				
			),
			array(
				'title' => 'List polecony',
				'hint' => 'List polecony z potwierdzeniem odbioru',
				'price' => 22,
				'type' => 'radio',
				'selected' => true,
				
			),
			
		),
		
	),
	
);

