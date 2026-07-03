<?php
function hotel_26_package_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Package  Section
	=========================================*/
	$wp_customize->add_section(
		'package_setting', array(
			'title' => esc_html__( 'Package Section', 'clever-fox' ),
			'panel' => 'hotel_26_frontpage_sections',
		)
	);

	// Package Header Section // 
	$wp_customize->add_setting(
		'package_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 3,
		)
	);
	
	$wp_customize->add_setting(
    	'package_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'package_hs',
		array(
		    'label'   => __('Show/Hide','clever-fox'),
		    'section' => 'package_setting',
			'type' => 'checkbox',
		)  
	);

	$wp_customize->add_control(
	'package_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'package_setting',
		)
	);
	
	$wp_customize->add_setting(
    	'package_header_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'package_header_hs',
		array(
		    'label'   => __('Show/Hide','clever-fox'),
		    'section' => 'package_setting',
			'type' => 'checkbox',
		)  
	);
	
	// Package Title // 
	$wp_customize->add_setting(
    	'package_title',
    	array(
	        'default'			=> 'Explore',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'package_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'package_setting',
			'type'           => 'text',
		)  
	);
	
	// Package Title // 
	$wp_customize->add_setting(
    	'package_subtitle',
    	array(
	        'default'			=> 'Hotel <span class="color-secondary">Packages</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'package_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'package_setting',
			'type'           => 'text',
		)  
	);
	
	// Package Description // 
	$wp_customize->add_setting(
    	'package_description',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'package_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'package_setting',
			'type'           => 'textarea',
		)  
	);	
	
	

	// Package content Section //	
	$wp_customize->add_setting(
		'package_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'package_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'package_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add package
	 */
	
		$wp_customize->add_setting( 'package_contents', 
			array(
			 'sanitize_callback' => 'hotel_26_repeater_sanitize',
			 'priority' => 8,
			 'default' => hotel26_package_default()
			)
		);
		
		$cleverfox_theme = wp_get_theme();
		if($cleverfox_theme->get('Name') != 'hotel-26'):
		
		$wp_customize->add_control( 
			new Hotel_26_Repeater( $wp_customize, 
				'package_contents', 
					array(
						'label'   => esc_html__('Package','clever-fox'),
						'section' => 'package_setting',
						'add_field_label'                   => esc_html__( 'Add New Package', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Package', 'clever-fox' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_subtitle3_control' => true,
						'customizer_repeater_color_control' => true,
					) 
				) 
			);
			
		else:
		
		$wp_customize->add_control( 
			new Hotel_26_Repeater( $wp_customize, 
				'package_contents', 
					array(
						'label'   => esc_html__('Package','clever-fox'),
						'section' => 'package_setting',
						'add_field_label'                   => esc_html__( 'Add New Package', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Package', 'clever-fox' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_subtitle3_control' => true,
						'customizer_repeater_color_control' => true,
						
						'customizer_repeater_button_text_control' => true,
						'customizer_repeater_button_link_control' => true,
						'customizer_repeater_button2_text_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_text3_control' => true,
						'customizer_repeater_text4_control' => true,
						'customizer_repeater_text5_control' => true,
						'customizer_repeater_text6_control' => true,
						'customizer_repeater_text7_control' => true,
						'customizer_repeater_link7_control' => true,
						'customizer_repeater_newtab_control' => true,
						'customizer_repeater_nofollow_control' => true,
						'customizer_repeater_repeater_control' => true,
					) 
				) 
			);
			
		endif;
		
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'package',
		'section'    => 'package_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Upgrade to Pro','clever-fox'),
	) );
		
	//Spacing
	$wp_customize->add_setting(
		'package_spacing_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'package_spacing_head',
		array(
			'type' => 'hidden',
			'label' => __('Section Spacing','clever-fox'),
			'section' => 'package_setting',
		)
	);
	
	// Padding // 
	$wp_customize->add_setting(
    	'package_padding_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',			
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'package_padding_top',
		array(
		    'label'   => __('Padding Top','clever-fox'),
		    'section' => 'package_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'package_padding_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',			
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'package_padding_bottom',
		array(
		    'label'   => __('Padding Bottom','clever-fox'),
		    'section' => 'package_setting',
			'type'           => 'text',
		)  
	);
	
	// Margin // 
	$wp_customize->add_setting(
    	'package_margin_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',			
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'package_margin_top',
		array(
		    'label'   => __('Margin Top','clever-fox'),
		    'section' => 'package_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'package_margin_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',			
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'package_margin_bottom',
		array(
		    'label'   => __('Margin Bottom','clever-fox'),
		    'section' => 'package_setting',
			'type'           => 'text',
		)  
	);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'package_locked',
		'section'    => 'package_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Unlock With Pro','clever-fox'),
	) );
}

add_action( 'customize_register', 'hotel_26_package_setting' );

// package selective refresh
function hotel_26_home_package_section_partials( $wp_customize ){	
	// package title
	$wp_customize->selective_refresh->add_partial( 'package_title', array(
		'selector'            => '#packages-offers-section .heading-default .sub-title',
		'settings'            => 'package_title',
		'render_callback'  => 'hotel_26_package_title_render_callback',
	
	) );
	
	// package Subtitle
	$wp_customize->selective_refresh->add_partial( 'package_subtitle', array(
		'selector'            => '#packages-offers-section .heading-default .title',
		'settings'            => 'package_subtitle',
		'render_callback'  => 'hotel_26_package_subtitle_render_callback',
	));
	// package description
	$wp_customize->selective_refresh->add_partial( 'package_description', array(
		'selector'            => '#packages-offers-section .heading-default .desc',
		'settings'            => 'package_description',
		'render_callback'  => 'hotel_26_package_desc_render_callback',	
	) );
	// package content
	$wp_customize->selective_refresh->add_partial( 'package_contents', array(
		'selector'            => '#packages-offers-section .package-box-cover'	
	) );
	// package hs
	$wp_customize->selective_refresh->add_partial( 'package_tab_hs', array(
		'selector'            => '#packages-offers-section .filter-tab'	
	) );	
}

add_action( 'customize_register', 'hotel_26_home_package_section_partials' );

// package title
function hotel_26_package_title_render_callback() {
	return get_theme_mod( 'package_title' );
}

// package subtitle
function hotel_26_package_subtitle_render_callback() {
	return get_theme_mod( 'package_subtitle' );
}

// package description
function hotel_26_package_desc_render_callback() {
	return get_theme_mod( 'package_description' );
}
