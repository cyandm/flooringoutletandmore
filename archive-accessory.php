<?php
$front_page_id = get_option('page_on_front');

function render_slides($imgs)
{
  if (is_array($imgs)) {
    foreach ($imgs as $name => $img) {
      if (!empty($img)) {
        echo "<div class='swiper-slide'>";
        echo "<img src='$img'>";
        echo "</div>";
      }
    }
  }
}
?>

<?php get_header() ?>

<main class="accessories">
  <?php if (have_posts()) : ?>
    <div class="content">
      <?php while (have_posts()) : ?>
        <?php
        the_post();
        $postId = get_the_ID();
        $postDesc = get_field('accessory_desc', $postId);
        $postGallery = get_field('accessory_gallery_group', $postId);
        ?>
        <div class="accessory">
          <div class="accessory-title">
            <h2><?php echo the_title(); ?></h2>
          </div>

          <div class="accessory-content">
            <div class="gallery">
              <?php if (!empty($postGallery)) : ?>
                <div class="swiper swiper-gallery">
                  <div class="swiper-wrapper">
                    <?php render_slides($postGallery); ?>
                  </div>

                  <div class="swiper-navigation">
                    <div class="swiper-prev-btn"><i class="icon-arrow-left"></i></div>
                    <div class="swiper-next-btn"><i class="icon-arrow-right"></i></div>
                  </div>
                </div>

                <div class="swiper swiper-gallery-thumbs">
                  <div class="swiper-wrapper">
                    <?php render_slides($postGallery); ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>

            <div class="description">
              <h4>item describtion</h4>
              <div>
                <?php
                if (!empty($postDesc)) {
                  echo $postDesc;
                }
                ?>
              </div>
            </div>
          </div>

          <div class="accessory-call">
            price:
            <a href="tel:<?= get_field('phone_number_1', $front_page_id) ?>" class="btn bg_secondary1">
              <i class="icon-phone"></i>
              call us now
            </a>
            we are here for you 24/7 ,call us now
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <?php
    echo "<div class='page-nav-container'>" . paginate_links(
      array(
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('<i class="icon-arrow-left"></i>'),
        'next_text' => __('<i class="icon-arrow-right"></i>')
      )
    ) . "</div>";
    ?>
  <?php else : ?>
    <div class="not-find">
      <p>sorry ! we could’nt find anything</p>
      <div class="not-find-img">
        <img src="<?php echo get_template_directory_uri() . "/imgs/not-find.png" ?>">
      </div>
    </div>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</main>

<?php get_footer() ?>