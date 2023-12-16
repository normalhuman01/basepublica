<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Base Publica 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <div class="post-inner">

    <div class="entry-content">

      <?php
      if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
        the_excerpt();
      } else {
        the_content( __( 'Continue reading', 'basepublica' ) );
      }
      ?>

    </div><!-- .entry-content -->

  </div><!-- .post-inner -->


	<!-- INICIO PROGRAMAS -->
	<section class="section-programas">
	  <div class="marketing-container barra">
				<h1>Programas</h1>
	    <!-- Three columns of text below the carousel -->
	    <div class="row">
	      <div class="col-lg-3">
					<div id="contenedor">
					  <a href="<?php echo get_home_url(); ?>/?page_id=79">
					    <div class="griditem caja-programas" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/cafepublico.png);">
					      <!-- <div class="txt-caja"><p id="cafe">Conversaciones de personas improbables dispuestas a escucharse. Una producción de Base Pública con la colaboración de Nescafé. Juntos, por una cultura del respeto.</p></div> -->
					          <div class="video">
					            <!-- <video id="video" preload="none" muted autoplay loop style="width:100%; object-fit:cover;"> -->
					            <!-- <source id="mp4" src="/wp-content/uploads/revslider/Mock-up.mp4" type="video/mp4">
					           </video> -->
					          </div>
					      </div></a>
					 </div>
	      </div><!-- /.col-lg-4 -->
	      <div class="col-lg-3">
					<div id="contenedor">
					  <a href="<?php echo get_home_url(); ?>/?page_id=172">
					    <div class="griditem caja-programas" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/insitu.png);">
					      <!-- <div class="txt-caja"><p id="cafe">Conversaciones de personas improbables dispuestas a escucharse. Una producción de Base Pública con la colaboración de Nescafé. Juntos, por una cultura del respeto.</p></div> -->
					          <div class="video">
					            <!-- <video id="video" preload="none" muted autoplay loop style="width:100%; object-fit:cover;"> -->
					            <!-- <source id="mp4" src="/wp-content/uploads/revslider/Mock-up.mp4" type="video/mp4">
					           </video> -->
					          </div>
					      </div></a>
					 </div>
				 </div>
	      <div class="col-lg-3">
					<div id="contenedor">
					  <a href="<?php echo get_home_url(); ?>/?page_id=199">
					    <div class="griditem caja-programas" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/poderosas.png);">
					      <!-- <div class="txt-caja"><p id="cafe">Conversaciones de personas improbables dispuestas a escucharse. Una producción de Base Pública con la colaboración de Nescafé. Juntos, por una cultura del respeto.</p></div> -->
					          <div class="video">
					            <!-- <video id="video" preload="none" muted autoplay loop style="width:100%; object-fit:cover;"> -->
					            <!-- <source id="mp4" src="/wp-content/uploads/revslider/Mock-up.mp4" type="video/mp4">
					           </video> -->
					          </div>
					      </div></a>
					 </div>
	      </div><!-- /.col-lg-4 -->
				<div class="col-lg-3">
					<div id="contenedor">
					  <a href="#">
					    <div class="griditem caja-programas" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/basedoc.png);">
					      <!-- <div class="txt-caja"><p id="cafe">Conversaciones de personas improbables dispuestas a escucharse. Una producción de Base Pública con la colaboración de Nescafé. Juntos, por una cultura del respeto.</p></div> -->
					          <div class="video">
					            <!-- <video id="video" preload="none" muted autoplay loop style="width:100%; object-fit:cover;"> -->
					            <!-- <source id="mp4" src="/wp-content/uploads/revslider/Mock-up.mp4" type="video/mp4">
					           </video> -->
					          </div>
					      </div></a>
					 </div>
				</div>
	    </div><!-- /.row -->
		</section>



  <div class="section-inner">
    <?php
    wp_link_pages(
      array(
        'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'basepublica' ) . '"><span class="label">' . __( 'Pages:', 'basepublica' ) . '</span>',
        'after'       => '</nav>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      )
    );

    edit_post_link();

    // Single bottom post meta.
    basepublica_the_post_meta( get_the_ID(), 'single-bottom' );

    if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

      get_template_part( 'template-parts/entry-author-bio' );

    }
    ?>

  </div><!-- .section-inner -->

  <?php

  if ( is_single() ) {

    get_template_part( 'template-parts/navigation' );

  }

  /**
   *  Output comments wrapper if it's a post, or if comments are open,
   * or if there's a comment number – and check for password.
   * */
  if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
    ?>

    <div class="comments-wrapper section-inner">

      <?php comments_template(); ?>

    </div><!-- .comments-wrapper -->

    <?php
  }
  ?>

</article><!-- .post -->
<?php
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
