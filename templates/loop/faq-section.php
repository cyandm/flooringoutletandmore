<?php
if (!isset($args['postsId']))
  return;

$postsId = $args['postsId'];
?>

<section class="faq-section">
  <div class="titles">
    <h3><?= isset($args['title']) ? $args['title'] : 'Question And Answer' ?></h3>
  </div>

  <div class="faq-content">
    <div class="img">
      <img src="<?= get_template_directory_uri() . "/imgs/faq-main.png"; ?>">
    </div>

    <div class="context">
      <?php foreach ($postsId as $faq) : ?>
        <div class="faq-item close">
          <div class="item-content">
            <h4><?= get_the_title($faq) ?></h4>
            <p><?= get_the_content(null, false, $faq) ?></p>
          </div>

          <button class="btn bg_secondary1">+</button>
        </div>
        <hr>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<div class="clearfix"></div>
