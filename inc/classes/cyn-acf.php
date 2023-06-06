<?php

if ( ! class_exists( 'cyn_acf' ) ) {
	class cyn_acf {
		function __construct() {

		}

		public static function cyn_initialize_acf() {
			add_filter( 'acf/settings/url', function ($url) {
				return MY_ACF_URL;
			} );
			add_filter( 'acf/settings/show_updates', '__return_false', 100 );
			//add_filter('acf/settings/show_admin', '__return_false');

		}

		public function cyn_acf_actions() {
			add_action( 'acf/init', [ $this, 'cyn_front_page' ] );
			add_action( 'acf/init', [ $this, 'cyn_about_page' ] );
			add_action( 'acf/init', [ $this, 'cyn_product_brand_tax' ] );
			add_action( 'acf/init', [ $this, 'cyn_product_post_type' ] );
		}


		public function cyn_front_page() {
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
							),
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

		public function cyn_about_page() {
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
		public function cyn_product_brand_tax() {
			acf_add_local_field_group( [ 
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
			] );
		}
		public function cyn_product_post_type() {
			acf_add_local_field_group( [ 
				'key' => 'product_post_type_key',
				'title' => 'Product',
				'fields' => [ 
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
						'key' => 'product_sid_key',
						'label' => 'Product SID',
						'name' => 'product_sid',
						'type' => 'text',
						'wrapper' => [ 
							'width' => '25'
						]

					],
					[ 
						'key' => 'product_type_key',
						'label' => 'Product Type',
						'name' => 'product_type',
						'type' => 'select',
						'choices' => [ 
							'floor' => 'Floor',
							'mmd' => 'MMD',
							'mdf' => 'MDF'
						],
						'wrapper' => [ 
							'width' => '25'
						]
					],
					[ 
						'key' => 'product_color_key',
						'label' => 'Product Color',
						'name' => 'product_color',
						'type' => 'text',
						'wrapper' => [ 
							'width' => '25'
						]
					],
					[ 
						'key' => 'product_desc_key',
						'label' => 'Product Description',
						'name' => 'product_desc',
						'instructions' => 'Shown in home page layout',
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
						'sub_fields' => [ 
							[ 
								'key' => 'gallery_img_1_key',
								'label' => 'Gallery Image 1',
								'name' => 'gallery_img_1',
								'instructions' => 'Shown in home page layout',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_2_key',
								'label' => 'Gallery Image 2',
								'name' => 'gallery_img_2',
								'instructions' => 'Shown in home page layout',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_3_key',
								'label' => 'Gallery Image 3',
								'name' => 'gallery_img_3',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_4_key',
								'label' => 'Gallery Image 4',
								'name' => 'gallery_img_4',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_5_key',
								'label' => 'Gallery Image 5',
								'name' => 'gallery_img_5',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_6_key',
								'label' => 'Gallery Image 6',
								'name' => 'gallery_img_6',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_7_key',
								'label' => 'Gallery Image 7',
								'name' => 'gallery_img_7',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_8_key',
								'label' => 'Gallery Image 8',
								'name' => 'gallery_img_8',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_9_key',
								'label' => 'Gallery Image 9',
								'name' => 'gallery_img_9',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],
							]
							,
							[ 
								'key' => 'gallery_img_10_key',
								'label' => 'Gallery Image 10',
								'name' => 'gallery_img_10',
								'type' => 'image',
								'return_format' => 'url',
								'wrapper' => [ 
									'width' => '50',
								],

							]
						],
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
			] );
		}

	}
}