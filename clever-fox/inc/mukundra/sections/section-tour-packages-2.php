<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$hotel26_package_hs 		= get_theme_mod('package_hs','1');
	$hotel26_package_header_hs 		= get_theme_mod('package_header_hs','1');
	$hotel26_package_title 			= get_theme_mod('package_title','Explore');
	$hotel26_package_subtitle 		= get_theme_mod('package_subtitle','Tour <span class="color-secondary">Packages</span>');
	$hotel26_package_description	= get_theme_mod('package_description','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
	$hotel26_package_animate_imgs	= get_theme_mod('package_animate_imgs','1');
	$hotel26_package_contents 		= get_theme_mod('package_contents',hotel26_package_default());
	$hotel26_package 				= json_decode($hotel26_package_contents,true);
	if( $hotel26_package_hs == '1' ) {
?>	
<section id="packages-offers-section" class="destination-section st-py-default">
	<div class="container">
	<?php if($hotel26_package_header_hs == '1') { ?>
		<div class="heading-default text-center wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
			<div class="section-title">
				<?php if(!empty($hotel26_package_title)): ?>
					<h6 class="sub-title wow bounceInDown"><?php echo wp_kses_post($hotel26_package_title); ?></h6>				
				<?php endif; ?>
				<?php if(!empty($hotel26_package_subtitle)): ?>
					<h2 class="wow bounceIn title"><?php echo wp_kses_post($hotel26_package_subtitle); ?></h2>				
				<?php endif; ?>
				<?php if(!empty($hotel26_package_description)): ?>
					<p class="wow bounceInUp desc"><?php echo wp_kses_post($hotel26_package_description); ?></p>
				<?php endif; ?>				
			</div>
		</div>
		<?php } ?>
		
		<div class="destination-slider owl-carousel">
		<?php
			if (!empty($hotel26_package)) :
			$hotel26_allowed_html = array(
						'br'     => array(),
						'del'     => array(),
						'strong' => array(),
						'b'      => array(),
						'i'      => array(),
						'span'   => array('class' => array()),
						);
			 foreach ($hotel26_package as $hotel26_slide_item) :						
				$hotel26_repeater_image     = ! empty( $hotel26_slide_item['image_url'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['image_url'], 'Package section' ) : '';
				$hotel26_repeater_title     = ! empty( $hotel26_slide_item['title'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['title'], 'Package section' ) : '';
				$hotel26_repeater_subtitle2     = ! empty( $hotel26_slide_item['subtitle2'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['subtitle2'], 'Package section' ) : '';
				$hotel26_repeater_subtitle3     = ! empty( $hotel26_slide_item['subtitle3'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['subtitle3'], 'Package section' ) : '';
				$hotel26_repeater_color     = ! empty( $hotel26_slide_item['color'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['color'], 'Package section' ) : '';
		?>
		<div class="destination-item wow flipInY" data-wow-delay="100ms" data-wow-duration="1500ms">
				<?php if(!empty($hotel26_repeater_image)) { ?>
					<div class="destination-img">
						<div class="st-media-hover">
							<img src="<?php echo esc_url($hotel26_repeater_image); ?>" alt="<?php echo esc_attr__('Tour Packages','clever-fox'); ?>"><img src="<?php echo esc_url($hotel26_repeater_image); ?>" alt="<?php echo esc_attr__('Tour Packages','clever-fox'); ?>">
						</div>
						<?php if(!empty($hotel26_repeater_subtitle3)) { ?>
							<div class="corner-ribbon"><span class="banget" style="background-color:<?php echo esc_attr($hotel26_repeater_color); ?>"><?php echo esc_html($hotel26_repeater_subtitle3); ?></span></div>
						<?php } ?>
						<?php if(!empty($hotel26_repeater_subtitle2)) { ?>
							<div class="discount-badge"><span class="badge wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><?php echo esc_html($hotel26_repeater_subtitle2); ?></span></div>
						<?php } ?>
					</div>
					<?php } ?>
					<?php if(!empty($hotel26_repeater_title)) { ?>
						<div class="destination-content">
							<h6 class="fw-bold"><?php echo esc_html($hotel26_repeater_title); ?></h6>
						</div>
					<?php } ?>
				</div>
		<?php endforeach; endif; ?>
		</div>
	</div>
	<?php if( $hotel26_package_animate_imgs == '1' ) { ?>
		<div class="hot-air-balloon">
			<img class="balloon1" src="<?php echo esc_url(CLEVERFOX_PLUGIN_URL .'inc/hotel-26/images/destination/balloon1.webp'); ?>" alt="<?php echo esc_attr__('Animate Image 1','clever-fox'); ?>">
			<img class="balloon2" src="<?php echo esc_url(CLEVERFOX_PLUGIN_URL .'inc/hotel-26/images/destination/balloon2.webp'); ?>" alt="<?php echo esc_attr__('Animate Image 2','clever-fox'); ?>">
		</div>
	<?php } ?>
</section>
<?php } ?>