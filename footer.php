<?php
$front_page_id = get_option('page_on_front');
?>

<footer>
	<div class="wrapper">
		<div>
			<div>
				<b>Us</b>
				<ul>
					<?php wp_nav_menu(['theme_location' => 'footer-us']) ?>
				</ul>
			</div>

			<div>
				<b>What We Do?</b>
				<ul>
					<?php wp_nav_menu(['theme_location' => 'footer-what-we-do']) ?>
				</ul>
			</div>

			<div>
				<b>Know More</b>
				<ul>
					<?php wp_nav_menu(['theme_location' => 'footer-know-more']) ?>
				</ul>
			</div>
		</div>
		<div>
			<div class="w-full">
				<b>Our Social</b>
				<div class="social">
					<a href="https://www.instagram.com/flooringoutletandmore/">Instagram</a>
					<a href="https://www.facebook.com/Flooring-Outlet-More-113971513839485/">Facebook</a>
					<a href="https://www.youtube.com/@flooringoutletmoreUS">You Tube</a>
					<a href="https://www.pinterest.com/flooringoutletandmorentd/flooring-outlet-and-more-duchateau/">Pintrest</a>
					<a href="https://www.yelp.com/biz/flooring-outlet-and-more-san-jose-2">Yelp</a>
				</div>
			</div>
			<div>
				<b>Our Numbers</b>
				<a href="tel:<?= get_field('phone_number_1', $front_page_id) ?>"><?= get_field('phone_number_1', $front_page_id) ?></a>
				<a href="tel:<?= get_field('phone_number_2', $front_page_id) ?>"><?= get_field('phone_number_2', $front_page_id) ?></a>
			</div>
			<div>
				<b>Our Address</b>
				<span>
					<?= get_field('our_address', $front_page_id) ?>
				</span>
				<a href="<?= esc_url(get_field('map_url', $front_page_id)) ?>" target="_blank" data-mouse="open">
					<?= __(get_field('google_map', $front_page_id)); ?>
				</a>
			</div>
		</div>
	</div>
</footer>

<div id="call-action-footer">
	<a href="tel:<?= get_field('phone_number_1', $front_page_id) ?>" class="btn bg_secondary1">
		<i class="icon-phone"></i>
	</a>
</div>

<div class="scripts">
	<script async id="roomvoAssistant" type="text/javascript" data-locale="en-us" data-position="bottom-right" src="https://www.roomvo.com/static/scripts/b2b/common/assistant.js"></script>
	<?php wp_footer() ?>
</div>

</body>

</html>