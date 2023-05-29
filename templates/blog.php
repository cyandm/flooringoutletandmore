<?php /* Template Name: Blog */?>
<?php
$posts_args = [ 
	'post_type' => 'post',
	'posts_per_page' => '3'
];
$posts = new WP_Query( $posts_args );

?>
<?php get_header() ?>

<main class="blog">
	<?php get_template_part( './templates/sidebar', 'blog' ); ?>

	<div>

		<div class="only-mobile">
			<div class="drop-down-opener" id="dropDownOpener">
				<div>
					<i></i>
					<span>Current Category Name</span>
				</div>
				<i></i>
				<div class="virtual-options">
					<a href="#">CategoryName</a>
					<a href="#">CategoryName</a>
					<a href="#">CategoryName</a>
					<a href="#">CategoryName</a>
				</div>
			</div>
		</div>

		<div class="bests">
			<h2>Best Of The Week</h2>
			<div class="posts-wrapper">
				<?php if ( $posts->have_posts() ) : ?>
					<?php while ( $posts->have_posts() ) : ?>
						<?php $posts->the_post() ?>
						<?php get_template_part( './templates/loop/article' ) ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="category-blog">
			<div class="top">
				<h3>all about flooring</h3>
				<a href="#" class="btn_no_icon bg_white  only-desktop">view all</a>
			</div>
			<div class="posts-wrapper">
				<?php if ( $posts->have_posts() ) : ?>
					<?php while ( $posts->have_posts() ) : ?>
						<?php $posts->the_post() ?>
						<?php get_template_part( './templates/loop/article' ) ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<a href="#" class="btn_no_icon bg_white only-mobile">view all post from category name</a>
		</div>
	</div>
</main>


<?php get_footer() ?>