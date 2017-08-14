<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset='<?php bloginfo('charset') ?>'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- CSS customize -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" >

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- CSS Backgrounds -->
		<style>
			.offre-seminaire{background-image:url('<?php echo get_theme_mod('seminaire_cover', get_bloginfo('template_url').'/img/seminaire-cover.jpg'); ?>');}

			.offre-mont{background-image:url('<?php echo get_theme_mod('mont_cover', get_bloginfo('template_url').'/img/mont-saint-michel-cover.jpg'); ?>');}

			.offre-dior{background-image:url('<?php echo get_theme_mod('dior_cover', get_bloginfo('template_url').'/img/dior-cover.jpg'); ?>');}

			.offre-anglo{background-image:url('<?php echo get_theme_mod('anglo_cover', get_bloginfo('template_url').'/img/anglo-cover.jpg'); ?>');}

		</style>

	<?php wp_head(); ?>
	</head>