<?php
get_header(); ?>

<div id="content">
	<div id="bcg" class="wow animated fadeIn" data-wow-duration="3s">
		<?php
		preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', get_field('cabecalho_link'), $match);
		$url = $match[1];
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<img class="logo img-fluid wow animated fadeInUp" data-wow-delay="1.5s" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>"/>
					<h1 class="wow animated fadeInUp" data-wow-delay="1.75s"><?php the_field('cabecalho_titulo'); ?></h1>
					<div class="separador wow animated fadeInLeft" data-wow-delay="2s"></div>
					<p class="wow animated fadeIn" data-wow-delay="2.25s"><?php the_field('cabecalho_descricao'); ?></p>
				</div>
				<div class="video embed-responsive embed-responsive-16by9 wow animated fadeIn" data-wow-delay="2.5s"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $url; ?>" frameborder="0" allowfullscreen></iframe></div>
			</div>
			
		</div>
	</div>
	<div id="bcgb">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<div class="separador wow animated fadeInLeft"></div>
					<h2 class="wow animated fadeInUp"><?php the_field('sobre_titulo_1'); ?></h2>
					<h3 class="wow animated fadeInUp"><?php the_field('sobre_titulo_2'); ?></h3>
					<div class="wow animated fadeIn">
						<?php the_field('sobre_descricao'); ?>
					</div><br><br>
					<a class="btn-preto wow animated fadeInUp" href="#bcgc">SEGUINTE >></a><br><br>
					<a class="btn-preto wow animated fadeInUp" href="#bcgf">QUERO SER AFILIADO >></a>
				</div>
			</div>
		</div>
	</div>
	<div id="bcgc">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<div class="separador wow animated fadeInLeft"></div>
					<h2 class="wow animated fadeInUp"><?php the_field('estrutura_titulo'); ?></h2>
					<div class="wow animated fadeIn">
						<?php the_field('estrutura_descricao'); ?>
					</div><br><br>
					<div class="wow animated fadeIn">
						<?php the_field('estrutura_slider'); ?>
					</div>
				</div>
			</div>
			<img class="military-base" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/military-base.png"; ?>"/>
		</div>
	</div>
	<div id="bcgd">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<div class="separador wow animated fadeInLeft"></div>
					<h2 class="wow animated fadeInUp"><?php the_field('cronograma_titulo'); ?></h2>
					<div class="wow animated fadeIn">
						<?php the_field('cronograma_descricao'); ?>
					</div>
				</div>
				<img class="cronograma img-fluid wow animated fadeIn" src="<?php the_field('cronograma_foto'); ?>"/>
			</div>
		</div>
	</div>
	<div id="bcge">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<a download target="_blank" href="<?php the_field('cronograma_foto'); ?>" class="btn-preto wow animated fadeInUp">DOWNLOAD</a>
					<div class="separador wow animated fadeInLeft"></div>
					<h2 class="wow animated fadeInUp"><?php the_field('produto_titulo'); ?></h2>
					<div class="wow animated fadeIn">
						<?php the_field('produto_descricao'); ?>
					</div><br>
					<a href="#bcgf" class="btn-preto wow animated fadeInUp">QUERO COMPRAR AGORA</a>
				</div>
			</div>
		</div>
	</div>
	<div id="bcgf">
		<div class="container">
			<div id="contato" class="row">
				<div class="col-md-12 text-left">
					<div class="separador wow animated fadeInLeft"></div>
					<h2 class="wow animated fadeInUp"><?php the_field('contato_titulo'); ?></h2>
					<div class="wow animated fadeIn">
						<?php the_field('contato_descricao'); ?>
					</div>
					<br>
					<div class="wow animated fadeIn">
						<?php echo do_shortcode('[contact-form-7 id="47" title="Contato"]'); ?>
					</div><br>
					<p class="wow animated fadeInUp">Ou você pode entrar em contato pelo nosso numero, para esclarecer todas as suas dúvidas:</p>
					<p class="tel wow animated fadeInUp"><?php the_field('telefone'); ?></p>
					<p class="wow animated fadeInUp">
						<div class="row">
							<div class="redes">
								<a target="_blank" href="<?php the_field('facebook'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes1.png"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('twitter'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes2.png"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('google'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes3.png"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('instagram'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes4.png"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('youtube'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes5.png"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('pinterest'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes6.png"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('linkedin'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes7.png"; ?>"/></a>
							</div>
						</div>
					</p>
				</div>
			</div><br><br><br>
			<div id="trabalhe" class="row">
				<div class="col-md-12 text-left">
					<div class="separador wow animated fadeInLeft"></div>
					<h2 class="wow animated fadeInUp"><?php the_field('equipe_titulo'); ?></h2>
					<div class="wow animated fadeIn">
						<?php the_field('equipe_descricao'); ?>
					</div>
					<br>
					<div class="wow animated fadeIn">
						<?php echo do_shortcode('[contact-form-7 id="371" title="Contato 2"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
