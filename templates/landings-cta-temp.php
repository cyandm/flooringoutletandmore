<?php

$post_id = get_the_ID();
$cta_post = get_field( "pages_cta_posts", $post_id );

if ( ! isset( $cta_post ) )
	return;

$cta_url_field = get_field( "cta_post_url", $cta_post );
$cta_img_field = get_field( "cta_post_image", $cta_post );
$cta_img_field_mobile = get_field( "cta_post_image_mobile", $cta_post );

if ( ! isset( $cta_img_field ) || ! isset( $cta_img_field_mobile ) )
	return;
?>

<section class="cta-post">
	<a href="<?= $cta_url_field ?>">

		<img class="only-desktop"
				 src="<?= $cta_img_field ?>"
				 alt="<?= get_the_title( $cta_post ) ?>">
		<img class="only-mobile"
				 src="<?= $cta_img_field_mobile ?>"
				 alt="<?= get_the_title( $cta_post ) ?>">
	</a>
</section>