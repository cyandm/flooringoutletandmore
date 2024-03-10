<?php

if (!class_exists('cyn_register')) {
	class cyn_register
	{
		function __construct($actions = true)
		{
			if ($actions == true) {
				add_action('init', [$this, 'cyn_register_products']);
				add_action('init', [$this, 'cyn_register_projects']);
				add_action('init', [$this, 'cyn_register_accessories']);
				add_action('init', [$this, 'cyn_register_contact_forms']);
				add_action('init', [$this, 'cyn_register_faq']);
				add_action('init', [$this, 'cyn_register_reviews']);

				add_action('init', [$this, 'cyn_register_product_cats']);
				add_action('init', [$this, 'cyn_register_product_filters']);
				add_action('init', [$this, 'cyn_register_product_brands']);

				add_action('pre_get_posts', [$this, 'cyn_archive_pre_get_posts']);
				add_action('admin_menu', [$this, 'cyn_disable_new_posts']);
			}
		}

		public function cyn_register_products()
		{
			$postType = "product";
			$GLOBALS["product-post-type"] = $postType;

			$labels = array(
				'name' => _x('Product', 'Post type general name', 'Product'),
				'singular_name' => _x('Product', 'Post type singular name', 'Product'),
				'menu_name' => _x('Product', 'Admin Menu text', 'Product'),
				'name_admin_bar' => _x('Product', 'Add New on Toolbar', 'Product'),
				'add_new' => __('Add New', 'Product'),
				'add_new_item' => __('Add New Product', 'Product'),
				'new_item' => __('New Product', 'Product'),
				'edit_item' => __('Edit Product', 'Product'),
				'view_item' => __('View Product', 'Product'),
				'all_items' => __('All Product', 'Product'),
				'search_items' => __('Search Product', 'Product'),
				'parent_item_colon' => __('Parent Product:', 'Product'),
				'not_found' => __('No Product found.', 'Product'),
				'not_found_in_trash' => __('No Product found in Trash.', 'Product'),
				'featured_image' => _x('Product Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Product'),
				'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Product'),
				'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Product'),
				'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Product'),
				'archives' => _x('Product archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Product'),
				'insert_into_item' => _x('Insert into Product', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Product'),
				'uploaded_to_this_item' => _x('Uploaded to this Product', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Product'),
				'filter_items_list' => _x('Filter Product list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Product'),
				'items_list_navigation' => _x('Product list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Product'),
				'items_list' => _x('Product list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Product'),
			);
			$args = array(
				'labels' => $labels,
				'description' => 'product custom post type.',
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'product'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => 20,
				'supports' => ['title', 'thumbnail', 'excerpt'],
				'taxonomies' => ['product-cat'],
				'show_in_rest' => false
			);

			return register_post_type($postType, $args);
		}

		public function cyn_register_product_cats()
		{
			$taxonomyName = "product-cat";
			$GLOBALS["product-cat-tax"] = $taxonomyName;
			$postTypes = array($GLOBALS["product-post-type"]);

			$labels = array(
				'name' => _x('Types', 'taxonomy general name', 'textdomain'),
				'singular_name' => _x('Type', 'taxonomy singular name', 'textdomain'),
				'search_items' => __('Search Types', 'textdomain'),
				'all_items' => __('All Types', 'textdomain'),
				'parent_item' => __('Parent Type', 'textdomain'),
				'parent_item_colon' => __('Parent Type:', 'textdomain'),
				'edit_item' => __('Edit Type', 'textdomain'),
				'update_item' => __('Update Type', 'textdomain'),
				'add_new_item' => __('Add New Type', 'textdomain'),
				'new_item_name' => __('New Type Name', 'textdomain'),
				'menu_name' => __('Type', 'textdomain'),
			);
			$args = array(
				'hierarchical' => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'product-cat'),
			);

			register_taxonomy($taxonomyName, $postTypes, $args);
		}

		public function cyn_register_product_filters()
		{
			$taxonomyName = "filters";
			$GLOBALS["filters-tax"] = $taxonomyName;
			$postTypes = array($GLOBALS["product-post-type"]);

			$labels = array(
				'name' => _x('Filters', 'taxonomy general name', 'textdomain'),
				'singular_name' => _x('Filter', 'taxonomy singular name', 'textdomain'),
				'search_items' => __('Search Filters', 'textdomain'),
				'all_items' => __('All Filters', 'textdomain'),
				'parent_item' => __('Parent Filter', 'textdomain'),
				'parent_item_colon' => __('Parent Filter:', 'textdomain'),
				'edit_item' => __('Edit Filter', 'textdomain'),
				'update_item' => __('Update Filter', 'textdomain'),
				'add_new_item' => __('Add New Filter', 'textdomain'),
				'new_item_name' => __('New Filter Name', 'textdomain'),
				'menu_name' => __('Filter', 'textdomain'),
			);
			$args = array(
				'hierarchical' => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'filter'),
			);

			register_taxonomy($taxonomyName, $postTypes, $args);
		}

		public function cyn_register_product_brands()
		{
			$taxonomyName = "brands";
			$GLOBALS["brands-tax"] = $taxonomyName;
			$postTypes = array($GLOBALS["product-post-type"]);

			$labels = array(
				'name' => _x('Brands', 'taxonomy general name', 'textdomain'),
				'singular_name' => _x('Brand', 'taxonomy singular name', 'textdomain'),
				'search_items' => __('Search Brands', 'textdomain'),
				'all_items' => __('All Brands', 'textdomain'),
				'parent_item' => __('Parent Brand', 'textdomain'),
				'parent_item_colon' => __('Parent Brand:', 'textdomain'),
				'edit_item' => __('Edit Brand', 'textdomain'),
				'update_item' => __('Update Brand', 'textdomain'),
				'add_new_item' => __('Add New Brand', 'textdomain'),
				'new_item_name' => __('New Brand Name', 'textdomain'),
				'menu_name' => __('Brand', 'textdomain'),
			);
			$args = array(
				'hierarchical' => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'brands'),
			);

			register_taxonomy($taxonomyName, $postTypes, $args);
		}

		public function cyn_archive_pre_get_posts($query)
		{
			$archiveCondition = is_archive() && $query->is_main_query() && !is_admin();
			$searchCondition  = is_search()  && !is_admin();

			if ($archiveCondition || $searchCondition) {
				$cynOptions = new cyn_options();

				$getCats     = $cynOptions->cyn_getProductTerms(false, true, 'product-cat');
				$getBrands   = $cynOptions->cyn_getProductTerms(false, true, 'brands');
				$getFilters  = $cynOptions->cyn_getProductTerms(false, true, 'filters');
				$catTerms    = array();
				$brandTerms  = array();
				$filterTerms = array();
				$tax_query   = isset($query->tax_query->queries) ? $query->tax_query->queries : array();
				$tax_query['relation'] = "AND";

				foreach ($getCats as $catId)
					if (isset($_GET["cat-" . $catId]))
						$catTerms[] = $catId;

				foreach ($getBrands as $catId)
					if (isset($_GET["cat-" . $catId]))
						$brandTerms[] = $catId;

				foreach ($getFilters as $filterId)
					if (isset($_GET["cat-" . $filterId]))
						$filterTerms[] = $filterId;

				if (count($catTerms) > 0) {
					$tax_query[] = array(
						'taxonomy' => 'product-cat',
						'field' => "id",
						'terms' => $catTerms
					);
				}

				if (count($brandTerms) > 0) {
					$tax_query[] = array(
						'taxonomy' => 'brands',
						'field' => "id",
						'terms' => $brandTerms
					);
				}

				if (count($filterTerms) > 0) {
					$tax_query[] = array(
						'taxonomy' => 'filters',
						'field' => "id",
						'terms' => $filterTerms,
					);
				}

				if ($archiveCondition)
					$query->set('tax_query', $tax_query);
			}

			if ($searchCondition) {
				return $tax_query;
			}
		}

		public function cyn_register_projects()
		{
			$labels = [
				'name' => _x('Project', 'Post type general name', 'Project'),
				'singular_name' => _x('Project', 'Post type singular name', 'Project'),
				'menu_name' => _x('Project', 'Admin Menu text', 'Project'),
				'name_admin_bar' => _x('Project', 'Add New on Toolbar', 'Project'),
				'add_new' => __('Add New', 'Project'),
				'add_new_item' => __('Add New Project', 'Project'),
				'new_item' => __('New Project', 'Project'),
				'edit_item' => __('Edit Project', 'Project'),
				'view_item' => __('View Project', 'Project'),
				'all_items' => __('All Projects', 'Project'),
				'search_items' => __('Search Project', 'Project'),
				'parent_item_colon' => __('Parent Project:', 'Project'),
				'not_found' => __('No Project found.', 'Project'),
				'not_found_in_trash' => __('No Project found in Trash.', 'Project'),
				'featured_image' => _x('Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Project'),
				'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Project'),
				'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Project'),
				'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Project'),
				'archives' => _x('Project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Project'),
				'insert_into_item' => _x('Insert into Project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Project'),
				'uploaded_to_this_item' => _x('Uploaded to this Project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Project'),
				'filter_items_list' => _x('Filter Project list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Project'),
				'items_list_navigation' => _x('Project list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Project'),
				'items_list' => _x('Project list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Project'),
			];
			$args = [
				'labels' => $labels,
				'description' => 'Project custom post type.',
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'project'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => 20,
				'supports' => ['title', 'thumbnail', 'excerpt'],
				'show_in_rest' => false
			];

			register_post_type('project', $args);
		}

		public function cyn_register_accessories()
		{
			$postType = "accessory";
			$GLOBALS["accessory-post-type"] = $postType;

			$labels = [
				'name' => _x('Accessory', 'Post type general name', 'Accessory'),
				'singular_name' => _x('Accessory', 'Post type singular name', 'Accessory'),
				'menu_name' => _x('Accessory', 'Admin Menu text', 'Accessory'),
				'name_admin_bar' => _x('Accessory', 'Add New on Toolbar', 'Accessory'),
				'add_new' => __('Add New', 'Accessory'),
				'add_new_item' => __('Add New Accessory', 'Accessory'),
				'new_item' => __('New Accessory', 'Accessory'),
				'edit_item' => __('Edit Accessory', 'Accessory'),
				'view_item' => __('View Accessory', 'Accessory'),
				'all_items' => __('All accessories', 'Accessory'),
				'search_items' => __('Search Accessory', 'Accessory'),
				'parent_item_colon' => __('Parent Accessory:', 'Accessory'),
				'not_found' => __('No Accessory found.', 'Accessory'),
				'not_found_in_trash' => __('No Accessory found in Trash.', 'Accessory'),
				'featured_image' => _x('Accessory Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Accessory'),
				'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Accessory'),
				'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Accessory'),
				'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Accessory'),
				'archives' => _x('Accessory archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Accessory'),
				'insert_into_item' => _x('Insert into Accessory', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Accessory'),
				'uploaded_to_this_item' => _x('Uploaded to this Accessory', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Accessory'),
				'filter_items_list' => _x('Filter Accessory list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Accessory'),
				'items_list_navigation' => _x('Accessory list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Accessory'),
				'items_list' => _x('Accessory list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Accessory'),
			];
			$args = [
				'labels' => $labels,
				'description' => 'Accessory custom post type.',
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'accessory'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => 20,
				'supports' => ['title', 'thumbnail', 'excerpt'],
				'show_in_rest' => false
			];

			return register_post_type($postType, $args);
		}

		public function cyn_register_contact_forms()
		{
			$postType = "contact-form";
			$GLOBALS["contact-form-post-type"] = $postType;

			$labels = [
				'name' => _x('Contact Us form', 'Post type general name', 'Contact Us form'),
				'menu_name' => _x('Contact Us form', 'Admin Menu text', 'Contact Us form'),
			];
			$args = [
				'labels' => $labels,
				'description' => 'Contact Us form custom post type.',
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'contact-form'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => 20,
				'supports' => ['title', 'editor'],
				'show_in_rest' => false
			];

			return register_post_type($postType, $args);
		}

		public function cyn_register_faq()
		{
			$postType = "faq";
			$GLOBALS["faq-post-type"] = $postType;

			$labels = [
				'name' => _x('FAQ', 'Post type general name', 'FAQ'),
				'menu_name' => _x('FAQ', 'Admin Menu text', 'FAQ'),
			];
			$args = [
				'labels' => $labels,
				'description' => 'FAQ custom post type.',
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'faq'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => 20,
				'supports' => ['title', 'editor'],
				'show_in_rest' => false
			];

			return register_post_type($postType, $args);
		}

		public function cyn_register_reviews()
		{
			$postType = "reviews";
			$GLOBALS["reviews-post-type"] = $postType;

			$labels = [
				'name' => _x('Reviews', 'Post type general name', 'Reviews'),
				'menu_name' => _x('Reviews', 'Admin Menu text', 'Reviews'),
			];
			$args = [
				'labels' => $labels,
				'description' => 'Reviews custom post type.',
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'reviews'),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => 20,
				'supports' => ['title'],
				'show_in_rest' => false
			];

			return register_post_type($postType, $args);
		}

		public function cyn_disable_new_posts()
		{
			// Hide sidebar link
			global $submenu;
			unset($submenu['edit.php?post_type=contact-form'][10]);

			// Hide link on listing page
			if (isset($_GET['post_type']) && $_GET['post_type'] == 'contact-form') {
				echo '<style type="text/css">
        a.page-title-action {
					display:none;
				}
        </style>';
			}
		}
	}
}
