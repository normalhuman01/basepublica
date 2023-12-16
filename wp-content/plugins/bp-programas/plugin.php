<?php
/**
* Plugin Name: Base Pública Programas y Notas
* Author: Juan Pablo Pinedo
* Description: Programas y Notas BP Post-Types
* Version: 1.0
*/

// Load assets
function programas_assts_enquee() {

  /*wp_register_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', null, null, true );*/
  /*wp_enqueue_script('swiper');*/

  /*wp_register_style( 'swiperstyles', 'https://unpkg.com/swiper/swiper-bundle.min.css' );*/
  /*wp_enqueue_style('swiperstyles');*/

   wp_enqueue_script(
      'programas-carousel-slider',
      plugins_url( 'programas-carousel.js', __FILE__ ),
      array('jquery', 'swiper')
   );

  wp_enqueue_style(
      'programas-styles',
      plugins_url( 'programas.css', __FILE__ ),
      array('swiperstyles')
   );
}
add_action( 'wp_enqueue_scripts', 'programas_assts_enquee' );


// REGISTER POST-TYPE
function register_post_types() {
    register_post_type('programas',
        array(
            'labels'      => array(
                'name'          => __('Programas', 'textdomain'),
                'singular_name' => __('Programa', 'textdomain'),
                'add_new'            => _x( 'Crear Nuevo', 'book' ),
                'add_new_item'       => __( 'Agregar Nuevo Programa' ),
                'edit_item'          => __( 'Editar Programa' ),
                'new_item'           => __( 'Nuevo Programa' ),
                'all_items'          => __( 'Programas' ),
                'view_item'          => __( 'Ver Programa' ),
                'search_items'       => __( 'Buscar Programas' ),
                'not_found'          => __( 'No se encontraron Programas' ),
                'menu_name'          => 'Programas'
            ),
            /*'show_in_rest' => true,*/
            'public'      => true,
            'has_archive' => true,
            /*'hierarchical' => true,*/
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('category'),
        )
    );

    register_post_type('notas',
        array(
            'labels'      => array(
                'name'          => __('Notas', 'textdomain'),
                'singular_name' => __('Nota', 'textdomain'),
                'add_new'            => _x( 'Crear Nueva', 'book' ),
                'add_new_item'       => __( 'Agregar Nueva Nota' ),
                'edit_item'          => __( 'Editar Nota' ),
                'new_item'           => __( 'Nueva Nota' ),
                'all_items'          => __( 'Notas' ),
                'view_item'          => __( 'Ver Nota' ),
                'search_items'       => __( 'Buscar Notas' ),
                'not_found'          => __( 'No se encontraron Notas' ),
                'menu_name'          => 'Notas'
            ),
            /*'show_in_rest' => true,*/
            'public'      => true,
            'has_archive' => true,
            /*'hierarchical' => true,*/
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('category'),
        )
    );
}
add_action('init', 'register_post_types');

// REGISTER SHORTCODE
function programas_shortcode( $atts ) {
   global $post;
    extract( shortcode_atts( array(
        'category' => 'mejores-momentos',
        'bullets' => 'false',
        'style' => 1,
        'type' => 'programas',
        'showtax' => 'false',
        'showquote' => 'false',
    ), $atts ) );

    $args = array(
        'category_name' => $category,
        'post_type' => $type,
        'posts_per_page' => 20,
        'sort_column'   => 'menu_order',
    );

    $programs_posts = new  WP_Query( $args );

    $output = get_programas_before($category);

    while ( $programs_posts->have_posts() ) : $programs_posts->the_post();
        $thumbnailURL = get_the_post_thumbnail_url($post->ID, 'large');
        $youtubeURL = get_post_meta($post->ID, "Url", true);
        $term = get_the_category($post->ID);
        $content = get_the_content();

        $output .= get_programas_item($style, $thumbnailURL, $youtubeURL, $content, $term, $showquote);

    endwhile;
    wp_reset_query();
    $output .= get_programas_after($bullets);

    return $output;
}
add_shortcode('bp-programas', 'programas_shortcode');

// GET PROGRAMAS BEFORE
function get_programas_before($category) {
  $output = '<div id="programas-carousel-'. $category .'" class="programas-swiper-carousel"><div class="programas-carousel">
      <div class="prev-container"><div class="swiper-button-prev"></div></div>
      <div class="programas-carousel-wrapper">
      <div class="programas-swiper swiper-container">
      <div class="swiper-wrapper">';
   return $output;
}

function get_programas_item($style, $thumbnailURL, $youtubeURL, $content, $category, $showquote) {
  $output = '';

  if($style == 1) {

    $output .= '<div class="swiper-slide">'.
    '<div class="programas-thumbnail" style="background-image: url('. $thumbnailURL .')">'.
    '<div class="slider-overlay"></div>'.
    '<div class="programas-exerpt">' . $content . '</div>'.
    '<div class="programas-play" data-url="'. $youtubeURL .'"><div class="icon-play"></div></div>'.
    '</div></div>';

  } elseif($style == 2) {

    $output .= '<div class="swiper-slide style-2">'.
    '<div class="programas-thumbnail" style="background-image: url('. $thumbnailURL .')">'.
      '<div class="programas-play" data-url="'. $youtubeURL .'"><div class="icon-play"></div></div>'.
    '</div>'.
    '<div class="programas-exerpt">' . $content . '</div>'.
    '</div>';

  } elseif($style == 3) {
    $quote = $showquote == 'true' ? '<div class="icon-quote"></div>' : '';

    $output .= '<div class="swiper-slide style-3">'.
    '<div class="programas-thumbnail" style="background-image: url('. $thumbnailURL .')">'.
      '<!-- <div class="programas-category">'. $category[0]->cat_name .'</div> -->'.
      '<div class="programas-play" data-url="'. $youtubeURL .'"><div class="icon-play"></div></div>'.
    '</div>'.
    '<div class="programas-exerpt">'. $quote . $content . '</div>'.
    '</div>';
  }

  return $output;

}

// GET PROGRAMAS AFTER
function get_programas_after($bullets) {
    $output = '</div></div></div>
      <div class="next-container"><div class="swiper-button-next"></div></div>
      </div>';

    if($bullets == 'true') {
      $output .= '<div class="swiper-pagination"></div>';
    }

    $output .= '</div>';

    return $output;
}
?>
