<?php  
	if ( ! defined( 'ABSPATH' ) ) exit;
	$hotel26_choose_hs 				= get_theme_mod('choose_hs','1');
	$hotel26_choose_header_hs 		= get_theme_mod('choose_header_hs','1');
	$hotel26_choose_title 			= get_theme_mod('choose_title','Explore');
	$hotel26_choose_subtitle 		= get_theme_mod('choose_subtitle','Why <span class="color-secondary">Choose Us</span>');
	$hotel26_choose_description		= get_theme_mod('choose_description','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); 
	$hotel26_choose_contents			= get_theme_mod('choose_contents',hotel26_choose_default());
	if( $hotel26_choose_hs == '1' ) {
?>	
<section id="choose-section" class="why-choose-section st-py-default">
	<div class="container">
		<?php if($hotel26_choose_header_hs == '1') { ?>
		<div class="heading-default text-center wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
			<div class="section-title">
				<?php if(!empty($hotel26_choose_title)): ?>
					<h6 class="sub-title wow bounceInDown"><?php echo wp_kses_post($hotel26_choose_title); ?></h6>				
				<?php endif; ?>
				<?php if(!empty($hotel26_choose_subtitle)): ?>
					<h2 class="wow bounceIn title"><?php echo wp_kses_post($hotel26_choose_subtitle); ?></h2>
				<?php endif; ?>
				<?php if(!empty($hotel26_choose_description)): ?>
					<p class="wow bounceInUp desc"><?php echo wp_kses_post($hotel26_choose_description); ?></p>
				<?php endif; ?>				
			</div>
		</div>
		<?php } ?>
		<div class="why-choose-slider owl-carousel">
			<?php
			if ( ! empty( $hotel26_choose_contents ) ) {
			$hotel26_choose_contents = json_decode( $hotel26_choose_contents );
			foreach ( $hotel26_choose_contents as $hotel26_index => $hotel26_choose_item ) {
				$hotel26_repeater_title = ! empty( $hotel26_choose_item->title ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_choose_item->title, 'Choose section' ) : '';
				$hotel26_repeater_image = ! empty( $hotel26_choose_item->image_url ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_choose_item->image_url, 'Choose section' ) : '';
				if( !empty($hotel26_repeater_image) ):
		?>
			<div class="why-choose-card wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
				<div class="choose-content st-media-hover">
					<img src="<?php echo esc_url($hotel26_repeater_image); ?>" alt="<?php echo esc_attr__('Choose Image','hotel-26-pro'); ?>">
					<img src="<?php echo esc_url($hotel26_repeater_image); ?>" alt="<?php echo esc_attr__('Choose Image','hotel-26-pro'); ?>">
					<h5 class="choose-title"><?php echo esc_html($hotel26_repeater_title); ?></h5>
				</div>
			</div>
		<?php  endif; } } ?>			
		</div>
	</div>
</section>
<?php } ?>