<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function hotel_26_testimonial_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Testimonial  Section
	=========================================*/
	$wp_customize->add_section(
		'testimonial_setting', array(
			'title' => esc_html__( 'Testimonial Section', 'clever-fox' ),
			'panel' => 'hotel_26_frontpage_sections',
			'priority' => 7,
		)
	);
	
	$wp_customize->add_setting(
    	'testimonial_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_hs',
		array(
		    'label'   => __('Show/Hide','clever-fox'),
		    'section' => 'testimonial_setting',
			'type' => 'checkbox',
		)  
	);
		
	// Testimonial content Section // 	
	$wp_customize->add_setting(
		'testimonial_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'testimonial_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'testimonial_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add testimonial
	 */
	
		$wp_customize->add_setting( 'testimonial_contents', 
			array(
			 'sanitize_callback' => 'hotel_26_repeater_sanitize',
			 //'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => hotel26_testimonial_default()
			)
		);
		
		$wp_customize->add_control( 
			new Hotel_26_Repeater( $wp_customize, 
				'testimonial_contents', 
					array(
						'label'   => esc_html__('Testimonial','clever-fox'),
						'section' => 'testimonial_setting',
						'add_field_label'                   => esc_html__( 'Add New Testimonial', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Testimonial', 'clever-fox' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_description_control' => true,
						'customizer_repeater_image2_control' => true,
					) 
				) 
			);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'testimonial',
		'section'    => 'testimonial_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Upgrade to Pro','clever-fox'),
	) );
	
	//  Image // 
    $wp_customize->add_setting( 
    	'testimonial_bg_img' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL .'inc/hotel-26/images/testimonial/bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_url',
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'testimonial_bg_img' ,
		array(
			'label'          => esc_html__(  'Background Image', 'clever-fox'),
			'section'        => 'testimonial_setting',
		) 
	));
	
	$wp_customize->add_setting(
		'testimonial_background_attachment',
		array(
			'default'			=> 'fixed',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_select',
		)
	);	

	$wp_customize->add_control(
		'testimonial_background_attachment',
		array(
			'label'   		=> __('Background Attachment','clever-fox'),
			'section' 		=> 'testimonial_setting',
			'settings'   	 => 'testimonial_background_attachment',
			'type'			=> 'radio',
			'choices'        => 
			array(
				'scroll' => __( 'Scroll', 'clever-fox' ),
				'fixed' => __( 'Fixed', 'clever-fox' ),
				
			) 
		) 
	);
	
	// testimonial column // 
	$wp_customize->add_setting(
    	'testimonial_sec_column',
    	array(
	        'default'			=> '2',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_select',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control(
		'testimonial_sec_column',
		array(
		    'label'   		=> __('Testimonial Column','clever-fox'),
		    'section' 		=> 'testimonial_setting',
			'settings'   	 => 'testimonial_sec_column',
			'type'			=> 'select',
			'choices'        => 
			array(
				'2' => __( '2 Column', 'clever-fox' ),
				'3' => __( '3 Column', 'clever-fox' ),
				'4' => __( '4 Column', 'clever-fox' ),
			) 
		) 
	);
	
	
	// Testimonial Autoplay
		$wp_customize->add_setting( 
			'testimonial_autoplay', 
				array(
				'default' => 'true',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'hotel_26_sanitize_select',
				'priority' => 10,
			) 
		);
		$wp_customize->add_control('testimonial_autoplay', array(
		'label' => __('Slide Autoplay', 'clever-fox'),
		'section' => 'testimonial_setting',
		'type'			=> 'select',
		'choices'        => 
				array(
					'true'		=>__('Yes', 'clever-fox'),
					'false'=>__('No', 'clever-fox'),
				) 
		));
		
		// Testimonial Loop
		$wp_customize->add_setting( 
			'testimonial_loop_rewind' , 
				array(
				'default' => 'loop',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'hotel_26_sanitize_select',
				'priority' => 10,
			) 
		);
		$wp_customize->add_control('testimonial_loop_rewind', array(
		'label' => __('Loop/Rewind', 'clever-fox'),
		'section' => 'testimonial_setting',
		'type'			=> 'select',
		'choices'        => 
			array(
				'loop'		=>__('Loop', 'clever-fox'),
				'rewind'=>__('Rewind', 'clever-fox'),
			) 
	));
	
	
	//Spacing
	$wp_customize->add_setting(
		'testimonial_spacing_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'testimonial_spacing_head',
		array(
			'type' => 'hidden',
			'label' => __('Section Spacing','clever-fox'),
			'section' => 'testimonial_setting',
		)
	);
	
	// Padding // 
	$wp_customize->add_setting(
    	'testimonial_padding_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_padding_top',
		array(
		    'label'   => __('Padding Top','clever-fox'),
		    'section' => 'testimonial_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'testimonial_padding_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_padding_bottom',
		array(
		    'label'   => __('Padding Bottom','clever-fox'),
		    'section' => 'testimonial_setting',
			'type'           => 'text',
		)  
	);
	
	// Margin // 
	$wp_customize->add_setting(
    	'testimonial_margin_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_margin_top',
		array(
		    'label'   => __('Margin Top','clever-fox'),
		    'section' => 'testimonial_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'testimonial_margin_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_margin_bottom',
		array(
		    'label'   => __('Margin Bottom','clever-fox'),
		    'section' => 'testimonial_setting',
			'type'           => 'text',
		)  
	);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'testimonial_locked',
		'section'    => 'testimonial_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Unlock with Pro','clever-fox'),
	) );
}

