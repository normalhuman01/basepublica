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
		<link href="<?php echo(get_stylesheet_directory_uri()); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
//		wp_body_open();
		?>

<header id="site-header" class="header-footer-group" role="banner">
</header>
