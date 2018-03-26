<?php
	$uwaga = get_post_meta( get_post()->ID, 'uwaga', true );
	$faq = get_post_meta( get_post()->ID, 'faq', true );
	$informacje = get_post_meta( get_post()->ID, 'informacje', true );
	
?>
<div class="white-page wiza wniosek">
<div class="">
	<div class="view-steps d-flex flex-md-wrap">
		<div class="kraj p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
			<div class="icon-info"></div>
			<p>Wyszukaj kraj do którego potrzebujesz wizy</p>
		</div>
		<div class="opcje p-2 step1-home d-flex align-items-center justify-content-around col-12 col-lg-3 active">
			<div class="icon-info"></div>
			<p>Wybierz odpowiednie opcje i przejdź do nastepnego kroku</p>
		</div>
		<div class="wniosek p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
			<div class="icon-info"></div>
			<p>Wypełnij wniosek, a następnie kliknij przycisk "wyślij"</p>
		</div>
		<div class="gotowe p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3">
			<div class="icon-info"></div>
			<p>Gotowe! Na Twoją skrzynkę wysyłamy e-mail</p>
		</div>
	</div>
	<div class="main d-flex flex-wrap">
		<div class="side col-md-4 d-none d-md-block fp_pin_rail">
			<div class="box-wiza fp_pin_dragger">
				<div class='top'>
					<h4 class=''><?php printf( "Wiza do: %s", get_post()->post_title ); ?></h4>
				</div>
				<div class='mid'>
					<div class='wiersz d-none d-lg-flex' hidden>
						<div class='name col d-flex align-items-center'></div>
						<div class='cost d-flex align-items-center justify-content-center'></div>
						
					</div>
					<div class='wiersz total d-flex flex-wrap'>
						<div class='name col-12 col-lg d-flex align-items-center'>
							Całkowity koszt
						</div>
						<div class='cost col-12 col-lg-auto d-flex align-items-center justify-content-center'>---</div>
					
					</div>
				</div>
			</div>
		</div>
		<div class="box col-md-8 single-page-content">
			<div class='opcje'>
				<h4 class='page-title'>
					Wybierz interesujące Cię opcje
				</h4>
				<form class="d-flex flex-wrap">
					<!-- pośrednictwo wizowe  -->
					<div class="opt-single col-12">
						<input id="opt1" class="" type="checkbox" name="posrednictwo-wizowe" value="tak" hidden checked disabled="">
						<label for="opt1" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Pośrednictwo wizowe
							</div>
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-6">
						<input id="opt1-1" class="" type="radio" name="posrednictwo-wizowe-tryb" value="normalny" hidden required checked price=10>
						<label for="opt1-1" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Tryb normalny
							</div>
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-6">
						<input id="opt1-2" class="" type="radio" name="posrednictwo-wizowe-tryb" value="express" hidden required price=10>
						<label for="opt1-2" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Tryb ekspresowy
							</div>
						</label>
					</div>
					
					<!-- voucher do rosji -->
					<div class="opt-single col-12">
						<input id="opt2" class="" type="checkbox" name="voucher" value="tak" hidden required>
						<label for="opt2" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Voucher do Rosji
							</div>
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-6">
						<input id="opt2-1" class="" type="radio" name="voucher-dni" value="14" hidden required price=10>
						<label for="opt2-1" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Zamawiany do wizy na 14 dni pobytu
							</div>
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-6">
						<input id="opt2-2" class="" type="radio" name="voucher-dni" value="30" hidden required price=10>
						<label for="opt2-2" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Zamawiany do wizy na 30 dni pobytu
							</div>
						</label>
					</div>
					
					<!--  polisa ubezpieczeniowa -->
					<div class="opt-single col-12">
						<input id="opt3" class="" type="checkbox" name="polisa-ubezpieczeniowa" value="tak" hidden required>
						<label for="opt3" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Polisa ubezpieczeniowa
							</div>
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt3-1" class="" type="radio" name="polisa-ubezpieczeniowa-dni" value="7" hidden required price=10>
						<label for="opt3-1" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Polisa do 7 dni
							</div>
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt3-2" class="" type="radio" name="polisa-ubezpieczeniowa-dni" value="14" hidden required price=10>
						<label for="opt3-2" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Polisa do 14 dni
							</div>
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt3-3" class="" type="radio" name="polisa-ubezpieczeniowa-dni" value="30" hidden required price=10>
						<label for="opt3-3" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Polisa do 30 dni
							</div>
						</label>
					</div>
					
					<!-- wiza jednokrotna -->
					<div class="opt-single col-12">
						<input id="opt4" class="" type="radio" name="wiza-typ" value="jednokrotna" hidden required>
						<label for="opt4" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Wiza jednokrotna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									Wizy jednokrotne i dwukrotne czas wyrabiania:<br>
									Standardowy do 7 dni roboczych<br>
									Ekspres do 3-4 dni roboczych 
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt4-1" class="" type="radio" name="wiza-jednokrotna" value="turystyczna" hidden required price=10>
						<label for="opt4-1" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								turystyczna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel zwiedzanie, turystyka, ważność według dat określonych na wniosku wizowym, max.30 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt4-2" class="" type="radio" name="wiza-jednokrotna" value="biznesowa" hidden required price=10>
						<label for="opt4-2" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								biznesowa
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel  współpraca z rosyjskim partnerem, udział w targach, obsługa serwisowa, udział w spotakniach służbowych, ważność zgodnie z zaproszeniem, max. 90 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt4-3" class="" type="radio" name="wiza-jednokrotna" value="prywatna" hidden required price=10>
						<label for="opt4-3" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								prywatna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel wizyta u rodziny lub zanajomych, sprawy prywatne, ważność według dat określonych na wniosku wizowym, max.90 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt4-4" class="" type="radio" name="wiza-jednokrotna" value="humanitarna" hidden required price=10>
						<label for="opt4-4" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								humanitarna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									wydawana jest osobom biorącym udział w działaniach naukowych, kulturalnych i artystycznych, w tym programach uniwersyteckich i innych programach wymiany, ważność według dat określonych na wniosku wizowym, max.90 dni
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt4-5" class="" type="radio" name="wiza-jednokrotna" value="pracownicza" hidden required price=10>
						<label for="opt4-5" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								pracownicza
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									- cel praca , ważność wg dat określonych we wniosku wizowym,<br>
									- do 90 dni z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjnej
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt4-6" class="" type="radio" name="wiza-jednokrotna" value="tranzytowa" hidden required price=10>
						<label for="opt4-6" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								tranzytowa
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel tranzyt - jeśli Rosja jest krajem przejazdowym, ważność 3 dni w jedną stronę drogą lotniczą, do 10 dni w jedną stronę drogą lądową
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt4-7" class="" type="radio" name="wiza-jednokrotna" value="studencka" hidden required price=10>
						<label for="opt4-7" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								studencka
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel podjęcie studiów, stażu, kursów, ważność wizy wg dat określonych we wniosku wizowym,  do 90 dni od daty wydania z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjne
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt4-8" class="" type="radio" name="wiza-jednokrotna" value="dziennikarska" hidden required price=10>
						<label for="opt4-8" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								dziennikarska
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									dla dziennikarzy i pracowników technicznych jadących wykonywać zadania dziennikarskie, ważność wizy wg dat określonych we wniosku wizowym potwierdzonych przez list z redakcji lub agencji prasowej
								</div>
								
							</div>
							
						</label>
					</div>
					
					<!-- wiza dwukrotna -->
					<div class="opt-single col-12">
						<input id="opt5" class="" type="radio" name="wiza-typ" value="dwukrotna" hidden required>
						<label for="opt5" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Wiza dwukrotna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									Wizy jednokrotne i dwukrotne czas wyrabiania:<br>
									Standardowy do 7 dni roboczych<br>
									Ekspres do 3-4 dni roboczych 
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt5-1" class="" type="radio" name="wiza-dwukrotna" value="turystyczna" hidden required price=10>
						<label for="opt5-1" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								turystyczna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel zwiedzanie, turystyka, ważność według dat określonych na wniosku wizowym, max.30 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt5-2" class="" type="radio" name="wiza-dwukrotna" value="biznesowa" hidden required price=10>
						<label for="opt5-2" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								biznesowa
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel  współpraca z rosyjskim partnerem, udział w targach, obsługa serwisowa, udział w spotakniach służbowych, ważność zgodnie z zaproszeniem, max. 90 dni od daty wydania, 
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt5-3" class="" type="radio" name="wiza-dwukrotna" value="prywatna" hidden required price=10>
						<label for="opt5-3" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								prywatna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel wizyta u rodziny lub zanajomych, sprawy prywatne, ważność według dat określonych na wniosku wizowym, max.90 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt5-4" class="" type="radio" name="wiza-dwukrotna" value="tranzytowa" hidden required price=10>
						<label for="opt5-4" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								tranzytowa
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel tranzyt, ważność 3 dni w jedną stronę drogą lotniczą, do 10 dni w jedną stronę drogą lądową
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt5-5" class="" type="radio" name="wiza-dwukrotna" value="humanitarna" hidden required price=10>
						<label for="opt5-5" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								humanitarna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									wydawana jest osobom biorącym udział w działaniach naukowych, kulturalnych i artystycznych, w tym programach uniwersyteckich i innych programach wymiany, ważność według dat określonych na wniosku wizowym, max.90 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt5-6" class="" type="radio" name="wiza-dwukrotna" value="studencka" hidden required price=10>
						<label for="opt5-6" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								studencka
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel podjęcie studiów, stażu, kursów, ważność wizy wg dat określonych we wniosku wizowym,  do 90 dni od daty wydania z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjne
								</div>
								
							</div>
							
						</label>
					</div>
					
					<!-- wiza wielokrotna -->
					<div class="opt-single col-12">
						<input id="opt6" class="" type="radio" name="wiza-typ" value="wielokrotna" hidden required>
						<label for="opt6" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								Wiza wielokrotna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									Czas wyrabiania  tylko standard do 6 dni roboczych. 
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt6-1" class="" type="radio" name="wiza-wielokrotna" value="turystyczna" hidden required price=10>
						<label for="opt6-1" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								turystyczna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel zwiedzanie, turystyka, ważność według dat określonych na wniosku wizowym, max.30 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt6-2" class="" type="radio" name="wiza-wielokrotna" value="biznesowa" hidden required price=10>
						<label for="opt6-2" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								biznesowa
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel  współpraca z rosyjskim partnerem, udział w targach, obsługa serwisowa, udział w spotakniach służbowych, ważność zgodnie z zaproszeniem, max. 90 dni od daty wydania, 
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt6-3" class="" type="radio" name="wiza-wielokrotna" value="prywatna" hidden required price=10>
						<label for="opt6-3" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								prywatna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel wizyta u rodziny lub zanajomych, sprawy prywatne, ważność według dat określonych na wniosku wizowym, max.90 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt6-4" class="" type="radio" name="wiza-wielokrotna" value="tranzytowa" hidden required price=10>
						<label for="opt6-4" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								tranzytowa
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel tranzyt, ważność 3 dni w jedną stronę drogą lotniczą, do 10 dni w jedną stronę drogą lądową
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt6-5" class="" type="radio" name="wiza-wielokrotna" value="humanitarna" hidden required price=10>
						<label for="opt6-5" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								humanitarna
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									wydawana jest osobom biorącym udział w działaniach naukowych, kulturalnych i artystycznych, w tym programach uniwersyteckich i innych programach wymiany, ważność według dat określonych na wniosku wizowym, max.90 dni od daty wydania
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt6-6" class="" type="radio" name="wiza-dwukrotna" value="studencka" hidden required price=10>
						<label for="opt6-6" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								studencka
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									cel podjęcie studiów, stażu, kursów, ważność wizy wg dat określonych we wniosku wizowym,  do 90 dni od daty wydania z późniejszym przedłużeniem przez organy Federalnej Służby Migracyjne
								</div>
								
							</div>
							
						</label>
					</div>
					<div class="opt-single sub col-12 col-md-4">
						<input id="opt6-7" class="" type="radio" name="wiza-dwukrotna" value="dziennikarska" hidden required price=10>
						<label for="opt6-7" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								dziennikarska
							</div>
							<div class="help fa fa-question-circle-o">
								<div class='hint'>
									dla dziennikarzy i pracowników technicznych jadących wykonywać zadania dziennikarskie, ważność wizy wg dat określonych we wniosku wizowym potwierdzonych przez list z redakcji lub agencji prasowej.
								</div>
								
							</div>
							
						</label>
					</div>
					
					<div class='total d-flex d-md-none align-items-center justify-content-between'>
						<div class='text'>
							Całkowity koszt
						</div>
						<div class='text price'>
							472
						</div>
						
					</div>
					<div class="msg-button ml-auto">
						<a class="hit-box" href='formularz-rosja.php'></a>
						<p class="msg-btn">
							Przejdź do kolejnego kroku
						</p>
						<i class="fa fa-angle-right fa-1x arrow-send"></i>
					</div>
					
				</form>
				
			</div>
			<?php if( !empty( $uwaga ) ): ?>
			<div class='uwaga'>
				<h4 class='page-title'>
					Uwaga!
				</h4>
				<div class='text'>
					<?php echo $uwaga; ?>
				</div>
				
			</div>
			<?php endif; ?>
			<?php if( !empty( $faq ) ): ?>
			<div class='opis'>
				<h4 class='page-title'>
					FAQ
				</h4>
				<div class='text'>
					<?php echo apply_filters( 'the_content', $faq ); ?>
					
				</div>
				
			</div>
			<?php endif; ?>
			<?php if( !empty( $informacje ) ): ?>
			<div class="informacje d-flex flex-wrap align-items-center">
				<h4 class='page-title col-12'>
					Informacje
				</h4>
				<ul class="accordion col-12">
					<?php foreach( explode( "\n", trim( $informacje ) ) as $line ): ?>
					<li>
						<?php
							$part = explode( "|", $line );
						?>
						<a><?php echo $part[ 0 ]; ?></a>
						<p><?php echo $part[ 1 ]; ?></p>
					</li>
					<?php endforeach; ?>
					
				</ul>
				<!-- / accordion -->
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
</div>
