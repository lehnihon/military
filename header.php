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

</head>

<body class="is-loading">
<div id="page">
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-dark">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="row collapse navbar-collapse" id="navbarSupportedContent">
							<div class="col-md">
								<a class="nav-link" href="#sobre">Início</a>
							</div>
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/historia' ); ?>">A Unique Massagem</a>
							</div>
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/marca-propria' ); ?>">Massagens</a>
							</div>
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/distribuicao' ); ?>">Estética</a>
							</div>
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/contato' ); ?>">Fale Conosco</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