add_action( 'customize_register', 'hotel_26_testimonial_setting' );

// testimonial selective refresh
function hotel_26_home_testimonial_section_partials( $wp_customize ){	
	// testimonial title
	$wp_customize->selective_refresh->add_partial( 'testimonial_title', array(
		'selector'            => '#testimonial-section .heading-default .sub-title',
		'settings'            => 'testimonial_title',
		'render_callback'  => 'hotel_26_testimonial_title_render_callback',
	
	) );
	
	// testimonial Subtitle
	$wp_customize->selective_refresh->add_partial( 'testimonial_subtitle', array(
		'selector'            => '#testimonial-section .heading-default .title',
		'settings'            => 'testimonial_subtitle',
		'render_callback'  => 'hotel_26_testimonial_subtitle_render_callback',
	));
	// testimonial description
	$wp_customize->selective_refresh->add_partial( 'testimonial_description', array(
		'selector'            => '#testimonial-section .heading-default .desc',
		'settings'            => 'testimonial_description',
		'render_callback'  => 'hotel_26_testimonial_desc_render_callback',	
	) );
	// testimonial_ttl
	$wp_customize->selective_refresh->add_partial( 'testimonial_ttl', array(
		'selector'            => '#testimonial-section .testimonial-contact-form h4',
		'settings'            => 'testimonial_ttl',
		'render_callback'  => 'hotel_26_testimonial_ttl_render_callback',	
	) );
	// testimonial content
	$wp_customize->selective_refresh->add_partial( 'testimonial_contents', array(
		'selector'            => '#testimonial-section .testimonial-slider'	
	) );
	// testimonial bg
	$wp_customize->selective_refresh->add_partial( 'testimonial_bg_img', array(
		'selector'            => '#testimonial-section'	
	) );	
}

add_action( 'customize_register', 'hotel_26_home_testimonial_section_partials' );

// testimonial title
function hotel_26_testimonial_title_render_callback() {
	return get_theme_mod( 'testimonial_title' );
}

// testimonial subtitle
function hotel_26_testimonial_subtitle_render_callback() {
	return get_theme_mod( 'testimonial_subtitle' );
}

// testimonial description
function hotel_26_testimonial_desc_render_callback() {
	return get_theme_mod( 'testimonial_description' );
}

// testimonial description
function hotel_26_hotel_26_testimonial_ttl_render_callback_render_callback() {
	return get_theme_mod( 'hotel_26_testimonial_ttl_render_callback' );
}
