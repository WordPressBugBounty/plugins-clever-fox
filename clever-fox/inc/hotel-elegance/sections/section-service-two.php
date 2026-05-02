<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$hotel26_service_two_hs 			= get_theme_mod('service_two_hs','1');
	$hotel26_service_two_header_hs 		= get_theme_mod('service_two_header_hs','1');
	$hotel26_service_two_title 			= get_theme_mod('service_two_title','Explore');
	$hotel26_service_two_subtitle 		= get_theme_mod('service_two_subtitle','Best <span class="color-secondary">Dishes</span>');
	$hotel26_service_two_description	= get_theme_mod('service_two_description','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); 
	$hotel26_service_two_contents		= get_theme_mod('service_two_contents',hotel26_get_service_default());
	if( $hotel26_room_hs == '1' ) {
?>	
<section id="service-two-section" class="dishes-section st-py-default">
	<div class="container">
		<?php if($hotel26_service_two_header_hs == '1') { ?>
		<div class="heading-default text-center wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
			<div class="section-title">
				<?php if(!empty($hotel26_service_two_title)): ?>
					<h6 class="sub-title wow bounceInDown"><?php echo wp_kses_post($hotel26_service_two_title); ?></h6>				
				<?php endif; ?>
				<?php if(!empty($hotel26_service_two_subtitle)): ?>
					<h2 class="wow bounceIn title"><?php echo wp_kses_post($hotel26_service_two_subtitle); ?></h2>				
				<?php endif; ?>
				<?php if(!empty($hotel26_service_two_description)): ?>
					<p class="wow bounceInUp desc"><?php echo wp_kses_post($hotel26_service_two_description); ?></p>
				<?php endif; ?>				
			</div>
		</div>
		<?php } ?>
		<div class="service-two-wrap row row-cols-lg-4 row-cols-2 g-2 g-sm-3 g-xl-4">
			<?php
				if ( ! empty( $hotel26_service_two_contents ) ) {
				$hotel26_service_two_contents = json_decode( $hotel26_service_two_contents );
				foreach ( $hotel26_service_two_contents as $hotel26_index => $hotel26_service_two_item ) {
					$hotel26_repeater_title = ! empty( $hotel26_service_two_item->title ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_service_two_item->title, 'Service section' ) : '';
					$hotel26_repeater_description = ! empty( $hotel26_service_two_item->description ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_service_two_item->description, 'Service section' ) : '';
					$hotel26_repeater_button = ! empty( $hotel26_service_two_item->button_text ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_service_two_item->button_text, 'Service section' ) : '';
					$hotel26_repeater_link = ! empty( $hotel26_service_two_item->button_link ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_service_two_item->button_link, 'Service section' ) : '';
					$hotel26_repeater_newtab = ! empty( $hotel26_service_two_item->newtab ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_service_two_item->newtab, 'Service section' ) : '';
					$hotel26_repeater_nofollow = ! empty( $hotel26_service_two_item->nofollow ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_service_two_item->nofollow, 'Service section' ) : '';
					$hotel26_repeater_image = ! empty( $hotel26_service_two_item->image_url ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_service_two_item->image_url, 'Service section' ) : '';
					$hotel26_repeater_icon = ! empty( $hotel26_service_two_item->icon_value ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_service_two_item->icon_value, 'Service section' ) : '';
					$hotel26_ltr = !is_rtl() ? 'fa-angle-right' : 'fa-angle-left';
				?>
			<div class="col wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
					<div class="dishes-item">
					<?php if(!empty($hotel26_repeater_icon)): ?>
						<div class="dishes-img">
							<i class="fa <?php echo esc_attr($hotel26_repeater_icon); ?>" aria-hidden="true"></i>
						</div>
					<?php endif; ?>
					<?php if(!empty($hotel26_repeater_title)): ?>
						<h5 class="dishes-title"><?php echo esc_html($hotel26_repeater_title); ?></h5>
					<?php endif; ?>
					<?php if(!empty($hotel26_repeater_description)): ?>
						<p class="dishes-description"><?php echo esc_html($hotel26_repeater_description); ?></p>
					<?php endif; ?>
					<?php if(!empty($hotel26_repeater_button)): ?>
						<a href="<?php echo esc_url($hotel26_repeater_link); ?>" class="read-more-link" <?php if($hotel26_repeater_newtab == '1') {echo 'target="_blank"'; } ?> rel="<?php if($hotel26_repeater_newtab == '1') {echo 'noreferrer noopener'; } ?> <?php if($hotel26_repeater_nofollow == '1') {echo 'nofollow'; } ?>"><?php echo esc_html($hotel26_repeater_button); ?> <i class="fa <?php echo esc_attr($hotel26_ltr); ?>"></i></a>
					<?php endif; ?>
					</div>
				</div>
			<?php } } ?>			
		</div>
	</div>
</section>
<?php } ?>