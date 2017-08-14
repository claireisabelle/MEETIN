<?php
	function wpb_customize_register_footer($wp_customize){

		// ***
		// FOOTER
		// ***

		$wp_customize->add_section('footer', array(
			'title'			=> __('Footer', 'meetin'),
			'description'	=> sprintf(__('Contenu du pied de page', 'meetin')),
			'priority'		=> 6
		));

		// Footer TWITTER
		$wp_customize->add_setting('footer_twitter_btn_url', array(
			'default' 		=> _x('https://twitter.com/MeetinNormandy','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_twitter_btn_url', array(
			'label' 		=> __('Twitter - Bouton (url)', 'meetin'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		// Footer TELEPHONE
		$wp_customize->add_setting('footer_telephone', array(
			'default' 		=> _x('+33 (0)2 33 79 21 04','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_telephone', array(
			'label' 		=> __('Téléphone'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// Footer EMAIL
		$wp_customize->add_setting('footer_email_btn_url', array(
			'default' 		=> _x('info@meetinnormandy.eu','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_email_btn_url', array(
			'label' 		=> __('E-mail', 'meetin'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		// Footer DESCRIPTION
		$wp_customize->add_setting('footer_description', array(
			'default' 		=> _x('Meet’in Normandy / AngloNormandy Ltd','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_description', array(
			'label' 		=> __('Description'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 4
		));

		// Footer MENTIONS LEGALES
		$wp_customize->add_setting('footer_mentions_btn_url', array(
			'default' 		=> _x('#','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_mentions_btn_url', array(
			'label' 		=> __('Mentions légales - bouton (url)', 'meetin'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 5
		));

		$wp_customize->add_setting('footer_mentions_btn_texte', array(
			'default' 		=> _x('Mentions légales','meetin'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_mentions_btn_texte', array(
			'label' 		=> __('Mentions légales - bouton (texte)', 'meetin'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		// Footer LOGO
		$wp_customize->add_setting('footer_logo', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo2.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
			'label'			=> __('Logo', 'meetin'),
			'section'		=> 'footer',
			'settings'		=> 'footer_logo',
			'priority'		=> 7
		)));

	}

	add_action('customize_register', 'wpb_customize_register_footer');
