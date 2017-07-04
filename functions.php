<?php 


function bbsinvest_siteweb_theme_styles(){

	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('font_awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style('line_icons_css', get_template_directory_uri() . '/css/line-icons.css' );
	wp_enqueue_style('owl_carousel_css', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style('owl_theme_css', get_template_directory_uri() . '/css/owl.theme.css' );
	wp_enqueue_style('nivo_lightbox_css', get_template_directory_uri() . '/css/nivo-lightbox.css' );
	wp_enqueue_style('magnific_popup_css', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style('animate_css', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style('menu_sideslide_css', get_template_directory_uri() . '/css/menu_sideslide.css' );
	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style('responsive_css', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css' );

} 
add_action('wp_enqueue_scripts', 'bbsinvest_siteweb_theme_styles');


function bbsinvest_siteweb_theme_js(){

	wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery-min.js' );
	wp_enqueue_script('tether_js', get_template_directory_uri() . '/js/tether.min.js' );
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script('classie_js', get_template_directory_uri() . '/js/classie.js' );
	wp_enqueue_script('mixitup_js', get_template_directory_uri() . '/js/mixitup.min.js' );
	wp_enqueue_script('nivo_lightbox_js', get_template_directory_uri() . '/js/nivo-lightbox.js' );
	wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js' );
	wp_enqueue_script('jquery_stellar_js', get_template_directory_uri() . '/js/jquery.stellar.min.js' );
	wp_enqueue_script('jquery_nav_js', get_template_directory_uri() . '/js/jquery.nav.js' );
	wp_enqueue_script('smooth_scroll_js', get_template_directory_uri() . '/js/smooth-scroll.js' );
	wp_enqueue_script('smooth_on_scroll_js', get_template_directory_uri() . '/js/smooth-on-scroll.js' );
	wp_enqueue_script('wow_js', get_template_directory_uri() . '/js/wow.js' );
	wp_enqueue_script('menu_js', get_template_directory_uri() . '/js/menu.js' );
	wp_enqueue_script('jquery_vide_js', get_template_directory_uri() . '/js/jquery.vide.js' );
	wp_enqueue_script('jquery_counterup_js', get_template_directory_uri() . '/js/jquery.counterup.min.js' );
	wp_enqueue_script('magnific_popup_js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js' );
	wp_enqueue_script('waypoints_js', get_template_directory_uri() . '/js/waypoints.min.js' );
	wp_enqueue_script('form_validator_js', get_template_directory_uri() . '/js/form-validator.min.js' );
	wp_enqueue_script('contact_form_script_js', get_template_directory_uri() . '/js/contact-form-script.js' );
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js' );

}
add_action('wp_enqueue_scripts','bbsinvest_siteweb_theme_js');




add_filter('show_admin_bar','__return_false');


?>