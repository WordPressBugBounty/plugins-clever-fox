<?php
function artisan_features_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Features  Section
	=========================================*/
	$wp_customize->add_section(
		'features_setting', array(
			'title' => esc_html__( 'Features Section', 'clever-fox' ),
			'priority' => 6,
			'panel' => 'artisan_frontpage_sections',
		)
	);

	// Features Header Section // 
	$wp_customize->add_setting(
		'features_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'artisan_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'features_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'features_setting',
		)
	);
	
	// Hide / Show 
	$wp_customize->add_setting(
		'feature_hs'
			,array(
			'default'     	=> '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'artisan_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'feature_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','clever-fox'),
			'section' => 'features_setting',
		)
	);
	
	// Features Title // 
	$wp_customize->add_setting(
    	'features_title',
    	array(
	        'default'			=> __('Features','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'artisan_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'features_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'features_setting',
			'type'           => 'text',
		)  
	);
	// Features Description // 
	$wp_customize->add_setting(
    	'features_desc',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam saepe eveniet, cumque tempore veritatis!','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'artisan_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'features_desc',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'features_setting',
			'type'           => 'text',
		)  
	);

	// Features content Section // 
	
	$wp_customize->add_setting(
		'features_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'artisan_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'features_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'features_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add features
	 */
	
		$wp_customize->add_setting( 'features_contents', 
			array(
			 'sanitize_callback' => 'artisan_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => artisan_get_features_default()
			)
		);
		
		$wp_customize->add_control( 
			new  Artisan_Repeater( $wp_customize, 
				'features_contents', 
					array(
						'label'   => esc_html__('Features','clever-fox'),
						'section' => 'features_setting',
						'add_field_label'                   => esc_html__( 'Add New Features', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Features', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image2_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
			
		//Pro feature
		class  Artisan_features__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_feature_upgrade_section up-to-pro" href="https://www.nayrathemes.com/artisan-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'artisan_features_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new  Artisan_features__section_upgrade(
			$wp_customize,
			'artisan_features_upgrade_to_pro',
				array(
					'section'				=> 'features_setting',
				)
			)
		);		
}

add_action( 'customize_register', 'artisan_features_setting' );

// features selective refresh
function artisan_home_features_section_partials( $wp_customize ){	
	// features title
	$wp_customize->selective_refresh->add_partial( 'features_title', array(
		'selector'            => '.features-home .section-title h2.section-title-heading',
		'settings'            => 'features_title',
		'render_callback'  	  => 'features_title_render_callback',
	) );
	
	// features subtitle
	$wp_customize->selective_refresh->add_partial( 'features_subtitle', array(
		'selector'            => '.features-home .section-title span.sub-title',
		'settings'            => 'features_subtitle',
		'render_callback'     => 'features_subtitle_render_callback',
	) );
	
	// features description
	$wp_customize->selective_refresh->add_partial( 'features_desc', array(
		'selector'            => '.features-home .section-title p',
		'settings'            => 'features_desc',
		'render_callback'     => 'features_desc_render_callback',
	) );
	
	// features content
	$wp_customize->selective_refresh->add_partial( 'features_contents', array(
		'selector'            => '.features-home .feature-content h3'
	) );
	
	}

add_action( 'customize_register', 'artisan_home_features_section_partials' );

// features title
function features_title_render_callback() {
	return get_theme_mod( 'features_title' );
}
// features subtitle
function features_subtitle_render_callback() {
	return get_theme_mod( 'features_subtitle' );
}

// features description
function features_desc_render_callback() {
	return get_theme_mod( 'features_desc' );
}