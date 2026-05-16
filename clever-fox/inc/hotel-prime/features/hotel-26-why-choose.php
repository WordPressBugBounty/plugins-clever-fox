<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function hotel_26_choose_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Why Choose Us  Section
	=========================================*/
	$wp_customize->add_section(
		'choose_setting', array(
			'title' => esc_html__( 'Why Choose Us Section', 'hotel-26-pro' ),
			'panel' => 'hotel_26_frontpage_sections',
			'priority' => 17,
		)
	);	
	
	$wp_customize->add_setting(
    	'choose_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_hs',
		array(
		    'label'   => __('Show/Hide','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type' => 'checkbox',
		)  
	);
	
	// Header // 
	$wp_customize->add_setting(
    	'choose_ttl_head',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_ttl_head',
		array(
		    'label'   => __('Header','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type' => 'hidden',
		)  
	);
	
	$wp_customize->add_setting(
    	'choose_header_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_header_hs',
		array(
		    'label'   => __('Show/Hide','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type' => 'checkbox',
		)  
	);
	
	$wp_customize->add_setting(
    	'choose_title',
    	array(
			'default' => 'Explore',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_title',
		array(
		    'label'   => __('Title','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type'           => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'choose_subtitle',
    	array(
			'default' => 'Why <span class="color-secondary">Choose Us',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_subtitle',
		array(
		    'label'   => __('Subtitle','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type'           => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'choose_description',
    	array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_description',
		array(
		    'label'   => __('Description','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type'           => 'textarea',
		)  
	);
	
	// Why Choose Us content Section // 	
	$wp_customize->add_setting(
		'choose_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'choose_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','hotel-26-pro'),
			'section' => 'choose_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add choose
	 */
	
		$wp_customize->add_setting( 'choose_contents', 
			array(
			 'sanitize_callback' => 'hotel_26_repeater_sanitize',
			 'priority' => 8,
			 'default' => hotel26_choose_default()
			)
		);
		
		$wp_customize->add_control( 
			new Hotel_26_Repeater( $wp_customize, 
				'choose_contents', 
					array(
						'label'   => esc_html__('Why Choose Us','hotel-26-pro'),
						'section' => 'choose_setting',
						'add_field_label'                   => esc_html__( 'Add New Choose Us', 'hotel-26-pro' ),
						'item_name'                         => esc_html__( 'Choose', 'hotel-26-pro' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
					) 
				) 
			);
		
		//Pro feature
		cleverfox_themes_section_upgrade_control( $wp_customize, array(
			'theme_slug' => 'hotel_26_',
			'setting_id' => 'choose',
			'section'    => 'choose_setting',
			'pro_url'    => hotel_26_premium_links(),
			'custom_text'    => __('Upgrade to Pro','clever-fox'),
		) );
	
	// choose column // 
	$wp_customize->add_setting(
    	'choose_sec_column',
    	array(
	        'default'			=> '4',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_select',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control(
		'choose_sec_column',
		array(
		    'label'   		=> __('Why Choose Us Column','hotel-26-pro'),
		    'section' 		=> 'choose_setting',
			'settings'   	 => 'choose_sec_column',
			'type'			=> 'select',
			'choices'        => 
			array(
				'3' => __( '3 Column', 'hotel-26-pro' ),
				'4' => __( '4 Column', 'hotel-26-pro' ),
				'5' => __( '5 Column', 'hotel-26-pro' ),
			) 
		) 
	);
	
	if ( class_exists( 'Hotel_26_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'choose_animation_speed',
			array(
				'default' => '5000',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'hotel_26_sanitize_range_value',
				'priority' => 11,
			)
		);
		$wp_customize->add_control( 
		new Hotel_26_Customizer_Range_Control( $wp_customize, 'choose_animation_speed', 
			array(
				'label'      => __( 'Slide Speed', 'hotel-26-pro' ),
				'section'  => 'choose_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'           => 2000,
							'max'           => 10000,
							'step'          => 500,
							'default_value' => 5000,
						),
					),
			) ) 
		);
	}
	
	
	// Why Choose Us Autoplay
		$wp_customize->add_setting( 
			'choose_autoplay', 
				array(
				'default' => 'true',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'hotel_26_sanitize_select',
				'priority' => 10,
			) 
		);
		$wp_customize->add_control('choose_autoplay', array(
		'label' => __('Slide Autoplay', 'hotel-26-pro'),
		'section' => 'choose_setting',
		'type'			=> 'select',
		'choices'        => 
				array(
					'true'		=>__('Yes', 'hotel-26-pro'),
					'false'=>__('No', 'hotel-26-pro'),
				) 
		));
		
		// Why Choose Us Loop
		$wp_customize->add_setting( 
			'choose_loop_rewind' , 
				array(
				'default' => 'loop',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'hotel_26_sanitize_select',
				'priority' => 10,
			) 
		);
		$wp_customize->add_control('choose_loop_rewind', array(
		'label' => __('Loop/Rewind', 'hotel-26-pro'),
		'section' => 'choose_setting',
		'type'			=> 'select',
		'choices'        => 
			array(
				'loop'		=>__('Loop', 'hotel-26-pro'),
				'rewind'=>__('Rewind', 'hotel-26-pro'),
			) 
	));
	
	//Spacing
	$wp_customize->add_setting(
		'choose_spacing_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'choose_spacing_head',
		array(
			'type' => 'hidden',
			'label' => __('Section Spacing','hotel-26-pro'),
			'section' => 'choose_setting',
		)
	);
	
	// Padding // 
	$wp_customize->add_setting(
    	'choose_padding_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_padding_top',
		array(
		    'label'   => __('Padding Top','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'choose_padding_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_padding_bottom',
		array(
		    'label'   => __('Padding Bottom','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type'           => 'text',
		)  
	);
	
	// Margin // 
	$wp_customize->add_setting(
    	'choose_margin_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_margin_top',
		array(
		    'label'   => __('Margin Top','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'choose_margin_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'choose_margin_bottom',
		array(
		    'label'   => __('Margin Bottom','hotel-26-pro'),
		    'section' => 'choose_setting',
			'type'           => 'text',
		)  
	);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'choose_locked',
		'section'    => 'choose_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Unlock with Pro','clever-fox'),
	) );
}

add_action( 'customize_register', 'hotel_26_choose_setting' );

// choose selective refresh
function hotel_26_home_choose_section_partials( $wp_customize ){	
	// choose title
	$wp_customize->selective_refresh->add_partial( 'choose_title', array(
		'selector'            => '#choose-section .heading-default .sub-title',
		'settings'            => 'choose_title',
		'render_callback'  => 'hotel_26_choose_title_render_callback',
	
	) );
	
	// choose Subtitle
	$wp_customize->selective_refresh->add_partial( 'choose_subtitle', array(
		'selector'            => '#choose-section .heading-default .title',
		'settings'            => 'choose_subtitle',
		'render_callback'  => 'hotel_26_choose_subtitle_render_callback',
	));
	// choose description
	$wp_customize->selective_refresh->add_partial( 'choose_description', array(
		'selector'            => '#choose-section .heading-default .desc',
		'settings'            => 'choose_description',
		'render_callback'  => 'hotel_26_choose_desc_render_callback',	
	) );
	// choose description
	$wp_customize->selective_refresh->add_partial( 'choose_contents', array(
		'selector'            => '#choose-section .why-choose-slider',			
	) );	
}

add_action( 'customize_register', 'hotel_26_home_choose_section_partials' );

// choose title
function hotel_26_choose_title_render_callback() {
	return get_theme_mod( 'choose_title' );
}

// choose subtitle
function hotel_26_choose_subtitle_render_callback() {
	return get_theme_mod( 'choose_subtitle' );
}

// choose description
function hotel_26_choose_desc_render_callback() {
	return get_theme_mod( 'choose_description' );
}