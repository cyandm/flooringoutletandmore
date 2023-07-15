<?php
$brands = get_terms(
  array(
    'taxonomy' => 'brands',
    'hide_empty' => false,
  )
);
?>

<div class="swiper-slide">
  <div class="home-wrapper brands swiper">
    <header>
      <div>
        <h2>brands we carry</h2>
        <span>you dont have to worry about anything</span>
      </div>
      <a class="btn_no_icon bg_white only-desktop" href="<?php echo site_url() . '/brands'; ?>">
        view all
      </a>
    </header>

    <main class="brand-wrapper">
      <?php $logoNumInPage = 0; ?>
      <?php foreach ($brands as $brand) : ?>
        <?php if ($logoNumInPage < 15) : ?>
          <?php
          $brand_id = $brand->term_id;
          $brand_link = get_term_link($brand_id);
          $brand_logo = get_field('brand_logo', 'brands' . '_' . $brand_id);
          $brand_sample = get_field('brand_sample', 'brands' . '_' . $brand_id);
          ?>
          <a href="<?php echo esc_url($brand_link) ?>" data-mouse="" data-image="<?php echo $brand_sample ?>">
            <img src="<?php echo $brand_sample ?>" style="display: none; pointer-events: none; visibility: hidden;">
            <img src="<?php echo $brand_logo ?>" alt="">
          </a>
        <?php
          $logoNumInPage++;
        endif; ?>
      <?php endforeach; ?>
    </main>

    <a href="<?php echo site_url() . '/brands'; ?>" class="btn_no_icon bg_secondary1 no-desktop">view all</a>
  </div>
</div>