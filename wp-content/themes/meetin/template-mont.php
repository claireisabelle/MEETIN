<?php
/*
Template Name: Template Mont-Saint-Michel
*/
?>
<?php get_header(); ?>


	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	<body class="interne">

	<?php get_template_part('menu'); ?>


		<div class="offre-mont">
		</div>

		<div class="container offre">
			 <h1><?php echo get_theme_mod('mont_titre', 'Mont-Saint-Michel'); ?></h1>

			 <h4><?php echo get_theme_mod('mont_baseline', 'Allier activités d\'affaire et magnificence d\'un site d\'exception'); ?></h4>

			 <h4><img src="<?php echo get_theme_mod('mont_icone', get_bloginfo('template_url').'/img/mont-court.png'); ?>" alt="" title="" height="150px" /></h4>

			 <p class="chapeau"><?php echo get_theme_mod('mont_intro', 'Notre offre exclusive vous emmène sur l\'un des plus symboliques lieux de France : le Mont-Saint-Michel et son abbaye. Nous vous proposons une prestation originale, construite sur mesure, parfaitement adaptée pour des groupes accueillant jusqu\'à 300 personnes.'); ?></p>

			 <p class="text-center"><a href="<?php echo get_theme_mod('mont_devis_btn_url', '#'); ?>" class="bouton"><?php echo get_theme_mod('mont_devis_btn_texte', 'Contact &amp; Devis'); ?></a></p>
		</div><!-- /.container -->


		<div class="bandes">
			<div class="bande-light">
				<div class="container">
					<div class="row vertical-align">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('mont_img_1', get_bloginfo('template_url').'/img/mont-cloitre.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('mont_titre_1', 'Réunions professionnelles et visites dédiées'); ?></h2>

							<p><?php echo get_theme_mod('mont_texte_1', 'Pour accueillir vos réunions ou séminaires d\'entreprise, nous mettons à votre disposition la partie centrale de l\'abbaye entourant l\'église : Cloître, Réfectoire des moines, Salle Belle-Chaise, Salle des Chevaliers.<br /><br />En complément, nous concevons une visite exclusive et personnalisée de l\'abbaye, avec un thème spécifique si vous le souhaitez.'); ?></p>

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-light -->


			<div class="bande-light">
				<div class="container">
					<div class="row vertical-align">
						
						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('mont_titre_2', 'Concerts privés'); ?></h2>

							<p><?php echo get_theme_mod('mont_texte_2', 'Grâce à notre partenariat exclusif avec le label indépendant Arcandia Records, qui depuis de nombreuses années produit et enregistre des concerts exceptionnels au cœur de l\'abbaye du Mont-Saint-Michel, nous pouvons offrir à nos clients des concerts "sur mesure".<br /><br />La majorité des concerts, réunissant des artistes internationaux distingués, a lieu dans l\'église abbatiale. Pour une alternative plus intime, nos récitals privés se déroulent généralement dans la splendide salle Belle-Chaise, mais peuvent être donnés ailleurs dans l\'abbaye en fonction de la taille et paramètres de votre événement.'); ?></p>
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('mont_img_2', get_bloginfo('template_url').'/img/mont-concert.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-light -->


			<div class="bande-dark">
				<div class="container">
					<div class="row vertical-align">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('mont_img_3', get_bloginfo('template_url').'/img/mont-programme.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('mont_titre_3', 'Exemple de programme'); ?></h2>

							<p><?php echo get_theme_mod('mont_texte_3', '9h30 : accueil des invités...<br />
							10h00 : ...<br />
							12h15 : ...<br />
							14h00 : ...<br />
							16h45 : ...<br />
							17h00 : ...<br />
							19h00 : ...<br />
							21h00 : ...<br />'); ?>
							</p>

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-dark -->
		</div><!-- /.bandes -->

		<div class="container offre">
			<p class="text-center"><a href="<?php echo get_theme_mod('mont_devis_btn_url', '#'); ?>" class="bouton bas"><?php echo get_theme_mod('mont_devis_btn_texte', 'Contact &amp; Devis'); ?></a></p>
		</div><!-- /. container -->

<?php get_footer(); ?>