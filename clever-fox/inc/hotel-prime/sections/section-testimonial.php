<?php  
	if ( ! defined( 'ABSPATH' ) ) exit;
	$hotel26_testimonial_hs 			= get_theme_mod('testimonial_hs','1');
	$hotel26_testimonial_contents			= get_theme_mod('testimonial_contents', hotel26_testimonial_default());
	if( $hotel26_testimonial_hs == '1' ) {
?>	
<section id="testimonial-section" class="testimonial-section st-py-default">	
	<div class="container">
		<div class="row gy-4 gx-xl-5">
			<div class="col-lg-12 col-sm-6">
				<div class="testimonial-slider owl-carousel">
				<?php
					if ( ! empty( $hotel26_testimonial_contents ) ) {
					$hotel26_testimonial_contents = json_decode( $hotel26_testimonial_contents );
					foreach ( $hotel26_testimonial_contents as $hotel26_testimonial_item ) {
						$hotel26_repeater_image = ! empty( $hotel26_testimonial_item->image_url ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_testimonial_item->image_url, 'Testimonial section' ) : '';
						$hotel26_repeater_title = ! empty( $hotel26_testimonial_item->title ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_testimonial_item->title, 'Testimonial section' ) : '';
						$hotel26_repeater_subtitle = ! empty( $hotel26_testimonial_item->subtitle ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_testimonial_item->subtitle, 'Testimonial section' ) : '';
						$hotel26_repeater_text = ! empty( $hotel26_testimonial_item->text ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_testimonial_item->text, 'Testimonial section' ) : '';
						$hotel26_repeater_description = ! empty( $hotel26_testimonial_item->description ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_testimonial_item->description, 'Testimonial section' ) : '';
						$hotel26_repeater_image2 = ! empty( $hotel26_testimonial_item->image_url2 ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_testimonial_item->image_url2, 'Testimonial section' ) : '';
				?>
					<div class="testimonial-item wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
						<div class="testimonial-author">
						<?php if(!empty($hotel26_repeater_image)){ ?>
							<div class="testimonial-img">
								<img src="<?php echo esc_url($hotel26_repeater_image);?>" alt="<?php echo esc_attr__('Testimonial Image','clever-fox'); ?>">
							</div>
						<?php } ?>
							<div>
								<?php if(!empty($hotel26_repeater_title)){ ?>
									<h6 class="fw-bold mb-1"><?php echo esc_html($hotel26_repeater_title);?></h6>
								<?php } ?>	
								<?php if(!empty($hotel26_repeater_subtitle)){ ?>
									<span class="color-secondary"><?php echo esc_html($hotel26_repeater_subtitle);?></span>
								<?php } ?>
							</div>
						</div>
						<div class="testimonial-content">
							<?php if(!empty($hotel26_repeater_text)){ ?>
							<div class="rating">
								<?php for($hotel26_repeater_i=1;$hotel26_repeater_i<=$hotel26_repeater_text;$hotel26_repeater_i++){ ?>
									<i class="fa fa-star"></i>
								<?php } ?>
							</div>
							<?php } ?>
							
							<?php if(!empty($hotel26_repeater_description)){ ?>
								<p><?php echo esc_html($hotel26_repeater_description);?></p>
							<?php } ?>
							
							<?php if(!empty($hotel26_repeater_image2)){ ?>
							<div class="testimonial-footer">
								<div class="sponsor">
									<img src="<?php echo esc_url($hotel26_repeater_image2);?>" alt="<?php echo esc_attr__('Sponsor','clever-fox'); ?>">
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<?php } } ?>					
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>