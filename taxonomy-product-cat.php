<?php get_header() ?>

<?php
global $wp_query;
$cynOptions = new cyn_options();

$thisTerm = get_term_by("slug", get_query_var('term'), get_query_var('taxonomy'));
$formUrl = get_term_link($thisTerm);
$parentTermId = wp_get_term_taxonomy_parent_id($thisTerm->term_id, get_query_var('taxonomy'));
$parentTerm = false;
$parentTermConditions = $parentTermId > 0 && $parentTermId != false;
$filtersConditions = isset($_GET["filter"]) && $_GET["filter"] == "on";

$galleryGroup = get_field_object("p_cat_main_gallery_group", 'product-cat_' . $thisTerm->term_id)["value"];
$topSectionGroup = get_field_object("p_cat_main_top_section_group", 'product-cat_' . $thisTerm->term_id)["value"];
$secondSectionGroup = get_field_object("p_cat_main_second_section_group", 'product-cat_' . $thisTerm->term_id)["value"];

if (!$parentTermConditions) {
  $getChildCats = $cynOptions->cyn_getProdactTerms($thisTerm->term_id);
} else {
  $parentTerm = get_term($parentTermId);
}

$getFilters = $cynOptions->cyn_getProdactTerms(false, false, $GLOBALS["filters-tax"]);
?>

<main class="product-archive taxonomy-product-cat">
<?php get_template_part(
		"templates/archiv-product",
		"sidebar",
		array(
			'formUrl' => $formUrl,
			'getFilters' => $getFilters
		)
	); ?>

  <div class="products taxonomy-cat-products">
    <div id="archive-filter-chips" class="filter-chips">
      <?php foreach ($getFilters as $cat) : ?>
        <?php if (isset($_GET['cat-' . $cat['id']])) : ?>
          <div class="filter-chip">
            <span><?php echo $cat['name']; ?></span>
            <i data-filter="<?php echo 'cat-' . $cat['id'] ?>" class="icon-close"></i>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <div class="breadcrumb">
      <a href="<?php echo get_post_type_archive_link($GLOBALS["product-post-type"]) ?>">Products</a>
      <i class="icon-arrow-right"></i>
      <?php
      if ($parentTerm == false) {
        echo '<span>' . $thisTerm->name . '</span>';
      } else {
        echo "<a href='" . get_term_link($parentTerm) . "' >";
        echo '<span>' . $parentTerm->name . '</span>';
        echo '</a>';
        echo '<i class="icon-arrow-right"></i>';
        echo '<span>' . $thisTerm->name . '</span>';
      }
      ?>
    </div>

    <?php if (!$parentTermConditions && !$filtersConditions) : ?>
      <div class="content">
        <h1><?php echo $thisTerm->name ?></h1>

        <div class="content-gallery">
          <div>
            <img src="<?php echo $galleryGroup["p_cat_gallery_img_1"] ?>" alt="">
          </div>
          <div>
            <img src="<?php echo $galleryGroup["p_cat_gallery_img_2"] ?>" alt="">
            <img src="<?php echo $galleryGroup["p_cat_gallery_img_3"] ?>" alt="">
          </div>
        </div>

        <section class="content-sections">
          <div class="content-sections-top">
            <div class="wysiwyg">
              <?php echo $topSectionGroup["p_cat_top_section_editor"] ?>
            </div>
            <div>
              <img src="<?php echo $topSectionGroup["p_cat_top_section_img"] ?>" alt="">
            </div>
          </div>

          <div class="content-sections-second">
            <div>
              <img src="<?php echo $secondSectionGroup["p_cat_second_section_img"] ?>" alt="">
            </div>
            <div class="wysiwyg">
              <?php echo $secondSectionGroup["p_cat_second_section_editor"] ?>
            </div>
          </div>
        </section>

        <section class="content-collections">
          <?php foreach ($getChildCats as $childId => $childTerm) : ?>
            <?php
            $collectionGallery = get_field_object("p_cat_main_gallery_group", 'product-cat_' . $childTerm["id"])["value"];
            ?>
            <div class="collection">
              <h3 class="collection-title">
                <a href="<?php echo $childTerm['url'] ?>"><?php echo $childTerm['name'] ?></a>
              </h3>
              <div class="collection-gallery">
                <?php
                foreach ($collectionGallery as $collImg) {
                  if (!empty($collImg)) {
                    echo "<a class='gallery-item' href='" . $childTerm['url'] . "'>";
                    echo "<img src='$collImg;'>";
                    echo "</a>";
                  }
                }
                ?>
              </div>
            </div>
          <?php endforeach; ?>
        </section>
      </div>
    <?php else : ?>
      <div class="content content-collection">
        <h1><?php echo $thisTerm->name ?></h1>

        <?php if (have_posts()) : ?>
          <div class="content-collection-products">
            <?php
            while (have_posts()) {
              the_post();
              echo "<div class='product-item'>";
              get_template_part("templates/loop/product");
              echo "</div>";
            }
            ?>
          </div>
          <?php
          echo "<div class='page-nav-container'>" . paginate_links(
            array(
              'total' => $wp_query->max_num_pages,
              'prev_text' => __('<i class="icon-arrow-left"></i>'),
              'next_text' => __('<i class="icon-arrow-right"></i>')
            )
          ) . "</div>";
          ?>

        <?php else : ?>
          <div class="not-find">
            <p>sorry ! we could’nt find anything</p>
            <div class="not-find-img">
              <img src="<?php echo get_template_directory_uri() . "/imgs/not-find.png" ?>">
            </div>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</main>

<?php get_footer() ?>