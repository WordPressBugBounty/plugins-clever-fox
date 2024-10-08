<?php
/**
 * @package   Conceptly
 */
 
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/sections/above-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-call-to-action.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-features.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-info.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-service.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-sponsers.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-typography.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/features/conceptly-navigation.php';

if ( ! function_exists( 'cleverfox_conceptly_frontpage_sections' ) ) :
	function cleverfox_conceptly_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/convo/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/sections/section-cta.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/sections/section-sponser.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/sections/section-flash.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/sections/section-service.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/sections/section-features.php';
    }
	add_action( 'conceptly_sections', 'cleverfox_conceptly_frontpage_sections');
endif;

function cleverfox_conceptly_enqueue_scripts() {
	wp_enqueue_style('animate',CLEVERFOX_PLUGIN_URL .'/inc/assets/css/animate.css','','3.5.2');
	wp_enqueue_style('owl-carousel-min',CLEVERFOX_PLUGIN_URL .'/inc/assets/css/owl.carousel.min.css','','2.2.1');
	wp_enqueue_script( 'owl-carousel', CLEVERFOX_PLUGIN_URL . 'inc/assets/js/owl.carousel.min.js', array('jquery'), '2.2.1', true);
	wp_enqueue_script('owlCarousel2Thumbs', CLEVERFOX_PLUGIN_URL . 'inc/assets/js/owlCarousel2Thumbs.min.js', array('jquery'), '0.1.3', true);
}
add_action( 'wp_enqueue_scripts', 'cleverfox_conceptly_enqueue_scripts' );