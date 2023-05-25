<?php get_header() ?>

<main class="product-archive">
	<div class="side-bar">
		<div class="box">
			<div class="title">
				<span>Floor Types</span>
				<i class="icon-arrowUP"></i>
			</div>
			<div class="">
				<div class="checkbox-container">
					<div class="checkbox-wrapper">
						<label for="solid-wood">Solid Wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
					<div class="checkbox-wrapper">
						<label for="engineered-wood">engineered wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="title">
				<span>Floor Types</span>
				<i class="icon-arrowUP"></i>
			</div>
			<div class="">
				<div class="checkbox-container">
					<div class="checkbox-wrapper">
						<label for="solid-wood">Solid Wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
					<div class="checkbox-wrapper">
						<label for="engineered-wood">engineered wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="title">
				<span>Floor Types</span>
				<i class="icon-arrowUP"></i>
			</div>
			<div class="">
				<div class="checkbox-container">
					<div class="checkbox-wrapper">
						<label for="solid-wood">Solid Wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
					<div class="checkbox-wrapper">
						<label for="engineered-wood">engineered wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="title">
				<span>Floor Types</span>
				<i class="icon-arrowUP"></i>
			</div>
			<div class="">
				<div class="checkbox-container">
					<div class="checkbox-wrapper">
						<label for="solid-wood">Solid Wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
					<div class="checkbox-wrapper">
						<label for="engineered-wood">engineered wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="title">
				<span>Floor Types</span>
				<i class="icon-arrowUP"></i>
			</div>
			<div class="">
				<div class="checkbox-container">
					<div class="checkbox-wrapper">
						<label for="solid-wood">Solid Wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
					<div class="checkbox-wrapper">
						<label for="engineered-wood">engineered wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="title">
				<span>Floor Types</span>
				<i class="icon-arrowUP"></i>
			</div>
			<div class="">
				<div class="checkbox-container">
					<div class="checkbox-wrapper">
						<label for="solid-wood">Solid Wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
					<div class="checkbox-wrapper">
						<label for="engineered-wood">engineered wood</label>
						<div class="inner-checkbox">
							<input type="checkbox" name="solid-wood" id="solid-wood">
							<span class="checkmark"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="products">
		<div class="filter-chips">
			<div class="filter-chip">
				<span>Solid Wood</span>
				<i class="icon-Close"></i>
			</div>
			<div class="filter-chip">
				<span>Natural Wood</span>
				<i class="icon-Close"></i>
			</div>
		</div>
		<div>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( '/templates/loop/product' );
				}
			} ?>
		</div>

		<?php

		global $wp_query;
		echo "<div class='page-nav-container'>" . paginate_links(
			array(
				'total' => $wp_query->max_num_pages,
				'prev_text' => __( '<i class="arrowPrev"><</i>' ),
				'next_text' => __( '<i class="arrowNext">></i>' )
			)
		) . "</div>";
		?>
	</div>
</main>

<?php get_footer() ?>