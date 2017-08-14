<?php
/*
Template Name: Template Dior
*/
?>
<?php get_header(); ?>


	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	<body class="interne">

	<?php get_template_part('menu'); ?>


		<div class="offre-dior">
		</div>

		<div class="container offre">
			 <h1><?php echo get_theme_mod('dior_titre', 'Musée et Jardin Christian Dior'); ?></h1>

			 <h4><?php echo get_theme_mod('dior_baseline', 'Profiter d\'un cadre exceptionnel au coeur de la fabuleuse histoire du grand couturier'); ?></h4>

			 <h4><img src="<?php echo get_theme_mod('dior_icone', get_bloginfo('template_url').'/img/dior-icone.png'); ?>" alt="" title="" height="150px" /></h4>

			 <p class="chapeau"><?php echo get_theme_mod('dior_intro', 'Nous vous emmenons dans cette belle demeure au style anglo-normand où ont vécu Christian Dior et famille pour la réalisation de vos événementiels d\'entreprise.'); ?></p>

			 <p class="text-center"><a href="<?php echo get_theme_mod('dior_devis_btn_url', '#'); ?>" class="bouton"><?php echo get_theme_mod('dior_devis_btn_texte', 'Contact &amp; Devis'); ?></a></p>
		</div><!-- /.container -->


		<div class="bandes">
			<div class="bande-light">
				<div class="container">
					<div class="row vertical-align">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('dior_img_1', get_bloginfo('template_url').'/img/dior1.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('dior_titre_1', 'Soirée privée et visite réceptive'); ?></h2>

							<p><?php echo get_theme_mod('dior_texte_1', 'Nous vous proposons en exclusivité l\'organisation de votre soirée privée au sein même de la villa du couturier.<br /><br /> Situé à flanc des falaises nord de Granville, dominant la mer, le jardin du musée Christian Dior dispose d\'un espace paysager d\'un hectare et d\'une terrasse panoramique ouvrant sur l\'archipel de Chausey.<br /><br />Nous incluons à votre opération une visite privée guidée du musée avec remise de cadeau souvenir dédié.'); ?></p>

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-light -->


			<div class="bande-light">
				<div class="container">
					<div class="row vertical-align">
						
						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('dior_titre_2', 'Exposition annuelle'); ?></h2>

							<p><?php echo get_theme_mod('dior_texte_2', 'Le musée Christian Dior accueille chaque année une spectaculaire exposition à la thématique renouvelée que nous pouvons intégrer à votre programme selon la période retenue.'); ?></p>
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('dior_img_2', get_bloginfo('template_url').'/img/dior2.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-light -->


			<div class="bande-dark">
				<div class="container">
					<div class="row vertical-align">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('dior_img_3', get_bloginfo('template_url').'/img/dior3.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('dior_titre_3', 'Exemple de programme'); ?></h2>

							<p><?php echo get_theme_mod('dior_texte_3', 'L\'offre exclusive Christian Dior peut être insérée dans un programme complet sur Granville comprenant séminaire de travail / conférence et activités incentives.<br /><br />
								- Accueil à partir de 18h00<br />
								- Champagne de bienvenue<br />
								- Remise d\'un cadeau souvenir<br />
								- Visite privée guidée de l\'exposition<br />
								- Mise en lumière spéciale du musée et du jardin'); ?>
							</p>

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-dark -->
		</div><!-- /.bandes -->

		<div class="container offre">
			<p class="text-center"><a href="<?php echo get_theme_mod('dior_devis_btn_url', '#'); ?>" class="bouton bas"><?php echo get_theme_mod('dior_devis_btn_texte', 'Contact &amp; Devis'); ?></a></p>
		</div><!-- /. container -->

<?php get_footer(); ?>