<?php
/*
Template Name: Template Séminaires
*/
?>
<?php get_header(); ?>


	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	<body class="interne">

	<?php get_template_part('menu'); ?>


		<div class="offre-seminaire">
		</div>

		<div class="container offre">
			 <h1><?php echo get_theme_mod('seminaire_titre', 'Séminaires &amp; événementiels'); ?></h1>

			 <h4><?php echo get_theme_mod('seminaire_baseline', 'Organiser votre événement d\'entreprise en accord avec votre stratégie marketing et de communication'); ?></h4>

			 <h4><img src="<?php echo get_theme_mod('seminaire_icone', get_bloginfo('template_url').'/img/seminaire-icone.png'); ?>" alt="" title="" height="150px" /></h4>

			 <p class="chapeau"><?php echo get_theme_mod('seminaire_intro', 'Nous développons des programmes sur mesure pour l\'organisation de vos opérations d\'entreprise en Normandie. Nous vous proposons une prestation complète pour tous vos séminaires, réunions d\'affaire, conférences, incentives, quelque soit le nombre de participants.'); ?></p>

			 <p class="text-center"><a href="<?php echo get_theme_mod('seminaire_devis_btn_url', '#'); ?>" class="bouton"><?php echo get_theme_mod('seminaire_devis_btn_texte', 'Contact &amp; Devis'); ?></a></p>
		</div><!-- /.container -->


		<div class="bandes">
			<div class="bande-light">
				<div class="container">
					<div class="row vertical-align">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('seminaire_img_1', get_bloginfo('template_url').'/img/seminaire1.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('seminaire_titre_1', 'Séminaire d\'entreprise - Événementiels'); ?></h2>

							<p><?php echo get_theme_mod('seminaire_texte_1', 'Nous organisons la mise en oeuvre complète de vos événements et opérations d\'affaire selon vos besoins.<br /><br />Notre savoir-faire nous permet d\'intégrer dans votre projet tous les aspects essentiels au déroulement de votre opération : accueil, restauration, logistique ainsi que tous les élements connexes de communication tels la production de produits et cadeaux personnalisés, les invitations, les relations medias...'); ?></p>

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-light -->


			<div class="bande-light">
				<div class="container">
					<div class="row vertical-align">
						
						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('seminaire_titre_2', 'Activités incentives'); ?></h2>

							<p><?php echo get_theme_mod('seminaire_texte_2', 'En parallèle de votre opération d\'entreprise, nous pouvons intégrer à votre programme un large panel d\'activités culturelles ou sportives et ainsi offrir à vos collaborateurs, équipes, clients, des moments privilégiés de team-builduing.
								<br /><br />Selon la taille de votre groupe et vos souhaits, nous vous proposons des activités adaptées (sports de pleine nature, jeux d\'équipes, challenges...)'); ?></p>
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('seminaire_img_2', get_bloginfo('template_url').'/img/seminaire2.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-light -->


			<div class="bande-dark">
				<div class="container">
					<div class="row vertical-align">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_theme_mod('seminaire_img_3', get_bloginfo('template_url').'/img/seminaire3.jpg'); ?>" alt="" title="" class="img-responsive center-block" />
						</div><!-- /.col -->

						<div class="col-xs-12 col-md-6 animation">
							<h2><?php echo get_theme_mod('seminaire_titre_3', 'La Normandie, territoire riche et étonnant'); ?></h2>

							<p><?php echo get_theme_mod('seminaire_texte_3', 'Nous intervenons sur l\'ensemble des 5 départements normands : Manche, Calvados, Orne, Eure et Seine-Maritime. Nous vous emmenons dans des endroits magiques pour des séminaires et activités marquants : Mont-Saint-Michel, musée Christian Dior, archipel anglo-normand, Deauville, Suisse Normande... et bien d\'autres.
								<br /><br />Consultez-nous pour la réalisation clé en main de votre opération d\'entreprise !'); ?>
							</p>

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.bande-dark -->
		</div><!-- /.bandes -->

		<div class="container offre">
			<p class="text-center"><a href="<?php echo get_theme_mod('seminaire_devis_btn_url', '#'); ?>" class="bouton bas"><?php echo get_theme_mod('seminaire_devis_btn_texte', 'Contact &amp; Devis'); ?></a></p>
		</div><!-- /. container -->

<?php get_footer(); ?>