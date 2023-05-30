<?php get_header() ?>

<?php
$cynOptions = new cyn_options();

$getCats = $cynOptions->cyn_getProdactTerms();
$formUrl = get_post_type_archive_link($GLOBALS["product-post-type"]);
?>

<main class="product-archive">
	<form id="archiveSideBar" class="side-bar" action="<?php echo $formUrl; ?>" method="GET">
		<div class="applay-filter only-desktop">
			<button class="btn_no_icon bg_secondary2" type="submit">
				<i class="icon-filter"></i>
				Apply Filter
			</button>
			<button class="btn_no_icon bg_white filter-clear" id="archiveSideBarClear"><i class="icon-clear-filter"></i></button>
		</div>

		<div class="only-mobile heading">
			<i class="icon-close" id="archiveSideBarCloser"></i>
			<span class="h2">
				Filters
			</span>
		</div>

		<div class="box">
			<div class="title">
				<span>Category</span>
				<i class="icon-arrow-down-2"></i>
			</div>
			<div class="box-container open">
				<div class="checkbox-container">

					<?php foreach ($getCats as $cat) : ?>
						<div class="checkbox-wrapper">
							<label for="<?php echo 'cat-' . $cat['id'] ?>"><?php echo $cat['name']; ?></label>
							<div class="inner-checkbox">
								<input type="checkbox" name="<?php echo 'cat-' . $cat['id']; ?>" id="<?php echo 'cat-' . $cat['id']; ?>" value="on" <?php echo isset($_GET['cat-' . $cat['id']]) ? "checked" : ""; ?> />
								<span class="checkmark"></span>
							</div>
						</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>

		<div class="applay-filter only-mobile">
			<button class="btn_no_icon bg_secondary2" type="submit">
				<i class="icon-filter"></i>
				Apply Filter
			</button>
			<button class="btn_no_icon bg_white filter-clear" id="archiveSideBarClearMobile"><i class="icon-clear-filter"></i></button>
		</div>

	</form>

	<div class="only-mobile">
		<button id="archiveSideBarOpener" class="btn_icon_between bg_secondary2 sidebar-opener">
			<i class="icon-filter"></i>
			<span>Filters</span>
			<i class="icon-arrow-right-2"></i>
		</button>
	</div>

	<div class="products">
		<div id="archive-filter-chips" class="filter-chips">
			<?php foreach ($getCats as $cat) : ?>
				<?php if (isset($_GET['cat-' . $cat['id']])) : ?>
					<div class="filter-chip">
						<span><?php echo $cat['name']; ?></span>
						<i data-filter="<?php echo 'cat-' . $cat['id'] ?>" class="icon-close"></i>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>

		<div>
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					get_template_part('/templates/loop/product');
				}
			} ?>
		</div>

		<?php

		global $wp_query;
		echo "<div class='page-nav-container'>" . paginate_links(
			array(
				'total' => $wp_query->max_num_pages,
				'prev_text' => __('<i class="arrowPrev"><</i>'),
				'next_text' => __('<i class="arrowNext">></i>')
			)
		) . "</div>";
		?>
	</div>
</main>

<?php get_footer() ?>