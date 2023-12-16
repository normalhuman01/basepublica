<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Base Publica 1.0
 */

?>



			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="container">
					<div class="row redesbajas">
						<div class="col-lg-4 d-inline-flex opciones">
							<div class="col-lg-6 izq">
								<div><a href="#">SOBRE BP</a></div>
								<div><a href="#">CONTACTO</a></div>
								<div><a href="#">TU EVENTO EN BP</a></div>
							</div>
							<div class="col-lg-6 der">
								<div><a href="#">TEMAS</a></div>
								<div><a href="#">OPCIONES</a></div>
								<div><a href="#">PROYECTO</a></div>
							</div>
						</div>
						<div class="col-lg-4 logito"><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/logo-home.png" alt=""></div>
						<div class="col-lg-4 inscribete">
							<input type="text" name="buscacuadro" placeholder="TU CORREO" id="cuadro-buscar"></input><input class="botoncillo" type="submit" value="Suscribete">
						</div>
						<div class="sociales">
								<a href=""><i class="fab fa-facebook-f"></i></a>
								<a href=""><i class="fab fa-twitter"></i> </a>
								<a href=""><i class="fab fa-instagram"></i></a>
								<a href=""><i class="fab fa-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-12 todos">
							<h5 class="derechos">Todos los derechos reservados © Base Pública 2019</h5>
						</div>

			</footer><!-- #site-footer -->




		<?php wp_footer(); ?>

	</body>
</html>
