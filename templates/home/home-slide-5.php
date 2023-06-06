<div class="swiper-slide home-wrapper blog">
  <header>
    <h2>its nice to know more</h2>
    <span>you don't have to worry about anything</span>
  </header>
  <main class="blog-wrapper">
    <?php
    $blogs = get_field('blogs');
    foreach ($blogs as $article) {
      get_template_part('/templates/loop/article', null, ['rel' => 'follow']);
    }
    ?>
    <a href="#" class="btn_no_icon bg_secondary1 no-desktop">view all</a>

  </main>
</div>