<?php get_header() ?>

<main class="projects">
	<?php if (have_posts()) : ?>
		<div class="content">
			<?php
			while (have_posts()) :
				the_post();
				get_template_part('/templates/loop/project');
			endwhile;
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
	<?php else : ?>
		<div class="not-find">
			<p>sorry ! we could’nt find anything</p>
			<div class="not-find-img">
				<img src="<?php echo get_template_directory_uri() . "/imgs/not-find.png" ?>">
			</div>
		</div>
	<?php endif; ?>
  <?php wp_reset_postdata(); ?>
</main>

<?php get_footer() ?>