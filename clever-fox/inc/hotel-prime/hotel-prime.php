<?php
/**
 * @package   Hotel Prime
 */
if ( ! defined( 'ABSPATH' ) ) exit;

require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/sections/above-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-booking.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-about.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-prime/features/hotel-26-testimonial.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-prime/features/hotel-26-pricing.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-prime/features/hotel-26-why-choose.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-typography.php';

if ( ! function_exists( 'cleverfox_hotel_26_frontpage_sections' ) ) :
	function cleverfox_hotel_26_frontpage_sections() {
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/sections/section-about.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-prime/sections/section-testimonial.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-prime/sections/section-pricing-one.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-prime/sections/section-why-choose.php';
    }
endif;
add_action( 'hotel_26_sections', 'cleverfox_hotel_26_frontpage_sections' );