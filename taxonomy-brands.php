<?php
global $wp_query;
$redirectUrl = site_url() . '/product/?filter=';

if (isset($wp_query->query_vars) && isset($wp_query->query_vars['brands'])) {
  $termSlug = $wp_query->query_vars['brands'];
  $term = get_term_by('slug', $termSlug, $GLOBALS["brands-tax"]);
  $termId = $term->term_id;

  $redirectUrl .= 'on&cat-' . $termId . '=on';

} else {
  $redirectUrl .= 'off';
}

wp_redirect($redirectUrl);
exit();