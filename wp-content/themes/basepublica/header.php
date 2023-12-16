<?php
/**
 * Header file for the Base Publica WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Base Publica 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
		<script src="https://kit.fontawesome.com/d45bb8cef5.js" crossorigin="anonymous"></script>
		<link href="<?php echo(get_stylesheet_directory_uri()); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo(get_stylesheet_directory_uri()); ?>/assets/css/carousel.css" rel="stylesheet">
		<script type="text/javascript" src="//cdn.jsdelivr.net/afterglow/latest/afterglow.min.js"></script>
		<?php wp_head(); ?>
		<link href="<?php echo(get_stylesheet_directory_uri()); ?>/assets/css/menu-principal.css" rel="stylesheet">

		<script type="text/javascript">
			let ubicacionprincipal =window.pageYOffset;
			window.onscroll = function(){
			let Desplazamiento = window.pageYOffset;
			if(ubicacionprincipal >= Desplazamiento){
				this.document.getElementById('barra-superior').style.display='flex';
					document.getElementById('site-header').style.background= '#00000';
					document.getElementById('site-header').style.maxHeight = '50px';
			}else{
				document.getElementById('barra-superior').style.display= 'none'
				document.getElementById('site-header').style.background= 'rgba(0, 0, 0, 0.6)';
				document.getElementById('site-header').style.maxHeight = '71px';
			}
			}
		</script>

	</head>

	<body <?php body_class(); ?>>

		<?php
//		wp_body_open();
		?>

<header id="site-header" class="header-footer-group" role="banner">
<div class="container barra-sup" id="barra-superior2">
	<nav class="navbar navbar-expand-md mb-0" id="barra-superior">
		<div class="row" id="barra-superior">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">CONTACTO</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">TU EVENTO EN BP</a>
				</li>
				<li class="nav-item">
        	<a class="nav-link" href="https://www.facebook.com/basepublica/" target="_blank"><i class="fab fa-facebook-f"></i></a>
				                </li>
				<li class="nav-item">
				 <a class="nav-link" href="https://twitter.com/basepublica" target="_blank"><i class="fab fa-twitter"></i> </a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="https://www.instagram.com/basepublica/" target="_blank"><i class="fab fa-instagram"></i></a>
				</li>
				<li class="nav-item">
				 <a class="nav-link" href="https://www.youtube.com/channel/UCrPcPOCG0-SfyS3qQj_PJbA" target="_blank"><i class="fab fa-youtube"></i></a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fab fa-twitter"></i> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
				</li> -->
				<!-- <li class="form-inline mt-2 mt-md-0"><?php //get_search_form();?></li> -->
			</ul>
		</div>
	</nav>
</div>

<div class="nuevocontainer">
	<nav class="navbar navbar-expand-lg navbar-light bg-transparent ajustes">
		<a class="navbar-brand" href="http://basepublica.org/" target="_blank"><img src="<?php echo(get_stylesheet_directory_uri()); ?>/img/logo-home.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarNav">
				<?php // wp_nav_menu( array('menu' => 'Menu Principal '));?>
				<?php wp_nav_menu( array('menu' => 'Menu Principal Derecha'));?>
	</div>
	</nav>
</div>
</header>
