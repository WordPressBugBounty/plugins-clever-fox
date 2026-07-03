<?php
	$hotel26_funfact_contents		= get_theme_mod('funfact_contents',hotel26_get_funfact_default());
	if ( ! empty( $hotel26_funfact_contents ) ) {
	$hotel26_funfact_contents = json_decode( $hotel26_funfact_contents );
	foreach ( $hotel26_funfact_contents as $hotel26_index => $hotel26_funfact_item ) {
		$hotel26_repeater_image = ! empty( $hotel26_funfact_item->image_url ) ? apply_filters( 'hotel26_translate_single_string', $hotel26_funfact_item->image_url, 'Funfact section' ) : '';
		$hotel26_repeater_title = ! empty( $hotel26_funfact_item->title ) ? apply_filters( 'hotel26_translate_single_string', $hotel26_funfact_item->title, 'Funfact section' ) : '';
		$hotel26_repeater_subtitle = ! empty( $hotel26_funfact_item->subtitle ) ? apply_filters( 'hotel26_translate_single_string', $hotel26_funfact_item->subtitle, 'Funfact section' ) : '';
		$hotel26_repeater_text = ! empty( $hotel26_funfact_item->text ) ? apply_filters( 'hotel26_translate_single_string', $hotel26_funfact_item->text, 'Funfact section' ) : '';					
?>
<div class="col wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
	<div class="funfact-item">
	<?php if(!empty($hotel26_repeater_image)): ?>
		<div class="funfact-img">
			<img src="<?php echo esc_url($hotel26_repeater_image); ?>" alt="<?php echo esc_attr__('funfact','clever-fox'); ?>">
		</div>
	<?php endif; ?>
		<div class="funfact-content">
			<?php if(!empty($hotel26_repeater_subtitle) || !empty($hotel26_repeater_title)): ?><h5><span class="counter odometer" data-count="<?php echo esc_attr($hotel26_repeater_title); ?>"></span><span><?php echo esc_html($hotel26_repeater_subtitle); ?></span></h5><?php endif; ?>
			<?php if(!empty($hotel26_repeater_text)): ?><span class="title"><?php echo esc_html($hotel26_repeater_text); ?></span><?php endif; ?>
		</div>
	</div>
</div>
<?php }} ?>