<?php


if (!class_exists('cyn_query')) {
    class cyn_query
    {

        function __construct()
        {
            add_action('pre_get_posts', [$this, 'customize_search_query']);
        }

        public function customize_search_query($query)
        {
 

//             $query->set('posts_per_page', 24);
        }

    }
}