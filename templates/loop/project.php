<article id="project-<?= get_the_ID() ?>" class="project">
	<div class="image-placeholder">
		<?php the_post_thumbnail( [ 0, 400 ] ) ?>
	</div>
	<h2 class="h3">
		<?= get_the_title() ?>
	</h2>
	<caption class="caption">
		<?= get_the_date() ?>
	</caption>

	<div class="image-sliders">
		<div class="swiper swiper-single-projects">
			<div class="swiper-wrapper">
				<?php
				if ( have_rows( 'project_gallery' ) ) {
					while ( have_rows( 'project_gallery' ) ) {
						the_row();

						$gallery = get_field( 'project_gallery' );
						foreach ( $gallery as $slide ) {
							var_export( $slide );
							echo '<hr>';
						}
					}
				}
				?>
			</div>
			<div class="swiper-">

			</div>
		</div>
	</div>
</article>