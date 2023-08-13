<?php

if (!class_exists('cyn_acf')) {
	class cyn_acf
	{
		function __construct()
		{
		}

		public static function cyn_initialize_acf()
		{
			add_filter('acf/settings/url', function ($url) {
				return MY_ACF_URL;
			});
			add_filter('acf/settings/show_updates', '__return_false', 100);
			add_filter('acf/settings/show_admin', '__return_false');
		}

		public function cyn_acf_actions()
		{
			add_action('acf/init', [$this, 'cyn_front_page']);
			add_action('acf/init', [$this, 'cyn_about_page']);
			add_action('acf/init', [$this, 'cyn_special_offer_page']);
			add_action('acf/init', [$this, 'cyn_product_post_type']);
			add_action('acf/init', [$this, 'cyn_project_post_type']);
			add_action('acf/init', [$this, 'cyn_accessory_post_type']);
			add_action('acf/init', [$this, 'cyn_product_cat']);
			add_action('acf/init', [$this, 'cyn_product_brand_tax']);
		}


		public function cyn_front_page()
		{
			acf_add_local_field_group(
				array(
					'key' => 'group_646340f2d2172',
					'title' => 'Front Page',
					'fields' => array(
						/* Sliders */
						array(
							'key' => 'field_646340f33ff28',
							'label' => 'Sliders',
							'name' => '',
							'aria-label' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 1,
						),
						array(
							'key' => 'field_64634f33f0f82',
							'label' => '',
							'name' => 'sliders',
							'aria-label' => '',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_646344778d5c7',
									'label' => 'Slider 1',
									'name' => 'slider_1',
									'aria-label' => '',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'layout' => 'row',
									'sub_fields' => array(
										array(
											'key' => 'field_646344898d5c8',
											'label' => 'Background Image',
											'name' => 'background_image',
											'aria-label' => '',
											'type' => 'image',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'return_format' => 'url',
											'library' => '',
											'min_width' => '',
											'min_height' => '',
											'min_size' => '',
											'max_width' => '',
											'max_height' => '',
											'max_size' => '',
											'mime_types' => '',
											'preview_size' => 'medium',
										),
										array(
											'key' => 'field_6463449b8d5c9',
											'label' => 'Title',
											'name' => 'title',
											'aria-label' => '',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'maxlength' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
										),
										array(
											'key' => 'field_646344a18d5ca',
											'label' => 'Sub Title',
											'name' => 'sub_title',
											'aria-label' => '',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'maxlength' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
										),
									),
								),
								array(
									'key' => 'field_646344b78d5cb',
									'label' => 'Slider 2',
									'name' => 'slider_2',
									'aria-label' => '',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'layout' => 'row',
									'sub_fields' => array(
										array(
											'key' => 'field_646344b78d5cc',
											'label' => 'Background Image',
											'name' => 'background_image',
											'aria-label' => '',
											'type' => 'image',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'return_format' => 'url',
											'library' => '',
											'min_width' => '',
											'min_height' => '',
											'min_size' => '',
											'max_width' => '',
											'max_height' => '',
											'max_size' => '',
											'mime_types' => '',
											'preview_size' => 'medium',
										),
										array(
											'key' => 'field_646344b78d5cd',
											'label' => 'Title',
											'name' => 'title',
											'aria-label' => '',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'maxlength' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
										),
										array(
											'key' => 'field_646344b78d5ce',
											'label' => 'Sub Title',
											'name' => 'sub_title',
											'aria-label' => '',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'maxlength' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
										),
									),
								),
								array(
									'key' => 'field_646344b98d5cf',
									'label' => 'Slider 3',
									'name' => 'slider_3',
									'aria-label' => '',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'layout' => 'row',
									'sub_fields' => array(
										array(
											'key' => 'field_646344b98d5d0',
											'label' => 'Background Image',
											'name' => 'background_image',
											'aria-label' => '',
											'type' => 'image',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'return_format' => 'url',
											'library' => '',
											'min_width' => '',
											'min_height' => '',
											'min_size' => '',
											'max_width' => '',
											'max_height' => '',
											'max_size' => '',
											'mime_types' => '',
											'preview_size' => 'medium',
										),
										array(
											'key' => 'field_646344b98d5d1',
											'label' => 'Title',
											'name' => 'title',
											'aria-label' => '',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'maxlength' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
										),
										array(
											'key' => 'field_646344b98d5d2',
											'label' => 'Sub Title',
											'name' => 'sub_title',
											'aria-label' => '',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'maxlength' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
										),
									),
								),
								/*
								array(
									'key' => 'field_646344bb8d5d3',
									'label' => 'Slider 4',
									'name' => 'slider_4',
									'aria-label' => '',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'layout' => 'row',
									'sub_fields' => array(
										array(
											'key' => 'field_646344bb8d5d4',
											'label' => 'Background Image',
											'name' => 'background_image',
											'aria-label' => '',
											'type' => 'image',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'return_format' => 'url',
											'library' => 'all',
											'min_width' => '',
											'min_height' => '',
											'min_size' => '',
											'max_width' => '',
											'max_height' => '',
											'max_size' => '',
											'mime_types' => '',
											'preview_size' => 'medium',
										),
										array(
											'key' => 'field_646344bb8d5d5',
											'label' => 'Title',
											'name' => 'title',
											'aria-label' => '',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'maxlength' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
										),
										array(
											'key' => 'field_646344bb8d5d6',
											'label' => 'Sub Title',
											'name' => 'sub_title',
											'aria-label' => '',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'maxlength' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
										),
									),
								),
								*/
							),
						),
						/* services */
						array(
							'key' => 'key_services',
							'label' => 'Services',
							'name' => '',
							'aria-label' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'services_consultation_key',
							'name' => 'services_consultation',
							'label' => 'Consultation',
							'instructions' => '',
							'type' => 'textarea',
						),
						array(
							'key' => 'services_measurement_key',
							'name' => 'services_measurement',
							'label' => 'Measurement',
							'instructions' => '',
							'type' => 'textarea',
						),
						array(
							'key' => 'services_delivery_key',
							'name' => 'services_delivery',
							'label' => 'Delivery',
							'instructions' => '',
							'type' => 'textarea',
						),
						array(
							'key' => 'services_installation_key',
							'name' => 'services_installation',
							'label' => 'Installation',
							'instructions' => '',
							'type' => 'textarea',
						),
						array(
							'key' => 'services_removal_key',
							'name' => 'services_removal',
							'label' => 'Removal',
							'instructions' => '',
							'type' => 'textarea',
						),
						array(
							'key' => 'services_making_you_happy_key',
							'name' => 'services_making_you_happy',
							'label' => 'Making You Happy',
							'instructions' => '',
							'type' => 'textarea',
						),
						/* introduction */
						array(
							'key' => 'key_introduction',
							'label' => 'Introduction',
							'name' => '',
							'aria-label' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'field_647f21d9984235',
							'name' => 'front_page_product_category',
							'instructions' => 'Select product category to show in home page.',
							'type' => 'taxonomy',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'taxonomy' => 'product-cat',
							'add_term' => 0,
							'save_terms' => 0,
							'load_terms' => 0,
							'return_format' => 'object',
							'field_type' => 'multi_select',
							'allow_null' => 0,
							'multiple' => 0,
						),
						/* Promotion */
						array(
							'key' => 'key_promotion',
							'label' => 'Promotion',
							'name' => '',
							'aria-label' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'key_promotion_36469796413',
							'label' => '',
							'instructions' => 'Select products to show in home page.',
							'name' => 'front_page_promotion_product_post',
							'type' => 'post_object',
							'post_type' => 'product',
							'post_status' => 'publish',
							'taxonomy' => '',
							'allow_null' => 0,
							'multiple' => 1,
							'return_format' => 'id',
						),
						/* Blogs */
						array(
							'key' => 'key_blogs',
							'label' => 'Blogs',
							'name' => '',
							'aria-label' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'blogs_key',
							'label' => '',
							'instructions' => 'Select blogs to show in home page.',
							'name' => 'blogs',
							'type' => 'post_object',
							'post_type' => 'post',
							'post_status' => 'publish',
							'taxonomy' => '',
							'allow_null' => 0,
							'multiple' => 1,
							'return_format' => 'id',
						),
						/* About Us */
						array(
							'key' => 'key_about',
							'label' => 'About Us',
							'name' => '',
							'aria-label' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'phone_number_1_key',
							'label' => 'Phone Number 1',
							'instructions' => '',
							'name' => 'phone_number_1',
							'type' => 'text',
							'wrapper' => [
								'width' => '50'
							]
						),
						array(
							'key' => 'phone_number_2_key',
							'label' => 'Phone Number 2',
							'instructions' => '',
							'name' => 'phone_number_2',
							'type' => 'text',
							'wrapper' => [
								'width' => '50'
							]
						),
						array(
							'key' => 'address_key',
							'label' => 'Address',
							'instructions' => '',
							'name' => 'our_address',
							'type' => 'textarea',
						),
						array(
							'key' => 'map_url_key',
							'label' => 'Map URL',
							'instructions' => 'This link works when user click on map.',
							'name' => 'map_url',
							'type' => 'url',
						),
						array(
							'key' => 'google_map_key',
							'label' => 'Google Map iframe Tag',
							'instructions' => 'Paste iframe that you given from <a href="https://www.google.com/maps">Google Map</a> <br> You can use this <a href="https://developers.google.com/maps/documentation/embed/quickstart#generating_an_iframe"> Tool </a>',
							'name' => 'google_map',
							'type' => 'textarea',
						),
						/* Head Tag */
						array(
							'key' => 'key_head_tags',
							'label' => 'Head Tags',
							'name' => '',
							'aria-label' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'head_tags_key',
							'label' => 'Google Tag',
							'name' => 'head_tags',
							'instructions' => '',
							'type' => 'textarea',
						),
						array(
							'key' => 'top_body_key',
							'label' => 'Body script',
							'name' => 'top_body',
							'instructions' => '',
							'type' => 'textarea',
						),
					),
					'location' => array(
						array(
							array(
								'param' => 'page_template',
								'operator' => '==',
								'value' => 'templates/front-page.php',
							),
						),
					),
					'menu_order' => 0,
					'position' => 'normal',
					'style' => 'default',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => array(
						0 => 'permalink',
						1 => 'the_content',
						2 => 'excerpt',
						3 => 'discussion',
						4 => 'comments',
						5 => 'revisions',
						6 => 'slug',
						7 => 'author',
						8 => 'format',
						9 => 'page_attributes',
						10 => 'featured_image',
						11 => 'categories',
						12 => 'tags',
						13 => 'send-trackbacks',
					),
					'active' => true,
					'description' => '',
					'show_in_rest' => 0,
				)
			);
		}

		public function cyn_about_page()
		{
			acf_add_local_field_group(
				[
					'key' => 'about_page_key',
					'title' => 'Page Content',
					'fields' => [
						[
							'label' => 'Hero Image',
							'name' => 'hero_image',
							'key' => 'hero_image_key',
							'type' => 'image',
							'return_format' => 'object',
							'preview_size' => 'thumbnail',
						],
						[
							'label' => 'Content One',
							'name' => 'content_one',
							'key' => 'content_one_key',
							'type' => 'wysiwyg',
						],
						[
							'label' => 'Content Two',
							'name' => 'content_two',
							'key' => 'content_two_key',
							'type' => 'wysiwyg',
							'wrapper' => [
								'width' => 50
							]

						],
						[
							'label' => 'Main Image',
							'name' => 'main_image',
							'key' => 'main_image_key',
							'type' => 'image',
							'return_format' => 'object',
							'preview_size' => 'thumbnail',
							'wrapper' => [
								'width' => '50'
							]
						],
						[
							'label' => 'Content Three',
							'name' => 'content_three',
							'key' => 'content_three_key',
							'type' => 'wysiwyg',
						],
						array(
							'key' => 'video_iframe_key',
							'label' => 'Video',
							'name' => 'video_iframe',
							'instructions' => '',
							'type' => 'textarea',
						),
					],
					'location' => [
						[
							[
								'param' => 'page_template',
								'operator' => '==',
								'value' => 'templates/about.php'
							]
						]
					],
					'hide_on_screen' => [
						0 => 'permalink',
						1 => 'the_content',
						2 => 'excerpt',
						3 => 'discussion',
						4 => 'comments',
						5 => 'revisions',
						6 => 'slug',
						7 => 'author',
						8 => 'format',
						9 => 'page_attributes',
						10 => 'featured_image',
						11 => 'categories',
						12 => 'tags',
						13 => 'send-trackbacks',
					],
				]
			);
		}

		public function cyn_product_brand_tax()
		{
			acf_add_local_field_group([
				'key' => 'brand_p_type_key',
				'title' => 'Brands',
				'fields' => [
					[
						'key' => 'brand_logo_key',
						'label' => 'Brand Logo',
						'name' => 'brand_logo',
						'type' => 'image',
						'return_format' => 'url'


					],
					[
						'key' => 'brand_sample_key',
						'label' => 'Brand Sample',
						'name' => 'brand_sample',
						'type' => 'image',
						'return_format' => 'url'
					]
				],
				'location' => [
					[
						[
							'param' => 'taxonomy',
							'operator' => '==',
							'value' => 'brands',
						],
					],
				],
				'hide_on_screen' => array(
					0 => 'excerpt',
				),
			]);
		}

		public function cyn_product_post_type()
		{
			$productGalleryGroup = array(
				[
					'key' => 'gallery_img_key_0',
					'label' => 'Gallery Cover Image',
					'name' => 'gallery_cover_img',
					'instructions' => 'Shown in home page layout',
					'type' => 'image',
					'return_format' => 'url',
					'wrapper' => [
						'width' => '100',
					],
				],
			);

			for ($i = 0; $i < 12; $i++) {
				$j = $i;
				$j++;
				$productGalleryGroup[] = [
					'key' => 'gallery_img_key_' . $j,
					'label' => 'Gallery Image ' . $j,
					'name' => 'gallery_img_' . $j,
					'type' => 'image',
					'return_format' => 'url',
					'wrapper' => [
						'width' => '50',
					],
				];
			}

			acf_add_local_field_group([
				'key' => 'product_post_type_key',
				'title' => 'Product',
				'fields' => [
					[
						'key' => 'product_sid_key',
						'label' => 'Product SID',
						'name' => 'product_sid',
						'type' => 'text',
						'wrapper' => [
							'width' => '25'
						]

					],
					[
						'key' => 'product_code_key',
						'label' => 'Product Code',
						'name' => 'product_code',
						'type' => 'text',
						'wrapper' => [
							'width' => '25'
						]

					],
					[
						'key' => 'product_color_code_key',
						'label' => 'Product Color Code',
						'name' => 'product_color_code',
						'type' => 'text',
						'wrapper' => [
							'width' => '25'
						]
					],
					[
						'key' => 'product_finish_key',
						'label' => 'Product Finish',
						'name' => 'product_finish',
						'type' => 'text',
						'wrapper' => [
							'width' => '25'
						]
					],
					[
						'key' => 'product_installation_key',
						'label' => 'Product Installation',
						'name' => 'product_installation',
						'type' => 'text',
						'wrapper' => [
							'width' => '25'
						]
					],
					[
						'key' => 'product_sqft_box_key',
						'label' => 'Product Sqft/Box',
						'name' => 'product_sqft_box',
						'type' => 'text',
						'wrapper' => [
							'width' => '25'
						]
					],
					[
						'key' => 'product_sqft_pallet_key',
						'label' => 'Product Sqft/Pallet',
						'name' => 'product_sqft_pallet',
						'type' => 'text',
						'wrapper' => [
							'width' => '25'
						]
					],
					[
						'key' => 'product_box_pallet_key',
						'label' => 'Product Box/Pallet',
						'name' => 'product_box_pallet',
						'type' => 'text',
						'wrapper' => [
							'width' => '25'
						]
					],

					[
						'key' => '',
						'label' => '',
						'name' => '',
						'type' => '',
						'wrapper' => [
							'width' => '100'
						]
					],

					[
						'key' => 'product_desc_key',
						'label' => 'Product Description',
						'name' => 'product_desc',
						'type' => 'wysiwyg',
						'wrapper' => [
							'width' => '50'
						]
					],
					[
						'key' => 'product_technical_key',
						'label' => 'Product Technical',
						'name' => 'product_tech',
						'type' => 'wysiwyg',
						'wrapper' => [
							'width' => '50'
						]
					],
					[
						'key' => 'product_price_key',
						'label' => 'Product Price',
						'name' => 'product_price',
						'instructions' => 'ONLY FOR HOME-PAGE LAYOUT ',
						'type' => 'number',
						'wrapper' => [
							'width' => '100'
						]
					],
					[
						'key' => 'slider_accordion_key',
						'label' => 'Gallery',
						'name' => '',
						'type' => 'accordion',
						'endpoint' => 0
					],
					[
						'key' => 'product_gallery_group_key',
						'label' => 'Product Gallery',
						'name' => 'product_gallery_group',
						'type' => 'group',
						'layout' => 'block',
						'sub_fields' => $productGalleryGroup,
					],
					[
						'key' => 'slider_accordion_close_key',
						'label' => 'Gallery',
						'name' => '',
						'type' => 'accordion',
						'endpoint' => 1
					],
					[
						'key' => 'related_group_key',
						'label' => 'Related',
						'name' => 'related_group',
						'type' => 'group',
						'sub_fields' => [
							[
								'key' => 'related_products_key',
								'label' => 'Related Products',
								'name' => 'related_products',
								'type' => 'post_object',
								'return_format' => 'id',
								'post_type' => [
									0 => 'product',
								],
								'post_status' => [
									0 => 'publish'
								],
								'multiple' => 1,
								'ui' => 1,
								'wrapper' => [
									'width' => '50'
								]
							],
							[
								'key' => 'related_articles_key',
								'label' => 'Related Articles',
								'name' => 'related_articles',
								'type' => 'post_object',
								'return_format' => 'id',
								'post_type' => [
									0 => 'post',
								],
								'post_status' => [
									0 => 'publish'
								],
								'multiple' => 1,
								'ui' => 1,
								'wrapper' => [
									'width' => '50'
								]
							]
						]
					],

				],
				'location' => [
					[
						[
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'product'
						]
					],
				]
			]);
		}

		public function cyn_project_post_type()
		{
			acf_add_local_field_group([
				'key' => 'project_settings_key',
				'title' => 'Project Settings',
				'location' => [
					[
						[
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'project'
						]
					]
				],
				'fields' => [
					[
						'key' => 'project_gallery_key',
						'name' => 'project_gallery',
						'label' => 'Project Gallery',
						'type' => 'group',
						'sub_fields' => [
							[
								'key' => 'image_1_key',
								'name' => 'image_1',
								'label' => 'Image 1',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_2_key',
								'name' => 'image_2',
								'label' => 'Image 2',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_3_key',
								'name' => 'image_3',
								'label' => 'Image 3',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_4_key',
								'name' => 'image_4',
								'label' => 'Image 4',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_5_key',
								'name' => 'image_5',
								'label' => 'Image 5',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_6_key',
								'name' => 'image_6',
								'label' => 'Image 6',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_7_key',
								'name' => 'image_7',
								'label' => 'Image 7',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_8_key',
								'name' => 'image_8',
								'label' => 'Image 8',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_9_key',
								'name' => 'image_9',
								'label' => 'Image 9',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_10_key',
								'name' => 'image_10',
								'label' => 'Image 10',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_11_key',
								'name' => 'image_11',
								'label' => 'Image 11',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],
							[
								'key' => 'image_12_key',
								'name' => 'image_12',
								'label' => 'Image 12',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '25'
								],
								'preview_size' => 'thumbnail'
							],

						]
					]
				]
			]);
		}

		public function cyn_product_cat()
		{
			acf_add_local_field_group([
				'key' => 'cat_p_type_key',
				'title' => '',
				'fields' => [
					[
						'key' => 'p_cat_details_accordion',
						'label' => 'Details',
						'name' => '',
						'type' => 'accordion',
						'endpoint' => 0
					],
					[
						'key' => 'p_cat_img_key',
						'label' => 'Category Image',
						'name' => 'p_cat_img_key',
						'type' => 'image',
						'return_format' => 'url',
						'wrapper' => [
							'width' => '100'
						]
					],
					[
						'key' => 'p_cat_main_gallery_group_key',
						'label' => 'Main Page Gallery',
						'name' => 'p_cat_main_gallery_group',
						'type' => 'group',
						'layout' => 'block',
						'sub_fields' => [
							[
								'key' => 'p_cat_gallery_img_1_key',
								'label' => 'Gallery Image 1',
								'name' => 'p_cat_gallery_img_1',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '100'
								]
							],
							[
								'key' => 'p_cat_gallery_img_2_key',
								'label' => 'Gallery Image 2',
								'name' => 'p_cat_gallery_img_2',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '50'
								]
							],
							[
								'key' => 'p_cat_gallery_img_3_key',
								'label' => 'Gallery Image 3',
								'name' => 'p_cat_gallery_img_3',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '50'
								]
							]
						],
					],
					[
						'key' => 'p_cat_main_top_section_group_key',
						'label' => 'Main Page Top Sections',
						'name' => 'p_cat_main_top_section_group',
						'type' => 'group',
						'layout' => 'block',
						'sub_fields' => [
							[
								'key' => 'p_cat_top_section_editor_key',
								'label' => 'Product Top Description',
								'name' => 'p_cat_top_section_editor',
								'type' => 'wysiwyg',
								'wrapper' => [
									'width' => '100'
								]
							],
							[
								'key' => 'p_cat_top_section_img_key',
								'label' => 'Top Section Image',
								'name' => 'p_cat_top_section_img',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '100'
								]
							],
						],
					],
					[
						'key' => 'p_cat_main_second_section_group_key',
						'label' => 'Main Page Second Sections',
						'name' => 'p_cat_main_second_section_group',
						'type' => 'group',
						'layout' => 'block',
						'sub_fields' => [
							[
								'key' => 'p_cat_second_section_img_key',
								'label' => 'Second Section Image',
								'name' => 'p_cat_second_section_img',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [
									'width' => '100'
								]
							],
							[
								'key' => 'p_cat_second_section_editor_key',
								'label' => 'Product Section Description',
								'name' => 'p_cat_second_section_editor',
								'type' => 'wysiwyg',
								'wrapper' => [
									'width' => '100'
								]
							],
						],
					]
				],
				'location' => [
					[
						[
							'param' => 'taxonomy',
							'operator' => '==',
							'value' => 'product-cat',
						],
					],
				],
				'hide_on_screen' => array(
					0 => 'excerpt',
				),
			]);
		}

		public function cyn_accessory_post_type()
		{
			$accessoryGalleryGroup = array();

			for ($i = 0; $i < 12; $i++) {
				$j = $i;
				$j++;
				$accessoryGalleryGroup[] = [
					'key' => 'gallery_img_key_' . $j,
					'label' => 'Gallery Image ' . $j,
					'name' => 'gallery_img_' . $j,
					'type' => 'image',
					'return_format' => 'url',
					'wrapper' => [
						'width' => '50',
					],
				];
			}

			acf_add_local_field_group([
				'key' => 'accessory_settings_key',
				'title' => 'Accessory Settings',
				'location' => [
					[
						[
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'accessory'
						]
					]
				],
				'fields' => [
					[
						'key' => 'accessory_desc_key',
						'label' => 'Accessory Description',
						'name' => 'accessory_desc',
						'type' => 'wysiwyg',
						'wrapper' => [
							'width' => '100'
						]
					],
					[
						'key' => 'accessory_gallery_group_key',
						'label' => 'Accessory Gallery',
						'name' => 'accessory_gallery_group',
						'type' => 'group',
						'layout' => 'block',
						'sub_fields' => $accessoryGalleryGroup,
					],
				]
			]);
		}

		public function cyn_special_offer_page()
		{
			acf_add_local_field_group(array(
				'key' => "special_offer_group_key",
				'title' => 'Special Offer',
				'fields' => array(
					array(
						'key' => 'special_offer_posts_key',
						'label' => 'Special Offer',
						'name' => 'special_offer_posts',
						'type' => 'post_object',
						'post_type' => 'product',
						'post_status' => 'publish',
						'taxonomy' => '',
						'allow_null' => 0,
						'multiple' => 1,
						'return_format' => 'id',
					),
					array(
						'key' => 'in_stok_posts_key',
						'label' => 'In Stock',
						'name' => 'in_stok_posts',
						'type' => 'post_object',
						'post_type' => 'product',
						'post_status' => 'publish',
						'taxonomy' => '',
						'allow_null' => 0,
						'multiple' => 1,
						'return_format' => 'id',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'templates/special-offer.php',
						),
					),
				),
			));
		}
	}
}
