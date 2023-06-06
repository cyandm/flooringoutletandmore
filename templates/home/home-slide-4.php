<div class="swiper-slide">
  <div class="home-wrapper brands swiper">
    <header>
      <h2>brands we carry</h2>
      <span>you dont have to worry about anything</span>
    </header>

    <main class="brand-wrapper">
      <?php

      $brands = get_terms(
        array(
          'taxonomy' => 'brands',
          'hide_empty' => false,
        )
      );

      foreach ($brands as $brand) :
        $brand_id = $brand->term_id;
        $brand_link = get_term_link($brand_id);
        $brand_logo = get_field('brand_logo', 'brands' . '_' . $brand_id);
        $brand_sample = get_field('brand_sample', 'brands' . '_' . $brand_id); ?>

        <a href="<?php echo esc_url($brand_link) ?>" data-mouse="" data-image="<?php echo $brand_sample ?>">
          <img src="<?php echo $brand_logo ?>" alt="">
        </a>

      <?php endforeach; ?>
    </main>
  </div>
</div>