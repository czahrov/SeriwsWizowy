<?php printBreadcrumb(); ?>
<div class="white-page wiza kraje">
<div class="container">
	<div class="view-steps d-flex flex-md-wrap">
		<div class="kraj p-2 step1-home d-none d-lg-flex align-items-center justify-content-around col-lg-3 active">
			<div class="icon-info"></div>
			<p>Wyszukaj kraj do którego potrzebujesz wizy</p>
		</div>
		<div class="opcje p-2 step1-home d-flex align-items-center justify-content-around col-12 col-lg-3">
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
	
	<?php
		$kraje = get_pages( array(
			'parent' => get_post()->ID,
			
		) );
		
	?>
	<div class="page-title">
		<h3>Wybierz kraj (<?php echo count( $kraje ); ?> dostępnych) </h3>
		<span class="alph">Kraje sortowane są od A do Z w kolejnośći alfabetycznej. Wybierz kraj, a następnie wypełnij wniosek.</span>
	</div>
	<div class='d-flex flex-column'>
		<input id='country-filter' type='text' placeholder='Wpisz kilka liter szukanego kraju'>
	</div>
	<?php
		foreach( $kraje as $kraj ):
	?>
	<div class="country-single fp_slidein">
		<a href="<?php the_permalink( $kraj->ID ); ?>" class="hit-box-grey"></a>
		<div class="box d-flex justify-content-between flex-wrap country-single-content">
			<div class="title col-12 col-md-3 offer-title ">
				<h3><?php echo $kraj->post_title; ?></h3>
			</div>
			<div class="content col-12 col-md-7"></div>
			<div class="arrow col-12 col-md align-items-top justify-content-end justify-content-md-center d-flex">
				<i class="fa fa-angle-right fa-1x arrow-offer d-flex align-items-center justify-content-center" aria-hidden="true"></i>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
	
</div>
<!-- container -->