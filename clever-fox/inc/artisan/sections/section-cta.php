<?php  
	$cta_hs							= get_theme_mod('cta_hs','1'); 
	$artisan_cta_title				= get_theme_mod('cta_title',__('We\'re Ready To Grow You Business Get Start Today!','clever-fox')); 
	$artisan_cta_subtitle				= get_theme_mod('cta_subtitle',__('Want To Work With Us?','clever-fox')); 
	$artisan_cta_description			= get_theme_mod('cta_description',__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum ac mauris sit amet pretium. Sed fringilla mauris in eros porta posuere.','clever-fox'));
	$artisan_cta_video_url			= get_theme_mod('cta_video_url',esc_url('https://www.youtube.com/watch?v=b5Jyqzm5idw'));
	$artisan_cta_btn_lbl				= get_theme_mod('cta_btn_lbl',__('Get A Quote','clever-fox')); 
	$artisan_cta_btn_link				= get_theme_mod('cta_btn_link', esc_url('#'));
	$artisan_cta_btn_lbl2				= get_theme_mod('cta_btn_lbl2',__('Read More','clever-fox')); 
	$artisan_cta_btn_link2			= get_theme_mod('cta_btn_link2', esc_url('#'));
	
	$artisan_cta_bg_setting			= get_theme_mod('cta_bg_setting',esc_url(CLEVERFOX_PLUGIN_URL. 'inc/artisan/images/bg-cta.jpg')); 
	$artisan_cta_bg_position			= get_theme_mod('cta_bg_position','fixed');
	if($cta_hs == 1) {
?>
<!-- cta section -->
<section class="cta-section scroll-bg roller cta-section-home" data-roller="start:0.5" style="background: var(--primary-color);">
    <div class="container">
        <div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="cta-content">
				
					<?php if(!empty($artisan_cta_subtitle)): ?>
						<span>
							<?php if($artisan_cta_subtitle): esc_html(printf(/* translators: %s: artisan_cta_subtitle */__( '%s','clever-fox' ),$artisan_cta_subtitle)); endif; ?>
						</span>
					<?php endif; ?>
					<?php if(!empty($artisan_cta_title)): ?>
						<h2>
							<?php if($artisan_cta_title): esc_html(printf(/* translators: %s: artisan_cta_title */__( '%s','clever-fox' ),$artisan_cta_title)); endif; ?>
						</h2>
					<?php endif; ?>
					
					<?php if(!empty($artisan_cta_description)): ?>
						<p class="col-lg-9 mx-auto">
							<?php echo wp_kses_post($artisan_cta_description); ?>
						</p>
					<?php endif; ?>	
					
				</div>
			</div>
        </div>
    </div>
</section>
<!-- cta section end-->
<?php } ?>