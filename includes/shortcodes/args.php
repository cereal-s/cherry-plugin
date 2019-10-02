<?php

/**
 * @NOTE
 * @date 2019-10-01
 *
 * Posts, pages, projects pages in WordPress are always items
 * of the wp_posts table, so here I'm changing the query to
 * match some posts created through the Project Pages plugin.
 * Steps:
 *
 *  - changed post_type from $type to an hardcoded value 'projectpage'
 *  - commented out the 'tag' key
 *  - added the 'tax_query' to query the project pages (the plugin)
 *    
 * For more info see: https://wordpress.org/plugins/project-pages/
 */

return array(
  'post_type'         => 'project',
  'category_name'     => $category,
  $type . '_category' => $custom_category,
  'pj-tags'           => $tag,
  'numberposts'       => $numb,
  'orderby'           => $order_by,
  'order'             => $order,
  'suppress_filters'  => $suppress_filters
);
