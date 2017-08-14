<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset='<?php bloginfo('charset') ?>'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- CSS customize -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" >

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- CSS Backgrounds-->
		<style>
			.front-pimg1{background-image:url('<?php echo get_theme_mod('front_cover', get_bloginfo('template_url').'/img/front-cover.jpg'); ?>');}

			.front-pimg2{background-image:url('<?php echo get_theme_mod('front_msm_img', get_bloginfo('template_url').'/img/mont-saint-michel-bg2.jpg'); ?>');}

			.front-pimg3{background-image:url('<?php echo get_theme_mod('front_dior_img', get_bloginfo('template_url').'/img/dior-bg.jpg'); ?>');}

			.front-pimg4{background-image:url('<?php echo get_theme_mod('front_anglo_img', get_bloginfo('template_url').'/img/guernsey-bg.jpg'); ?>');}

		</style>
		
		<?php wp_head(); ?>
	</head>
	
	<body>

		<div class="front-pimg1">

			<div class="front-ptext-langue">
				<a href="<?php echo get_theme_mod('front_langue_btn_url', '#'); ?>"><?php echo get_theme_mod('front_langue_btn_texte', 'EN'); ?></a>
			</div>

			<div class="front-ptext">
				<span class="logo-border">
					<img src="<?php echo get_theme_mod('front_logo', get_bloginfo('template_url').'/img/logo.png'); ?>" alt="Meet'in Normandy" title="" />
				</span>
			</div>

			<div class="front-ptext-chevron">
				<a href="#home" class="scroll"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
			</div>

		</div><!-- /.front-pimg1 -->


		<section class="front-section front-section-light" id="home">
			<p><?php echo get_theme_mod('front_intro_texte', 'De la Baie du Mont-Saint-Michel et de l’archipel Anglo-Normand aux confins de la baie de Somme, et au travers du maillage des trésors de la Normandie toute entière, nous délivrons à nos clients des solutions originales et soignées pour la réussite de séminaires, d’évènements d’entreprise et de réunions professionnelles d’exception. Découvrez nos prestations sur mesure et nos offres exclusives...'); ?>			
			</p>
			<p><br /><a href="<?php echo get_theme_mod('front_intro_btn_url', '#'); ?>" class="btn btn-primary"><?php echo get_theme_mod('front_intro_btn_texte', 'Séminaires &amp; Evénementiels'); ?></a></p>
		</section>


		<div class="front-pimg2">
			<div class="front-ptext">
				<span class="border trans">
					<?php echo get_theme_mod('front_msm_img_titre', 'Mont-Saint-Michel'); ?>
				</span>
			</div>
		</div><!--/.front-pimg2 -->

		<section class="front-section front-section-dark">
			<h2><?php echo get_theme_mod('front_msm_titre', 'Offre exclusive Mont-Saint-Michel'); ?></h2>
			<p>
			<?php echo get_theme_mod('front_msm_description', 'Théâtre des plus grandes marées d\'Europe continentale, l\'ilot du Mont-Saint-Michel et son abbaye offrent un cadre exceptionnel pour vos réunions ou séminaires d\'entreprise. Espaces dédiés, visite exclusivite thématisée, nous vous proposons un programme sur mesure unique...'); ?>
			</p>
			<p><br /><a href="<?php echo get_theme_mod('front_msm_btn_url', '#'); ?>" class="btn btn-primary"><?php echo get_theme_mod('front_msm_btn_texte', 'Découvrir l\'offre'); ?></a></p>
		</section>


		<div class="front-pimg3">
			<div class="front-ptext">
				<span class="border trans">
					<?php echo get_theme_mod('front_dior_img_titre', 'Christian Dior'); ?>
				</span>
			</div>
		</div><!--/.front-pimg3 -->

		<section class="front-section front-section-light">
			<h2><?php echo get_theme_mod('front_dior_titre', 'Offre exclusive Musée Christian Dior'); ?></h2>
			<p>
			<?php echo get_theme_mod('front_dior_description', 'Située à Granville, la Villa "Les Rhumbs", maison d\'enfance de Christian Dior, accueille l\'unique musée de France consacré au couturier. Offrez à vos invités, clients, partenaires ou collaborateurs, un programme inédit dans l\'intimité d\'une demeure d\'exception, et profitez d\'un dispositif sur mesure.'); ?>
			</p>
			<p><br /><a href="<?php echo get_theme_mod('front_dior_btn_url', '#'); ?>" class="btn btn-primary"><?php echo get_theme_mod('front_dior_btn_texte', 'Découvrir l\'offre'); ?></a></p>
		</section>


		<div class="front-pimg4">
			<div class="front-ptext">
				<span class="border trans">
					<?php echo get_theme_mod('front_anglo_img_titre', 'îles Anglo-Normandes'); ?>
				</span>
			</div>
		</div><!--/.front-pimg4 -->

		<section class="front-section front-section-light">
			<h2><?php echo get_theme_mod('front_anglo_titre', 'Offre exclusive Archipel Anglo-Normand'); ?></h2>
			<p>
			<?php echo get_theme_mod('front_anglo_description', 'Composante essentielle de la Normandie historique, l\'archipel anglo-normand - Jersey et Guernesey notamment - offre de formidables opportunités pour des opérations réceptives à visée professionnelle : séminaires, incentives, relations publiques...'); ?>
			</p>
			<p><br /><a href="<?php echo get_theme_mod('front_anglo_btn_url', '#'); ?>" class="btn btn-primary"><?php echo get_theme_mod('front_anglo_btn_texte', 'Découvrir l\'offre'); ?></a></p>
		</section>
		

		<section class="front-section front-section-white front-logo">

			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<h2><?php the_title() ?></h2>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php __('Erreur survenue'); ?>
			<?php endif; ?>
	
		</section>

<?php get_footer(); ?>