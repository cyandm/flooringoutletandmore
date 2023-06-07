<?php

if (!class_exists('cyn_register')) {
	class cyn_register
	{
		function __construct()
		{

			add_action('init', [$this, 'cyn_register_products']);
			add_action('init', [$this, 'cyn_register_projects']);

			add_action('init', [$this, 'cyn_register_product_cats']);
			add_action('init', [$this, 'cyn_register_product_filters']);
			add_action('init', [$this, 'cyn_register_product_brands']);
			add_action('init', [$this, 'cyn_register_recommend_blog_cat']);

			add_action('pre_get_posts', [$this, 'cyn_archive_pre_get_posts']);
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
				'supports' => ['title', 'thumbnail'],
				'taxonomies' => ['product-cat', 'collections', 'brands'],
				'show_in_rest' => false
			);

			register_post_type($postType, $args);
		}

		public function cyn_register_product_cats()
		{
			$taxonomyName = "product-cat";
			$GLOBALS["product-cat-tax"] = $taxonomyName;
			$postTypes = array($GLOBALS["product-post-type"]);

			$labels = array(
				'name' => _x('Categories', 'taxonomy general name', 'textdomain'),
				'singular_name' => _x('Category', 'taxonomy singular name', 'textdomain'),
				'search_items' => __('Search Categories', 'textdomain'),
				'all_items' => __('All Categories', 'textdomain'),
				'parent_item' => __('Parent Category', 'textdomain'),
				'parent_item_colon' => __('Parent Category:', 'textdomain'),
				'edit_item' => __('Edit Category', 'textdomain'),
				'update_item' => __('Update Category', 'textdomain'),
				'add_new_item' => __('Add New Category', 'textdomain'),
				'new_item_name' => __('New Category Name', 'textdomain'),
				'menu_name' => __('Category', 'textdomain'),
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
			$archiveCondition = $query->is_archive && $query->is_main_query() && !is_admin();
			$searchCondition  = $query->is_search && $query->is_main_query() && !is_admin();

			if ($archiveCondition || $searchCondition) {
				$cynOptions = new cyn_options();

				$getCats     = $cynOptions->cyn_getProdactTerms(false, true, 'product-cat');
				$getFilters  = $cynOptions->cyn_getProdactTerms(false, true, 'filters');
				$catTerms    = array();
				$filterTerms = array();
				$tax_query   = $query->tax_query->queries;
				$tax_query['relation'] = "AND";

				foreach ($getCats as $catId)
					if (isset($_GET["cat-" . $catId]))
						$catTerms[] = $catId;

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

				if (count($filterTerms) > 0) {
					$tax_query[] = array(
						'taxonomy' => 'filters',
						'field' => "id",
						'terms' => $filterTerms,
					);
				}

				$query->set('tax_query', $tax_query);
			}

			if ($searchCondition) {
				$query->set('post_type', 'product');
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
				'supports' => ['title', 'thumbnail'],
				'show_in_rest' => false
			];

			register_post_type('project', $args);
		}

		public function cyn_register_recommend_blog_cat()
		{
			if (!category_exists('Recommend')) {
				wp_create_category('Recommend');
			}
		}
	}
}
