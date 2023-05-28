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
	<aside class="side-bar">
		<div class="box">
			<div class="search">
				<form id="homeContactForm" action="/" method="get">
					<div class="form_control">
						<input type="text" name="s" id="search" value="<?php the_search_query(); ?>"
							placeholder="Quick Search" />

						<i class="icon-Component-2-1"></i>
					</div>
				</form>
			</div>
			<div class="categories">
				<span class="h4">Categories</span>
				<ul>
					<li class="active">
						<span>All</span>
						<span class="caption">215</span>
					</li>
					<li>
						<span>All</span>
						<span class="caption">215</span>
					</li>
					<li>
						<span>All</span>
						<span class="caption">215</span>
					</li>
					<li>
						<span>All</span>
						<span class="caption">215</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="box">
			<span class="h4">Recommended</span>

			<article>
				<div class="img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri() . '/imgs/blog-1.png' ?>" alt="">
				</div>
				<div class="content">
					<span class="h5">Ways To Decide Ways To Decide</span>
					<span class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus hic
						nostrum, fugiat deleniti a iusto ipsum nesciunt perspiciatis ullam eligendi obcaecati
						consequuntur reprehenderit natus modi!</span>
					<span class="caption">2023/05/23</span>
				</div>
			</article>

			<article>
				<div class="img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri() . '/imgs/blog-1.png' ?>" alt="">
				</div>
				<div class="content">
					<span class="h5">Ways To Decide Ways To Decide</span>
					<span class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus hic
						nostrum, fugiat deleniti a iusto ipsum nesciunt perspiciatis ullam eligendi obcaecati
						consequuntur reprehenderit natus modi!</span>
					<span class="caption">2023/05/23</span>
				</div>
			</article>

			<article>
				<div class="img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri() . '/imgs/blog-1.png' ?>" alt="">
				</div>
				<div class="content">
					<span class="h5">Ways To Decide Ways To Decide</span>
					<span class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus hic
						nostrum, fugiat deleniti a iusto ipsum nesciunt perspiciatis ullam eligendi obcaecati
						consequuntur reprehenderit natus modi!</span>
					<span class="caption">2023/05/23</span>
				</div>
			</article>

			<article>
				<div class="img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri() . '/imgs/blog-1.png' ?>" alt="">
				</div>
				<div class="content">
					<span class="h5">Ways To Decide Ways To Decide</span>
					<span class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus hic
						nostrum, fugiat deleniti a iusto ipsum nesciunt perspiciatis ullam eligendi obcaecati
						consequuntur reprehenderit natus modi!</span>
					<span class="caption">2023/05/23</span>
				</div>
			</article>
		</div>

	</aside>
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