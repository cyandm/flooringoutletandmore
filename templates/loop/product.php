<?php


$title = get_the_title( $post );
$img_url = get_the_post_thumbnail_url( $post );
$url = get_permalink( $post );


?>
<a href="<?php echo $url ?>" class="product-loop" style="background-image: url('<?php echo $img_url ?>');">
	<button class="btn_no_icon bg_white">
		View
	</button>
	<span>
		<?php echo $title ?>
	</span>
</a>