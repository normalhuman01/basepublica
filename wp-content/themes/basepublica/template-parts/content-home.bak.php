<?php
/**
 * Displays the content when the cover template is used.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Base Publica 1.0
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php
	?>

	<main role="main">
		<link href="<?php echo(get_stylesheet_directory_uri()); ?>/assets/css/carousel.css" rel="stylesheet">
		<link href="<?php echo(get_stylesheet_directory_uri()); ?>/assets/css/contenido-home.css" rel="stylesheet">
	  <div id="slider-home" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#slider-home" data-slide-to="0" class="active"></li>
	      <li data-target="#slider-home" data-slide-to="1"></li>
	      <li data-target="#slider-home" data-slide-to="2"></li>
	    </ol>
	    <div class="carousel-inner">
	      <div class="carousel-item active">
	        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
					<img class="bd-placeholder-img" src="<?php echo(get_stylesheet_directory_uri()); ?>/img/sliderhome/poderosas.png">
	        <div class="container">
	          <div class="carousel-caption text-left">
							<img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/sliderhome/poderosas-texto.png" class="carousel-caption-img">
							<!-- <h1>Example headline.</h1> -->
	            <p>¡Pronto! Un espacio donde autoridades y actores ciudadanos se reúnen para debatir, reflexionar y compartir ideas con una mirada optimista, sobre cómo construir una mejor ciudad.</p>
	            <p><a class="btn btn-lg btn-primary" href="#" role="button">¡Ver Ahora!</a></p>
	          </div>
	        </div>
	      </div>
	      <div class="carousel-item">
	        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
					<img class="bd-placeholder-img" src="<?php echo(get_stylesheet_directory_uri()); ?>/img/sliderhome/in-situ.png">
	        <div class="container">
	          <div class="carousel-caption">
							<!-- <h1>Example headline.</h1> -->
							<p>¡Pronto! Un espacio donde autoridades y actores ciudadanos se reúnen para debatir, reflexionar y compartir ideas con una mirada optimista, sobre cómo construir una mejor ciudad.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">¡Ver Ahora!</a></p>
	          </div>
	        </div>
	      </div>
	      <div class="carousel-item">
	        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
					<img class="bd-placeholder-img" src="<?php echo(get_stylesheet_directory_uri()); ?>/img/sliderhome/foto_cafe_publico-1.png" class="carousel-caption-img">
	        <div class="container">
	          <div class="carousel-caption">
							<img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/sliderhome/logo-CP.png">
							<!-- <h1>Example headline.</h1> -->
							<p>¡Pronto! Un espacio donde autoridades y actores ciudadanos se reúnen para debatir, reflexionar y compartir ideas con una mirada optimista, sobre cómo construir una mejor ciudad.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">¡Ver Ahora!</a></p>
	          </div>
	        </div>
				</div>
	    </div>
	    <a class="carousel-control-prev" href="#slider-home" role="button" data-slide="prev">
	      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#slider-home" role="button" data-slide="next">
	      <span class="carousel-control-next-icon" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>


<div class="contenido-homne">
	  <div class="marketing-container barra">
				<h1>Programas</h1>
	    <!-- Three columns of text below the carousel -->
	    <div class="row">
	      <div class="col-lg-3">
					<div id="contenedor">
					  <a href="<?php echo get_home_url(); ?>/?page_id=79">
					    <div class="griditem caja-programas" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/cajashome/cafe.jpg);">
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
					    <div class="griditem caja-programas" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/cajashome/situ.jpg);">
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
					    <div class="griditem caja-programas" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/cajashome/poderosas-1.jpg);">
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
					    <div class="griditem caja-programas" style="background-image:url(<?php echo(get_stylesheet_directory_uri()); ?>/img/cajashome/bdoc-1.jpg);">
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

<!-- MEJORES MOMENTOS  -->
	    <!-- START THE FEATURETTES -->

		<!--<div class="row">
			<div class="col-lg-12">
				<h1>Mejores Momentos</h1>
				<?php /* echo do_shortcode("[destacadoscarousel category='destacados' style='1']"); */ ?>
			</div>
		</div>-->

	    <!-- <hr class="featurette-divider">

	    <div class="row featurette">
	      <div class="col-md-7">
	        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
	        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	      </div>
	      <div class="col-md-5">
	        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
	      </div>
	    </div>

	    <hr class="featurette-divider">

	    <div class="row featurette">
	      <div class="col-md-7 order-md-2">
	        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
	        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	      </div>
	      <div class="col-md-5 order-md-1">
	        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
	      </div>
	    </div>

	    <hr class="featurette-divider">

	    <div class="row featurette">
	      <div class="col-md-7">
	        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
	        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	      </div>
	      <div class="col-md-5">
	        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
	      </div>
	    </div>

	    <hr class="featurette-divider"> -->

	    <!-- /END THE FEATURETTES -->

	  </div><!-- /.container -->
</div>

	  <!-- FOOTER -->
	  <!-- <footer class="container"> -->
	    <!-- <p class="float-right"><a href="#">Volver al Inicio</a></p> -->
	    <!-- <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
	  <!-- </footer> -->
	</main>
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
	<!-- <script src="<?php //echo(get_stylesheet_directory_uri()); ?>/assets/js/bootstrap.bundle.min.js"></script> -->

	<div class="post-inner" id="post-inner">

		<div class="entry-content">

		<?php
		the_content();
		?>

		</div>
