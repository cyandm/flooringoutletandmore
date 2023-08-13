<?php
$products = get_field("front_page_promotion_product_post");
$viewUrl  = site_url() . '/special-offer';
?>
<div class="swiper-slide">
  <div class="home-wrapper promotion swiper">
    <header>
      <div>
        <h2>Special Offer And In Stocks</h2>
        <p>you dont have to worry about anything</p>
      </div>

      <a class="btn_no_icon bg_white only-desktop" href="<?php echo $viewUrl; ?>">
        view all
      </a>
    </header>

    <main id="homeSwiper_promotion" class="swiper">
      <div class="swiper-wrapper">
        <?php foreach ($products as $productId) : ?>
          <?php
          $imgs = get_field("product_gallery_group", $productId);
          $price = get_field("product_price", $productId);
          ?>
          <div class="swiper-slide">
            <div class="left">
              <div class="samples">
                <a data-mouse="explore" href="<?= get_the_permalink($productId) ?>">
                  <img src="<?php echo $imgs["gallery_img_1"] ?>" alt="">
                </a>

                <a data-mouse="explore" href="<?= get_the_permalink($productId) ?>">
                  <img src="<?php echo $imgs["gallery_img_2"] ?>" alt="">
                </a>

              </div>

              <a data-mouse="explore" href="<?= get_the_permalink($productId) ?>">
                <h2><?php echo get_the_title($productId) ?></h2>
              </a>


              <p><?php echo get_the_excerpt($productId); ?></p>

              <h3>only for a limited time</h3>

              <span class="price"><?php echo "$ " . $price ?></span>
            </div>

            <div class="right">
              <a data-mouse="explore" href="<?php echo get_the_permalink($productId) ?>">
                <img src="<?php echo $imgs["gallery_cover_img"] ?>" alt="">
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-navigation">
        <div data-mouse="Prev" class="swiper-btn swiper-btn-prev"><i class="icon-arrow-left-bigger"></i></div>
        <div data-mouse="Next" class="swiper-btn swiper-btn-next"><i class="icon-arrow-right-bigger"></i></div>
      </div>
    </main>

    <a href="<?php echo $viewUrl; ?>" class="btn_no_icon bg_secondary1 no-desktop">view all</a>
  </div>
</div>