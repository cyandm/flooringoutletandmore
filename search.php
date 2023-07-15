<?php
global $wp_query;
global $wpdb;

$searchQueryS = get_search_query();

$dbSearchQueryT = $wpdb->get_col(
  "SELECT id FROM $wpdb->posts WHERE
  post_type='product' AND
  post_title LIKE '%$searchQueryS%'"
);

$dbSearchQueryM = $wpdb->get_col(
  "SELECT post_id FROM $wpdb->postmeta WHERE
  (meta_key='product_code' AND meta_value LIKE '%$searchQueryS%') OR
  (meta_key='product_sid' AND meta_value LIKE '%$searchQueryS%') OR
  (meta_key='product_color_code' AND meta_value LIKE '%$searchQueryS%') OR
  (meta_key='product_installation' AND meta_value LIKE '%$searchQueryS%') OR
  (meta_key='product_finish' AND meta_value LIKE '%$searchQueryS%') OR
  (meta_key='product_sqft_box' AND meta_value LIKE '%$searchQueryS%') OR
  (meta_key='product_sqft_pallet' AND meta_value LIKE '%$searchQueryS%') OR
  (meta_key='product_box_pallet' AND meta_value LIKE '%$searchQueryS%') OR
  (meta_key='product_desc' AND meta_value LIKE '%$searchQueryS%')"
);

$dbSearchQueryTerm = array();
$dbSearchQueryTaxIds = $wpdb->get_results(
  "SELECT $wpdb->term_taxonomy.term_taxonomy_id FROM $wpdb->term_taxonomy
  INNER JOIN $wpdb->terms
    ON $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id
    AND $wpdb->terms.name LIKE '%$searchQueryS%'",
  "ARRAY_A"
);

foreach ($dbSearchQueryTaxIds as $tax) {
  $taxId = $tax['term_taxonomy_id'];
  $dbSearchQueryObjects = $wpdb->get_results(
    "SELECT object_id FROM $wpdb->term_relationships
    WHERE term_taxonomy_id LIKE '$taxId'",
    "ARRAY_A"
  );

  foreach ($dbSearchQueryObjects as $objectId) {
    $objId = $objectId['object_id'];
    if (!in_array($objId, $dbSearchQueryTerm)) {
      $dbSearchQueryTerm[] = $objId;
    }
  }
}

$dbSearchQuery = array_merge($dbSearchQueryT, $dbSearchQueryM, $dbSearchQueryTerm);
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$searchQueryArgs = array(
  'post_type' => "product",
  'post__in'  => array_unique($dbSearchQuery),
  'posts_per_page' => 15,
  'paged' => $paged
);

$searchWpQuery = new WP_Query($searchQueryArgs);
?>

<?php get_header() ?>

<main class="product-archive search-page">
  <?php /*
    get_template_part(
      "templates/archiv-product",
      "sidebar",
      array(
        'formUrl' => $formUrl,
        'getCats' => $getCats,
        'getFilters' => $getFilters
      )
    );
  */ ?>

  <div class="searchs">
    <!--
      <div id="archive-filter-chips" class="filter-chips">
        <?php foreach ($getCats as $cat) : ?>
          <?php if (isset($_GET['cat-' . $cat['id']])) : ?>
            <div class="filter-chip">
              <span><?php echo $cat['name']; ?></span>
              <i data-filter="<?php echo 'cat-' . $cat['id'] ?>" class="icon-close"></i>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($getFilters as $cat) : ?>
          <?php if (isset($_GET['cat-' . $cat['id']])) : ?>
            <div class="filter-chip">
              <span><?php echo $cat['name']; ?></span>
              <i data-filter="<?php echo 'cat-' . $cat['id'] ?>" class="icon-close"></i>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    -->

    <div class="content content-collection">
      <h1>search results for: <?php the_search_query(); ?></h1>
      <?php if ($searchWpQuery->have_posts()) : ?>
        <div class="content-collection-products">
          <?php
          while ($searchWpQuery->have_posts()) {
            $searchWpQuery->the_post();
            echo "<div class='product-item'>";
            get_template_part("templates/loop/product");
            echo "</div>";
          }
          ?>
        </div>
        <?php
        echo "<div class='page-nav-container'>" . paginate_links(
          array(
            'total' => $searchWpQuery->max_num_pages,
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
  </div>
</main>

<?php get_footer() ?>