<?php
function metasoft_slider_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider Section Panel
	=========================================*/
	
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'clever-fox' ),
			'panel' => 'metasoft_frontpage_sections',
			'priority' => 1,
		)
	);
	
	// slider Contents
	$wp_customize->add_setting(
		'slider_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'metasoft_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','clever-fox'),
			'section' => 'slider_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add slides
	 */
	
		$wp_customize->add_setting( 'slider', 
			array(
			 'sanitize_callback' => 'metasoft_repeater_sanitize',
			 'priority' => 5,
			  'default' => metasoft_get_slider_default()
			)
		);
		
		$wp_customize->add_control( 
			new MetaSoft_Repeater( $wp_customize, 
				'slider', 
					array(
						'label'   => esc_html__('Slide','clever-fox'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Slider', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Slider', 'clever-fox' ),
						
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control'=> true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_slide_align' => true,
						'customizer_repeater_image_control' => true,
					) 
				) 
			);	
	
	
	//Pro feature
		class Metasoft_slider__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
			$theme = wp_get_theme(); // gets the current theme
			if( 'Belltech' == $theme->name ){
			?>
			
				<a class="customizer_slider_upgrade_section up-to-pro" href="https://www.nayrathemes.com/belltech-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }else{ ?>	
			
				<a class="customizer_slider_upgrade_section up-to-pro" href="https://www.nayrathemes.com/metasoft-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php
			} }
		}
		
		$wp_customize->add_setting( 'metasoft_slider_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Metasoft_slider__section_upgrade(
			$wp_customize,
			'metasoft_slider_upgrade_to_pro',
				array(
					'section'				=> 'slider_setting',
				)
			)
		);
		
	// slider opacity
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'slider_opacity',
			array(
				'default'	      => '0.6',
				'capability'     	=> 'edit_theme_options',
				//'sanitize_callback' => 'metasoft_sanitize_range_value',
				'priority' => 7,
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'slider_opacity', 
			array(
				'label'      => __( 'opacity', 'clever-fox' ),
				'section'  => 'slider_setting',
				'input_attrs' => array(
					'min'    => 0,
					'max'    => 0.9,
					'step'   => 0.1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
	}
}

add_action( 'customize_register', 'metasoft_slider_setting' );