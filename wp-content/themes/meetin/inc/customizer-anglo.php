<?php
	function wpb_customize_register_anglo($wp_customize){

		// ***
		// ANGLO
		// ***

		$wp_customize->add_section('anglo', array(
			'title'			=> __('Offre ANGLO', 'meetin'),
			'description'	=> sprintf(__('Contenu de l\'offre exclusive archipel Anglo-Normand', 'meetin')),
			'priority'		=> 4
		));


		// Anglo COVER
		$wp_customize->add_setting('anglo_cover', array(
			'default'		=> get_bloginfo('template_directory').'/img/anglo-cover.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anglo_cover', array(
			'label'			=> __('Image de couverture', 'meetin'),
			'section'		=> 'anglo',
			'settings'		=> 'anglo_cover',
			'priority'		=> 1
		)));


		// Anglo TITRE
		$wp_customize->add_setting('anglo_titre', array(
			'default' 		=> _x('îles Anglo-Normandes','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_titre', array(
			'label' 		=> __('Titre général', 'meetin'),
			'section' 		=> 'anglo',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// Anglo BASELINE
		$wp_customize->add_setting('anglo_baseline', array(
			'default' 		=> _x('Associer séminaire d\'entreprise et magnificence environnementale','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_baseline', array(
			'label' 		=> __('Baseline', 'meetin'),
			'section' 		=> 'anglo',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		// Anglo ICONE
		$wp_customize->add_setting('anglo_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/anglo-icone.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anglo_icone', array(
			'label'			=> __('Image icône', 'meetin'),
			'section'		=> 'anglo',
			'settings'		=> 'anglo_icone',
			'priority'		=> 4
		)));

		// Anglo INTRODUCTION
		$wp_customize->add_setting('anglo_intro', array(
			'default' 		=> _x('Nous vous accueillons au sein des paysages exceptionnels des îles anglo-normandes. Nous transportons votre séminaire d\'entreprise au coeur de panoramas inoubliables.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_intro', array(
			'label' 		=> __('Texte introductif', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'anglo',
			'type' 			=> 'textarea',
			'priority' 		=> 5
		));

		// Anglo BTN DEVIS
		$wp_customize->add_setting('anglo_devis_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_devis_btn_url', array(
			'label' 		=> __('Bouton contact-devis (url)', 'meetin'),
			'section' 		=> 'anglo',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		$wp_customize->add_setting('anglo_devis_btn_texte', array(
			'default' 		=> _x('Contact &amp; Devis','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_devis_btn_texte', array(
			'label' 		=> __('Bouton contact-devis (texte)', 'meetin'),
			'section' 		=> 'anglo',
			'type' 			=> 'text',
			'priority' 		=> 7
		));

		// Anglo IMAGE 1
		$wp_customize->add_setting('anglo_img_1', array(
			'default'		=> get_bloginfo('template_directory').'/img/anglo1.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anglo_img_1', array(
			'label'			=> __('Image n°1', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'anglo',
			'settings'		=> 'anglo_img_1',
			'priority'		=> 8
		)));

		// Anglo TITRE 1
		$wp_customize->add_setting('anglo_titre_1', array(
			'default' 		=> _x('Jersey et Guernesey','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_titre_1', array(
			'label' 		=> __('Titre n°1', 'meetin'),
			'section' 		=> 'anglo',
			'type' 			=> 'text',
			'priority' 		=> 9
		));

		// Anglo TEXTE 1
		$wp_customize->add_setting('anglo_texte_1', array(
			'default' 		=> _x('Ces deux îles en particulier offrent de formidables opportunités pour des opérations réceptives à visée professionnelle.<br /><br /> Du séminaire de travail aux opérations de relations publiques, nous vous organisons des "packages" complets associant en permanance qualité des composants et rareté du moment vécu.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_texte_1', array(
			'label' 		=> __('Texte n°1', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'anglo',
			'type' 			=> 'textarea',
			'priority' 		=> 10
		));

		// Anglo IMAGE 2
		$wp_customize->add_setting('anglo_img_2', array(
			'default'		=> get_bloginfo('template_directory').'/img/anglo2.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anglo_img_2', array(
			'label'			=> __('Image n°2', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'anglo',
			'settings'		=> 'anglo_img_2',
			'priority'		=> 11
		)));

		// Anglo TITRE 2
		$wp_customize->add_setting('anglo_titre_2', array(
			'default' 		=> _x('Incentive nautique','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_titre_2', array(
			'label' 		=> __('Titre n°2', 'meetin'),
			'section' 		=> 'anglo',
			'type' 			=> 'text',
			'priority' 		=> 12
		));

		// Anglo TEXTE 2
		$wp_customize->add_setting('anglo_texte_2', array(
			'default' 		=> _x('En marge de votre séminaire, nous vous proposons de profiter de grands bols d\'air via des activités nautiques variées : navigation sportive, balade à bord de vieux gréements, randonnée en kayak de mer...','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_texte_2', array(
			'label' 		=> __('Texte n°2', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'anglo',
			'type' 			=> 'textarea',
			'priority' 		=> 13
		));

		// Anglo IMAGE 3
		$wp_customize->add_setting('anglo_img_3', array(
			'default'		=> get_bloginfo('template_directory').'/img/anglo3.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'anglo_img_3', array(
			'label'			=> __('Image n°3', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'anglo',
			'settings'		=> 'anglo_img_3',
			'priority'		=> 14
		)));

		// Anglo TITRE 3
		$wp_customize->add_setting('anglo_titre_3', array(
			'default' 		=> _x('Exemple de programme','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_titre_3', array(
			'label' 		=> __('Titre n°3', 'meetin'),
			'section' 		=> 'anglo',
			'type' 			=> 'text',
			'priority' 		=> 15
		));

		// Anglo TEXTE 3
		$wp_customize->add_setting('anglo_texte_3', array(
			'default' 		=> _x('9h30 : accueil des invités...<br />
							10h00 : ...<br />','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('anglo_texte_3', array(
			'label' 		=> __('Texte n°3', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'anglo',
			'type' 			=> 'textarea',
			'priority' 		=> 16
		));



	}

	add_action('customize_register', 'wpb_customize_register_anglo');