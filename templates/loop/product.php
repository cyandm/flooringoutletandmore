<?php

global $product;

$title = get_the_title($product);
$img_url = get_the_post_thumbnail_url($product);
$url = get_permalink($product);


?>
<a href="<?php echo $url ?>" class="product-loop" style="background-image: url('<?php echo $img_url ?>');">
    <button class="btn_no_icon bg_white">
        View
    </button>
    <span>
        <?php echo $title ?>
    </span>
</a>