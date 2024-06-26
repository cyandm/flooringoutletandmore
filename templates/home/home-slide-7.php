<div class="swiper-slide home-wrapper about">

  <header>
    <div>
      <h2>How to reach us</h2>
      <span>you don't have to worry about anything</span>
    </div>
  </header>

  <main>
    <div>
      <img src="<?php echo get_template_directory_uri() . '/imgs/about-us.png' ?>" alt="">
      <a href="https://youtu.be/qBYhwH-z5hc" class="btn_no_icon" target="_blank" rel="noopener noreferrer">
        <i class="icon-youtube"></i>
        Watch Video
      </a>
    </div>

    <div>
      <h3>
        our phone number
      </h3>
      <div class="flex-row">
        <span> <a href="tel: <?php echo __(get_field('phone_number_1')) ?>" data-mouse="call"><?php echo get_field('phone_number_1') ?></a></span>
      </div>

      <h3>our address</h3>
      <span data-mouse="copy">
        <?php echo __(get_field('our_address')) ?>
      </span>
      <h3>our location</h3>
      <a href="<?php echo esc_url(get_field('map_url')) ?>" target="_blank" data-mouse="open">
        <?php echo __(get_field('google_map')); ?>
      </a>
    </div>
  </main>
</div>