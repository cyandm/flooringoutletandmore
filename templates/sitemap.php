<?php /* Template Name: Sitemap */ ?>

<?php
$pages = get_posts( [ 
	'post_type' => 'page',
	'posts_per_page' => -1,
	'fields' => 'ids',
] );

$posts = get_posts( [ 
	'post_type' => 'post',
	'posts_per_page' => -1,
	'fields' => 'ids',
] );

?>

<?php get_header() ?>

<main class="sitemap">

	<div class="pages">
		<span class="h1">
			pages
		</span>

		<div class="loop">
			<?php foreach ( $pages as $index => $page_id ) : ?>
				<a rel="dofollow"
				   href="<?php echo get_permalink( $page_id ) ?>">
					<?php echo get_the_title( $page_id ) ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="posts">
		<span class="h1">
			posts
		</span>

		<div class="loop">
			<?php foreach ( $posts as $index => $post_id ) : ?>
				<a rel="dofollow"
				   href="<?php echo get_permalink( $post_id ) ?>">
					<?php echo get_the_title( $post_id ) ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>

</main>

<?php get_footer() ?>