<?php  
	if ( ! defined( 'ABSPATH' ) ) exit;
	$hotel26_pricing_hs 			= get_theme_mod('pricing_hs', '1');
	$hotel26_pricing_header_hs 		= get_theme_mod('pricing_header_hs', '1');
	$hotel26_pricing_title 			= get_theme_mod('pricing_title','Explore');
	$hotel26_pricing_subtitle 		= get_theme_mod('pricing_subtitle','Our <span class="color-secondary">Pricing</span>');
	$hotel26_pricing_description	= get_theme_mod('pricing_description','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
	$hotel26_pricing_contents 		= get_theme_mod('pricing_contents',hotel26_pricing_default());
	$hotel26_pricing 				= json_decode($hotel26_pricing_contents,true);
	if( $hotel26_pricing_hs == '1' ) {
?>	
<section id="pricing-section" class="pricing-section st-py-default filter-group">
	<div class="container">
	<?php if($hotel26_pricing_header_hs == '1') { ?>
		<div class="heading-default text-center wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
			<div class="section-title">
				<?php if(!empty($hotel26_pricing_title)): ?>
					<h6 class="sub-title wow bounceInDown"><?php echo wp_kses_post($hotel26_pricing_title); ?></h6>				
				<?php endif; ?>
				<?php if(!empty($hotel26_pricing_subtitle)): ?>
					<h2 class="wow bounceIn title"><?php echo wp_kses_post($hotel26_pricing_subtitle); ?></h2>				
				<?php endif; ?>
				<?php if(!empty($hotel26_pricing_description)): ?>
					<p class="wow bounceInUp desc"><?php echo wp_kses_post($hotel26_pricing_description); ?></p>
				<?php endif; ?>				
			</div>
		</div>
	<?php } ?>
		<div id="MasonryFilter" class="pricing-box-cover row row-cols-lg-4 row-cols-sm-2 st-filter-init gy-4 gy-sm-5 wow fadeIn" data-wow-delay="250ms" data-wow-duration="1500ms">
		<?php
			if (!empty($hotel26_pricing)) :
			 foreach ($hotel26_pricing as $hotel26_slide_item) :						
				$hotel26_repeater_title     = ! empty( $hotel26_slide_item['title'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['title'], 'Pricing section' ) : '';
				$hotel26_repeater_subtitle     = ! empty( $hotel26_slide_item['subtitle'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['subtitle'], 'Pricing section' ) : '';
				$hotel26_repeater_text     = ! empty( $hotel26_slide_item['text'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['text'], 'Pricing section' ) : '';
				$hotel26_repeater_text2     = ! empty( $hotel26_slide_item['text2'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['text2'], 'Pricing section' ) : '';
				$hotel26_repeater_text3     = ! empty( $hotel26_slide_item['text3'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['text3'], 'Pricing section' ) : '';
				$hotel26_repeater_button_text     = ! empty( $hotel26_slide_item['button_text'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['button_text'], 'Pricing section' ) : '';
				$hotel26_repeater_button_link     = ! empty( $hotel26_slide_item['button_link'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['button_link'], 'Pricing section' ) : '';
				$hotel26_repeater_newtab     = ! empty( $hotel26_slide_item['newtab'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['newtab'], 'Pricing section' ) : '';
				$hotel26_repeater_nofollow     = ! empty( $hotel26_slide_item['nofollow'] ) ? apply_filters( 'hotel26_translate_single_string',$hotel26_slide_item['nofollow'], 'Pricing section' ) : '';
		?>
			<div class="col">
				<div class="pricing-item wow flipInY">
					<?php if( !empty($hotel26_repeater_text) || !empty($hotel26_repeater_text2) ) { ?>
					<div class="pricing-rate">
						<span class="price"><?php echo esc_html($hotel26_repeater_text); ?></span>
						<span class="per-night"><?php echo esc_html($hotel26_repeater_text2); ?></span>
					</div>
					<?php } ?>
					<?php if(!empty($hotel26_repeater_title) || !empty($hotel26_repeater_subtitle) ) { ?>
					<div class="pricing-heading">
						<?php if( !empty($hotel26_repeater_title) ) { ?><h5 class="fw-bold mb-2"><?php echo esc_html($hotel26_repeater_title); ?></h5><?php } ?>
						<?php if( !empty($hotel26_repeater_subtitle) ) { ?><span class="popular-badge"><?php echo esc_html($hotel26_repeater_subtitle); ?></span><?php } ?>
					</div>
					<?php } ?>
					<div class="pricing-list">
						<?php if( !empty($hotel26_repeater_text3) ) { ?><div class="included-title"><?php echo esc_html($hotel26_repeater_text3); ?></div><?php } ?>
						<ul>
						<?php
							$hotel26_repeater_data = $hotel26_slide_item['social_repeater'];
							if (!empty($hotel26_repeater_data)) :
							$hotel26_repeater_data_list = json_decode($hotel26_repeater_data, true);
							 foreach ($hotel26_repeater_data_list as  $hotel26_repeater_value) :
								$hotel26_repeater_social_title = ! empty( $hotel26_repeater_value['title'] ) ? apply_filters( 'hotel26_translate_single_string', $hotel26_repeater_value['title'], 'Pricing section' ) : '';
								$hotel26_repeater_social_subtitle = ! empty( $hotel26_repeater_value['subtitle'] ) ? apply_filters( 'hotel26_translate_single_string', $hotel26_repeater_value['subtitle'], 'Pricing section' ) : '';
								$hotel26_repeater_active = ( ($hotel26_repeater_social_subtitle == 'yes' ) || ( $hotel26_repeater_social_subtitle =='Yes' ) || ( $hotel26_repeater_social_subtitle == 'YES' )) ? 'active' : '';
						?>
							<li><span class="price-feature <?php echo esc_attr($hotel26_repeater_active); ?>"></span><?php echo esc_html($hotel26_repeater_social_title); ?></li>
					<?php endforeach; endif;  ?>	                                                                                 
						</ul>
					</div>
					<a href="<?php echo esc_url($hotel26_repeater_button_link); ?>" class="btn btn-primary" <?php if($hotel26_repeater_newtab == '1') {echo 'target="_blank"'; } ?> rel="<?php if($hotel26_repeater_newtab == '1') {echo 'noreferrer noopener';} ?> <?php if($hotel26_repeater_nofollow == '1') {echo 'nofollow';} ?>"><?php echo esc_html($hotel26_repeater_button_text); ?></a>
				</div>
			</div>
		<?php endforeach; endif; ?>
		</div>
	</div>
</section>
<?php } ?>