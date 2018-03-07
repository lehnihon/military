	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<img class="logo-fot img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-bot.jpg"; ?>"/><br><br><br>
					<h4>CONTATO</h4>
					<p>
						<?php the_field('telefone'); ?><br>
						<?php the_field('email'); ?>
					</p>
					<p>
						<div class="row">
							<div class="redes">
								<a target="_blank" href="<?php the_field('facebook'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes1b.jpg"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('twitter'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes2b.jpg"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('google'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes3b.jpg"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('instagram'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes4b.jpg"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('youtube'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes5b.jpg"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('pinterest'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes6b.jpg"; ?>"/></a>
							</div>
							<div class="redes">
								<a target="_blank" href="<?php the_field('linkedin'); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes7b.jpg"; ?>"/></a>
							</div>
						</div>
					</p>
					<p>
						Rua Furqui Werneck, 840 - Tupi - BH/MG<br>
						CEP: 31 775 350 - Brasil<br>
						(c) Todos os Direitos de Imagem Reservados.<br>
						by <span class="amarelo">DIOGO SANTOS</span>
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
