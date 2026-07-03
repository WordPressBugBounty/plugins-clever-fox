<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function hotel_26_funfact_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Funfact  Section
	=========================================*/
	$wp_customize->add_section(
		'funfact_setting', array(
			'title' => esc_html__( 'Funfact Section', 'clever-fox' ),
			'panel' => 'hotel_26_frontpage_sections',
			'priority' => 6,
		)
	);

	$wp_customize->add_setting(
    	'funfact_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'funfact_hs',
		array(
		    'label'   => __('Show/Hide','clever-fox'),
		    'section' => 'funfact_setting',
			'type' => 'checkbox',
		)  
	);
	
	// Funfact content Section // 	
	$wp_customize->add_setting(
		'funfact_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'funfact_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'funfact_setting',
		)
	);
	
	$cleverfox_theme = wp_get_theme();	
	if($cleverfox_theme->get('Name') == 'Hotel Child5'):
	
	$wp_customize->add_setting(
		'funfact_title'
			,array(
			'default'	=>	__('Say <span>Yes !</span>','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'funfact_title',
		array(
			'type' => 'text',
			'label' => __('Title','clever-fox'),
			'section' => 'funfact_setting',
		)
	);
	
	$wp_customize->add_setting(
		'funfact_subtitle'
			,array(
			'default'	=>	__('To New Adventure','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'funfact_subtitle',
		array(
			'type' => 'text',
			'label' => __('Subtitle','clever-fox'),
			'section' => 'funfact_setting',
		)
	);
	
	$wp_customize->add_setting(
    	'funfact_bg_video',
    	array(
			'default'	=> esc_url('https://www.youtube.com/watch?v=s8vnc9l8sz4'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_url',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'funfact_bg_video',
		array(
		    'label'   => __('Video URL','clever-fox'),
		    'section' => 'funfact_setting',
			'type' => 'text',
		)  
	);
	
	//  Image // 
    $wp_customize->add_setting( 
    	'funfact_bg_image' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL . 'inc/hotel-26/images/funfact/img1.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_url',
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'funfact_bg_image' ,
		array(
			'label'          => esc_html__('Video Background Image', 'clever-fox'),
			'section'        => 'funfact_setting',
		) 
	));
	
	endif;
		
	
	/**
	 * Customizer Repeater for add funfact
	 */
	
		$wp_customize->add_setting( 'funfact_contents', 
			array(
			 'sanitize_callback' => 'hotel_26_repeater_sanitize',
			 'priority' => 8,
			 'default' => hotel26_get_funfact_default()
			)
		);
		
		$wp_customize->add_control( 
			new Hotel_26_Repeater( $wp_customize, 
				'funfact_contents', 
					array(
						'label'   => esc_html__('Funfact','clever-fox'),
						'section' => 'funfact_setting',
						'add_field_label'                   => esc_html__( 'Add New Funfact', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Funfact', 'clever-fox' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_subtitle_control' => true,
					) 
				) 
			);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'funfact',
		'section'    => 'funfact_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Upgrade to Pro','clever-fox'),
	) );
	
	
	
	//  Image // 
    $wp_customize->add_setting( 
    	'funfact_bg_img' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/funfact/bg-shape-1.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_url',
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'funfact_bg_img' ,
		array(
			'label'          => esc_html__(  'Background Image', 'clever-fox'),
			'section'        => 'funfact_setting',
		) 
	));
	
	
	//Spacing
	$wp_customize->add_setting(
		'funfact_spacing_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'funfact_spacing_head',
		array(
			'type' => 'hidden',
			'label' => __('Section Spacing','clever-fox'),
			'section' => 'funfact_setting',
		)
	);
	
	// Padding // 
	$wp_customize->add_setting(
    	'funfact_padding_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'funfact_padding_top',
		array(
		    'label'   => __('Padding Top','clever-fox'),
		    'section' => 'funfact_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'funfact_padding_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'funfact_padding_bottom',
		array(
		    'label'   => __('Padding Bottom','clever-fox'),
		    'section' => 'funfact_setting',
			'type'           => 'text',
		)  
	);
	
	// Margin // 
	$wp_customize->add_setting(
    	'funfact_margin_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'funfact_margin_top',
		array(
		    'label'   => __('Margin Top','clever-fox'),
		    'section' => 'funfact_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'funfact_margin_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'funfact_margin_bottom',
		array(
		    'label'   => __('Margin Bottom','clever-fox'),
		    'section' => 'funfact_setting',
			'type'           => 'text',
		)  
	);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'funfact_locked',
		'section'    => 'funfact_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Unlock with Pro','clever-fox'),
	) );
}

add_action( 'customize_register', 'hotel_26_funfact_setting' );

// funfact selective refresh
function hotel_26_home_funfact_section_partials( $wp_customize ){	
	// funfact title
	$wp_customize->selective_refresh->add_partial( 'funfact_title', array(
		'selector'            => '#funfact-section .heading-default .sub-title',
		'settings'            => 'funfact_title',
		'render_callback'  => 'hotel_26_funfact_title_render_callback',
	
	) );
	
	// funfact Subtitle
	$wp_customize->selective_refresh->add_partial( 'funfact_subtitle', array(
		'selector'            => '#funfact-section .heading-default .title',
		'settings'            => 'funfact_subtitle',
		'render_callback'  => 'hotel_26_funfact_subtitle_render_callback',
	));
	// funfact description
	$wp_customize->selective_refresh->add_partial( 'funfact_description', array(
		'selector'            => '#funfact-section .heading-default .desc',
		'settings'            => 'funfact_description',
		'render_callback'  => 'hotel_26_funfact_desc_render_callback',	
	) );
	// funfact content
	$wp_customize->selective_refresh->add_partial( 'funfact_contents', array(
		'selector'            => '#funfact-section .row'	
	) );
	// funfact bg
	$wp_customize->selective_refresh->add_partial( 'funfact_bg_img', array(
		'selector'            => '#funfact-section'	
	) );	
}

add_action( 'customize_register', 'hotel_26_home_funfact_section_partials' );

// funfact title
function hotel_26_funfact_title_render_callback() {
	return get_theme_mod( 'funfact_title' );
}

// funfact subtitle
function hotel_26_funfact_subtitle_render_callback() {
	return get_theme_mod( 'funfact_subtitle' );
}

// funfact description
function hotel_26_funfact_desc_render_callback() {
	return get_theme_mod( 'funfact_description' );
}
