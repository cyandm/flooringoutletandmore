<?php
global $article;
$title = get_the_title($article);
$excerpt = get_the_excerpt($article);
$img_url = get_the_post_thumbnail_url($article);
$url = get_permalink($article);
?>

<article class="article-loop">
    <a data-mouse="explore" href="<?php echo $url ?>">
        <div>
            <img src="<?php echo $img_url ?>" alt="">
        </div>
        <h3>
            <? echo $title ?>
        </h3>
        <span>
            <? echo $excerpt ?>
        </span>
    </a>
</article>