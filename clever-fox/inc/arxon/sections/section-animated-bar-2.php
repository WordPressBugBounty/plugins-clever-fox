<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	if ( ! function_exists( 'avril_lite_animate' ) ) :
	function avril_lite_animate() {
	$avril_animate_contents		= get_theme_mod('animate2_contents',avril_get_animate2_default());
	$avril_animate_title		= get_theme_mod('animate_title', __('Trusted by <span class="highlight">3500+</span> Happy Customers Around The World','clever-fox'));
	$avril_hs_animate			= get_theme_mod('hs_animate','1');
	if( $avril_hs_animate == '1' ) {
?>
    <section id="animate-section" class="animate-section type-2 animate-section-hover animate-home av-pt-default">
    	<div class="av-container">
			<div class="animate-content">
				<?php if ( ! empty( $avril_animate_title ) ) : ?>					
					<div class="trusted-section">
						<span class="line"></span>

						<div class="trusted-text">
							<?php echo wp_kses_post( $avril_animate_title ); ?>
						</div>

						<span class="line"></span>
					</div>
				<?php endif; ?>							
			</div>
            <div class="animates-carousel owl-carousel owl-theme wow fadeInUp">
				<?php
					if ( ! empty( $avril_animate_contents ) ) {
					$avril_animate_contents = json_decode( $avril_animate_contents );
					foreach ( $avril_animate_contents as $avril_animate_item ) {
						$avril_image = ! empty( $avril_animate_item->image_url) ? apply_filters( 'avril_translate_single_string', $avril_animate_item->image_url,'animate section' ) : '';
				?>
					<div class="animate-item">
						<div class="animate-icon">
							<?php if ( ! empty( $avril_image ) ) {?>
								<img src="<?php echo esc_url($avril_image); ?>" alt="<?php echo esc_attr__("Image",'clever-fox'); ?>">
							<?php } ?>
						</div>
					</div>
				<?php }}?>
            </div>
    	</div>
    </section>
	<?php
	}} endif; 
	if ( function_exists( 'avril_lite_animate' ) ) {
		$cleverfox_section_priority = apply_filters( 'avril_section_priority', 12, 'avril_lite_animate' );
		add_action( 'avril_sections', 'avril_lite_animate', absint( $cleverfox_section_priority ) );
	}