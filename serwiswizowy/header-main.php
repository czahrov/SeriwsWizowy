<div class="gotop d-flex align-items-center flex-column">
	<span class="up">do góry!</span>
	<a href="#">
	<i class="fa fa-angle-up fa-1x arrow-button-footer" aria-hidden="true"></i>
	</a>
</div>
<nav class="navbar navbar-expand-xl navbar-light fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="<?php echo home_url(); ?>"></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		Menu
		<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<?php printMainMenu(); ?>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link nav-button" href="<?php echo home_url( 'kraje' ); ?>">Wypełnij wniosek</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
