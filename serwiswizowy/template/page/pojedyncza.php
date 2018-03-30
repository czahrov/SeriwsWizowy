<?php
	$post = get_post();
	$pdf = wp_get_attachment_url( get_post_meta( $post->ID, 'pdf', true ) );
	$informacje = get_post_meta( $post->ID, 'informacje', true );
	
	$pattern = "~src=\"([^\"]+)\"~";
	preg_match_all( $pattern, get_post_meta( $post->ID, 'galeria', true ), $match );
	$imgs = $match[1];
	
?>
<div class="white-page o-firmie-single">
<!--
<?php
	// print_r( $imgs );
	// print_r( get_post_meta( $post->ID ) );
?>
-->
<div class="container">
	<div class="page-title">
		<h3><?php echo get_post( $post->post_parent )->post_title; ?></h3>
	</div>
	<div class="d-flex flex-wrap">
		<div class="col-md-4 d-none d-md-block fp_pin_rail">
			<div class="box-single-page fp_pin_dragger">
				<h3><?php echo $post->post_title; ?></h3>
				<a class='btn_prev'>
					<i class="fa fa-angle-left fa-1x arrow-prev" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="box col-md-8 single-page-content">
			<?php echo apply_filters( 'the_content', $post->post_content ); ?>
			<?php if( !empty( $pdf ) ): ?>
			<a class='custom_button' href='<?php echo $pdf; ?>' download>
				Pobierz PDF
			</a>
			<?php endif; ?>
			<?php if( !empty( $imgs ) ): ?>
			<div class='imgs d-flex flex-wrap align-items-start'>
				<?php foreach( $imgs as $img ): ?>
				<img class='img col-md-6' src='<?php echo $img; ?>' />
				<?php endforeach; ?>
				
			</div>
			<?php endif; ?>
			<?php if( !empty( $informacje ) ): ?>
			<div class="informacja d-flex flex-wrap align-items-center">
				<h3 class='title col-12'>
					informacje
				</h3>
				<ul class="accordion col-12">
					<?php foreach( explode( "\n", trim( $informacje ) ) as $line ): ?>
					<li>
						<?php
							$part = explode( "|", $line );
						?>
						<a><?php echo $part[0]; ?></a>
						<p><?php echo $part[1]; ?></p>
					</li>
					<?php endforeach; ?>
				</ul>
				<!-- / accordion -->
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
</div>