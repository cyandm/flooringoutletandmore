<?php /* Template Name: Special Offer */ ?>

<?php
$specialPosts = get_field('special_offer_posts');
$inStokPosts  = get_field('in_stok_posts');
$faqDetails   = get_field('special_offer_faq');
$testomonials = get_field('special_offer_testomonials');
$clientsUrl   = get_field('special_offer_clients_url');
$clientsYelp  = get_field('special_offer_clients_yelp');
$frontPageId  = get_option('page_on_front');
?>

<?php get_header() ?>

<main class="special-offer-page">
  <div class="content">
    <?php if (isset($specialPosts) && !empty($specialPosts)) : ?>
      <section>
        <div class="titles">
          <h2>Special Offers</h2>
        </div>

        <div class="product-article">
          <?php foreach ($specialPosts as $post) : ?>
            <?php
            $title   = get_the_title($post);
            $img_url = get_the_post_thumbnail_url($post);
            $url     = get_permalink($post);
            $price   = get_field('product_price', $post);
            $price   = get_field('product_price', $post);
            ?>
            <a href="<?php echo $url ?>" class="product-loop">
              <img src="<?= $img_url ?>" alt="<?= $title ?>">

              <span>
                <i>Price</i>
                <?php if (!empty($price)) : ?>
                  <i>$<?php echo $price ?></i>
                <?php endif; ?>
              </span>

              <div class="product_desc">
                <?php echo !empty(get_field('product_desc', $post)) ? _(get_field('product_desc', $post)) : ''; ?>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if (isset($inStokPosts) && !empty($inStokPosts)) : ?>
      <section>
        <div class="titles">
          <h2>In Stock Products</h2>
        </div>

        <div class="product-article">
          <?php foreach ($inStokPosts as $post) : ?>
            <?php
            $title   = get_the_title($post);
            $img_url = get_the_post_thumbnail_url($post);
            $url     = get_permalink($post);
            $price   = get_field('product_price', $post);
            ?>
            <a href="<?php echo $url ?>" class="product-loop">
              <img src="<?= $img_url ?>" alt="<?= $title ?>">

              <span>
                <i>Price</i>
                <?php if (!empty($price)) : ?>
                  <i>$<?php echo $price ?></i>
                <?php endif; ?>
              </span>

              <div class="product_desc">
                <?php echo !empty(get_field('product_desc', $post)) ? _(get_field('product_desc', $post)) : ''; ?>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if (isset($faqDetails) && !empty($faqDetails)) : ?>
      <section>
        <div class="titles">
          <h2>Question And Answer</h2>
        </div>

        <div class="faq-content">
          <div class="img">
            <img src="<?= get_template_directory_uri() . "/imgs/faq-main.png"; ?>">
          </div>

          <div class="context">
            <?php foreach ($faqDetails as $faq) : ?>
              <?php if (!empty($faq['question']) && !empty($faq['answer'])) : ?>
                <div class="faq-item close">
                  <div class="item-content">
                    <h4><?= $faq['question'] ?></h4>
                    <p><?= $faq['answer'] ?></p>
                  </div>

                  <button class="btn bg_secondary1">+</button>
                </div>
                <hr>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if (isset($testomonials) && !empty($testomonials)) : ?>
      <section>
        <div class="titles">
          <h2>What Our Clients Think</h2>

          <a href="<?php echo !empty($clientsYelp) ? $clientsYelp : '#' ?>">
            <img src="<?= get_template_directory_uri() . "/imgs/clients-y.svg"; ?>" />
          </a>
          <a href="<?php echo !empty($clientsUrl) ? $clientsUrl : '#' ?>">
            <img src="<?= get_template_directory_uri() . "/imgs/clients-g.svg"; ?>" />
          </a>
        </div>

        <div class="our-clients">
          <?php foreach ($testomonials as $client) : ?>
            <?php
            $title   = $client['title'];
            $comment = $client['comment'];
            $avatar  = $client['avatar'];
            $author  = $client['author'];
            $date    = $client['date'];
            $stars   = $client['stars'];
            ?>
            <?php if (!empty($title) && !empty($comment) && !empty($avatar) && !empty($date) && !empty($stars)) : ?>
              <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="testomonials-item">
                  <h4><?= $title ?></h4>

                  <p><?= $comment ?></p>

                  <div class="rating">
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                      $isActive = $i <= (int)$stars;
                      echo "<i>";
                      get_template_part("templates/loop/star-icon", null, ['active' => $isActive]);
                      echo "</i>";
                    }
                    ?>
                  </div>

                  <div class="author">
                    <img src="<?= $avatar ?>">

                    <div>
                      <p><?= $author ?></p>
                      <p><?= $date ?></p>
                    </div>
                  </div>
                </div>
              <?php endfor; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <section>
      <div class="titles">
        <h2>Our Services</h2>
      </div>

      <div class="services-content">
        <div class="services-item rev">
          <img src="<?php echo get_template_directory_uri() . '/imgs/services-1.png' ?>">

          <div class="c">
            <h3 data-num="1" class="">Consultation</h3>
            <p>
              <?php
              $txt = get_field('services_consultation', $frontPageId);
              echo !empty($txt) ? $txt : '';
              ?>
            </p>
          </div>
        </div>

        <div class="services-item">
          <img src="<?php echo get_template_directory_uri() . '/imgs/services-2.png' ?>">

          <div class="c">
            <h3 data-num="2" class="">Measurement</h3>
            <p>
              <?php
              $txt = get_field('services_measurement', $frontPageId);
              echo !empty($txt) ? $txt : '';
              ?>
            </p>
          </div>
        </div>

        <div class="services-item rev">
          <img src="<?php echo get_template_directory_uri() . '/imgs/services-3.png' ?>">

          <div class="c">
            <h3 data-num="3" class="">Delivery</h3>
            <p>
              <?php
              $txt = get_field('services_delivery', $frontPageId);
              echo !empty($txt) ? $txt : '';
              ?>
            </p>
          </div>
        </div>

        <div class="services-item">
          <img src="<?php echo get_template_directory_uri() . '/imgs/services-4.png' ?>">

          <div class="c">
            <h3 data-num="4" class="">Installation</h3>
            <p>
              <?php
              $txt = get_field('services_installation', $frontPageId);
              echo !empty($txt) ? $txt : '';
              ?>
            </p>
          </div>
        </div>

        <div class="services-item rev">
          <img src="<?php echo get_template_directory_uri() . '/imgs/services-5.png' ?>">

          <div class="c">
            <h3 data-num="5" class="">Removal</h3>
            <p>
              <?php
              $txt = get_field('services_removal', $frontPageId);
              echo !empty($txt) ? $txt : '';
              ?>
            </p>
          </div>
        </div>

        <div class="services-item">
          <img src="<?php echo get_template_directory_uri() . '/imgs/services-6.png' ?>">

          <div class="c">
            <h3 data-num="6" class="">Final inspection</h3>
            <p>
              <?php
              $txt = get_field('services_making_you_happy', $frontPageId);
              echo !empty($txt) ? $txt : '';
              ?>
            </p>
          </div>
        </div>
      </div>
    </section>

  </div>
</main>

<?php get_footer() ?>