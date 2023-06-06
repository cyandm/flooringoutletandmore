<?php get_header() ?>
<main class="projects">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( '/templates/loop/project' );
		}
	}
	?>
</main>
<?php get_footer() ?>