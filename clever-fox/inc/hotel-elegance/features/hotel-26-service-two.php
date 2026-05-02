<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function hotel_26_service_two_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Service  Section
	=========================================*/
	$wp_customize->add_section(
		'service_two_setting', array(
			'title' => esc_html__( 'Service Two Section', 'hotel-26-pro' ),
			'panel' => 'hotel_26_frontpage_sections',
			'priority' => 18,
		)
	);

	$wp_customize->add_setting(
    	'service_two_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_hs',
		array(
		    'label'   => __('Show/Hide','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type' => 'checkbox',
		)  
	);
	
	// Service Header Section // 
	$wp_customize->add_setting(
		'service_two_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'service_two_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','hotel-26-pro'),
			'section' => 'service_two_setting',
		)
	);
		
	$wp_customize->add_setting(
    	'service_two_header_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_header_hs',
		array(
		    'label'   => __('Show/Hide','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type' => 'checkbox',
		)  
	);
	
	
	// Service Title // 
	$wp_customize->add_setting(
    	'service_two_title',
    	array(
	        'default'			=> 'Explore',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_title',
		array(
		    'label'   => __('Title','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type'           => 'text',
		)  
	);
	
	// Service Title // 
	$wp_customize->add_setting(
    	'service_two_subtitle',
    	array(
	        'default'			=> 'Best <span class="color-secondary">Dishes</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_subtitle',
		array(
		    'label'   => __('Subtitle','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type'           => 'text',
		)  
	);
	
	// Service Description // 
	$wp_customize->add_setting(
    	'service_two_description',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','hotel-26-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_description',
		array(
		    'label'   => __('Description','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type'           => 'textarea',
		)  
	);

	// Service content Section // 
	
	$wp_customize->add_setting(
		'service_two_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'service_two_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','hotel-26-pro'),
			'section' => 'service_two_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add service_two
	 */
	
		$wp_customize->add_setting( 'service_two_contents', 
			array(
			 'sanitize_callback' => 'hotel_26_repeater_sanitize',
			 'priority' => 8,
			 'default' => hotel26_get_service_default()
			)
		);
		
		$wp_customize->add_control( 
			new Hotel_26_Repeater( $wp_customize, 
				'service_two_contents', 
					array(
						'label'   => esc_html__('Service','hotel-26-pro'),
						'section' => 'service_two_setting',
						'add_field_label'                   => esc_html__( 'Add New Service2', 'hotel-26-pro' ),
						'item_name'                         => esc_html__( 'Service2', 'hotel-26-pro' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_description_control' => true,
						'customizer_repeater_button_text_control' => true,
						'customizer_repeater_button_link_control' => true,
						'customizer_repeater_newtab_control' => true,
						'customizer_repeater_nofollow_control' => true,
					) 
				) 
			);
			
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'service2',
		'section'    => 'service_two_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Upgrade to Pro','clever-fox'),
	) );
		
	// service_two column // 
	$wp_customize->add_setting(
    	'service_two_sec_column',
    	array(
	        'default'			=> '4',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_select',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control(
		'service_two_sec_column',
		array(
		    'label'   		=> __('Service Column','hotel-26-pro'),
		    'section' 		=> 'service_two_setting',
			'settings'   	 => 'service_two_sec_column',
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
		'service_two_spacing_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'service_two_spacing_head',
		array(
			'type' => 'hidden',
			'label' => __('Section Spacing','hotel-26-pro'),
			'section' => 'service_two_setting',
		)
	);
	
	// Padding // 
	$wp_customize->add_setting(
    	'service_two_padding_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_padding_top',
		array(
		    'label'   => __('Padding Top','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'service_two_padding_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_padding_bottom',
		array(
		    'label'   => __('Padding Bottom','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type'           => 'text',
		)  
	);
	
	// Margin // 
	$wp_customize->add_setting(
    	'service_two_margin_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_margin_top',
		array(
		    'label'   => __('Margin Top','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'service_two_margin_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'service_two_margin_bottom',
		array(
		    'label'   => __('Margin Bottom','hotel-26-pro'),
		    'section' => 'service_two_setting',
			'type'           => 'text',
		)  
	);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'service_two_locked',
		'section'    => 'service_two_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Unlock with Pro','clever-fox'),
	) );
}

add_action( 'customize_register', 'hotel_26_service_two_setting' );

// service_two selective refresh
function hotel_26_home_service_two_section_partials( $wp_customize ){	
	// service_two title
	$wp_customize->selective_refresh->add_partial( 'service_two_title', array(
		'selector'            => '#service-two-section .heading-default .sub-title',
		'settings'            => 'service_two_title',
		'render_callback'  => 'hotel_26_service_two_title_render_callback',
	
	) );
	
	// service_two Subtitle
	$wp_customize->selective_refresh->add_partial( 'service_two_subtitle', array(
		'selector'            => '#service-two-section .heading-default .title',
		'settings'            => 'service_two_subtitle',
		'render_callback'  => 'hotel_26_service_two_subtitle_render_callback',
	));
	// service_two description
	$wp_customize->selective_refresh->add_partial( 'service_two_description', array(
		'selector'            => '#service-two-section .heading-default .desc',
		'settings'            => 'service_two_description',
		'render_callback'  => 'hotel_26_service_two_desc_render_callback',	
	) );
	// service_two content
	$wp_customize->selective_refresh->add_partial( 'service_two_contents', array(
		'selector'            => '#service-two-section .service-two-wrap'	
	) );	
}

add_action( 'customize_register', 'hotel_26_home_service_two_section_partials' );

// service_two title
function hotel_26_service_two_title_render_callback() {
	return get_theme_mod( 'service_two_title' );
}

// service_two subtitle
function hotel_26_service_two_subtitle_render_callback() {
	return get_theme_mod( 'service_two_subtitle' );
}

// service_two description
function hotel_26_service_two_desc_render_callback() {
	return get_theme_mod( 'service_two_description' );
}
