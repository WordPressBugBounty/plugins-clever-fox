<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function hotel_26_pricing_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Pricing  Section
	=========================================*/
	$wp_customize->add_section(
		'pricing_setting', array(
			'title' => esc_html__( 'Pricing Section', 'hotel-26-pro' ),
			'panel' => 'hotel_26_frontpage_sections',
			'priority' => 12,
		)
	);	
	
	$wp_customize->add_setting(
    	'pricing_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_hs',
		array(
		    'label'   => __('Show/Hide','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type' => 'checkbox',
		)  
	);
	

	// Pricing Header Section // 
	$wp_customize->add_setting(
		'pricing_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'pricing_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','hotel-26-pro'),
			'section' => 'pricing_setting',
		)
	);
	
	$wp_customize->add_setting(
    	'pricing_header_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_header_hs',
		array(
		    'label'   => __('Show/Hide','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type' => 'checkbox',
		)  
	);
	
	// Pricing Title // 
	$wp_customize->add_setting(
    	'pricing_title',
    	array(
	        'default'			=> 'Explore',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_title',
		array(
		    'label'   => __('Title','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type'           => 'text',
		)  
	);
	
	// Pricing Title // 
	$wp_customize->add_setting(
    	'pricing_subtitle',
    	array(
	        'default'			=> 'Our <span class="color-secondary">Pricings</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_subtitle',
		array(
		    'label'   => __('Subtitle','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type'           => 'text',
		)  
	);
	
	// Pricing Description // 
	$wp_customize->add_setting(
    	'pricing_description',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','hotel-26-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_description',
		array(
		    'label'   => __('Description','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type'           => 'textarea',
		)  
	);
	
	// Pricing content Section // 	
	$wp_customize->add_setting(
		'pricing_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'pricing_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','hotel-26-pro'),
			'section' => 'pricing_setting',
		)
	);
		
	/**
	 * Customizer Repeater for add pricing
	 */
	
		$wp_customize->add_setting( 'pricing_contents', 
			array(
			 'sanitize_callback' => 'hotel_26_repeater_sanitize',
			 'priority' => 8,
			 'default' => hotel26_pricing_default()
			)
		);
		
		$wp_customize->add_control( 
			new Hotel_26_Repeater( $wp_customize, 
				'pricing_contents', 
					array(
						'label'   => esc_html__('Pricing','hotel-26-pro'),
						'section' => 'pricing_setting',
						'add_field_label'                   => esc_html__( 'Add New Pricing', 'hotel-26-pro' ),
						'item_name'                         => esc_html__( 'Pricing', 'hotel-26-pro' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_text3_control' => true,
						'customizer_repeater_button_text_control' => true,
						'customizer_repeater_button_link_control' => true,
						'customizer_repeater_newtab_control' => true,
						'customizer_repeater_nofollow_control' => true,
						'customizer_repeater_repeater_control' => true,
					) 
				) 
			);
			
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'pricing',
		'section'    => 'pricing_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Upgrade to Pro','clever-fox'),
	) );
	
	// pricing column // 
	$wp_customize->add_setting(
    	'pricing_sec_column',
    	array(
	        'default'			=> '4',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_select',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control(
		'pricing_sec_column',
		array(
		    'label'   		=> __('Pricing Column','hotel-26-pro'),
		    'section' 		=> 'pricing_setting',
			'settings'   	 => 'pricing_sec_column',
			'type'			=> 'select',
			'choices'        => 
			array(
				'3' => __( '3 Column', 'hotel-26-pro' ),
				'4' => __( '4 Column', 'hotel-26-pro' ),
				'5' => __( '5 Column', 'hotel-26-pro' ),
			) 
		) 
	);
	
	//Spacing
	$wp_customize->add_setting(
		'pricing_spacing_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'pricing_spacing_head',
		array(
			'type' => 'hidden',
			'label' => __('Section Spacing','hotel-26-pro'),
			'section' => 'pricing_setting',
		)
	);
	
	// Padding // 
	$wp_customize->add_setting(
    	'pricing_padding_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_padding_top',
		array(
		    'label'   => __('Padding Top','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'pricing_padding_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_padding_bottom',
		array(
		    'label'   => __('Padding Bottom','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type'           => 'text',
		)  
	);
	
	// Margin // 
	$wp_customize->add_setting(
    	'pricing_margin_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_margin_top',
		array(
		    'label'   => __('Margin Top','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'pricing_margin_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_margin_bottom',
		array(
		    'label'   => __('Margin Bottom','hotel-26-pro'),
		    'section' => 'pricing_setting',
			'type'           => 'text',
		)  
	);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'pricing_locked',
		'section'    => 'pricing_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Unlock with Pro','clever-fox'),
	) );
}

add_action( 'customize_register', 'hotel_26_pricing_setting' );

// pricing selective refresh
function hotel_26_home_pricing_section_partials( $wp_customize ){	
	// pricing title
	$wp_customize->selective_refresh->add_partial( 'pricing_title', array(
		'selector'            => '#pricing-section .heading-default .sub-title',
		'settings'            => 'pricing_title',
		'render_callback'  => 'hotel_26_pricing_title_render_callback',
	
	) );
	
	// pricing Subtitle
	$wp_customize->selective_refresh->add_partial( 'pricing_subtitle', array(
		'selector'            => '#pricing-section .heading-default .title',
		'settings'            => 'pricing_subtitle',
		'render_callback'  => 'hotel_26_pricing_subtitle_render_callback',
	));
	// pricing description
	$wp_customize->selective_refresh->add_partial( 'pricing_description', array(
		'selector'            => '#pricing-section .heading-default .desc',
		'settings'            => 'pricing_description',
		'render_callback'  => 'hotel_26_pricing_desc_render_callback',	
	) );
	// pricing content
	$wp_customize->selective_refresh->add_partial( 'pricing_contents', array(
		'selector'            => '#pricing-section .pricing-box-cover'	
	) );
	// pricing hs
	$wp_customize->selective_refresh->add_partial( 'pricing_tab_hs', array(
		'selector'            => '#pricing-section .filter-tab'	
	) );	
}

add_action( 'customize_register', 'hotel_26_home_pricing_section_partials' );

// pricing title
function hotel_26_pricing_title_render_callback() {
	return get_theme_mod( 'pricing_title' );
}

// pricing subtitle
function hotel_26_pricing_subtitle_render_callback() {
	return get_theme_mod( 'pricing_subtitle' );
}

// pricing description
function hotel_26_pricing_desc_render_callback() {
	return get_theme_mod( 'pricing_description' );
}