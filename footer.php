<?php
$front_page_id = get_option('page_on_front')
?>

<footer>
	<div class="wrapper">
		<div>
			<div>
				<b>Us</b>
				<ul>
					<?php wp_nav_menu(['menu' => 'footer-us']) ?>
				</ul>
			</div>

			<div>
				<b>What We Do?</b>
				<ul>
					<?php wp_nav_menu(['menu' => 'footer-what-we-do']) ?>

				</ul>
			</div>

			<div>
				<b>Know More</b>
				<ul>
					<?php wp_nav_menu(['menu' => 'footer-know-more']) ?>
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

<div class="scrpits">
	<?php wp_footer() ?>
</div>
</body>

</html>