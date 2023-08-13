<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
	<meta name="google-site-verification" content="BfWolzyunJ8F95xRi79dDJm_EECug3Mqlxsp4FFYUtI" />

	<?php
	if (function_exists('get_field')) {
		$headField = get_field('head_tags', get_option('page_on_front'));
		if (isset($headField)) {
			echo $headField;
		}
	}
	?>
</head>

<body>
	<?php
	if (function_exists('get_field')) {
		$headField = get_field('top_body', get_option('page_on_front'));
		if (isset($headField)) {
			echo $headField;
		}
	}
	?>

	<header class="whole-header">
		<div class="wrapper">
			<div>
				<?php the_custom_logo() ?>
			</div>
			<div>
				<?php wp_nav_menu(['menu' => 'header-menu']) ?>
				<i class="icon-menu mobile-menu" id="mobile-menu-opener"></i>
			</div>
			<div>
				<div>
					<form id="homeContactForm" action="/" method="get">
						<div class="form_control">
							<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search By Title" />
							<i class="icon-search"></i>
						</div>
					</form>
				</div>
				<!--
				<div>
					<a href="#" class="btn_icon_between bg_secondary1">
						login
						<i class="icon-Component-2-1"></i>
					</a>
				</div>
				-->
			</div>
		</div>
	</header>

	<div class="only_mobile" id="monile-menu-container">
		<div class="head">
			<?php
			if (function_exists('the_custom_logo')) {
				the_custom_logo();
			}
			?>

			<i class="icon-close" id="mobile-menu-closer"></i>
		</div>
		<div class="menu">
			<?php wp_nav_menu(array(
				'menu' => 'header-menu',
				'container_id' => 'monile-menu-container-content'
			)) ?>
		</div>

		<div class="social">
			<?php get_template_part('templates/footer', 'social'); ?>
		</div>
	</div>