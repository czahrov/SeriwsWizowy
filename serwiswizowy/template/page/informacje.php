<div class="white-page informacje">
<div class="container">
	<div class="page-title">
		<h3>Niezbędne informacje</h3>
	</div>
	<ul class="accordion">
		<?php
			$pytania = array(
				array(
					'title' => 'Ile kosztuje wiza do Chin',
					'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas.'
				),
				array(
					'title' => 'Jakie dokumenty będą potrzebne, aby otrzymać wizę?',
					'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas.'
				),
				array(
					'title' => 'Czy wizę można włączyć do kosztów firmy?',
					'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas.'
				),
				array(
					'title' => 'Ile kosztuje wiza do Chin',
					'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas.'
				),
				array(
					'title' => 'Jakie dokumenty będą potrzebne, aby otrzymać wizę?',
					'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas.'
				),
				array(
					'title' => 'Czy wizę można włączyć do kosztów firmy?',
					'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas.'
				),
				
			);
			
			foreach( $pytania as $pytanie ):
		?>
		<li class='fp_slidein'>
			<a><?php echo $pytanie[ 'title' ]; ?></a>
			<p><?php echo $pytanie[ 'content' ]; ?></p>
		</li>
		<?php endforeach; ?>
	</ul>
	<!-- / accordion -->
</div>
<!-- container -->