<div class="white-page uslugi">
<div class="container">
	<div class="page-title">
		<h3>Nasze usługi</h3>
	</div>
	<div class="d-flex flex-wrap services">
		<?php
			$strony = get_pages( array(
				'parent' => get_post()->ID,
				
			) );
			
			foreach( $strony as $strona ):
		?>
		<div class="service-single">
			<a class="hit-box-grey" href='<?php the_permalink( $strona->ID ); ?>'></a>
			<div class="title col-12 col-md-4">
				<h3><?php echo $strona->post_title; ?></h3>
			</div>
			<div class="content col-12 col-md-7">
				Lorem ipsum
			</div>
			<div class="arrow col-12 col-md align-items-top justify-content-end justify-content-md-right d-flex">
				<i class="fa fa-angle-right fa-1x arrow-service d-flex align-items-center justify-content-center" aria-hidden="true"></i>
			</div>
		</div>
		<?php endforeach; ?>
		
	</div>
	<!-- / d-flex flex-wrap services -->
</div>
