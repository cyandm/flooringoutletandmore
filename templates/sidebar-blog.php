<?php
$blog_term = cyn_common::blog_term();

$recommend_sidebar = $blog_term['recommend_sidebar'];
$cat_exclude = $blog_term['cat_exclude'];
$pages = $blog_term['cats'];
$current_terms = $blog_term['current_terms'];
?>

<aside class="side-bar blog">

	<div class="box">
		<div class="search">
			<form id="homeContactForm"
				  action="/"
				  method="get">
				<div class="form_control">
					<input type="text"
						   name="s"
						   id="search"
						   value="<?php the_search_query(); ?>"
						   placeholder="Quick Search" />

					<i class="icon-search"></i>
				</div>
			</form>
		</div>

		<div class="categories">
			<span class="h4">Categories</span>
			<ul>
				<?php foreach ( $pages as $cat ) : ?>
					<?php if ( ! in_array( $cat->name, $cat_exclude ) ) : ?>
						<li class="<?php if ( in_array( $cat->term_id, $current_terms ) )
							echo 'active'; ?>">
							<span>
								<a href="<?= get_term_link( $cat ) ?>">
									<?= $cat->name ?>
								</a>
							</span>
							<span class="caption">
								<?= $cat->category_count ?>
							</span>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="box">
		<?php if ( $recommend_sidebar->have_posts() ) : ?>
			<span class="h4">Recommended</span>

			<?php while ( $recommend_sidebar->have_posts() ) : ?>
				<?php $recommend_sidebar->the_post(); ?>

				<article>
					<div class="img-wrapper">
						<a href="<?= get_the_permalink() ?>"
						   rel="nofollow">
							<?= get_the_post_thumbnail( null, 'thumbnail' ) ?>
						</a>
					</div>
					<div class="content">
						<span class="h5">
							<a href="<?= get_the_permalink() ?> "
							   rel="nofollow">
								<?= get_the_title() ?>
							</a>
						</span>
						<span class="description">
							<?= get_the_excerpt() ?>
						</span>
						<span class="caption">
							<?= get_the_date() ?>
						</span>
					</div>
				</article>

			<?php endwhile; ?>


		<?php endif; ?>

		<?php wp_reset_query(); ?>

	</div>

</aside>