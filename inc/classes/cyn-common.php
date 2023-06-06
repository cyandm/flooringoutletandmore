<?php

if ( ! class_exists( 'cyn_common' ) ) {
	class cyn_common {

		function __construct() {

		}

		static public function blog_term() {
			$cats = get_categories( [ 'hide_empty' => false,] );
			$cat_exclude = [ 
				'Recommend',
				'Uncategorized'
			];

			$recommend_sidebar = new WP_Query( [ 
				'post_type' => 'post',
				'category_name' => 'recommend',
				'posts_per_page' => '5'
			] );
			$current_terms = [];

			if ( is_archive() ) {
				array_push( $current_terms, get_queried_object_id() );
			} else if ( is_single() ) {
				$term_group = get_the_category( get_the_ID() );

				foreach ( $term_group as $term ) {
					array_push( $current_terms, $term->term_id );
				}
			}
			wp_reset_postdata();

			return [ 
				'cats' => $cats,
				'cat_exclude' => $cat_exclude,
				'recommend_sidebar' => $recommend_sidebar,
				'current_terms' => $current_terms
			];
		}
	}
}