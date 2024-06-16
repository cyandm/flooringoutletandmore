<?php /* Template Name: Special Offer */ ?>

<?php
$frontPageId = get_option( 'page_on_front' );

$specialPosts = get_field( 'special_offer_posts' );
$faqDetails = get_field( 'special_offer_faq_posts' );
$testimonials = get_field( 'special_offer_reviews_posts' );
?>

<?php get_header() ?>

<?php get_template_part( '/templates/special-popup' ) ?>

<main class="special-offer-page">
	<div class="content">
		<?php if ( isset( $specialPosts ) && ! empty( $specialPosts ) ) : ?>
			<section>
				<div class="titles">
					<h2>Special Offers</h2>
				</div>

				<div class="product-article">
					<?php foreach ( $specialPosts as $post ) : ?>
						<?php
						$title = get_the_title( $post );
						$img_url = get_the_post_thumbnail_url( $post );
						$url = get_permalink( $post );
						$price = get_field( 'product_price', $post );
						$price = get_field( 'product_price', $post );
						?>
						<a href="<?php echo $url ?>"
						   class="product-loop">
							<img src="<?= $img_url ?>"
								 alt="<?= $title ?>">

							<div class="product-loop-info">
								<span class='product-loop-price'>
									<i>Price</i>
									<?php if ( ! empty( $price ) ) : ?>
										<i>$<?php echo $price ?></i>
									<?php endif; ?>
								</span>

								<div class="product_desc">
									<?php echo ! empty( get_field( 'product_desc', $post ) ) ? _( get_field( 'product_desc', $post ) ) : ''; ?>
								</div>
							</div>
						</a>
					<?php endforeach; ?>
				</div>
			</section>
		<?php endif; ?>

		<?php
		if ( isset( $faqDetails ) && ! empty( $faqDetails ) )
			get_template_part( 'templates/loop/faq-section', null, [ 'postsId' => $faqDetails ] );
		?>

		<?php
		if ( isset( $testimonials ) && ! empty( $testimonials ) )
			get_template_part( 'templates/loop/reviews-section', null, [ 'testimonials' => $testimonials ] );
		?>

		<section>
			<div class="titles">
				<h2>Our Services</h2>
			</div>

			<div class="services-content">
				<div class="services-item rev">
					<img src="<?php echo get_template_directory_uri() . '/imgs/services-1.png' ?>">

					<div class="c">
						<h3 data-num="1"
							class="">Consultation</h3>
						<p>
							<?php
							$txt = get_field( 'services_consultation', $frontPageId );
							echo ! empty( $txt ) ? $txt : '';
							?>
						</p>
					</div>
				</div>

				<div class="services-item">
					<img src="<?php echo get_template_directory_uri() . '/imgs/services-2.png' ?>">

					<div class="c">
						<h3 data-num="2"
							class="">Measurement</h3>
						<p>
							<?php
							$txt = get_field( 'services_measurement', $frontPageId );
							echo ! empty( $txt ) ? $txt : '';
							?>
						</p>
					</div>
				</div>

				<div class="services-item rev">
					<img src="<?php echo get_template_directory_uri() . '/imgs/services-3.png' ?>">

					<div class="c">
						<h3 data-num="3"
							class="">Delivery</h3>
						<p>
							<?php
							$txt = get_field( 'services_delivery', $frontPageId );
							echo ! empty( $txt ) ? $txt : '';
							?>
						</p>
					</div>
				</div>

				<div class="services-item">
					<img src="<?php echo get_template_directory_uri() . '/imgs/services-4.png' ?>">

					<div class="c">
						<h3 data-num="4"
							class="">Installation</h3>
						<p>
							<?php
							$txt = get_field( 'services_installation', $frontPageId );
							echo ! empty( $txt ) ? $txt : '';
							?>
						</p>
					</div>
				</div>

				<div class="services-item rev">
					<img src="<?php echo get_template_directory_uri() . '/imgs/services-5.png' ?>">

					<div class="c">
						<h3 data-num="5"
							class="">Removal</h3>
						<p>
							<?php
							$txt = get_field( 'services_removal', $frontPageId );
							echo ! empty( $txt ) ? $txt : '';
							?>
						</p>
					</div>
				</div>

				<div class="services-item">
					<img src="<?php echo get_template_directory_uri() . '/imgs/services-6.png' ?>">

					<div class="c">
						<h3 data-num="6"
							class="">Final inspection</h3>
						<p>
							<?php
							$txt = get_field( 'services_making_you_happy', $frontPageId );
							echo ! empty( $txt ) ? $txt : '';
							?>
						</p>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="the-content">
		<?php the_content() ?>
	</section>
</main>

<?php get_footer() ?>