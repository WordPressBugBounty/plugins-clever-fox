<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$hotel26_room_hs 				= get_theme_mod('room_hs','1');
	$hotel26_room_header_hs 		= get_theme_mod('room_header_hs','1');
	$hotel26_room_title 			= get_theme_mod('room_title','Explore');
	$hotel26_room_subtitle 			= get_theme_mod('room_subtitle','Luxury <span class="color-secondary">Rooms');
	$hotel26_room_description		= get_theme_mod('room_description','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); 
	$hotel26_room_contents			= get_theme_mod('room_contents',hotel26_get_room_default());
	if( $hotel26_room_hs == '1' ) {
?>	
<section id="room-section" class="room-section st-py-default">
	<div class="container-fluid">
		<?php if($hotel26_room_header_hs == '1') { ?>
		<div class="heading-default text-center wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
			<div class="section-title">
				<?php if(!empty($hotel26_room_title)): ?>
					<h6 class="sub-title wow bounceInDown"><?php echo wp_kses_post($hotel26_room_title); ?></h6>				
				<?php endif; ?>
				<?php if(!empty($hotel26_room_subtitle)): ?>
					<h2 class="wow bounceIn title"><?php echo wp_kses_post($hotel26_room_subtitle); ?></h2>				
				<?php endif; ?>
				<?php if(!empty($hotel26_room_description)): ?>
					<p class="wow bounceInUp desc"><?php echo wp_kses_post($hotel26_room_description); ?></p>
				<?php endif; ?>				
			</div>
		</div>
		<?php } ?>
		<div class="room-slider-wrapper">
		<!-- LEFT IMAGE -->
		<div class="side-room left-room wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
			<img src="" alt="">
			<span class="room-name"></span>
		</div>
		<div class="container wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
			<div class="room-slider owl-carousel">
			<?php
			if ( ! empty( $hotel26_room_contents ) ) {
			$hotel26_allowed_html = array(
					'br'     => array(),
					'em'     => array(),
					'strong' => array(),
					'b'      => array(),
					'i'      => array(),
					'span'      => array('class' => array()),
					);
				$hotel26_room_contents = json_decode( $hotel26_room_contents );
				foreach ( $hotel26_room_contents as $hotel26_room_item ) {
					$hotel26_repeater_title = ! empty( $hotel26_room_item->title ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_room_item->title, 'Service section' ) : '';
					$hotel26_repeater_subtitle = ! empty( $hotel26_room_item->subtitle ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_room_item->subtitle, 'Service section' ) : '';
					$hotel26_repeater_button = ! empty( $hotel26_room_item->button_text ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_room_item->button_text, 'Service section' ) : '';
					$hotel26_repeater_link = ! empty( $hotel26_room_item->button_link ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_room_item->button_link, 'Service section' ) : '';
					$hotel26_repeater_newtab = ! empty( $hotel26_room_item->newtab ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_room_item->newtab, 'Service section' ) : '';
					$hotel26_repeater_nofollow = ! empty( $hotel26_room_item->nofollow ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_room_item->nofollow, 'Service section' ) : '';
					$hotel26_repeater_image = ! empty( $hotel26_room_item->image_url ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_room_item->image_url, 'Service section' ) : '';
				?>
					<div class="item">
						<div class="room-item">
						<?php if(!empty($hotel26_repeater_image)): ?>
							<div class="room-img">
								<img src="<?php echo esc_url($hotel26_repeater_image); ?>" alt="<?php echo esc_attr__('Room Image','clever-fox'); ?>">
							</div>
						<?php endif; ?>
							<div class="room-content row g-3">
								<div class="col-md-4 col-lg-5 my-md-auto my-0">
									<h4 class="room-title"><?php echo wp_kses( html_entity_decode( $hotel26_repeater_title ), $hotel26_allowed_html ); ?></h4>
									<p class="room-price"><?php echo wp_kses(html_entity_decode( $hotel26_repeater_subtitle ), $hotel26_allowed_html ); ?></p>    
									<a href="<?php echo esc_url($hotel26_repeater_link); ?>" <?php if($hotel26_repeater_newtab == '1') {echo 'target="_blank"'; } ?> rel="<?php if($hotel26_repeater_newtab == '1') {echo 'noreferrer noopener'; } ?> <?php if($hotel26_repeater_nofollow == '1') {echo 'nofollow'; } ?>" class="btn btn-secondary"><?php echo wp_kses_post($hotel26_repeater_button); ?></a>
								</div>
								<div class="col-md-8 col-lg-7">
									<!-- FEATURES -->
									<div class="row g-2 g-lg-4">
									<?php if ( ! empty( $hotel26_room_item->social_repeater ) ) :
										$hotel26_icons         = html_entity_decode( $hotel26_room_item->social_repeater );
										$hotel26_icons_decoded = json_decode( $hotel26_icons, true );
										if ( ! empty( $hotel26_icons_decoded ) ) : ?>
										<?php
											foreach ( $hotel26_icons_decoded as $hotel26_value ) {
												$hotel26_social_icon = ! empty( $hotel26_value['icon'] ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_value['icon'], 'Room section' ) : '';
												$hotel26_social_title = ! empty( $hotel26_value['title'] ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_value['title'], 'Room section' ) : '';
												if ( ! empty( $hotel26_social_icon ) ) {
										?>
													<div class="col-6 col-sm-4">
														<div class="room-feature-box">
															<i class="fa <?php echo esc_attr($hotel26_social_icon); ?>" aria-hidden="true"></i>
															<span><?php echo esc_html($hotel26_social_title); ?></span>
														</div>
													</div>
											<?php	} } endif; endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } } ?>					
				</div>
			</div>
			<!-- RIGHT IMAGE -->
			<div class="side-room right-room wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
				<img src="" alt="">
				<span class="room-name"></span>
			</div>
		</div>
	</div>
</section>
<?php } ?>