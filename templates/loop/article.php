<?php
global $post;
$article = isset($args["article"]) ? $args["article"] : $post;

$title = get_the_title( $article );
$excerpt = get_the_excerpt( $article );
$img_url = get_the_post_thumbnail_url( $article );
$url = get_permalink( $article );
?>

<article class="article-loop">
	<a rel="<?= $args['rel'] ?>" data-mouse="explore" href="<?= $url ?>">
		<div>
			<img src="<?= $img_url ?>" alt="">
		</div>
		<h3>
			<?= $title ?>
		</h3>
		<span>
			<?= $excerpt ?>
		</span>
	</a>
</article>