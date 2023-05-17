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
            //add_filter('acf/settings/show_admin', '__return_false');

        }

        public function cyn_acf_actions()
        {
            add_action('acf/init', [$this, 'cyn_front_page']);
            add_action('acf/init', [$this, 'cyn_brand_p_type']);
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
                        /* Brands */
                        array(
                            'key' => 'key_Brands',
                            'label' => 'Brands',
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

        public function cyn_brand_p_type()
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

                    ],
                    [
                        'key' => 'brand_sample_key',
                        'label' => 'Brand Sample',
                        'name' => 'brand_sample',
                        'type' => 'image',
                    ]
                ],
                'location' => [
                    [
                        [
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'brands',
                        ],
                    ],
                ],
            ]);
        }

    }
}