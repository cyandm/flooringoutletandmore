<?php /* Template Name: About */ ?>

<?php get_header() ?>

<main class="about">
	<?= the_title('<h1>', '</h1>') ?>
	<?= wp_get_attachment_image(get_field('hero_image')['id'], [0, 400], false, ['class' => 'hero_image']); ?>
	<?= get_field('content_one') ?>

	<div class="call-to-action">
		<a href="#" class="btn bg_secondary1">
			call us now
		</a>
		<p> we are here for you 24/7 ,call us now</p>
	</div>

	<div class="two-column">
		<?= get_field('content_two') ?>
		<?= wp_get_attachment_image(get_field('main_image')['id'], [0, 560], false, ['class' => 'main_image']); ?>
	</div>

	<?= get_field('content_three') ?>
</main>

<?php get_footer() ?>