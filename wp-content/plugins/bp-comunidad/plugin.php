<?php

/**
* Plugin Name: Base Pública Comunidad
* Author: Juan Pablo Pinedo
* Description: Comunidad Post-Types
* Version: 1.0
*/

// Load assets
function comunidad_assts_enquee() {

   wp_enqueue_style(
      'comunidad-styles',
      plugins_url( 'comunidad.css', __FILE__ ),
      array()
   );
}
add_action( 'wp_enqueue_scripts', 'comunidad_assts_enquee' );


// REGISTER POST-TYPE
function comunidad_post_type() {
    register_post_type('comunidad',
        array(
            'labels'      => array(
                'name'          => __('Comunidad', 'textdomain'),
                'singular_name' => __('Cominidad', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('category' ),
        )
    );
}
add_action('init', 'comunidad_post_type');


// REGISTER SHORTCODE
function comunidad_shortcode( $atts ) {
   global $post;
    extract( shortcode_atts( array(
        'category' => 'opinion',
        'style' => 1,
    ), $atts ) );

    $postPerPage = $style == 1 ? 4 : ($style == 2 ? 1 : 2);

    $args = array(
        'category_name' => $category,
        'post_type' => 'comunidad',
        'posts_per_page' => $postPerPage,
        'sort_column'   => 'menu_order'
    );

    $comunidad_posts = new  WP_Query( $args );

    $output = '<div class="container comunidad-container style-'. $style .'"><div class="row">';

    while ( $comunidad_posts->have_posts() ) : $comunidad_posts->the_post();
         $url = get_post_meta($post->ID, "Url", true);
         $thumbnailURL = get_the_post_thumbnail_url($post->ID, 'large');
         $term = get_the_category($post->ID);
         $title =  get_the_title($post->ID);
         $content = get_the_content();

         $output .= get_comunidad_grid($url, $thumbnailURL, $term, $content, $title, $style, $term);

    endwhile;
    wp_reset_query();

    $output .= '</div></div>';
    return $output;
}
add_shortcode('comunidad', 'comunidad_shortcode');

// GET COMUNIDAD GRID
function get_comunidad_grid($url, $thumbnailURL, $term, $content, $title, $style, $category) {
  $output = '';
  if($style == 1) {
    $output .= '<div class="col-md-3" style="height:353px;!important">'.
                '<div class="comunidad-thumbnail" style="background-image: url('. $thumbnailURL .')">'.
                  '<!-- <div class="comunidad-category">'. $category[1]->cat_name .'</div> -->'.
                  '<div class="comunidad-play" data-url="'. $url .'"><div class="icon-play"></div></div>'.
                '</div>'.
              '</div>';
  } elseif($style == 2) {
    $output .= '<div class="col-sm-12" style="display:flex;">'.
                '<div class="comunidad-exerpt d-inline-block">'.
                  '<!-- <div class="comunidad-category">'. $category[1]->cat_name .'</div> -->'.
                   $content .
                '</div>'.
                '<div class="comunidad-thumbnail" style="background-image: url('. $thumbnailURL .')">'.
                  '<div class="comunidad-play" data-url="'. $url .'"><div class="icon-play"></div></div>'.
                '</div>'.
              '</div>';
  } elseif($style == 3) {
    $output .= '<div class="col-md-6">'.
                '<div class="comunidad-thumbnail" style="background-image: url('. $thumbnailURL .')">'.
                  '<div class="comunidad-overlay"></div>'.
                  '<div class="comunidad-category">'. $category[1]->cat_name .'</div>'.
                  '<div class="comunidad-title"><span>'. $title .'</span></div>'.
                  '<div class="comunidad-play" data-url="'. $url .'"><div class="icon-play"></div></div>'.
                '</div>'.
              '</div>';
  }

  return $output;
}
?>
