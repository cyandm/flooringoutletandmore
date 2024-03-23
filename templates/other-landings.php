<?php /* Template Name: Landings */ ?>

<?php
$post_id = get_the_ID();

$specialPosts = get_field('page_products', $post_id);
$faqDetails   = get_field('pages_faq_posts', $post_id);
$testimonials = get_field('pages_reviews_posts', $post_id);
?>

<?php get_header() ?>

<main class="single-page">
  <div class="title-head">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="clearfix"></div>

  <?php if (isset($specialPosts) && !empty($specialPosts)) : ?>
    <section class="offers-products">
      <div class="titles">
        <h2><?= get_field('page_products_title', get_the_ID()) ?></h2>
      </div>

      <div class="product-article">
        <?php foreach ($specialPosts as $post) : ?>
          <?php
          $title   = get_the_title($post);
          $img_url = get_the_post_thumbnail_url($post);
          $url     = get_permalink($post);
          $price   = get_field('product_price', $post);
          $price   = get_field('product_price', $post);
          ?>
          <a href="<?php echo $url ?>" class="product-loop">
            <img src="<?= $img_url ?>" alt="<?= $title ?>">

            <span>
              <i>Price</i>
              <?php if (!empty($price)) : ?>
                <i>$<?php echo $price ?></i>
              <?php endif; ?>
            </span>

            <div class="product_desc">
              <?php echo !empty(get_field('product_desc', $post)) ? _(get_field('product_desc', $post)) : ''; ?>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </section>
    <div class="clearfix"></div>
    <?php wp_reset_postdata() ?>
  <?php endif; ?>

  <div class="feature-image-container">
    <?= get_the_post_thumbnail($post_id) ?>
  </div>
  <div class="clearfix"></div>

  <?php
  if (isset($faqDetails) && !empty($faqDetails)) {
    get_template_part('templates/loop/faq-section', null, ['postsId' => $faqDetails, 'title' => "FAQs"]);
    echo '<div class="clearfix"></div>';
  }
  ?>

  <?php
  if (isset($testimonials) && !empty($testimonials)) {
    get_template_part('templates/loop/reviews-section', null, ['testimonials' => $testimonials]);
    echo '<div class="clearfix"></div>';
  }
  ?>

  <section class="the-content">
    <?php the_content(); ?>
  </section>
</main>

<?php get_footer() ?>