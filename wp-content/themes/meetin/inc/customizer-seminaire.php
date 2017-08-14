<?php
	function wpb_customize_register_seminaire($wp_customize){

		// ***
		// SEMINAIRE
		// ***

		$wp_customize->add_section('seminaire', array(
			'title'			=> __('Offre SEMINAIRE', 'meetin'),
			'description'	=> sprintf(__('Contenu de la page Séminaires & Evénementiels', 'meetin')),
			'priority'		=> 2
		));


		// Séminaire COVER
		$wp_customize->add_setting('seminaire_cover', array(
			'default'		=> get_bloginfo('template_directory').'/img/seminaire-cover.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'seminaire_cover', array(
			'label'			=> __('Image de couverture', 'meetin'),
			'section'		=> 'seminaire',
			'settings'		=> 'seminaire_cover',
			'priority'		=> 1
		)));


		// Séminaire TITRE
		$wp_customize->add_setting('seminaire_titre', array(
			'default' 		=> _x('Séminaires &amp; événementiels','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_titre', array(
			'label' 		=> __('Titre général', 'meetin'),
			'section' 		=> 'seminaire',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// Séminaire BASELINE
		$wp_customize->add_setting('seminaire_baseline', array(
			'default' 		=> _x('Organiser votre événement d\'entreprise en accord avec votre stratégie marketing et de communication','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_baseline', array(
			'label' 		=> __('Baseline', 'meetin'),
			'section' 		=> 'seminaire',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		// Séminaire ICONE
		$wp_customize->add_setting('seminaire_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/seminaire-icone.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'seminaire_icone', array(
			'label'			=> __('Image icône', 'meetin'),
			'section'		=> 'seminaire',
			'settings'		=> 'seminaire_icone',
			'priority'		=> 4
		)));

		// Séminaire INTRODUCTION
		$wp_customize->add_setting('seminaire_intro', array(
			'default' 		=> _x('Nous développons des programmes sur mesure pour l\'organisation de vos opérations d\'entreprise en Normandie. Nous vous proposons une prestation complète pour tous vos séminaires, réunions d\'affaire, conférences, incentives, quelque soit le nombre de participants.','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_intro', array(
			'label' 		=> __('Texte introductif', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'seminaire',
			'type' 			=> 'textarea',
			'priority' 		=> 5
		));

		// Séminaire BTN DEVIS
		$wp_customize->add_setting('seminaire_devis_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_devis_btn_url', array(
			'label' 		=> __('Bouton contact-devis (url)', 'meetin'),
			'section' 		=> 'seminaire',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		$wp_customize->add_setting('seminaire_devis_btn_texte', array(
			'default' 		=> _x('Contact &amp; Devis','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_devis_btn_texte', array(
			'label' 		=> __('Bouton contact-devis (texte)', 'meetin'),
			'section' 		=> 'seminaire',
			'type' 			=> 'text',
			'priority' 		=> 7
		));

		// Séminaire IMAGE 1
		$wp_customize->add_setting('seminaire_img_1', array(
			'default'		=> get_bloginfo('template_directory').'/img/seminaire1.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'seminaire_img_1', array(
			'label'			=> __('Image n°1', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'seminaire',
			'settings'		=> 'seminaire_img_1',
			'priority'		=> 8
		)));

		// Séminaire TITRE 1
		$wp_customize->add_setting('seminaire_titre_1', array(
			'default' 		=> _x('Séminaire d\'entreprise - Événementiels','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_titre_1', array(
			'label' 		=> __('Titre n°1', 'meetin'),
			'section' 		=> 'seminaire',
			'type' 			=> 'text',
			'priority' 		=> 9
		));

		// Séminaire TEXTE 1
		$wp_customize->add_setting('seminaire_texte_1', array(
			'default' 		=> _x('Nous organisons la mise en oeuvre complète de vos événements et opérations d\'affaire selon vos besoins.<br /><br />Notre savoir-faire nous permet d\'intégrer dans votre projet tous les aspects essentiels au déroulement de votre opération : accueil, restauration, logistique ainsi que tous les élements connexes de communication tels la production de produits et cadeaux personnalisés, les invitations, les relations medias...','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_texte_1', array(
			'label' 		=> __('Texte n°1', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'seminaire',
			'type' 			=> 'textarea',
			'priority' 		=> 10
		));

		// Séminaire IMAGE 2
		$wp_customize->add_setting('seminaire_img_2', array(
			'default'		=> get_bloginfo('template_directory').'/img/seminaire2.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'seminaire_img_2', array(
			'label'			=> __('Image n°2', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'seminaire',
			'settings'		=> 'seminaire_img_2',
			'priority'		=> 11
		)));

		// Séminaire TITRE 2
		$wp_customize->add_setting('seminaire_titre_2', array(
			'default' 		=> _x('Activités incentives','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_titre_2', array(
			'label' 		=> __('Titre n°2', 'meetin'),
			'section' 		=> 'seminaire',
			'type' 			=> 'text',
			'priority' 		=> 12
		));

		// Séminaire TEXTE 2
		$wp_customize->add_setting('seminaire_texte_2', array(
			'default' 		=> _x('En parallèle de votre opération d\'entreprise, nous pouvons intégrer à votre programme un large panel d\'activités culturelles ou sportives et ainsi offrir à vos collaborateurs, équipes, clients, des moments privilégiés de team-builduing.
				<br /><br />Selon la taille de votre groupe et vos souhaits, nous vous proposons des activités adaptées (sports de pleine nature, jeux d\'équipes, challenges...)','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_texte_2', array(
			'label' 		=> __('Texte n°2', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'seminaire',
			'type' 			=> 'textarea',
			'priority' 		=> 13
		));

		// Séminaire IMAGE 3
		$wp_customize->add_setting('seminaire_img_3', array(
			'default'		=> get_bloginfo('template_directory').'/img/seminaire3.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'seminaire_img_3', array(
			'label'			=> __('Image n°3', 'meetin'),
			'description'	=> sprintf(__('Dimensions idéales : 525px * 350px', 'meetin')),
			'section'		=> 'seminaire',
			'settings'		=> 'seminaire_img_3',
			'priority'		=> 14
		)));

		// Séminaire TITRE 3
		$wp_customize->add_setting('seminaire_titre_3', array(
			'default' 		=> _x('La Normandie, territoire riche et étonnant','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_titre_3', array(
			'label' 		=> __('Titre n°3', 'meetin'),
			'section' 		=> 'seminaire',
			'type' 			=> 'text',
			'priority' 		=> 15
		));

		// Séminaire TEXTE 3
		$wp_customize->add_setting('seminaire_texte_3', array(
			'default' 		=> _x('Nous intervenons sur l\'ensemble des 5 départements normands : Manche, Calvados, Orne, Eure et Seine-Maritime. Nous vous emmenons dans des endroits magiques pour des séminaires et activités marquants : Mont-Saint-Michel, musée Christian Dior, archipel anglo-normand, Deauville, Suisse Normande... et bien d\'autres.
				<br /><br />Consultez-nous pour la réalisation clé en main de votre opération d\'entreprise !','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('seminaire_texte_3', array(
			'label' 		=> __('Texte n°3', 'meetin'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'meetin')),
			'section' 		=> 'seminaire',
			'type' 			=> 'textarea',
			'priority' 		=> 16
		));



	}

	add_action('customize_register', 'wpb_customize_register_seminaire');