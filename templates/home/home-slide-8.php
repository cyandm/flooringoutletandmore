<?php

?>
<div class="swiper-slide">
  <div class="home-wrapper services">
    <header>
      <div>
        <h2>our services</h2>
        <p>you dont have to worry about anything</p>
      </div>
    </header>
    <main id="homeSwiper_services" class="swiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <article class="rev">
            <div class="top">
              <img src="<?php echo get_template_directory_uri() . '/imgs/services-1.png' ?>" alt="">

              <div class="c">
                <h2 data-num="1" class="title">Consultation</h2>
                <p>
                  <?php
                    $txt = get_field('services_consultation');
                    echo !empty($txt) ? $txt : '';
                  ?>
                </p>
              </div>
            </div>

            <div class="bottom">
              <div class="c">
                <h2 data-num="2" class="title">Measurement</h2>
                <p>
                  <?php
                    $txt = get_field('services_measurement');
                    echo !empty($txt) ? $txt : '';
                  ?>
                </p>
              </div>

              <img src="<?php echo get_template_directory_uri() . '/imgs/services-2.png' ?>" alt="">
            </div>
          </article>
        </div>

        <div class="slide swiper-slide">
          <article class="">
            <div class="top">
              <img src="<?php echo get_template_directory_uri() . '/imgs/services-3.png' ?>" alt="">

              <div class="c">
                <h2 data-num="3" class="title">Delivery</h2>
                <p>
                  <?php
                    $txt = get_field('services_delivery');
                    echo !empty($txt) ? $txt : '';
                  ?>
                </p>
              </div>
            </div>

            <div class="bottom">
              <div class="c">
                <h2 data-num="4" class="title">Installation</h2>
                <p>
                  <?php
                    $txt = get_field('services_installation');
                    echo !empty($txt) ? $txt : '';
                  ?>
                </p>
              </div>

              <img src="<?php echo get_template_directory_uri() . '/imgs/services-4.png' ?>" alt="">
            </div>
          </article>
        </div>

        <div class="slide swiper-slide">
          <article class="rev">
            <div class="top">
              <img src="<?php echo get_template_directory_uri() . '/imgs/services-5.png' ?>" alt="">

              <div class="c">
                <h2 data-num="5" class="title">Removal</h2>
                <p>
                  <?php
                    $txt = get_field('services_removal');
                    echo !empty($txt) ? $txt : '';
                  ?>
                </p>
              </div>
            </div>

            <div class="bottom">
              <div class="c">
                <h2 data-num="6" class="title">Making you happy</h2>
                <p>
                  <?php
                    $txt = get_field('services_making_you_happy');
                    echo !empty($txt) ? $txt : '';
                  ?>
                </p>
              </div>

              <img src="<?php echo get_template_directory_uri() . '/imgs/services-6.png' ?>" alt="">
            </div>
          </article>
        </div>
      </div>
    </main>
  </div>
</div>