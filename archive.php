<?php global $wp_query; ?>

<?php get_header() ?>

<main class="blog archive">
	<div class="only-mobile">
		<?php get_template_part('/templates/cat-mobile') ?>
	</div>

	<?php get_template_part('./templates/sidebar', 'blog'); ?>
	<div class="category-blog">
		<h1>
			<?= single_term_title() ?>
		</h1>

		<div class="posts-wrapper">
			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
					get_template_part('/templates/loop/article', null, ['rel' => 'follow']);
				endwhile;
			endif;
			?>
		</div>

		<?php
		echo "<div class='page-nav-container'>" . paginate_links(
			array(
				'total' => $wp_query->max_num_pages,
				'prev_text' => __('<i class="icon-arrow-left"></i>'),
				'next_text' => __('<i class="icon-arrow-right"></i>')
			)
		) . "</div>";
		?>
	</div>
</main>

<?php get_footer() ?>