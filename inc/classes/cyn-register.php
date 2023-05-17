<?php

if (!class_exists('cyn_register')){
    class cyn_register {
        function __construct (){

            add_action( 'init', [$this , 'cyn_register_brands']);

        }

        public function cyn_register_brands(){
            $labels = array(
                'name'                  => _x( 'Brands', 'Post type general name', 'Brand' ),
                'singular_name'         => _x( 'Brand', 'Post type singular name', 'Brand' ),
                'menu_name'             => _x( 'Brands', 'Admin Menu text', 'Brand' ),
                'name_admin_bar'        => _x( 'Brand', 'Add New on Toolbar', 'Brand' ),
                'add_new'               => __( 'Add New', 'Brand' ),
                'add_new_item'          => __( 'Add New Brand', 'Brand' ),
                'new_item'              => __( 'New Brand', 'Brand' ),
                'edit_item'             => __( 'Edit Brand', 'Brand' ),
                'view_item'             => __( 'View Brand', 'Brand' ),
                'all_items'             => __( 'All Brands', 'Brand' ),
                'search_items'          => __( 'Search Brands', 'Brand' ),
                'parent_item_colon'     => __( 'Parent Brands:', 'Brand' ),
                'not_found'             => __( 'No Brands found.', 'Brand' ),
                'not_found_in_trash'    => __( 'No Brands found in Trash.', 'Brand' ),
                'featured_image'        => _x( 'Brand Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Brand' ),
                'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Brand' ),
                'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Brand' ),
                'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Brand' ),
                'archives'              => _x( 'Brand archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Brand' ),
                'insert_into_item'      => _x( 'Insert into Brand', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Brand' ),
                'uploaded_to_this_item' => _x( 'Uploaded to this Brand', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Brand' ),
                'filter_items_list'     => _x( 'Filter Brands list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Brand' ),
                'items_list_navigation' => _x( 'Brands list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Brand' ),
                'items_list'            => _x( 'Brands list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Brand' ),
            );     
            $args = array(
                'labels'             => $labels,
                'description'        => 'brand custom post type.',
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'brand' ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => 20,
                'supports'           => array( 'title' ),
                'taxonomies'         => [],
                'show_in_rest'       => false
            );

            register_post_type ('Brands' , $args);
        }
    }
}