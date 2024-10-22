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













<?php foreach ($pages as $cat): ?>
  <?php
  $cat_posts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => '3',
    'cat' => $cat->term_id,
  ]);
  ?>

  <?php if ($cat_posts->have_posts()): ?>

    <div class="category-blog">
      <div class="top">
        <h3>
          <?= $cat->name ?>
        </h3>
        <a href="<?= get_term_link($cat) ?>" class="btn_no_icon bg_white  only-desktop">view all</a>
      </div>
      <div class="posts-wrapper">
        <?php
        while ($cat_posts->have_posts()) {
          $cat_posts->the_post();
          get_template_part('./templates/loop/article', null, ['rel' => 'follow']);
        }
        ?>
      </div>
      <a href="<?= get_term_link($cat) ?>" class="btn_no_icon bg_white only-mobile"> all of
        <?= $cat->name ?></a>
    </div>

  <?php endif; ?>


<?php endforeach; ?>