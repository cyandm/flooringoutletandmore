<?php
$imgs = [];

array_push( $imgs, get_the_post_thumbnail_url() );

$gallery = get_field_object( 'product_gallery_group' )['value'];
foreach ( $gallery as $imgUrl ) {
	if ( $imgUrl ) {
		array_push( $imgs, $imgUrl );
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

<?php //wp_die() ?>
<?php get_header() ?>
<main class="single-product">
	<h1>
		<?php echo get_the_title() ?>
	</h1>
	<hr>
	<div class="top">
		<div class="tabs">
			<div class="headings">
				<span data-tab="description" class="show">description</span>
				<span data-tab="specification">specification</span>
				<span data-tab="technical">technical</span>
			</div>
			<div class="content">
				<div data-tab="description" class="show">
					<h2>item description</h2>
					<?php echo _( get_field( 'product_desc' ) ) ?>
				</div>
				<div data-tab="specification">
					<h2>item specification</h2>

				</div>
				<div data-tab="technical">
					<h2>item technical</h2>
					<?php echo _( get_field( 'product_tech' ) ) ?>
				</div>
			</div>
		</div>
		<div class="product-images">
			<div id="productGallery" class="swiper">
				<div class="swiper-wrapper" id="openModal">
					<?php render_slides() ?>
				</div>
				<div class=" btn-next"></div>
				<div class="btn-prev"></div>
			</div>
			<div id="productGalleryThumbs" class="swiper">
				<div class="swiper-wrapper">
					<?php render_slides() ?>
				</div>
			</div>

			<div id="imagesModal">
				<i id="closeModal"></i>
				<div id="productGalleryModal" class="swiper">
					<div class="swiper-wrapper">
						<?php render_slides() ?>
					</div>
					<div class="btn-next"></div>
					<div class="btn-prev"></div>
				</div>
				<div id="productGalleryThumbsModal" th class="swiper">
					<div class="swiper-wrapper">
						<?php render_slides() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="call-to-action">
		price:
		<a href="#" class="btn bg_secondary1">
			call us now
		</a>
		we are here for you 24/7 ,call us now
	</div>
	<div class="transitions">
		<h2>transitions that comes with this product</h2>
		<div>
			<img src=" <?php echo get_template_directory_uri() . '/imgs/sample-1.png' ?> " alt="">
			<img src=" <?php echo get_template_directory_uri() . '/imgs/sample-2.png' ?> " alt="">
			<img src=" <?php echo get_template_directory_uri() . '/imgs/sample-3.png' ?> " alt="">
			<img src=" <?php echo get_template_directory_uri() . '/imgs/sample-4.png' ?> " alt="">
		</div>
	</div>
	<div class="products">
		<h2>you might like this products too</h2>
		<div>
			<?php

			if ( $related_products ) {
				foreach ( $related_products as $product ) {
					get_template_part( '/templates/loop/product' );
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
			<h2>you might also like to know</h2>
			<a href="#" class="btn_no_icon bg_white only-desktop">View All</a>
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
			<a href="#" class="btn_no_icon bg_white only-mobile">View All</a>
		</div>
	</div>
</main>
<?php get_footer() ?>