<?php
/**
 * Displays the content when the cover template is used.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Base Publica 1.0
 */

?>
<link href="<?php echo(get_stylesheet_directory_uri()); ?>/assets/css/contenido-home.css" rel="stylesheet">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php
	?>

<main role="main">
	<!-- <link href="<?php //echo(get_stylesheet_directory_uri()); ?>/assets/css/carousel.css" rel="stylesheet"> -->
		<?php echo do_shortcode("[bp-slideshow slideshow='home' size='cafepublico' valign='top' align='left' overlay='true']"); ?>

<div class="contenido-home">

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
					  <a href="#">
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
					  <a href="#">
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
<!-- END PROGRAMAS  -->

	  <!-- FOOTER -->
	  <!-- <footer class="container"> -->
	    <!-- <p class="float-right"><a href="#">Volver al Inicio</a></p> -->
	    <!-- <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
	  <!-- </footer> -->

			<div class="post-inner" id="post-inner">

				<div class="entry-content">

				<?php
				the_content();
				?>

				</div>

</main>


  <!-- VIDEO MODAL -->
      <div id="player-modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content bg-dark">
            <div class="modal-header border-0">
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <iframe id="video-player" src="" width="100%" height="100%" border="0" class="border-0"/><iframe>
            </div>
          </div>
        </div>
      </div>
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
	<!-- <script src="<?php //echo(get_stylesheet_directory_uri()); ?>/assets/js/bootstrap.bundle.min.js"></script> -->
