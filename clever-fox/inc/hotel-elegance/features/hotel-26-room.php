<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function hotel_26_room_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Room  Section
	=========================================*/
	$wp_customize->add_section(
		'room_setting', array(
			'title' => esc_html__( 'Room Section', 'clever-fox' ),
			'panel' => 'hotel_26_frontpage_sections',
			'priority' => 5,
		)
	);

	$wp_customize->add_setting(
    	'room_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'room_hs',
		array(
		    'label'   => __('Show/Hide','clever-fox'),
		    'section' => 'room_setting',
			'type' => 'checkbox',
		)  
	);
	
	// Room Header Section // 
	$wp_customize->add_setting(
		'room_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'room_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'room_setting',
		)
	);
	
	$wp_customize->add_setting(
    	'room_header_hs',
    	array(
			'default'	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'room_header_hs',
		array(
		    'label'   => __('Show/Hide','clever-fox'),
		    'section' => 'room_setting',
			'type' => 'checkbox',
		)  
	);
	
	// Room Title // 
	$wp_customize->add_setting(
    	'room_title',
    	array(
	        'default'			=> 'Explore',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'room_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'room_setting',
			'type'           => 'text',
		)  
	);
	
	// Room Title // 
	$wp_customize->add_setting(
    	'room_subtitle',
    	array(
	        'default'			=> 'Luxury <span class="color-secondary">Rooms</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'room_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'room_setting',
			'type'           => 'text',
		)  
	);
	
	// Room Description // 
	$wp_customize->add_setting(
    	'room_description',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'room_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'room_setting',
			'type'           => 'textarea',
		)  
	);

	// Room content Section // 
	
	$wp_customize->add_setting(
		'room_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'room_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'room_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add room
	 */
	
	$wp_customize->add_setting( 'room_contents', 
		array(
		 'sanitize_callback' => 'hotel_26_repeater_sanitize',
		 'priority' => 8,
		 'default' => hotel26_get_room_default()
		)
	);
	
	$wp_customize->add_control( 
		new Hotel_26_Repeater( $wp_customize, 
			'room_contents', 
				array(
					'label'   => esc_html__('Rooms','clever-fox'),
					'section' => 'room_setting',
					'add_field_label'                   => esc_html__( 'Add New Room', 'clever-fox' ),
					'item_name'                         => esc_html__( 'Room', 'clever-fox' ),
					'customizer_repeater_image_control' => true,
					'customizer_repeater_title_control' => true,
					'customizer_repeater_subtitle_control' => true,
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
		'setting_id' => 'room',
		'section'    => 'room_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Upgrade to Pro','clever-fox'),
	) );
		
	// Room Autoplay
	$wp_customize->add_setting( 
		'room_autoplay', 
			array(
			'default' => 'true',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_select',
			'priority' => 10,
		) 
	);
	$wp_customize->add_control('room_autoplay', array(
    'label' => __('Slide Autoplay', 'clever-fox'),
    'section' => 'room_setting',
	'type'			=> 'select',
	'choices'        => 
			array(
				'true'		=>__('Yes', 'clever-fox'),
				'false'=>__('No', 'clever-fox'),
			) 
	));
	
	// Room Loop
	$wp_customize->add_setting( 
		'room_loop_rewind' , 
			array(
			'default' => 'loop',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_select',
			'priority' => 10,
		) 
	);
	$wp_customize->add_control('room_loop_rewind', array(
    'label' => __('Loop/Rewind', 'clever-fox'),
    'section' => 'room_setting',
	'type'			=> 'select',
	'choices'        => 
			array(
				'loop'		=>__('Loop', 'clever-fox'),
				'rewind'=>__('Rewind', 'clever-fox'),
			) 
	));
		
	//Spacing
	$wp_customize->add_setting(
		'room_spacing_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'room_spacing_head',
		array(
			'type' => 'hidden',
			'label' => __('Section Spacing','clever-fox'),
			'section' => 'room_setting',
		)
	);
	
	// Padding // 
	$wp_customize->add_setting(
    	'room_padding_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'room_padding_top',
		array(
		    'label'   => __('Padding Top','clever-fox'),
		    'section' => 'room_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'room_padding_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'room_padding_bottom',
		array(
		    'label'   => __('Padding Bottom','clever-fox'),
		    'section' => 'room_setting',
			'type'           => 'text',
		)  
	);
	
	// Margin // 
	$wp_customize->add_setting(
    	'room_margin_top',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'room_margin_top',
		array(
		    'label'   => __('Margin Top','clever-fox'),
		    'section' => 'room_setting',
			'type'           => 'text',
		)  
	);
	$wp_customize->add_setting(
    	'room_margin_bottom',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hotel_26_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'room_margin_bottom',
		array(
		    'label'   => __('Margin Bottom','clever-fox'),
		    'section' => 'room_setting',
			'type'           => 'text',
		)  
	);
	
	//Pro feature
	cleverfox_themes_section_upgrade_control( $wp_customize, array(
		'theme_slug' => 'hotel_26_',
		'setting_id' => 'room_locked',
		'section'    => 'room_setting',
		'pro_url'    => hotel_26_premium_links(),
		'custom_text'    => __('Unlock with Pro','clever-fox'),
	) );
}

add_action( 'customize_register', 'hotel_26_room_setting' );

// room selective refresh
function hotel_26_home_room_section_partials( $wp_customize ){	
	// room title
	$wp_customize->selective_refresh->add_partial( 'room_title', array(
		'selector'            => '#room-section .heading-default .sub-title',
		'settings'            => 'room_title',
		'render_callback'  => 'hotel_26_room_title_render_callback',
	
	) );
	
	// room Subtitle
	$wp_customize->selective_refresh->add_partial( 'room_subtitle', array(
		'selector'            => '#room-section .heading-default .title',
		'settings'            => 'room_subtitle',
		'render_callback'  => 'hotel_26_room_subtitle_render_callback',
	));
	// room description
	$wp_customize->selective_refresh->add_partial( 'room_description', array(
		'selector'            => '#room-section .heading-default .desc',
		'settings'            => 'room_description',
		'render_callback'  => 'hotel_26_room_desc_render_callback',	
	) );
	// room content
	$wp_customize->selective_refresh->add_partial( 'room_contents', array(
		'selector'            => '#room-section .room-slider'	
	) );
	// room bg
	$wp_customize->selective_refresh->add_partial( 'room_bg_img', array(
		'selector'            => '#room-section'	
	) );	
}

add_action( 'customize_register', 'hotel_26_home_room_section_partials' );

// room title
function hotel_26_room_title_render_callback() {
	return get_theme_mod( 'room_title' );
}

// room subtitle
function hotel_26_room_subtitle_render_callback() {
	return get_theme_mod( 'room_subtitle' );
}

// room description
function hotel_26_room_desc_render_callback() {
	return get_theme_mod( 'room_description' );
}