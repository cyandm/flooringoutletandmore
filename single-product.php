<?php
$front_page_id = get_option( 'page_on_front' );
$productId = get_the_ID();

$imgs = [];
$gallery = get_field( 'product_gallery_group', $productId );

if ( ! empty( get_the_post_thumbnail_url() ) )
	$imgs[] = get_the_post_thumbnail_url();

if ( ! empty( $gallery ) ) {
	foreach ( $gallery as $imgUrl ) {
		if ( ! empty( $imgUrl ) )
			$imgs[] = $imgUrl;
	}
}

function render_slides() {
	global $imgs;
	foreach ( $imgs as $img ) {
		echo '<div class="swiper-slide">';
		echo "<img src=\"  " . $img . "  \" />";
		echo '</div>';
	}
}

/******************************* */
$specification = array();

$brandTerm = get_the_terms( $productId, 'brands' );
$brandImg = null;
if ( is_array( $brandTerm ) && count( $brandTerm ) > 0 ) {
	$brand_id = $brandTerm[0]->term_id;
	$brandImg = get_field( 'brand_logo', 'brands' . '_' . $brand_id );

	$specification['Brand'] = $brandTerm[0]->name;
}

$typeTerm = get_the_terms( $productId, 'product-cat' );
foreach ( $typeTerm as $tTerm ) {
	if ( $tTerm->parent > 0 ) {
		$parent = get_term( $tTerm->parent );
		$specification['Type'] = $parent->name;
		$specification['Collection'] = $tTerm->name;
		break;
	}
}

$specification['Product Sid'] = get_field( 'product_sid', $productId );
$specification['Product code'] = get_field( 'product_code', $productId );
$specification['color code'] = get_field( 'product_color_code', $productId );
$specification['finish'] = get_field( 'product_finish', $productId );
$specification['installation'] = get_field( 'product_installation', $productId );
$specification['sqft / box'] = get_field( 'product_sqft_box', $productId );
$specification['sqft / pallet'] = get_field( 'product_sqft_pallet', $productId );
$specification['box / pallet'] = get_field( 'product_box_pallet', $productId );

$filterTerm = get_the_terms( $productId, 'filters' );
foreach ( $filterTerm as $fTerm ) {
	if ( $fTerm->parent > 0 ) {
		$parent = get_term( $fTerm->parent );
		$specification[ $parent->name ] = $fTerm->name;
	}
}

/******************************* */
$related_blogs = get_field( 'related_group' )['related_articles'];

$last_blogs_args = [ 
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => '4',
];

$last_blogs_query = new WP_Query( $last_blogs_args );

/******************************* */
$related_products = get_field( 'related_group' )['related_products'];

$related_products_args = [ 
	'post_type' => 'product',
	'post_status' => 'publish',
	'posts_per_page' => '4'
];

$related_products_query = new WP_Query( $related_products_args );
?>

<?php get_header() ?>

<main class="single-product">
	<div class="single-title">
		<h1><?php echo get_the_title() ?></h1>

		<?php
		if ( ! empty( $brandImg ) )
			echo "<img id='product-brand-logo' src='$brandImg'>";
		?>
	</div>
	<hr>

	<div class="top">
		<div class="tabs">
			<div class="headings">
				<span data-tab="specification"
					  class="show">specification</span>
				<span data-tab="description">description</span>
				<!-- <span data-tab="technical">technical</span> -->
			</div>

			<div class="content">
				<div data-tab="specification"
					 class="show">
					<h2>item specification</h2>
					<div class="specification">
						<?php foreach ( $specification as $item => $value ) : ?>
							<?php if ( ! empty( $value ) ) : ?>
								<div class="specification-item">
									<div class="item"><?php echo $item ?></div>
									<div class="value"><?php echo $value ?></div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>

				<div data-tab="description">
					<h2>item description</h2>
					<div>
						<?php echo ! empty( get_field( 'product_desc' ) ) ? _( get_field( 'product_desc' ) ) : ''; ?>
					</div>
				</div>

				<!--
				<div data-tab="technical">
					<h2>item technical</h2>
					<div>
						<?php echo ! empty( get_field( 'product_tech' ) ) ? _( get_field( 'product_tech' ) ) : ''; ?>
					</div>
				</div>
				-->
			</div>
		</div>

		<div class="product-images">
			<div id="productGallery"
				 class="swiper">
				<div class="swiper-wrapper">
					<?php render_slides() ?>
				</div>

				<div class="swiper-navigation">
					<div class="swiper-prev-btn"><i class="icon-arrow-left"></i></div>
					<div class="swiper-next-btn"><i class="icon-arrow-right"></i></div>
				</div>
			</div>

			<div id="productGalleryThumbs"
				 class="swiper">
				<div class="swiper-wrapper">
					<?php render_slides() ?>
				</div>
			</div>
		</div>
	</div>

	<div class="call-to-action">
		price:
		<a href="tel:<?= get_field( 'phone_number_1', $front_page_id ) ?>"
		   class="btn bg_secondary1">
			<i class="icon-phone"></i>
			call us now
		</a>
		we are here for you 24/7 ,call us now
	</div>

	<div class="transitions">
		<h2 class="h2">Transitions</h2>
		<div>
			<div class="item">
				<img src=" <?php echo get_template_directory_uri() . '/imgs/End_Cap_1.png' ?> "
					 alt="">
				<p>End Cap</p>
			</div>
			<div class="item">
				<img src=" <?php echo get_template_directory_uri() . '/imgs/Quarter_Round_1.png' ?> "
					 alt="">
				<p>Quarter Round</p>
			</div>
			<div class="item">
				<img src=" <?php echo get_template_directory_uri() . '/imgs/Reducer_1.png' ?> "
					 alt="">
				<p>Reducer</p>
			</div>
			<div class="item">
				<img src=" <?php echo get_template_directory_uri() . '/imgs/Stair_Nose_1.png' ?> "
					 alt="">
				<p>Stair Nose</p>
			</div>
			<div class="item">
				<img src=" <?php echo get_template_directory_uri() . '/imgs/T-Molding_1.png' ?> "
					 alt="">
				<p>T-Molding</p>
			</div>
		</div>
	</div>

	<div class="products">
		<h2 class="h2">You might also like</h2>
		<div>
			<?php
			if ( ! empty( $related_products ) ) {
				foreach ( $related_products as $product ) {
					get_template_part( '/templates/loop/product', null, [ 'id' => $product ] );
				}
			} else {
				if ( $related_products_query->have_posts() ) {
					while ( $related_products_query->have_posts() ) {
						$related_products_query->the_post();
						$product = $post;
						get_template_part( '/templates/loop/product' );
					}
				}
			}
			?>
		</div>
	</div>

	<div class="blogs">
		<div>
			<h2 class="h2">Related blogs</h2>
			<a href="<?php echo site_url() . '/blog'; ?>"
			   class="btn_no_icon bg_white only-desktop">View All</a>
		</div>
		<div>
			<?php
			if ( $related_blogs ) {
				foreach ( $related_blogs as $article ) {
					get_template_part( '/templates/loop/article', null, [ 'rel' => 'follow' ] );
				}
			} else {
				if ( $last_blogs_query->have_posts() ) {
					while ( $last_blogs_query->have_posts() ) {
						$last_blogs_query->the_post();

						get_template_part( '/templates/loop/article', null, [ 'rel' => 'follow' ] );
					}
				}
			}
			?>
			<a href="<?php echo site_url() . '/blog'; ?>"
			   class="btn_no_icon bg_white only-mobile">View All</a>
		</div>
	</div>
</main>

<?php get_footer() ?>