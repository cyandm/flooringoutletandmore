<?php

if (!class_exists('cyn_options')) {

  class cyn_options
  {

    function __construct()
    {
    }

    /** product terms **/
    public function cyn_getProdactTerms($parent = 0, $onlyId = false, $taxonomy = 'product-cat')
    {
      global $wpdb;
      $terms = [];

      if ($parent === false) {
        $termsID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE taxonomy='$taxonomy'");
      } else {
        $termsID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE taxonomy='$taxonomy' AND parent='$parent'");
      }

      foreach ($termsID as $tId) {
        if ($onlyId === true) {
          $terms[] = $tId;
        } else {
          $termAttr = $this->cyn_getTermAttr($tId);
          $terms[$termAttr['id']] = $termAttr;
        }
      }

      return $terms;
    }

    public function cyn_getTermAttr($termID)
    {
      global $wpdb;
      $termsAttr = array();
      $wpTerm    = get_term($termID);
      $termUrl   = get_term_link($wpTerm);
      //$termMeta  = $wpdb->get_row("SELECT meta_value FROM $wpdb->termmeta WHERE term_id=$termID AND meta_key='thumbnail_id'");

      $termsAttr["id"]     = $termID;
      $termsAttr["name"]   = $wpTerm->name;
      $termsAttr["slug"]   = $wpTerm->slug;
      $termsAttr["parent"] = $wpTerm->parent;
      $termsAttr["url"]    = $termUrl;

      /*
      if (isset($termMeta)) {
        $termAttach = wp_get_attachment_url($termMeta->meta_value);
        $termThum = wp_get_attachment_image_url($termMeta->meta_value);

        $termsAttr["attachment"] = $termAttach;
        $termsAttr["thumbnail"] = $termThum;
      }
      */

      return $termsAttr;
    }
  }
}
