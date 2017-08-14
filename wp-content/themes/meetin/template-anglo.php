<?php
/*
Template Name: Template Anglo
*/
?>
<?php get_header(); ?>


	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	<body class="interne">

	<?php get_template_part('menu'); ?>


		<div class="offre-anglo">
		</div>

		<div class="container offre">
			 <h1><?php echo get_theme_mod('anglo_titre', 'Îles Anglo-Normandes'); ?></h1>

			 <h4><?php echo get_theme_mod('anglo_baseline', 'Associer séminaire d\'entreprise et magnificence environnementale'); ?></h4>

			 <h4><img src="<?php echo get_theme_mod('anglo_icone', get_bloginfo('template_url').'/img/anglo-icone.png'); ?>" alt="" title="" height="150px" /></h4>

			 <p class="chapeau"><?php echo get_theme_mod('anglo_intro', 'Nous vous accueillons au sein des paysages exceptionnels des îles anglo-normandes. Nous transportons votre séminaire d\'entreprise au coeur de panoramas inoubliables.'); ?></p>

			 <p class="text-center"><a href="<?php echo get_theme_mod('anglo_devis_btn_url', '#'); ?>" class="bouton"><?php echo get_theme_mod('anglo_devis_btn_texte', 'Contact &amp; Devis'); ?></a></p>
		</div><!-- /.container -->


		<div class="bandes">
			<div class="bande-light">
				<div class="container">
					<div class="row vertical-align">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('anglo_img_1', get_bloginfo('template_url').'/img/anglo1.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('anglo_titre_1', 'Jersey et Guernesey'); ?></h2>

							<p><?php echo get_theme_mod('anglo_texte_1', 'Ces deux îles en particulier offrent de formidables opportunités pour des opérations réceptives à visée professionnelle.<br /><br /> Du séminaire de travail aux opérations de relations publiques, nous vous organisons des "packages" complets associant en permanance qualité des composants et rareté du moment vécu.'); ?></p>

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-light -->


			<div class="bande-light">
				<div class="container">
					<div class="row vertical-align">
						
						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('anglo_titre_2', 'Incentive nautique'); ?></h2>

							<p><?php echo get_theme_mod('anglo_texte_2', 'En marge de votre séminaire, nous vous proposons de profiter de grands bols d\'air via des activités nautiques variées : navigation sportive, balade à bord de vieux gréements, randonnée en kayak de mer...'); ?></p>
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('anglo_img_2', get_bloginfo('template_url').'/img/anglo2.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-light -->


			<div class="bande-dark">
				<div class="container">
					<div class="row vertical-align">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('anglo_img_3', get_bloginfo('template_url').'/img/anglo3.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('anglo_titre_3', 'Exemple de programme'); ?></h2>

							<p><?php echo get_theme_mod('anglo_texte_3', '9h30 : accueil des invités...<br />10h00 : ...<br />'); ?>
							</p>

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-dark -->
		</div><!-- /.bandes -->

		<div class="container offre">
			<p class="text-center"><a href="<?php echo get_theme_mod('anglo_devis_btn_url', '#'); ?>" class="bouton bas"><?php echo get_theme_mod('anglo_devis_btn_texte', 'Contact &amp; Devis'); ?></a></p>
		</div><!-- /. container -->

<?php get_footer(); ?>