<?php

$category_names = [];
$categories = get_the_category(get_the_ID());
foreach ($categories as $category) {
	array_push($category_names, $category->name);
}


$tags = get_the_tags(get_the_ID());


$related_args = [
	'post_type' => 'post',
	'posts_per_page' => 3,
	'category_in' => $category_names,
];

$related = new WP_Query($related_args);

function reading_time()
{
	$content = get_post_field('post_content', get_the_ID());
	$word_count = str_word_count(strip_tags($content));
	$readingtime = ceil($word_count / 200);

	if ($readingtime == 1) {
		$timer = " minute";
	} else {
		$timer = " minutes";
	}
	$totalreadingtime = $readingtime . $timer;

	return $totalreadingtime;
}
$read_time = reading_time();
?>


<?php get_header() ?>

<main class="single-post">

	<?php get_template_part('./templates/sidebar', 'blog'); ?>

	<div class="post-wrapper">

		<div class="post-content">
			<h1>
				<?= get_the_title() ?>
			</h1>
			<div class="feature-image-container">
				<?php the_post_thumbnail() ?>
			</div>
			<div class="only-mobile">
				<div class="post-info">
					<div class="read-time">
						<i></i>
						<span class="h4">
							Read Time:
						</span>
						<span>
							<?= $read_time ?>
						</span>
					</div>
					<div>
						<i></i>
						<span class="h4">
							Author:
						</span>
						<span>
							<?= get_the_author() ?>
						</span>
					</div>
					<div>
						<i></i>
						<div>
							<span class="h4">
								Category:
							</span>
							<?php
							foreach ($categories as $category) :
								$cat_name = $category->name;
								$cat_link = get_term_link($category->term_id); ?>
								<span class="cat-item">
									<a href="<?= $cat_link ?>"> <?= $cat_name ?> </a>
								</span>
							<?php endforeach; ?>
						</div>
					</div>
					
				<?php if(false !== $tags):?>
					<div>
						<i></i>
						<div>
							<span class="h4">
								Tags:
							</span>
							<?php
							foreach ($tags as $tag) :
								$tag_name = $tag->name;
								$tag_link = get_term_link($tag->term_id); ?>
								<span class="cat-item">
									<a href="<?= $tag_link ?>"> <?= $tag_name ?> </a>
								</span>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif;?>
					
				</div>
			</div>
			<div class="the-content">
				<?php the_content() ?>
			</div>
			<div class="only-mobile">
				<div class="related">
					<span class="h4">you might also like</span>
					<?php if ($related->have_posts()) : ?>
						<?php while ($related->have_posts()) : ?>
							<?php $related->the_post(); ?>
							<?php get_template_part('./templates/loop/article', null, ['rel' => 'nofollow']) ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="post-side-bar">
			<div class="post-info">
				<div class="read-time">
					<i></i>
					<span class="h4">
						Read Time:
					</span>
					<span>
						<?= $read_time ?>
					</span>
				</div>
				<div>
					<i></i>
					<span class="h4">
						Author:
					</span>
					<span>
						<?= get_the_author() ?>
					</span>
				</div>
				<div>
					<i></i>
					<div>
						<span class="h4">
							Category:
						</span>
						<?php
						foreach ($categories as $category) :
							$cat_name = $category->name;
							$cat_link = get_term_link($category->term_id); ?>
							<span class="cat-item">
								<a href="<?= $cat_link ?>"> <?= $cat_name ?> </a>
							</span>
						<?php endforeach; ?>
					</div>
				</div>
				<?php if(false !== $tags):?>
					<div>
						<i></i>
						<div>
							<span class="h4">
								Tags:
							</span>
							<?php
							foreach ($tags as $tag) :
								$tag_name = $tag->name;
								$tag_link = get_term_link($tag->term_id); ?>
								<span class="cat-item">
									<a href="<?= $tag_link ?>"> <?= $tag_name ?> </a>
								</span>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif;?>
			</div>
			<div class="related">
				<span class="h4">you might also like</span>
				<?php if ($related->have_posts()) : ?>
					<?php while ($related->have_posts()) : ?>
						<?php $related->the_post(); ?>
						<?php get_template_part('./templates/loop/article', null, ['rel' => 'nofollow']) ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

	</div>
</main>

<?php get_footer() ?>