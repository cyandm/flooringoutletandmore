<?php
if ( ! isset( $args['testimonials'] ) )
	return;

$frontPageId = get_option( 'page_on_front' );
$clientsUrl = get_field( 'reviews_clients_url', $frontPageId );
$clientsYelp = get_field( 'reviews_clients_yelp', $frontPageId );

$testimonials = $args['testimonials'];
?>

<section class="our-clients-section">
	<div class="titles">
		<h2>What Our Clients Think</h2>

		<a href="<?php echo ! empty( $clientsYelp ) ? $clientsYelp : '#' ?>">
			<img src="<?= get_template_directory_uri() . "/imgs/clients-y.svg"; ?>" />
		</a>
		<a href="<?php echo ! empty( $clientsUrl ) ? $clientsUrl : '#' ?>">
			<img src="<?= get_template_directory_uri() . "/imgs/clients-g.svg"; ?>" />
		</a>
	</div>

	<div class="swiper"
			 id="ourClientSwiper">
		<div class="our-clients swiper-wrapper">
			<?php foreach ( $testimonials as $reviewId ) : ?>
				<?php
				$client = get_field( 'testimonials_detail', $reviewId );

				$title = $client['title'];
				$comment = $client['comment'];
				$avatar = $client['avatar'];
				$author = $client['author'];
				$date = $client['date'];
				$stars = $client['stars'];
				?>
				<?php if ( ! empty( $title ) && ! empty( $comment ) && ! empty( $avatar ) && ! empty( $date ) && ! empty( $stars ) ) : ?>
					<?php for ( $i = 0; $i < 6; $i++ ) : ?>
						<div class="testimonials-item swiper-slide">
							<h4><?= $title ?></h4>

							<p><?= $comment ?></p>

							<div class="rating">
								<?php
								for ( $i = 1; $i <= 5; $i++ ) {
									$isActive = $i <= (int) $stars;
									echo "<i>";
									get_template_part( "templates/loop/star-icon", null, [ 'active' => $isActive ] );
									echo "</i>";
								}
								?>
							</div>

							<div class="author">
								<img src="<?= $avatar ?>">

								<div>
									<p><?= $author ?></p>
									<p><?= $date ?></p>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>