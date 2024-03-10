<?php /* Template Name: Blog */ ?>

<?php
$recommend_posts = new WP_Query([
	'post_type' => 'post',
	'category_name' => 'recommended',
	'posts_per_page' => '3'
]);

$blog_term = cyn_common::blog_term();

$recommend_sidebar = $blog_term['recommend_sidebar'];
$cat_exclude = $blog_term['cat_exclude'];
$cats = $blog_term['cats'];
$current_terms = $blog_term['current_terms'];
?>
<?php get_header() ?>

<main class="blog">
	<?php get_template_part('./templates/sidebar', 'blog'); ?>

	<div class="content-blog">
		<div class="only-mobile">
			<?php get_template_part('/templates/cat-mobile') ?>
		</div>

		<div class="bests">
			<h2>Best Of The Week</h2>
			<div class="posts-wrapper">
				<?php if ($recommend_posts->have_posts()) : ?>
					<?php while ($recommend_posts->have_posts()) : ?>
						<?php $recommend_posts->the_post() ?>
						<?php get_template_part('./templates/loop/article', null, ['rel' => 'follow']) ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

		<?php foreach ($cats as $cat) : ?>
			<?php
			$cat_posts = new WP_Query([
				'post_type' => 'post',
				'posts_per_page' => '3',
				'cat' => $cat->term_id,
			]);
			?>

			<?php if ($cat_posts->have_posts()) : ?>

				<div class="category-blog">
					<div class="top">
						<h3>
							<?= $cat->name ?>
						</h3>
						<a href="<?= get_term_link($cat) ?>" class="btn_no_icon bg_white  only-desktop">view all</a>
					</div>
					<div class="posts-wrapper">
						<?php
						while ($cat_posts->have_posts()) {
							$cat_posts->the_post();
							get_template_part('./templates/loop/article', null, ['rel' => 'follow']);
						}
						?>
					</div>
					<a href="<?= get_term_link($cat) ?>" class="btn_no_icon bg_white only-mobile"> all of
						<?= $cat->name ?></a>
				</div>

			<?php endif; ?>


		<?php endforeach; ?>
	</div>
</main>

<?php get_footer() ?>