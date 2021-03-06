<!-- Navigation -->
<?php printBreadcrumb(); ?>
<div class="white-page">
<div class="container">
	<div class="page-title">
		<h3>O naszej firmie</h3>
	</div>
	<?php
		$strony = get_pages( array(
			'parent' => get_post()->ID,
			
		) );
		
		foreach( $strony as $strona ):
	?>
	<div class="offer-single fp_slidein">
		<a href="<?php the_permalink( $strona->ID ); ?>" class="hit-box-grey"></a>
		<div class="box d-flex align-items-start justify-content-between flex-wrap offer-single-content">
			<div class="title col-12 col-md-3 offer-title">
				<h3><?php echo $strona->post_title; ?></h3>
			</div>
			<div class="content col-12 col-md-7">
				<p>
				<?php
					$zajawka = get_post_meta( $strona->ID, 'zajawka', true );
					if( empty( $zajawka ) ){
						preg_match( "~(\S+\s){1,50}~", $strona->post_content, $match );
						$zajawka = $match[0];
						
					}
					
					echo $zajawka;
					// print_r( $match );
					
				?>
				</p>
			</div>
			<div class="arrow col-12 col-md align-items-top justify-content-end justify-content-md-center d-flex">
				<i class="fa fa-angle-right fa-1x arrow-offer d-flex align-items-center justify-content-center" aria-hidden="true"></i>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
	
</div>
<!-- container -->