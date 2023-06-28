<div class="swiper-slide">
  <div class="home-wrapper blog">
    <header>
      <div>
        <h2>its nice to know more</h2>
        <span>you don't have to worry about anything</span>
      </div>
      <a class="btn_no_icon bg_white only-desktop" href="<?php echo site_url() . '/blog'; ?>">
        view all
      </a>
    </header>

    <main class="blog-wrapper">
      <?php
      $blogs = get_field('blogs');
      foreach ($blogs as $article) {
        get_template_part('/templates/loop/article', null, ['rel' => 'follow', 'article' => $article]);
      }
      ?>
      <a href="<?php echo site_url() . '/blog'; ?>" class="btn_no_icon bg_secondary1 no-desktop">view all</a>
    </main>
  </div>
</div>