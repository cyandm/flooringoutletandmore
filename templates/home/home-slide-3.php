<?php
$products = get_field("front_page_promotion_product_post");
?>
<div class="swiper-slide">
  <div class="home-wrapper promotion swiper">
    <header>
      <h2>Special Offer</h2>
      <p>you dont have to worry about anything</p>
    </header>
    <main id="homeSwiper_promotion" class="swiper ">
      <div class="swiper-wrapper">
        <?php foreach ($products as $productId) : ?>
          <?php
          $dec = get_field("product_desc", $productId);
          $imgs = get_field("product_gallery_group", $productId);
          $price = get_field("product_price", $productId);
          ?>
          <div class="swiper-slide">
            <div class="left">
              <div class="samples">
                <img src="<?php echo $imgs["gallery_img_1"] ?>" alt="">
                <img src="<?php echo $imgs["gallery_img_2"] ?>" alt="">
              </div>

              <h2><?php echo get_the_title($productId) ?></h2>

              <?php echo $dec; ?>

              <h3>only for a limited time</h3>

              <span class="price"><?php echo $price . "$" ?></span>
            </div>

            <div class="right">
              <a data-mouse="explore" href="#">
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
    <!-- <a href="#" class="btn_no_icon bg_secondary1 no-desktop">view all</a> -->
  </div>
</div>