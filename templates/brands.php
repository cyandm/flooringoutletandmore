<?php /* Template Name: Brands */ ?>

<?php
$brands = get_terms(
  array(
    'taxonomy' => 'brands',
    'hide_empty' => false,
  )
);
?>

<?php get_header() ?>

<main class="brands">
  <div class="content">
    <?php foreach ($brands as $brand) : ?>
      <?php
      $brand_id = $brand->term_id;
      $brand_link = get_term_link($brand_id);
      $brand_logo = get_field('brand_logo', 'brands' . '_' . $brand_id);
      ?>
        <a href="<?php echo $brand_link; ?>">
          <img src="<?php echo $brand_logo; ?>" alt="">
        </a>
    <?php endforeach; ?>
  </div>
</main>

<?php get_footer() ?>