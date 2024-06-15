<?php
$blog_term = cyn_common::blog_term();

$cat_exclude = $blog_term['cat_exclude'];
$pages = $blog_term['cats'];
$current_terms = $blog_term['current_terms'];

?>

<div class="drop-down-opener"
	 id="dropDownOpener">
	<div>
		<i class="icon-category"></i>
		<span>
			<?php if ( is_page_template( 'templates/blog.php' ) ) : ?>
				all
			<?php else : ?>
				<?= get_term( $current_terms[0] )->name ?>
			<?php endif; ?>
		</span>
	</div>
	<i class="icon-arrow-down-2"></i>
	<div class="virtual-options">
		<?php foreach ( $pages as $cat ) : ?>
			<?php if ( ! in_array( $cat->name, $cat_exclude ) ) : ?>
				<a href="<?= get_term_link( $cat ) ?>"><?= $cat->name ?></a>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>