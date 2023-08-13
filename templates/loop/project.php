<?php
$postId = get_the_ID();
$gallery = get_field("project_gallery", $postId);
?>
<article id="pj-<?php echo get_the_ID() ?>" class="project archive-project-article">
	<div class="article-content">
		<div class="image-placeholder">
			<?php the_post_thumbnail('full') ?>
		</div>

		<h2 class="h3">
			<?= get_the_title() ?>
		</h2>

		<p>
			<?= get_the_date() ?>
		</p>
	</div>

	<?php if (!empty($gallery)) : ?>
		<div class="image-sliders">
			<div class="image-sliders-content">
				<div class="closer">
					<i class="icon-close"></i>
				</div>

				<div class="swiper swiper-archive-project-article">
					<div class="swiper-wrapper">
						<?php foreach ($gallery as $img) : ?>
							<?php if (!empty($img)) : ?>
								<div class="swiper-slide">
									<div>
										<img src="<?php echo $img; ?>" alt="">
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>

					<div class="swiper-navigation">
						<div class="swiper-prev-btn"><i class="icon-arrow-left"></i></div>
						<div class="swiper-next-btn"><i class="icon-arrow-right"></i></div>
					</div>

					<div class="swiper-pagination"></div>
				</div>

				<div class="swiper swiper-archive-project-gallery">
					<div class="swiper-wrapper">
						<?php foreach ($gallery as $img) : ?>
							<?php if (!empty($img)) : ?>
								<div class="swiper-slide">
									<div>
										<img src="<?php echo $img; ?>" alt="">
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</article>