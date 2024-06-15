<?php
$id = $args['id'] ?? get_the_ID();

$title = get_the_title( $id );
$img = get_the_post_thumbnail( $id, 'medium' );
$url = get_permalink( $id );


?>
<a href="<?php echo $url ?>"
   class="product-loop"">
   <div>
		<?php echo $img ?>	
   </div>
   <div>
	   <button class="
   btn_no_icon
   bg_white">
	View
	</button>
	<span>
		<?php echo $title ?>
	</span>
	</div>
</a>