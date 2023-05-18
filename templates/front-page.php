<?php
/*Template Name: Front-Page*/
?>



<?php //wp_die() ?>

<?php get_header('home') ?>

<div id="homeSwiper" class="swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div id="homeSwiper_slider" class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    if (have_rows("sliders")) {
                        while (have_rows("sliders")) {
                            the_row();
                            $sliders = get_field('sliders');

                            foreach ($sliders as $slider):
                                $title = $slider['title'];
                                $sub_title = $slider['sub_title'];
                                $img_url = $slider['background_image']; ?>

                                <div class="swiper-slide clickNext" data-mouse="next"
                                    style="background-image: url(<?php echo esc_url($img_url) ?>)">
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
        <div class="swiper-slide">
            <div class="introduce home-wrapper">
                <header>
                    <h2>Let’s Know More</h2>
                    <span>you dont have to worry about anything</span>
                </header>
                <main>
                    <article data-mouse="explore">
                        <a href="#">
                            <div>
                                <button class="btn_no_icon bg-primary1">explore</button>
                                <div>
                                    <h3>Waterproof Flooring</h3>
                                    <span>Longer Description is here</span>
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri() . '/imgs/product-1.png' ?>" alt="">
                        </a>
                    </article>
                    <article data-mouse="explore">
                        <a href="#">
                            <div>
                                <button class="btn_no_icon bg-primary1">explore</button>
                                <div>
                                    <h3>Waterproof Flooring</h3>
                                    <span>Longer Description is here</span>
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri() . '/imgs/product-2.png' ?>" alt="">
                        </a>
                    </article>
                    <article data-mouse="explore">
                        <a href="#">
                            <div>
                                <button class="btn_no_icon bg-primary1">explore</button>
                                <div>
                                    <h3>Waterproof Flooring</h3>
                                    <span>Longer Description is here</span>
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri() . '/imgs/product-3.png' ?>" alt="">
                        </a>
                    </article>

                    <a href="#" class="btn_no_icon bg_secondary1 no-desktop">view all</a>

                </main>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-wrapper promotion swiper">
                <header>
                    <h2>Special Offer</h2>
                    <span>you dont have to worry about anything</span>
                </header>
                <main id="homeSwiper_promotion" class="swiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="left">
                                <div class="clearfix_swiper"></div>
                                <div class="samples">
                                    <img src="<?php echo get_template_directory_uri() . '/imgs/sample-1.png' ?>" alt="">
                                    <img src="<?php echo get_template_directory_uri() . '/imgs/sample-2.png' ?>" alt="">
                                </div>
                                <p>Enjoy the breezy freshness of this coastal take on the
                                    rustic Old World elegance of wide-plank European Oak.
                                    The Costa Collection’s natural gray, taupe and caramel
                                    tones impart an airy, expansive feeling to virtually any
                                    décor.Rustic Grade hardwood.
                                    Ultra-matte UV Urethane finish</p>

                                <h3>
                                    only for a limited time
                                </h3>

                                <span class="price">
                                    250$
                                </span>
                            </div>
                            <div class="right">
                                <a data-mouse="explore" href="#">
                                    <img src="<?php echo get_template_directory_uri() . '/imgs/hero-1.png' ?>" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="left">
                                <div class="clearfix_swiper"></div>
                                <div class="samples">
                                    <img src="<?php echo get_template_directory_uri() . '/imgs/sample-3.png' ?>" alt="">
                                    <img src="<?php echo get_template_directory_uri() . '/imgs/sample-4.png' ?>" alt="">
                                </div>
                                <p>Enjoy the breezy freshness of this coastal take on the
                                    rustic Old World elegance of wide-plank European Oak.
                                    The Costa Collection’s natural gray, taupe and caramel
                                    tones impart an airy, expansive feeling to virtually any
                                    décor.Rustic Grade hardwood.
                                    Ultra-matte UV Urethane finish</p>

                                <h3>
                                    only for a limited time
                                </h3>

                                <span class="price">
                                    250$
                                </span>
                            </div>
                            <div class="right">
                                <a data-mouse="explore" href="#">
                                    <img src="<?php echo get_template_directory_uri() . '/imgs/hero-2.png' ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-navigation">
                        <span data-mouse="Prev" class="swiper-btn swiper-btn-prev"></span>
                        <span data-mouse="Next" class="swiper-btn swiper-btn-next"></span>
                    </div>
                </main>
                <a href="#" class="btn_no_icon bg_secondary1 no-desktop">view all</a>




            </div>
        </div>
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

                    foreach ($brands as $brand):
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
        <div class="swiper-slide home-wrapper blog">
            <header>
                <h2>its nice to know more</h2>
                <span>you don't have to worry about anything</span>
            </header>
            <main class="blog-wrapper">
                <?php
                $blogs = get_field('blogs');
                foreach ($blogs as $article) {
                    get_template_part('/templates/loop/article');
                }
                ?>
                <a href="#" class="btn_no_icon bg_secondary1 no-desktop">view all</a>

            </main>
        </div>
        <div class="swiper-slide home-wrapper contact-us">
            <header>
                <h2>pick up the phone</h2>
                <span>you don't have to worry about anything</span>
            </header>

            <main>
                <div>
                    <form id="homeForm" action="#" method='post'>
                        <label for="phone-number">
                            phone number
                            <input required type="tel" name="phone-number" placeholder="phone number">
                            <span class="err"></span>
                        </label>

                        <label for="email">
                            email
                            <input required type="email" name="email" placeholder="email">
                            <span class="err"></span>
                        </label>

                        <label for="phone-number">
                            what are you looking for
                            <textarea name="phone-number" cols="30" rows="10" placeholder="Describe"></textarea>
                        </label>

                        <label for="agreement" class="flex-row">
                            <input type="checkbox" checked>
                            I want you to inform me about new products and
                            new offers
                        </label>

                        <button type="submit" class="btn bg_secondary1">
                            send
                            <i class="icon-Component-2-1"></i>
                        </button>


                    </form>
                </div>
                <div>
                    <a href="#" data-mouse="call us">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/contact-us.png' ?>" alt="">
                    </a>
                </div>
            </main>
        </div>
        <div class="swiper-slide home-wrapper about">

            <header>
                <h2>How to reach us</h2>
                <span>you don't have to worry about anything</span>
            </header>

            <main>
                <div>
                    <img src="<?php echo get_template_directory_uri() . '/imgs/about-us.png' ?>" alt="">
                </div>

                <div>
                    <h3>
                        our phone number
                    </h3>
                    <div class="flex-row">
                        <span> <a href="tel: <?php echo __(get_field('phone_number_1')) ?>" data-mouse="call"><?php echo get_field('phone_number_1') ?></a></span>
                        <span> <a href="tel: <?php echo __(get_field('phone_number_2')) ?>" data-mouse="call"><?php echo get_field('phone_number_2') ?></a></span>
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
    </div>

</div>
<?php get_footer('home') ?>