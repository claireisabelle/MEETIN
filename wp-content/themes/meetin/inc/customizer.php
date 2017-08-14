<?php
	function wpb_customize_register($wp_customize){

		// ***
		// FRONT PAGE
		// ***
		$wp_customize->add_section('front', array(
			'title'			=> __('Front Page', 'meetin'),
			'description'	=> sprintf(__('Contenu de la page d\'accueil', 'meetin')),
			'priority'		=> 1
		));

		// Front LOGO
		$wp_customize->add_setting('front_logo', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_logo', array(
			'label'			=> __('Logo', 'meetin'),
			'section'		=> 'front',
			'settings'		=> 'front_logo',
			'priority'		=> 1
		)));

		// Front IMG MAIN COVER
		$wp_customize->add_setting('front_cover', array(
			'default'		=> get_bloginfo('template_directory').'/img/front-cover.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_cover', array(
			'label'			=> __('Image de couverture', 'meetin'),
			'section'		=> 'front',
			'settings'		=> 'front_cover',
			'priority'		=> 2
		)));

		// Front INTRO
		// -- Texte
		$wp_customize->add_setting('front_intro_texte', array(
			'default' 		=> _x('De la Baie du Mont-Saint-Michel et de l’archipel Anglo-Normand aux confins de la baie de Somme, et au travers du maillage des trésors de la Normandie toute entière, nous délivrons à nos clients des solutions originales et soignées pour la réussite de séminaires, d’évènements d’entreprise et de réunions professionnelles d’exception. Découvrez nos prestations sur mesure et nos offres exclusives...','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_intro_texte', array(
			'label' 		=> __('Intro - Texte', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'front',
			'type' 			=> 'textarea',
			'priority' 		=> 3
		));
		// -- Bouton
		$wp_customize->add_setting('front_intro_btn_texte', array(
			'default' 		=> _x('Séminaires &amp; Événementiels','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_intro_btn_texte', array(
			'label' 		=> __('Intro - Bouton (texte)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 4
		));

		$wp_customize->add_setting('front_intro_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_intro_btn_url', array(
			'label' 		=> __('Intro - Bouton (url)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 5
		));


		// Front MSM
		// -- Image
		$wp_customize->add_setting('front_msm_img', array(
			'default'		=> get_bloginfo('template_directory').'/img/mont-saint-michel-bg2.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_msm_img', array(
			'label'			=> __('MSM - Image', 'meetin'),
			'section'		=> 'front',
			'settings'		=> 'front_msm_img',
			'priority'		=> 6
		)));

		// -- Titre Image
		$wp_customize->add_setting('front_msm_img_titre', array(
			'default' 		=> _x('Mont-Saint-Michel','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_msm_img_titre', array(
			'label' 		=> __('MSM - Titre de l\'image', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 7
		));

		// -- Titre
		$wp_customize->add_setting('front_msm_titre', array(
			'default' 		=> _x('Offre exclusive Mont-Saint-Michel','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_msm_titre', array(
			'label' 		=> __('MSM - Titre', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 8
		));

		// -- Description
		$wp_customize->add_setting('front_msm_description', array(
			'default' 		=> _x('Théâtre des plus grandes marées d\'Europe continentale, l\'ilot du Mont-Saint-Michel et son abbaye offrent un cadre exceptionnel pour vos réunions ou séminaires d\'entreprise. Espaces dédiés, visite exclusivite thématisée, nous vous proposons un programme sur mesure unique...','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_msm_description', array(
			'label' 		=> __('MSM - Description', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'front',
			'type' 			=> 'textarea',
			'priority' 		=> 9
		));

		// -- Bouton
		$wp_customize->add_setting('front_msm_btn_texte', array(
			'default' 		=> _x('Découvrir l\'offre','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_msm_btn_texte', array(
			'label' 		=> __('MSM - Bouton (texte)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 10
		));

		$wp_customize->add_setting('front_msm_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_msm_btn_url', array(
			'label' 		=> __('MSM - Bouton (url)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 11
		));


		// Front DIOR
		// -- Image
		$wp_customize->add_setting('front_dior_img', array(
			'default'		=> get_bloginfo('template_directory').'/img/dior-bg.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_dior_img', array(
			'label'			=> __('DIOR - Image', 'meetin'),
			'section'		=> 'front',
			'settings'		=> 'front_dior_img',
			'priority'		=> 12
		)));

		// -- Titre Image
		$wp_customize->add_setting('front_dior_img_titre', array(
			'default' 		=> _x('Christian Dior','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_dior_img_titre', array(
			'label' 		=> __('DIOR - Titre de l\'image', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 13
		));

		// -- Titre
		$wp_customize->add_setting('front_dior_titre', array(
			'default' 		=> _x('Offre exclusive Musée Christian Dior','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_dior_titre', array(
			'label' 		=> __('DIOR - Titre', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 14
		));

		// -- Description
		$wp_customize->add_setting('front_dior_description', array(
			'default' 		=> _x('Située à Granville, la Villa "Les Rhumbs", maison d\'enfance de Christian Dior, accueille l\'unique musée de France consacré au couturier. Offrez à vos invités, clients, partenaires ou collaborateurs, un programme inédit dans l\'intimité d\'une demeure d\'exception, et profitez d\'un dispositif sur mesure.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_dior_description', array(
			'label' 		=> __('DIOR - Description', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'front',
			'type' 			=> 'textarea',
			'priority' 		=> 15
		));

		// -- Bouton
		$wp_customize->add_setting('front_dior_btn_texte', array(
			'default' 		=> _x('Découvrir l\'offre','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_dior_btn_texte', array(
			'label' 		=> __('DIOR - Bouton (texte)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 16
		));

		$wp_customize->add_setting('front_dior_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_dior_btn_url', array(
			'label' 		=> __('DIOR - Bouton (url)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 17
		));


		// Front ANGLO
		// -- Image
		$wp_customize->add_setting('front_anglo_img', array(
			'default'		=> get_bloginfo('template_directory').'/img/guernsey-bg.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_anglo_img', array(
			'label'			=> __('ANGLO - Image', 'meetin'),
			'section'		=> 'front',
			'settings'		=> 'front_anglo_img',
			'priority'		=> 18
		)));

		// -- Titre Image
		$wp_customize->add_setting('front_anglo_img_titre', array(
			'default' 		=> _x('îles Anglo-normandes','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_anglo_img_titre', array(
			'label' 		=> __('ANGLO - Titre de l\'image', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 19
		));

		// -- Titre
		$wp_customize->add_setting('front_anglo_titre', array(
			'default' 		=> _x('Offre exclusive Archipel Anglo-Normand','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_anglo_titre', array(
			'label' 		=> __('ANGLO - Titre', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 20
		));

		// -- Description
		$wp_customize->add_setting('front_anglo_description', array(
			'default' 		=> _x('Composante essentielle de la Normandie historique, l\'archipel anglo-normand - Jersey et Guernesey notamment - offre de formidables opportunités pour des opérations réceptives à visée professionnelle : séminaires, incentives, relations publiques...','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_anglo_description', array(
			'label' 		=> __('ANGLO - Description', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'front',
			'type' 			=> 'textarea',
			'priority' 		=> 21
		));

		// -- Bouton
		$wp_customize->add_setting('front_anglo_btn_texte', array(
			'default' 		=> _x('Découvrir l\'offre','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_anglo_btn_texte', array(
			'label' 		=> __('ANGLO - Bouton (texte)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 22
		));

		$wp_customize->add_setting('front_anglo_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_anglo_btn_url', array(
			'label' 		=> __('ANGLO - Bouton (url)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 23
		));

		// Front LANGUE
		$wp_customize->add_setting('front_langue_btn_texte', array(
			'default' 		=> _x('EN','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_langue_btn_texte', array(
			'label' 		=> __('Langue - Bouton (texte)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 24
		));

		$wp_customize->add_setting('front_langue_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front_langue_btn_url', array(
			'label' 		=> __('Langue - Bouton (url)', 'meetin'),
			'section' 		=> 'front',
			'type' 			=> 'text',
			'priority' 		=> 25
		));


	}


	add_action('customize_register', 'wpb_customize_register');