<?php get_header() ?>

<?php get_template_part( '/templates/cat-mobile' ) ?>

<main class="blog archive">
	<?php get_template_part( './templates/sidebar', 'blog' ); ?>
	<div class="category-blog">
		<h1>
			<?= single_term_title() ?>
		</h1>
		<div class="posts-wrapper">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post() ?>
					<?php get_template_part( '/templates/loop/article', null, [ 'rel' => 'follow' ] ) ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</main>

<?php get_footer() ?>