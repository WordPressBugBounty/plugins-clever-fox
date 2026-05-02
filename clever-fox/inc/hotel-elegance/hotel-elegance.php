<?php
/**
 * @package   Hotel Elegance
 */
if ( ! defined( 'ABSPATH' ) ) exit;

require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/sections/above-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-booking.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-elegance/features/hotel-26-room.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-elegance/features/hotel-26-service-two.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-team.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/features/hotel-26-typography.php';

if ( ! function_exists( 'cleverfox_hotel_26_frontpage_sections' ) ) :
	function cleverfox_hotel_26_frontpage_sections() {
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-elegance/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/sections/section-booking.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-elegance/sections/section-room.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-elegance/sections/section-service-two.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/hotel-26/sections/section-team.php';
    }
endif;
add_action( 'hotel_26_sections', 'cleverfox_hotel_26_frontpage_sections' );