<!-- Page Header -->
	<header class="masthead d-flex flex-column justify-content-end">
		<video autoplay loop class="bgvideo">
			<source src="<?php echo get_template_directory_uri(); ?>/media/splash.webm" type="video/webm" />
			<source src="<?php echo get_template_directory_uri(); ?>/media/splash.ogv" type="video/ogv" />
			<source src="<?php echo get_template_directory_uri(); ?>/media/splash.mp4" type="video/mp4" />
			Your browser does not support the video tag. I suggest you upgrade your browser.
			
		</video>
		<div class="overlay"></div>
		<div class="container align-self-end d-flex flex-column justify-content-between">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<h1>Znajdź wizę na wyjazd</h1>
						<span class="subheading">Dokąd się wybierasz? </span>
						<div class="d-flex justify-content-center visa">
							<select class="visa-select" name="wybierz kraj">
								<option class="disabled-select" value="" disabled="" selected="">
									Wybierz kraj
								</option>
								<?php
									$kraje = get_pages( array(
										'parent' => 6,
										
									) );

									$ret = array();

									foreach( $kraje as $kraj ){
										$t = substr( $kraj->post_title, 0, 1 );
										$ret[ $t ][] = array(
											'title' => $kraj->post_title,
											'url' => get_the_permalink( $kraj->ID ),
											
										);
										
									}
									
									foreach( $ret as $name => $items ):
								?>
								<optgroup label="<?php echo $name; ?>">
									<?php foreach( $items as $item ): ?>
									<option class="random-select" uri='<?php echo $item['url'] ?>'><?php echo $item['title']; ?></option>
									<?php endforeach; ?>
								</optgroup>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center introduction">
				<p>Jak działa <span>serwiswizowy.com?</span></p>
			</div>
		</div>
		<div class="fpslider d-flex justify-content-between steps-home" style="" max-width=767 autoplay swipe duration=500>
			<div class="d-flex justify-content-center arrow-banner">
				<i class="fa fa-angle-down fa-1x arrow-steps" aria-hidden="true"></i>
			</div>
			<div class="fpslider_view d-flex flex-md-wrap view-steps">
				<div class="fpslider_slide p-2 step1-home col-12 col-md-6 col-xl-3">
					<div class="icon-info">
						<img src="<?php echo get_template_directory_uri(); ?>/media/ikony/icon_1.png" class="img-responsive">
					</div>
					<p>Wyszukaj kraj do którego potrzebujesz wizy</p>
				</div>
				<div class="fpslider_slide p-2 step1-home col-12 col-md-6 col-xl-3">
					<div class="icon-info">
						<img src="<?php echo get_template_directory_uri(); ?>/media/ikony/icon_2.png" class="img-responsive">
					</div>
					<p>Wybierz odpowiednie opcje i przejdź do nastepnego kroku</p>
				</div>
				<div class="fpslider_slide p-2 step1-home col-12 col-md-6 col-xl-3">
					<div class="icon-info">
						<img src="<?php echo get_template_directory_uri(); ?>/media/ikony/icon_3.png" class="img-responsive">
					</div>
					<p>Wypełnij wniosek, a następnie kliknij przycisk "wyślij"</p>
				</div>
				<div class="fpslider_slide p-2 step1-home col-12 col-md-6 col-xl-3">
					<div class="icon-info">
						<img src="<?php echo get_template_directory_uri(); ?>/media/ikony/icon_4.png" class="img-responsive">
					</div>
					<p>Gotowe! Na Twoją skrzynkę wysyłamy e-mail</p>
				</div>
			</div>
			<div class="arrows-slider d-md-none d-flex">
				<div class="fpslider_nav_prev">
					<i class="fa fa-angle-left fa-1x arrow-banner-slider-left" aria-hidden="true"></i>
				</div>
				<div class="fpslider_nav_next">
					<i class="fa fa-angle-right fa-1x arrow-banner-slider-right" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<!-- Steps Home -->
	</header>
	<!-- Main Content -->
	<div class="container home">
		<div class="visa-section1 d-flex no-gutters flex-wrap">
			<div class="ask-expert d-flex col-12 col-md-6 col-xl-3 large">
				<div class="cell col-12 expert">
					<a href="<?php echo home_url('zapytaj-eksperta'); ?>" class="hit-box"></a>
					<div class="banner-text">
						<h3>Zapytaj <br><span>eksperta</span></h3>
						<p> Masz pytania?  Skontaktuj się z naszym 
							ekspertem. Służymy pomocą!
						</p>
					</div>
					<i class="fa fa-angle-right fa-1x arrow-button" aria-hidden="true">
					</i>
					<div class="img-mask-violet"></div>
					<div class="bg-zoom"></div>
				</div>
			</div>
			<div class="select-country d-flex col-12 col-md-6 large">
				<div class="cell col-12 china">
					<a href="<?php echo home_url( 'kraje' ); ?>" class="hit-box"></a>
					<div class="banner-text">
						<h3>Sprawdź dostępne <br><span>kraje</span></h3>
						<p> W naszej ofercie znajdą Państwo wizy między innymi do :
							Rosji, Chin, Indii, Pakistanu, Kazachstanu,  Mołdawii oraz do Arabi Saudyjskiej.
						</p>
					</div>
					<i class="fa fa-angle-right fa-1x arrow-button" aria-hidden="true">
					</i>
					<div class="img-mask-dark"></div>
					<div class="bg-zoom"></div>
				</div>
			</div>
			<div class="col-3 d-flex flex-wrap col-12 col-xl-3">
				<div class="client-individual d-flex col-12 col-md-6 col-xl-12 half">
					<div class="cell col-12 ind-client">
						<a href="<?php echo home_url( 'klienci-indywidualni' ); ?>" class="hit-box"></a>
						<div class="banner-text-small">
							<h3>Klienci <br><span>indywidualni</span></h3>
						</div>
						<i class="fa fa-angle-right fa-1x arrow-button" aria-hidden="true">
						</i>
						<div class="img-mask-dark"></div>
						<div class="bg-zoom"></div>
					</div>
				</div>
				<div class="client-business d-flex col-12 col-md-6 col-xl-12 half">
					<div class="cell col-12 business-client">
						<a href="<?php echo home_url( 'klienci-biznesowi' ); ?>" class="hit-box"></a>
						<div class="banner-text-small">
							<h3>Klienci <br><span>biznesowi</span></h3>
						</div>
						<i class="fa fa-angle-right fa-1x arrow-button" aria-hidden="true">
						</i>
						<div class="img-mask-dark"></div>
						<div class="bg-zoom"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="why-us d-flex no-gutters">
			<div class="why-us-col justify-content-center col-12 d-flex">
				<div class='col-6 why-us-photo d-none d-xl-flex justify-content-center align-items-start'>
					<img alt="Dlaczego my?" src="<?php echo get_template_directory_uri(); ?>/media/why-us.jpg" class="img-fluid">
				</div>
				<div class='why-us-text col-12 col-xl-6 text-center text-xl-left'>
					<h3>Dlaczego my?</h3>
					<p>Od lat zajmujemy się profesjonalnym doradztwem wizowym dla klientów indywidualnych oraz biznesowych. Korzystając z naszego serwisu otrzymacie Państwo 100% gwarancji na otrzymanie wizy w możliwie najkrótszym czasie oraz niską cenę za pośrednictwo. Wypełnij wniosek online już teraz.
					</p>
					<p class="icon-list d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-xl-start"><img src="<?php echo get_template_directory_uri(); ?>/media/ikony/icon-list-1.png">100% gwarancji otrzymania wizy</p>
					<p class="icon-list d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-xl-start"><img src="<?php echo get_template_directory_uri(); ?>/media/ikony/icon-list-2.png">Bez wychodzenia z domu</p>
					<p class="icon-list d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-xl-start"><img src="<?php echo get_template_directory_uri(); ?>/media/ikony/icon-list-3.png">Bezpieczeństwo Twoich danych</p>
					<p class="icon-list d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-xl-start"><img src="<?php echo get_template_directory_uri(); ?>/media/ikony/icon-list-4.png">Niska cena za pośrednictwo</p>
				</div>
			</div>
		</div>
		<div class="d-flex comment_slider fpslider align-items-center" style="" autoplay swipe duration=500>
			<div class="arrows-comment prev fpslider_nav_prev d-none d-md-flex">
				<i class="fa fa-angle-left fa-1x arrow-button-slider" aria-hidden="true"></i>
			</div>
			<div class="fpslider_view d-flex view col">
				<?php
					$items = get_posts( array(
						'category_name' => 'Komentarz',
						'order' => 'ASC',
						'orderby' => 'date',
						
					) );
					foreach( $items as $item ):
				?>
				<div class='fpslider_slide testymonial-single col-12 col-lg-6 d-flex flex-column justify-content-around'>
					<?php echo $item->post_content; ?>
					<span><?php echo get_post_meta( $item->ID, 'osoba', true ); ?></span>
				</div>
				<?php endforeach; ?>
				
			</div>
			<div class="arrows-comment next fpslider_nav_next d-none d-md-flex">
				<i class="fa fa-angle-right fa-1x arrow-button-slider" aria-hidden="true"></i>
			</div>
			<div class="arrows-comment-mobile d-md-none d-flex">
				<div class="prev fpslider_nav_prev">
					<i class="fa fa-angle-left fa-1x arrow-banner-comment-left" aria-hidden="true"></i>
				</div>
				<div class="next fpslider_nav_next">
					<i class="fa fa-angle-right fa-1x arrow-comment-slider-right" aria-hidden="true"></i>
				</div>
			</div>
			
		</div>
		
	</div>
	<!-- Container -->