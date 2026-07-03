<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$hotel26_slider_hs 		= get_theme_mod('slider_hs','1');
	$hotel26_elements_hs	= get_theme_mod('slider_elements_hs','1');
	$hotel26_slider 		= get_theme_mod('slider',hotel_26_get_slider_default());
	$hotel26_theme		= wp_get_theme();
	$hotel26_home	= ($hotel26_theme->get('Name') == 'Hotel Child3') ? 'home-4' : (($hotel26_theme->get('Name') == 'Hotel 26') ? 'style1' : (($hotel26_theme->get('Name') == 'Hotel Child5') ? 'home-6': ''));
	if($hotel26_slider_hs == '1') {
?>
<section id="slider-section" class="slider-wrapper <?php echo esc_attr($hotel26_home); ?>">
	<div class="main-slider owl-carousel owl-theme">
	<?php
			if ( ! empty( $hotel26_slider ) ) {
			$hotel26_allowed_html = array(
						'br'     => array(),
						'em'     => array(),
						'strong' => array(),
						'b'      => array(),
						'i'      => array(),
						'span'   => array('class' => array()),
						);
			$hotel26_slider = json_decode( $hotel26_slider );
			foreach ( $hotel26_slider as $hotel26_slide_item ) {
				$hotel26_repeater_title = ! empty( $hotel26_slide_item->title ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->title, 'slider section' ) : '';
				$hotel26_repeater_subtitle = ! empty( $hotel26_slide_item->subtitle ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->subtitle, 'slider section' ) : '';
				$hotel26_repeater_description = ! empty( $hotel26_slide_item->description ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->description, 'slider section' ) : '';
				$hotel26_repeater_button = ! empty( $hotel26_slide_item->button_text) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->button_text,'slider section' ) : '';
				$hotel26_repeater_button_link = ! empty( $hotel26_slide_item->button_link ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->button_link, 'slider section' ) : '';
				$hotel26_repeater_text = ! empty( $hotel26_slide_item->text) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->text,'slider section' ) : '';
				$hotel26_repeater_image = ! empty( $hotel26_slide_item->image_url ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->image_url, 'slider section' ) : '';
				$hotel26_video_url = ! empty( $hotel26_slide_item->video_url ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->video_url, 'slider section' ) : '';
				$hotel26_repeater_newtab = ! empty( $hotel26_slide_item->newtab ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->newtab, 'slider section' ) : '';
				$hotel26_repeater_nofollow = ! empty( $hotel26_slide_item->nofollow ) ? apply_filters( 'hotel_26_translate_single_string', $hotel26_slide_item->nofollow, 'slider section' ) : '';
		?>
		<div class="item">
		<?php
		if ( ($hotel26_theme->get('Name') == 'Mukundra')  ) {
			$hotel26_parsedUrl  = parse_url($hotel26_video_url);
		
		if ( ! empty( $hotel26_parsedUrl['host'] ) ) {
			//YouTube URL
			if($hotel26_parsedUrl['host'] == 'www.youtube.com' || $hotel26_parsedUrl['host'] == 'youtube.com' || $hotel26_parsedUrl['host'] == 'youtu.be')	{
												
			$hotel26_video_id = '';
			// Define regex patterns to match different YouTube URL formats
			$hotel26_patterns = [
				'/youtu\.be\/([a-zA-Z0-9_-]{11})/',                 // youtu.be/<id>
				'/youtube\.com\/embed\/([a-zA-Z0-9_-]{11})/',       // youtube.com/embed/<id>
				'/youtube\.com\/v\/([a-zA-Z0-9_-]{11})/',           // youtube.com/v/<id>
				'/youtube\.com\/watch\?v=([a-zA-Z0-9_-]{11})/',     // youtube.com/watch?v=<id>
				'/youtube\.com\/watch\?.*&v=([a-zA-Z0-9_-]{11})/',  // Other URL parameters
				'/youtube-nocookie\.com\/embed\/([a-zA-Z0-9_-]{11})/' // youtube-nocookie.com/embed/<id>
			];

			// Try each pattern to see if it matches the given URL
			foreach ($hotel26_patterns as $hotel26_pattern) {
				if (preg_match($hotel26_pattern, $hotel26_video_url, $hotel26_matches)) {
					$hotel26_video_id =  $hotel26_matches[1]; // Return the video ID (first captured group)
				}
			}
				
			$hotel26_embed_url = "https://www.youtube.com/embed/".$hotel26_video_id;
			
			?>
			<div class="overframe" ><iframe class="yt" id="slider_youtube-<?php echo esc_attr($hotel26_count); ?>"  src="<?php echo esc_url($hotel26_embed_url); ?>?playlist=<?php echo esc_attr($hotel26_video_id); ?>&loop=1&mute=1&autoplay=1&rel=0&showinfo=0&controls=0&enablejsapi=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe></div>					
			<?php
			} 
			
			 // vimeo URL
			elseif($hotel26_parsedUrl['host'] == 'www.player.vimeo.com' || $hotel26_parsedUrl['host'] == 'player.vimeo.com' || $hotel26_parsedUrl['host'] == 'www.vimeo.com' || $hotel26_parsedUrl['host'] == 'vimeo.com') {
				
			$hotel26_pattern = '/vimeo\.com\/([a-zA-Z0-9_-]+)/';
			preg_match($hotel26_pattern, $hotel26_video_url, $hotel26_matches);
			
			if (isset($hotel26_matches[1])) {
				$hotel26_video_id = $hotel26_matches[1]; // Return the captured video ID
			} else {
				$hotel26_video_id = ""; // Handle case where video ID is not found
			}
			 ?>
			<div class="overframe"><iframe class="vim" src="https://player.vimeo.com/video/<?php echo esc_url($hotel26_video_id); ?>?autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1&controls=0" frameborder="0" allowfullscreen></iframe></div>
			<?php } else { ?>
			
			<video autoplay muted loop playsinline><source src="<?php echo esc_url($hotel26_video_url); ?>" type="video/mp4"></video>
		
		<?php }}} else { 
		if(!empty($hotel26_repeater_image)){ ?>
			<img src="<?php echo esc_url($hotel26_repeater_image); ?>" data-img-url="<?php echo esc_url($hotel26_repeater_image); ?>" alt="<?php echo esc_attr__('Slider Image Here','clever-fox'); ?>" >
		<?php }} ?>
			<div class="theme-slider">
				<div class="theme-table">
					<div class="theme-table-cell">
						<div class="container">
						<?php if($hotel26_elements_hs == '1' && ($hotel26_theme->get('Name') == 'Hotel Child5') ) { ?>
							<div class="st-rain-wrapper">
								<div class="st-rain front"></div>
								<div class="st-rain back"></div>
							</div>
							<?php } ?>
							<div class="theme-content text-left">
								<div class="star-rating" data-animation="fadeInDown" data-delay="100ms">
									<?php
									 if (!empty($hotel26_repeater_text)) {	
										$hotel26_rating = floatval($hotel26_repeater_text);
										$hotel26_full_stars = floor($hotel26_rating);
										$hotel26_half_star = ($hotel26_rating - $hotel26_full_stars) >= 0.5 ? true : false;
										for ($hotel26_i = 0; $hotel26_i < $hotel26_full_stars; $hotel26_i++) {
											echo '<i class="fa fa-star"></i> ';
										}
										if ($hotel26_half_star) {
											echo '<i class="fa fa-star-half-alt"></i> ';
										} 
									} 
								?>
								</div>
								<?php if(!empty($hotel26_repeater_title)) { ?><h3 data-animation="fadeInDown" data-delay="150ms"><?php echo wp_kses( html_entity_decode( $hotel26_repeater_title ), $hotel26_allowed_html ); ?></h3><?php } ?>
								<?php if(!empty($hotel26_repeater_subtitle)) { ?><h1 data-animation="flipInX" data-delay="200ms"><?php echo wp_kses( html_entity_decode( $hotel26_repeater_subtitle ), $hotel26_allowed_html ); ?></h1><?php } ?>
								<?php if(!empty($hotel26_repeater_description)) { ?><p data-animation="fadeInUp" data-delay="500ms"><?php echo wp_kses_post( html_entity_decode($hotel26_repeater_description ), $hotel26_allowed_html ); ?></p><?php } ?>
								<?php if(!empty($hotel26_repeater_button)) { ?><a href="<?php echo esc_url($hotel26_repeater_button_link); ?>" <?php if($hotel26_repeater_newtab =='1') {echo 'target="_blank"'; } ?> rel="<?php if($hotel26_repeater_newtab =='1') {echo 'noreferrer noopener';} ?> <?php if($hotel26_repeater_nofollow =='1') {echo 'nofollow';} ?>" class="btn btn-secondary" data-animation="fadeInUp" data-delay="600ms"><?php echo wp_kses_post( $hotel26_repeater_button ); ?></a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } } ?>		
	</div>
	<?php if($hotel26_elements_hs == '1' && ($hotel26_theme->get('Name') == 'Hotel Child5') ) { ?>
	<div class="st-cloud-wrapper">
		<div class="animate-moveCloud">
			<img alt="Image" src="<?php echo esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/sidebar/cloud-1.png'); ?>">
		</div>
	</div>
	<div class="st-orbit-lines">
		<div class="orbit-1"><span></span></div>
		<div class="orbit-2"><span></span></div>
		<div class="orbit-3"><span></span></div>
	</div>
	<?php } ?>
</section>
<?php } ?>