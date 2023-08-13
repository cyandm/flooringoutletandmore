<?php /* Template Name: About */ ?>

<?php
$front_page_id = get_option('page_on_front');
?>

<?php get_header() ?>

<main class="about">
	<?= the_title('<h1>', '</h1>') ?>

	<?= wp_get_attachment_image(get_field('hero_image')['id'], [0, 400], false, ['class' => 'hero_image']); ?>

	<?= get_field('content_one') ?>

	<?= get_field('video_iframe') ?>

	<div class="call-to-action">
		<a href="tel:<?= get_field('phone_number_1', $front_page_id) ?>" class="btn bg_secondary1">
			<i class="icon-phone"></i>
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