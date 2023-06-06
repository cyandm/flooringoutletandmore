<?php
$blog_term = cyn_common::blog_term();

$cat_exclude = $blog_term['cat_exclude'];
$cats = $blog_term['cats'];
$current_terms = $blog_term['current_terms'];

?>

<div class="drop-down-opener" id="dropDownOpener">
	<div>
		<i></i>
		<span>
			<?php if ( is_page_template( 'templates/blog.php' ) ) : ?>
				all
			<?php else : ?>
				<?= get_term( $current_terms[0] )->name ?>
			<?php endif; ?>
		</span>
	</div>
	<i></i>
	<div class="virtual-options">

		<?php foreach ( $cats as $cat ) : ?>
			<?php if ( ! in_array( $cat->name, $cat_exclude ) ) : ?>
				<a href="<?= get_term_link( $cat ) ?>"><?= $cat->name ?></a>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>