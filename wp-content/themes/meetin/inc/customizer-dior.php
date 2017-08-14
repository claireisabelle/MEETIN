<?php
	function wpb_customize_register_dior($wp_customize){

		// ***
		// DIOR
		// ***

		$wp_customize->add_section('dior', array(
			'title'			=> __('Offre DIOR', 'meetin'),
			'description'	=> sprintf(__('Contenu de l\'offre exclusive Christian Dior', 'meetin')),
			'priority'		=> 4
		));


		// Dior COVER
		$wp_customize->add_setting('dior_cover', array(
			'default'		=> get_bloginfo('template_directory').'/img/dior-cover.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dior_cover', array(
			'label'			=> __('Image de couverture', 'meetin'),
			'section'		=> 'dior',
			'settings'		=> 'dior_cover',
			'priority'		=> 1
		)));


		// Dior TITRE
		$wp_customize->add_setting('dior_titre', array(
			'default' 		=> _x('Musée et Jardin Christian Dior','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_titre', array(
			'label' 		=> __('Titre général', 'meetin'),
			'section' 		=> 'dior',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// Dior BASELINE
		$wp_customize->add_setting('dior_baseline', array(
			'default' 		=> _x('Profiter d\'un cadre exceptionnel au coeur de la fabuleuse histoire du grand couturier','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_baseline', array(
			'label' 		=> __('Baseline', 'meetin'),
			'section' 		=> 'dior',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		// Dior ICONE
		$wp_customize->add_setting('dior_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/dior-icone.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dior_icone', array(
			'label'			=> __('Image icône', 'meetin'),
			'section'		=> 'dior',
			'settings'		=> 'dior_icone',
			'priority'		=> 4
		)));

		// Dior INTRODUCTION
		$wp_customize->add_setting('dior_intro', array(
			'default' 		=> _x('Nous vous emmenons dans cette belle demeure au style anglo-normand où ont vécu Christian Dior et famille pour la réalisation de vos événementiels d\'entreprise.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_intro', array(
			'label' 		=> __('Texte introductif', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'dior',
			'type' 			=> 'textarea',
			'priority' 		=> 5
		));

		// Dior BTN DEVIS
		$wp_customize->add_setting('dior_devis_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_devis_btn_url', array(
			'label' 		=> __('Bouton contact-devis (url)', 'meetin'),
			'section' 		=> 'dior',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		$wp_customize->add_setting('dior_devis_btn_texte', array(
			'default' 		=> _x('Contact &amp; Devis','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_devis_btn_texte', array(
			'label' 		=> __('Bouton contact-devis (texte)', 'meetin'),
			'section' 		=> 'dior',
			'type' 			=> 'text',
			'priority' 		=> 7
		));

		// Dior IMAGE 1
		$wp_customize->add_setting('dior_img_1', array(
			'default'		=> get_bloginfo('template_directory').'/img/dior1.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dior_img_1', array(
			'label'			=> __('Image n°1', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'dior',
			'settings'		=> 'dior_img_1',
			'priority'		=> 8
		)));

		// Dior TITRE 1
		$wp_customize->add_setting('dior_titre_1', array(
			'default' 		=> _x('Soirée privée et visite réceptive','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_titre_1', array(
			'label' 		=> __('Titre n°1', 'meetin'),
			'section' 		=> 'dior',
			'type' 			=> 'text',
			'priority' 		=> 9
		));

		// Dior TEXTE 1
		$wp_customize->add_setting('dior_texte_1', array(
			'default' 		=> _x('Nous vous proposons en exclusivité l\'organisation de votre soirée privée au sein même de la villa du couturier.<br /><br /> Situé à flanc des falaises nord de Granville, dominant la mer, le jardin du musée Christian Dior dispose d\'un espace paysager d\'un hectare et d\'une terrasse panoramique ouvrant sur l\'archipel de Chausey.<br /><br />Nous incluons à votre opération une visite privée guidée du musée avec remise de cadeau souvenir dédié.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_texte_1', array(
			'label' 		=> __('Texte n°1', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'dior',
			'type' 			=> 'textarea',
			'priority' 		=> 10
		));

		// Dior IMAGE 2
		$wp_customize->add_setting('dior_img_2', array(
			'default'		=> get_bloginfo('template_directory').'/img/dior2.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dior_img_2', array(
			'label'			=> __('Image n°2', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'dior',
			'settings'		=> 'dior_img_2',
			'priority'		=> 11
		)));

		// Dior TITRE 2
		$wp_customize->add_setting('dior_titre_2', array(
			'default' 		=> _x('Exposition annuelle','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_titre_2', array(
			'label' 		=> __('Titre n°2', 'meetin'),
			'section' 		=> 'dior',
			'type' 			=> 'text',
			'priority' 		=> 12
		));

		// Dior TEXTE 2
		$wp_customize->add_setting('dior_texte_2', array(
			'default' 		=> _x('Le musée Christian Dior accueille chaque année une spectaculaire exposition à la thématique renouvelée que nous pouvons intégrer à votre programme selon la période retenue.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_texte_2', array(
			'label' 		=> __('Texte n°2', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'dior',
			'type' 			=> 'textarea',
			'priority' 		=> 13
		));

		// Dior IMAGE 3
		$wp_customize->add_setting('dior_img_3', array(
			'default'		=> get_bloginfo('template_directory').'/img/dior3.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dior_img_3', array(
			'label'			=> __('Image n°3', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'dior',
			'settings'		=> 'dior_img_3',
			'priority'		=> 14
		)));

		// Dior TITRE 3
		$wp_customize->add_setting('dior_titre_3', array(
			'default' 		=> _x('Exemple de programme','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_titre_3', array(
			'label' 		=> __('Titre n°3', 'meetin'),
			'section' 		=> 'dior',
			'type' 			=> 'text',
			'priority' 		=> 15
		));

		// Dior TEXTE 3
		$wp_customize->add_setting('dior_texte_3', array(
			'default' 		=> _x('L\'offre exclusive Christian Dior peut être insérée dans un programme complet sur Granville comprenant séminaire de travail / conférence et activités incentives.<br /><br />
				- Accueil à partir de 18h00<br />
				- Champagne de bienvenue<br />
				- Remise d\'un cadeau souvenir<br />
				- Visite privée guidée de l\'exposition<br />
				- Mise en lumière spéciale du musée et du jardin','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('dior_texte_3', array(
			'label' 		=> __('Texte n°3', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'dior',
			'type' 			=> 'textarea',
			'priority' 		=> 16
		));



	}

	add_action('customize_register', 'wpb_customize_register_dior');