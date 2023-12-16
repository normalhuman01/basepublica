<?php
/**
* Plugin Name: Base Pública Slideshow
* Author: Juan Pablo Pinedo
* Description: Slideshow (background image + content) controlled by Wordpress Post-Types
* Version: 1.0
*/

// Load assets
function slideshow_assts_enquee() {
/*
  wp_register_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', null, null, true );
  wp_enqueue_script('bootstrapjs');

  wp_register_style( 'bootstrapstyle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
  wp_enqueue_style('bootstrapstyle');
*/
  wp_enqueue_style(
      'slideshows-styles',
      plugins_url( 'slideshow.css', __FILE__ ),
      array()
   );
}
add_action( 'wp_enqueue_scripts', 'slideshow_assts_enquee' );


// REGISTER POST-TYPE
function slideshow_post_type() {
    register_post_type('slideshow-slides',
        array(
            'labels'      => array(
                'name'          => __('Slides', 'textdomain'),
                'singular_name' => __('Slide', 'textdomain'),
                'add_new'            => _x( 'Crear Nuevo', 'book' ),
                'add_new_item'       => __( 'Agregar Nuevo Slide' ),
                'edit_item'          => __( 'Editar Slide' ),
                'new_item'           => __( 'Nuevo Slide' ),
                'all_items'          => __( 'Slides (Todos)' ),
                'view_item'          => __( 'Ver Slide' ),
                'search_items'       => __( 'Buscar Slides' ),
                'not_found'          => __( 'No se encontraron Slides' ), 
                'menu_name'          => 'Slides'
            ),
            'show_in_rest' => true,
            'public'      => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('slideshow'),
        )
    );

    register_taxonomy( 'slideshow', 'slideshow-slides',
      array(
        'labels'      => array(
          'name'          => __('Slideshows', 'textdomain'),
          'singular_name' => __('Slideshow', 'textdomain'),
          'update_item'       => __( 'Actualizar Slideshow' ),
          'add_new_item'      => __( 'Agregar Slideshow' ),
          'new_item_name'     => __( 'Nuevo Slideshow' ),
          'menu_name'         => __( 'Slideshows' ),
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => array(
          'slug' => 'slideshow',
          'with_front' => false,
          'hierarchical' => true
        ),
      ),
    );
}
add_action('init', 'slideshow_post_type');

// REGISTER SHORTCODE
function slideshow_shortcode( $atts ) {
   global $post;
    extract( shortcode_atts( array(
        'slideshow' => 'nosotros',
        'size' => 'big',
        'arrows' => 'true',
        'bullets' => 'false',
        'valign' => 'middle',
        'align' => 'center',
        'overlay' => 'false',
        'navdown' => 'false',
        'auto' => 'true',

    ), $atts ) );
    
    $args = array(
        'post_type' => 'slideshow-slides',
        'posts_per_page' => 0,
        'tax_query' => array(
          array (
              'taxonomy' => 'slideshow',
              'field' => 'slug',
              'terms' => $slideshow,
          )
        ),
        'sort_column'   => 'menu_order'
    );
    $slideshow_slides = new  WP_Query( $args );
    $autoPlay = $auto == 'false' ? 'data-interval="false"' : '';

    $output = get_slideshow_before($slideshow, $size, $autoPlay);
    $i = 0;


    while ( $slideshow_slides->have_posts() ) : $slideshow_slides->the_post();
        
        $active = ($i == 0) ? 'active' : '';
        $thumbnailURL = get_the_post_thumbnail_url($post->ID, 'full');
        $vAlign = $valign == 'middle' ? 'align-middle' : 'align-top';
        $hAlign = $align == 'center' ? '' : ($align == 'right' ? 'alignright' : 'alignleft');
        $bgOverlay = $overlay == 'true' ? '<div class="slideshow-overlay"></div>' : '';
        $arrowDown = (isset($navdown) && $navdown !== 'false') ? '<a class="arrow-down" href="#'. $navdown .'"></a>' : '';

        $output .= '<div class="carousel-item '. $active .'" style="background-image: url('. $thumbnailURL .')">'.
                    $bgOverlay .
                    '<div class="h-100 d-table slideshow-content '. $hAlign .'"><div class="d-table-cell '. $vAlign .'">'. get_the_content() .
                    $arrowDown .
                    '</div></div>'.
                    '</div>';
        $i++;
    endwhile;
    wp_reset_query();
    $output .= get_slideshow_after($slideshow, $arrows, $bullets, $i);

    return $output;
}
add_shortcode('bp-slideshow', 'slideshow_shortcode');

// GET SLIDER BEFORE
function get_slideshow_before($id, $size, $autoPlay) {
  $output = '<div id="bp-slideshow-'. $id .'" class="carousel slide carousel-bg '. $size .'" '. $autoPlay .'" data-ride="carousel">';
  $output .= '<div class="carousel-inner">';
   return $output;
}

// GET SLIDE
function get_slideshow() {

}

// GET SLIDER AFTER
function get_slideshow_after($id, $arrows, $bullets, $postCount) {
    $output = '</div>';

    if($arrows == 'true') {
      $output .= '<a class="carousel-control-prev" href="#bp-slideshow-'. $id .'" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#bp-slideshow-'. $id .'" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>';
    
    }

    if($bullets == 'true') {
      $count = 0;
      $output .= '<ol class="carousel-indicators" data-count="'.$postCount.'">';
      
      for ($i = 1; $i <= $postCount; $i++) {
          $active = ($count == 0) ? 'active' : '';
          $output .= '<li data-target="#bp-slideshow-'. $id .'" data-slide-to="'. $count .'" class="'. $active .'"></li>';
          $count++;
      }

      $output .='</ol>';
    }

    $output .= '</div>';

    return $output;
}
?>