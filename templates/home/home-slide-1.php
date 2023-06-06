<div class="swiper-slide">
  <div id="homeSwiper_slider" class="swiper">
    <div class="swiper-wrapper">
      <?php
      if (have_rows("sliders")) {
        while (have_rows("sliders")) {
          the_row();
          $sliders = get_field('sliders');

          foreach ($sliders as $slider) :
            $title = $slider['title'];
            $sub_title = $slider['sub_title'];
            $img_url = $slider['background_image']; ?>

            <div class="swiper-slide clickNext" data-mouse="next" style="background-image: url(<?php echo esc_url($img_url) ?>)">
              <div class="slide-inner">
                <h1>
                  <?php echo __($title) ?>
                </h1>
                <span class="h2">
                  <?php echo __($sub_title) ?>
                </span>
              </div>
            </div>

      <? endforeach;
        }
      }
      ?>
    </div>

    <div class="swiper-pagination"></div>
    <div class="autoplay-progress only-desktop">
      <svg viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="20"></circle>
      </svg>
      <svg id="filler" viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="20"></circle>
      </svg>
    </div>
  </div>

</div>