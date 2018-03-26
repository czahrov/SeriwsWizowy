<?php printBreadcrumb(); ?>
<div class="white-page informacje">
<div class="container">
	<div class="page-title">
		<h3>Niezbędne informacje</h3>
	</div>
	<ul class="accordion">
		<?php
			$informacje = get_post_meta( get_post()->ID, 'informacje', true );
			
			foreach( explode( "\n", trim( $informacje ) ) as $line ):
		?>
		<li class='fp_slidein'>
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
<!-- container -->