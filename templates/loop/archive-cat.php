<?php

$cat_info = [];
if (isset($args["cat_info"])) :
  $cat_info = $args["cat_info"];

  $thisCatArgs = array(
    'post_type' => 'product',
    'posts_per_page' => 4,
    'tax_query' => array(
      array(
        'taxonomy' => "product-cat",
        'field' => "id",
        'terms' => $cat_info["id"],
      )
    )
  );

  $catProducts = new WP_Query($thisCatArgs);

  if ($catProducts->have_posts()) :
?>

    <div class="archive-products-cat">
      <div class="cat-title">
        <h2><a href="<?php echo $cat_info["url"]; ?>"><?php echo $cat_info["name"] ?></a></h2>
        <a href="<?php echo $cat_info["url"]; ?>" class="btn_no_icon bg_white">View All</a>
      </div>

      <div>
        <img src="<?php echo $cat_info["img_url"] ?>" alt="">
      </div>

      <div class="cat-products">
        <div class="swiper p-cat-swiper">
          <div class="swiper-wrapper">
            <?php while ($catProducts->have_posts()) : $catProducts->the_post(); ?>
              <div class="swiper-slide">
                <?php get_template_part("/templates/loop/product"); ?>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>

<?php
  endif;
  wp_reset_postdata();
endif;
?>