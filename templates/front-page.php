<?php /* Template Name: Front-Page */ ?>

<?php get_header('home') ?>

<div id="homeSwiper" class="swiper">
	<div class="swiper-wrapper">
		<?php
		get_template_part("templates/home/home-slide", "1");
		get_template_part("templates/home/home-slide", "3");
		get_template_part("templates/home/home-slide", "2");
		get_template_part("templates/home/home-slide", "8");
		get_template_part("templates/home/home-slide", "4");
		get_template_part("templates/home/home-slide", "5");
		get_template_part("templates/home/home-slide", "6");
		get_template_part("templates/home/home-slide", "7");
		?>
	</div>
</div>

<?php get_footer('home') ?>