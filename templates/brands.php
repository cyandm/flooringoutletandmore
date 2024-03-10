<?php /* Template Name: Brands */ ?>

<?php
$cynOptions = new cyn_options();
$brands = $cynOptions->cyn_getProductTerms(false, false, $GLOBALS["brands-tax"]);

usort($brands, function ($a, $b) {
  if (str_contains($a['slug'], 'parma-floor') || str_contains($b['slug'], 'parma-floor'))
    return 1;
  return 0;
});
?>

<?php get_header() ?>

<main class="brands">
  <div class="content">
    <?php foreach ($brands as $brand) : ?>
      <?php
      $brand_id   = $brand['id'];
      $brand_logo = get_field('brand_logo', 'brands' . '_' . $brand_id);
      ?>
      <a href="<?php echo $brand['url']; ?>">
        <img src="<?php echo $brand_logo; ?>" alt="">
      </a>
    <?php endforeach; ?>
  </div>
</main>

<?php get_footer() ?>