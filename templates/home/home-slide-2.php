<?php
$cats = get_field("front_page_product_category");
$articleNum = 0;
?>
<div class="swiper-slide">
  <div class="introduce home-wrapper">
    <header>
      <h2>Let’s Know More</h2>
      <span>you dont have to worry about anything</span>
    </header>

    <main>
      <?php foreach ($cats as $cat) : ?>
        <?php if ($articleNum < 3) : ?>
          <?php
          $articleNum++;
          $termLink = get_term_link($cat);
          $catImg_url = get_field("p_cat_img_key", "product-cat_" . $cat->term_id);
          ?>
          <article data-mouse="explore">
            <a href="<?php echo $termLink; ?>">
              <div>
                <button class="btn_no_icon bg-primary1">explore</button>
                <div>
                  <h3><?php echo $cat->name ?></h3>
                  <p><?php echo $cat->description; ?></p>
                </div>
              </div>
              <img src="<?php echo $catImg_url; ?>" alt="">
            </a>
          </article>
        <?php
        else :
          break;
        endif;
        ?>
      <?php endforeach; ?>

      <!-- <a href="#" class="btn_no_icon bg_secondary1 no-desktop">view all</a> -->
    </main>
  </div>
</div>