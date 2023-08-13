<?php
$front_page_id = get_option('page_on_front');
?>

<div class="home-footer">
	<?php get_template_part('templates/footer', 'social'); ?>
</div>

<div id="call-action-footer">
	<a href="tel:<?= get_field('phone_number_1', $front_page_id) ?>" class="btn bg_secondary1">
		<i class="icon-phone"></i>
	</a>
</div>

<div class="scrpits">
	<?php wp_footer() ?>
</div>

</body>

</html>