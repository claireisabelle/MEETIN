<?php
	function wpb_customize_register_mont($wp_customize){

		// ***
		// MONT-SAINT-MICHEL
		// ***

		$wp_customize->add_section('mont', array(
			'title'			=> __('Offre MSM', 'meetin'),
			'description'	=> sprintf(__('Contenu de l\'offre exclusive Mont-Saint-Michel', 'meetin')),
			'priority'		=> 3
		));


		// Mont COVER
		$wp_customize->add_setting('mont_cover', array(
			'default'		=> get_bloginfo('template_directory').'/img/mont-saint-michel-cover.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mont_cover', array(
			'label'			=> __('Image de couverture', 'meetin'),
			'section'		=> 'mont',
			'settings'		=> 'mont_cover',
			'priority'		=> 1
		)));


		// Mont TITRE
		$wp_customize->add_setting('mont_titre', array(
			'default' 		=> _x('Mont-Saint-Michel','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_titre', array(
			'label' 		=> __('Titre général', 'meetin'),
			'section' 		=> 'mont',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// Mont BASELINE
		$wp_customize->add_setting('mont_baseline', array(
			'default' 		=> _x('Allier activités d\'affaire et magnificence d\'un site d\'exception','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_baseline', array(
			'label' 		=> __('Baseline', 'meetin'),
			'section' 		=> 'mont',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		// Mont ICONE
		$wp_customize->add_setting('mont_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/mont-court.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mont_icone', array(
			'label'			=> __('Image icône', 'meetin'),
			'section'		=> 'mont',
			'settings'		=> 'mont_icone',
			'priority'		=> 4
		)));

		// Mont INTRODUCTION
		$wp_customize->add_setting('mont_intro', array(
			'default' 		=> _x('Notre offre exclusive vous emmène sur l\'un des plus symboliques lieux de France : le Mont-Saint-Michel et son abbaye. Nous vous proposons une prestation orginale, construite sur mesure, parfaitement adaptée pour des groupes accueillant jusqu\'à 300 personnes.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_intro', array(
			'label' 		=> __('Texte introductif', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'mont',
			'type' 			=> 'textarea',
			'priority' 		=> 5
		));

		// Mont BTN DEVIS
		$wp_customize->add_setting('mont_devis_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_devis_btn_url', array(
			'label' 		=> __('Bouton contact-devis (url)', 'meetin'),
			'section' 		=> 'mont',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		$wp_customize->add_setting('mont_devis_btn_texte', array(
			'default' 		=> _x('Contact &amp; Devis','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_devis_btn_texte', array(
			'label' 		=> __('Bouton contact-devis (texte)', 'meetin'),
			'section' 		=> 'mont',
			'type' 			=> 'text',
			'priority' 		=> 7
		));

		// Mont IMAGE 1
		$wp_customize->add_setting('mont_img_1', array(
			'default'		=> get_bloginfo('template_directory').'/img/mont-cloitre.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mont_img_1', array(
			'label'			=> __('Image n°1', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'mont',
			'settings'		=> 'mont_img_1',
			'priority'		=> 8
		)));

		// Mont TITRE 1
		$wp_customize->add_setting('mont_titre_1', array(
			'default' 		=> _x('Réunions professionnelles et visites dédiées','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_titre_1', array(
			'label' 		=> __('Titre n°1', 'meetin'),
			'section' 		=> 'mont',
			'type' 			=> 'text',
			'priority' 		=> 9
		));

		// Mont TEXTE 1
		$wp_customize->add_setting('mont_texte_1', array(
			'default' 		=> _x('Pour accueillir vos réunions ou séminaires d\'entreprise, nous mettons à votre disposition la partie centrale de l\'abbaye entourant l\'église : Cloître, Réfectoire des moines, Salle Belle-Chaise, Salle des Chevaliers.<br /><br />En complément, nous concevons une visite exclusive et personnalisée de l\'abbaye, avec un thème spécifique si vous le souhaitez.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_texte_1', array(
			'label' 		=> __('Texte n°1', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'mont',
			'type' 			=> 'textarea',
			'priority' 		=> 10
		));

		// Mont IMAGE 2
		$wp_customize->add_setting('mont_img_2', array(
			'default'		=> get_bloginfo('template_directory').'/img/mont-concert.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mont_img_2', array(
			'label'			=> __('Image n°2', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'mont',
			'settings'		=> 'mont_img_2',
			'priority'		=> 11
		)));

		// Mont TITRE 2
		$wp_customize->add_setting('mont_titre_2', array(
			'default' 		=> _x('Concerts privés','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_titre_2', array(
			'label' 		=> __('Titre n°2', 'meetin'),
			'section' 		=> 'mont',
			'type' 			=> 'text',
			'priority' 		=> 12
		));

		// Mont TEXTE 2
		$wp_customize->add_setting('mont_texte_2', array(
			'default' 		=> _x('Grâce à notre partenariat exclusif avec le label indépendant Arcandia Records, qui depuis de nombreuses années produit et enregistre des concerts exceptionnels au cœur de l\'abbaye du Mont-Saint-Michel, nous pouvons offrir à nos clients des concerts "sur mesure".<br /><br />La majorité des concerts, réunissant des artistes internationaux distingués, a lieu dans l\'église abbatiale. Pour une alternative plus intime, nos récitals privés se déroulent généralement dans la splendide salle Belle-Chaise, mais peuvent être donnés ailleurs dans l\'abbaye en fonction de la taille et paramètres de votre événement.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_texte_2', array(
			'label' 		=> __('Texte n°2', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'mont',
			'type' 			=> 'textarea',
			'priority' 		=> 13
		));

		// Mont IMAGE 3
		$wp_customize->add_setting('mont_img_3', array(
			'default'		=> get_bloginfo('template_directory').'/img/mont-programme.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mont_img_3', array(
			'label'			=> __('Image n°3', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'mont',
			'settings'		=> 'mont_img_3',
			'priority'		=> 14
		)));

		// Mont TITRE 3
		$wp_customize->add_setting('mont_titre_3', array(
			'default' 		=> _x('Exemple de programme','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_titre_3', array(
			'label' 		=> __('Titre n°3', 'meetin'),
			'section' 		=> 'mont',
			'type' 			=> 'text',
			'priority' 		=> 15
		));

		// Mont TEXTE 3
		$wp_customize->add_setting('mont_texte_3', array(
			'default' 		=> _x('9h30 : accueil des invités...<br />
							10h00 : ...<br />
							12h15 : ...<br />
							14h00 : ...<br />
							16h45 : ...<br />
							17h00 : ...<br />
							19h00 : ...<br />
							21h00 : ...<br />','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('mont_texte_3', array(
			'label' 		=> __('Texte n°3', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'mont',
			'type' 			=> 'textarea',
			'priority' 		=> 16
		));



	}

	add_action('customize_register', 'wpb_customize_register_mont');