<?php 

// Theme support
function wpb_theme_setup(){
    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'meetin'),
        'footer'  => __('Footer Menu', 'meetin')
    ));

    // Thumbnails 'Image à la une'
    add_theme_support( 'post-thumbnails' );

    // Post Formats
    add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action('after_setup_theme', 'wpb_theme_setup');


// Customizer Front Page
require get_template_directory().'/inc/customizer.php';

// Customize Séminaire
require get_template_directory().'/inc/customizer-seminaire.php';

// Customize Mont
require get_template_directory().'/inc/customizer-mont.php';

// Customize Dior
require get_template_directory().'/inc/customizer-dior.php';

// Customize Anglo
require get_template_directory().'/inc/customizer-anglo.php';

// Customizer Footer
require get_template_directory().'/inc/customizer-footer.php';


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
