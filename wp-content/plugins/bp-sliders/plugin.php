<?php

/**
* Plugin Name: Base Pública Sliders
* Author: Juan Pablo Pinedo
* Description: Team sliders controlled by Wordpress Post-Types
* Version: 1.0
*/

// Load assets
function slider_assts_enquee() {
/*
   wp_register_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', null, null, true );
   wp_enqueue_script('swiper');

   wp_register_style( 'swiperstyles', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
   wp_enqueue_style('swiperstyles');
*/
   wp_enqueue_script(
      'team-carousel-slider',
      plugins_url( 'carousel.js', __FILE__ ),
      array('jquery', 'swiper')
   );

   wp_enqueue_style(
      'team-carousel-styles',
      plugins_url( 'carousel.css', __FILE__ ),
      array('swiperstyles')
   );
}
add_action( 'wp_enqueue_scripts', 'slider_assts_enquee' );


// REGISTER POST-TYPE
function team_member_post_type() {
    register_post_type('team_member',
        array(
            'labels'      => array(
                'name'          => __('Miembros', 'textdomain'),
                'singular_name' => __('Miembro', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('category' ),
        )
    );
}
add_action('init', 'team_member_post_type');

////////////////////////// mod ngeorger
// REGISTER POST-TYPE
function destacados_post_type() {
    register_post_type('destacados',
        array(
            'labels'      => array(
                'name'          => __('Mejores Momentos', 'textdomain'),
                'singular_name' => __('Mejor Momento', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('category' ),
        )
    );
}
add_action('init', 'destacados_post_type');



// REGISTER SHORTCODE
function destacados_carousel_shortcode( $atts ) {
   global $post;
    extract( shortcode_atts( array(
        'category' => 'Mejores Momentos',
        'style' => 1,
        'bullets' => 'false',
    ), $atts ) );

    $args = array(
        'cat' => $category,
        'post_type' => 'destacados',
        'posts_per_page' => 10,
        'sort_column'   => 'menu_order'
    );
    $destacados_carousel = new  WP_Query( $args );

    $output = get_slider_before($style);
    while ( $destacados_carousel->have_posts() ) : $destacados_carousel->the_post();
        $thumbnailURL = get_the_post_thumbnail_url($post->ID, 'medium');
        
        $output .= '<div class="swiper-slide col-md-3 col-ml-3 col-mr-3" style="height:240px;">'.
                        get_the_post_thumbnail().
                        '<div class="slider-caption">'.
                           '<!-- <div class="member-ocupation">'.
                              $programa .
                        '</div> -->'.
                        '<div class="member-name">'.
                        get_the_title().
                        '</div></div>'.
                        '<div class="member-bio">'.
                           '<p>' . get_the_content() . '</p>'.
                        '</div></div>';
    endwhile;
    wp_reset_query();
    $output .= get_slider_after_no_dots();
    return $output;
}
add_shortcode('destacadoscarousel', 'destacados_carousel_shortcode');


// GET DESTACADOS BEFORE
function get_destacados_before($category) {
  $output = '<div id="programas-carousel-'. $category .'" class="programas-swiper-carousel"><div class="programas-carousel">
      <div class="prev-container"><div class="swiper-button-prev"></div></div>
      <div class="programas-carousel-wrapper">
      <div class="programas-swiper swiper-container">
      <div class="swiper-wrapper">';
   return $output;
}

function get_destacados_item($style, $thumbnailURL, $youtubeURL, $content, $category) {

  $output = '<div class="swiper-slide style-2">'.
  '<div class="programas-thumbnail" style="background-image: url('. $thumbnailURL .')">'.
    '<div class="programas-play" data-url="'. $youtubeURL .'"><div class="icon-play"></div></div>'.
  '</div>'.
  '<div class="programas-exerpt">' . $content . '</div>'.
  '</div>';

  return $output;

}

// GET DESTACADOS AFTER
function get_destacados_after($bullets) {
    $output = '</div></div></div>
      <div class="next-container"><div class="swiper-button-next"></div></div>
      </div>';

    if($bullets == 'true') {
      $output .= '<div class="swiper-pagination"></div>';
    }

    $output .= '</div>';

    return $output;
}



// END MOD NGEORGER

// REGISTER SHORTCODE
function team_carousel_shortcode( $atts ) {
   global $post;
    extract( shortcode_atts( array(
        'category' => 'colaboradores',
        'style' => 1,
    ), $atts ) );

    $args = array(
        'category_name' => $category,
        'post_type' => 'team_member',
        'posts_per_page' => 10,
        'sort_column'   => 'menu_order'
    );
    $team_carousel = new  WP_Query( $args );

    $output = get_slider_before($style);
    while ( $team_carousel->have_posts() ) : $team_carousel->the_post();
         $ocupation = get_post_meta($post->ID, "Cargo", true);
         $output .= '<div class="swiper-slide">'.
                        get_the_post_thumbnail().
                        '<div class="slider-overlay"></div>'.
                        '<div class="slider-caption">'.
                           '<div class="member-name">'.
                              get_the_title().
                           '</div>'.
                           '<div class="member-ocupation">'.
                              $ocupation .
                        '</div></div>'.
                        '<div class="member-bio">'.
                           '<span>' . get_the_title() . '</span>'.
                           '<p>' . get_the_content() . '</p>'.
                        '</div><div class="slider-line"></div></div>';
    endwhile;
    wp_reset_query();
    $output .= get_slider_after();
    return $output;
}
add_shortcode('teamcarousel', 'team_carousel_shortcode');

// GET SLIDER BEFORE
function get_slider_before( $style ) {
   $output = '<div class="team-swiper-carousel"><div class="team-carousel style-'. $style .'">
      <div class="prev-container"><div class="swiper-button-prev"></div></div>
      <div class="team-carousel-wrapper">
      <div class="team-swiper swiper-container">
      <div class="swiper-wrapper">';
   return $output;
}

// GET SLIDE
function get_slide() {

}

// GET SLIDER AFTER
function get_slider_after() {
   $output = '</div></div></div>
      <div class="next-container"><div class="swiper-button-next"></div></div>
      </div>
      <div class="swiper-pagination"></div></div>';
   return $output;
}


?>
