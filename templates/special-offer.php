<?php /* Template Name: Special Offer */ ?>

<?php
$specialPosts = get_field('special_offer_posts');
$inStokPosts  = get_field('in_stok_posts');
?>

<?php get_header() ?>

<main class="special-offer-page">
  <div class="content">
    <section>
      <div class="title">
        <h2>Special Offer</h2>
      </div>

      <div class="product-article">
        <?php if (isset($specialPosts)) : ?>
          <?php foreach ($specialPosts as $post) : ?>
            <?php
            $title   = get_the_title($post);
            $img_url = get_the_post_thumbnail_url($post);
            $url     = get_permalink($post);
            $price   = get_field('product_price', $post);
            ?>
            <a href="<?php echo $url ?>" class="product-loop" style="background-image: url('<?php echo $img_url ?>');">
              <span>
                <i>Price</i>
                <?php if (!empty($price)) : ?>
                  <i>$<?php echo $price ?></i>
                <?php endif; ?>
              </span>
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </section>

    <?php if (isset($inStokPosts) && $inStokPosts) : ?>
      <section>
        <div class="title">
          <h2>In Stock</h2>
        </div>

        <div class="product-article">
          <?php if (isset($inStokPosts)) : ?>
            <?php foreach ($inStokPosts as $post) : ?>
              <?php
              $title   = get_the_title($post);
              $img_url = get_the_post_thumbnail_url($post);
              $url     = get_permalink($post);
              $price   = get_field('product_price', $post);
              ?>
              <a href="<?php echo $url ?>" class="product-loop" style="background-image: url('<?php echo $img_url ?>');">
                <span>
                  <i>Price</i>
                  <?php if (!empty($price)) : ?>
                    <i>$<?php echo $price ?></i>
                  <?php endif; ?>
                </span>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </section>
    <?php endif; ?>
  </div>
</main>

<?php get_footer() ?>