<?php 
if ( ! function_exists( 'avril_lite_cta' ) ) :
	function avril_lite_cta() {
	$hs_cta						= get_theme_mod('hs_cta','1');	
	$cta_title					= get_theme_mod('cta_title', __('We work in partnership with all the major <i>technology</i> solutions','clever-fox'));
	$cta_description			= get_theme_mod('cta_description', __('There are many variations of passages of lorem Ipsum available, but the majority','clever-fox'));
	$cta_btn_lbl1				= get_theme_mod('cta_btn_lbl1', __('Purchase Now','clever-fox'));
	$cta_btn_link1				= get_theme_mod('cta_btn_link1');
	$cta_btn_second_ttl			= get_theme_mod('cta_btn_second_ttl', __('Get Quick Support', 'clever-fox'));
	$cta_btn_lbl2				= get_theme_mod('cta_btn_lbl2', __('+22 24588-55069', 'clever-fox'));
	$cta_btn_link2				= get_theme_mod('cta_btn_link2');
	$cta_image					= get_theme_mod('cta_image',CLEVERFOX_PLUGIN_URL . '/inc/avail/images/cta-image.png');
if($hs_cta == '1') {	
?>	
	<section id="cta-section" class="cta-section cta-3 cta-bg-image home-cta">
		<div class="av-container">
			<div class="av-columns-area">
				<div class="av-column-12">
					<div class="cta-wrapper">
						<div class="cta-content">
	                    	<?php if ( ! empty( $cta_image ) ) : ?>
								<div class="cta-img"><img src="<?php echo esc_url($cta_image); ?>"></div>
							<?php endif; ?>
	                    	<div class="cta-text">
							<?php if ( ! empty( $cta_title ) ) : ?>
								<h4><?php echo wp_kses_post($cta_title); ?></h4>
							<?php endif; ?>
							<?php if ( ! empty($cta_description) ) : ?>		
								<p><?php echo wp_kses_post($cta_description); ?></p>    
							<?php endif; ?>	
							</div>
						</div>
						<div class="cta-btn-wrap text-av-right text-center">
							<?php if ( ! empty( $cta_btn_lbl2 ) ) : ?>
							<a class="cta-more" href="<?php echo esc_url($cta_btn_link2); ?>"><div class="cta-icon"><i class="fa fa-phone"></i></div><div class="cta-label"><span class="cta-label-title"><?php if ( ! empty( $cta_btn_second_ttl ) ) :  /* translators: %s: Button2 Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($cta_btn_second_ttl)); endif; ?></span><span class="cta-label-dis"><?php /* translators: %s: Button Label2 */printf( esc_html__('%s.', 'clever-fox'), esc_html($cta_btn_lbl2)); ?></span></div></a>
							<?php endif;?>
							<?php if ( ! empty( $cta_btn_lbl1 ) ) : ?>
								<a href="<?php echo esc_url($cta_btn_link1); ?>" class="av-btn av-btn-white" data-text="Contact With Us"><?php /* translators: %s: Button Label1 */printf( esc_html__('%s.', 'clever-fox'), esc_html($cta_btn_lbl1)); ?></a>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php	
	}} endif; 
	if ( function_exists( 'avril_lite_cta' ) ) {
		$section_priority = apply_filters( 'avril_section_priority', 14, 'avril_lite_cta' );
		add_action( 'avril_sections', 'avril_lite_cta', absint( $section_priority ) );
	}	