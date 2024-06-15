<?php
$pages = get_field( "front_page_landings" );


?>
<div class="swiper-slide">
	<div class="introduce home-wrapper">
		<header>
			<div>
				<h2>explore by material</h2>
				<span>you don't have to worry about anything</span>
			</div>
			<a class="btn_no_icon bg_white only-desktop"
				 href="<?php echo site_url() . '/product'; ?>">
				view all
			</a>
		</header>

		<main>
			<?php foreach ( $pages as $page ) : ?>

				<?php


				?>
				<article data-mouse="explore">
					<a href="<?php echo get_permalink( $page ) ?>">
						<img src="<?php echo get_the_post_thumbnail_url( $page ) ?>"
								 alt="">
						<div>
							<button class="btn_no_icon bg-primary1">explore</button>
							<div>
								<h3 class="one-line-text"><?php echo get_the_title( $page ) ?></h3>
								<p class="one-line-text"><?php echo get_the_excerpt( $page ) ?></p>
							</div>
						</div>
					</a>
				</article>

			<?php endforeach; ?>

			<a href="<?php echo site_url() . '/product'; ?>"
				 class="btn_no_icon bg_secondary1 no-desktop">view all</a>
		</main>
	</div>
</div>