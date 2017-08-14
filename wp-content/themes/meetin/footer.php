		<footer class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?php wp_nav_menu('footer'); ?>
					</div><!-- /.col -->

					<div class="col-xs-12 col-sm-6 col-md-4">
						<p class="text-center brown">
							<a href="<?php echo get_theme_mod('footer_twitter_btn_url', 'https://twitter.com/MeetinNormandy'); ?>" class="brown"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a><br />
							<?php echo get_theme_mod('footer_telephone', '+33 (0)2 33 79 21 04'); ?><br />
							<a href="mailto:<?php echo get_theme_mod('footer_email_btn_url', 'info@meetinnormandy.eu'); ?>" class="brown"><?php echo get_theme_mod('footer_email_btn_url', 'info@meetinnormandy.eu'); ?></a>
						</p>

						<p class="text-center"><small>&copy; <?php echo get_theme_mod('footer_description', 'Meet’in Normandy / AngloNormandy Ltd'); ?> - <?php echo date('Y'); ?><br />
						<a href="<?php echo get_theme_mod('footer_mentions_btn_url', '#'); ?>"><?php echo get_theme_mod('footer_mentions_btn_texte', 'Mentions légales'); ?></a></small></p>
					</div><!-- /.col -->

					<div class="col-xs-12 col-md-4">
						<p class="text-center">
							<img src="<?php echo get_theme_mod('footer_logo', get_bloginfo('template_url').'/img/logo2.png'); ?>" alt="" title="" />
						</p>
					</div><!-- /.col -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer>




		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/meetin.js"></script>

		<script>
		window.sr = ScrollReveal(); 

        sr.reveal('.chapeau',  {
          duration: 2000,
          viewFactor: 0.2 
        });

        sr.reveal('.animation',  {
          duration: 1500,
          viewFactor: 0.2 
        });

        sr.reveal('.bouton',  {
          duration: 1500,
          distance: '100px',
          viewFactor: 0.3 
        });

		</script>

	<?php wp_footer(); ?>
	</body>
</html>