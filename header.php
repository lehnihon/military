<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<div id="page">
	<div id="pesquisa">
		<div class="container">
			<div class="row">
				<div class="col-md-2 text-left">
					<img class="logop" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logop.png"; ?>"/>
				</div>
				<div class="col-md">
					<input type="text" name="cbuscar" class="cbusca">
					<img class="bbusca" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-busca.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</div>
	<header id="header" class="header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="row no-gutters collapse navbar-collapse text-left" id="navbarSupportedContent">
					<div class="col-md-auto">
						<a class="nav-link" href="#pesquisa">HOME</a>
					</div>
					<div class="col-md-auto">
						<a class="nav-link" href="#bcgb">SOBRE</a>
					</div>
					<div class="col-md-auto">
						<a class="nav-link" href="#bcgc">ESTRUTURA</a>
					</div>
					<div class="col-md-auto">
						<a class="nav-link" href="#bcgd">HORÁRIOS/PLANOS</a>
					</div>
					<div class="col-md-auto">
						<a class="nav-link" href="#trabalhe">TRABALHE CONOSCO</a>
					</div>
				</div>
			</nav>
		</div><!-- .container -->
	</header><!-- #masthead -->


