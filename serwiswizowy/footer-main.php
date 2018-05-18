	<div class="join-us">
		<div class="container">
		<?php dynamic_sidebar( 'footbar' ); ?>
		</div>
	</div>
	<!-- join us -->
	<!-- Footer -->
	<footer>
		<div class="d-flex justify-content-between">
			<div class="p-4 col text-center text-md-left">
				<a class="brand-footer" href="<?php echo home_url(); ?>"></a>
			</div>
			
		</div>
		<div class="d-flex justify-content-around flex-wrap">
			<div class="p-4 col-12 col-md-4 col-lg">
				<?php printFooterMenu( 'wiza-do', 'WIZA DO' ); ?>
			</div>
			<div class="p-4 col-12 col-md-4 col-lg">
				<?php printFooterMenu( 'na-skroty', 'Na skróty' ); ?>
			</div>
			<div class="p-4 col-12 col-md-4 col-lg">
				<?php printFooterMenu( 'informacje', 'Informacje' ); ?>
			</div>
			<div class="p-4 col-12 col-md-4 col-lg">
				<?php printFooterMenu( 'uslugi', 'Usługi' ); ?>
			</div>
			<div class="p-4 col-12 col-md-4 col-lg">
				<?php printFooterMenu( 'kontakt', 'Kontakt' ); ?>
			</div>
		</div>
	</footer>
	<div class="copyright">
		<div class="container">
			<div class="d-flex justify-content-between flex-column flex-md-row align-items-center">
				<div class="p-4">
					<p>Copyright &copy; 2018 Serwiswizowy.com</p>
				</div>
				<div class="p-4">
					<p>Projekt i wykonanie:  <Span><a title="Scepter Agencja interaktywna" href="http://www.scepter.pl">Scepter Agencja interaktywna</a></Span></p>
				</div>
			</div>
		</div>
	</div>
</div>
