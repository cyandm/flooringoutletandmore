<?php get_header() ?>

<?php
global $wp_query;
$cynOptions = new cyn_options();

$formUrl = "./";
$getCats = $cynOptions->cyn_getProdactTerms();
$getFilters = $cynOptions->cyn_getProdactTerms(false, false, $GLOBALS["filters-tax"]);
?>

<main class="product-archive search-page">
  <?php get_template_part(
    "templates/archiv-product",
    "sidebar",
    array(
      'formUrl' => $formUrl,
      'getCats' => $getCats,
      'getFilters' => $getFilters
    )
  ); ?>

  <div class="searchs">
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

    <div class="content content-collection">
      <h1>Showing products results for: <?php the_search_query(); ?></h1>
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
  </div>
</main>

<?php get_footer() ?>