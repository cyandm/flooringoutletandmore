<?php
$front_page_id = get_option('page_on_front')
    ?>

<footer>
    <div>
        <div>
            <b>Us</b>
            <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Information</li>
            </ul>
        </div>

        <div>
            <b>What We Do?</b>
            <ul>
                <li>Products</li>
                <li>Projects</li>
                <li>Accessories</li>
                <li>Services</li>
            </ul>
        </div>

        <div>
            <b>Know More</b>
            <ul>
                <li>blog</li>
            </ul>
        </div>
    </div>
    <div>
        <div class="w-full">
            <b>Our Social</b>
            <div>
                <a href=""><i></i></a>
                <a href=""><i></i></a>
                <a href=""><i></i></a>
            </div>
        </div>
        <div>
            <b>Our Numbers</b>
            <a href="tel:<?php echo get_field('phone_number_1', $front_page_id) ?>"><?php echo get_field('phone_number_1', $front_page_id) ?></a>
            <a href="tel:<?php echo get_field('phone_number_2', $front_page_id) ?>"><?php echo get_field('phone_number_2', $front_page_id) ?></a>
        </div>
        <div>
            <b>Our Address</b>
            <span>
                <?php echo get_field('our_address', $front_page_id) ?>
            </span>
            <a href="<?php echo esc_url(get_field('map_url', $front_page_id)) ?>" target="_blank" data-mouse="open">
                <?php echo __(get_field('google_map', $front_page_id)); ?>
            </a>
        </div>
    </div>
</footer>

<div class="scrpits">
    <?php wp_footer() ?>
</div>
</body>

</html>