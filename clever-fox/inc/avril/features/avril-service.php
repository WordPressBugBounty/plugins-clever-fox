<?php
function avril_service_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Service  Section
	=========================================*/
	$wp_customize->add_section(
		'service_setting', array(
			'title' => esc_html__( 'Service Section', 'clever-fox' ),
			'priority' => 3,
			'panel' => 'avril_frontpage_sections',
		)
	);
	
	// Service Setting
	$wp_customize->add_setting(
		'service_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'avril_sanitize_text',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'service_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','clever-fox'),
			'section' => 'service_setting',
		)
	);
	
	$wp_customize->add_setting( 
		'hs_service' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'avril_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_service', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'clever-fox' ),
			'section'     => 'service_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Service Header Section // 
	$wp_customize->add_setting(
		'service_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'avril_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'service_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'service_setting',
		)
	);
	
	// Service Title // 
	$wp_customize->add_setting(
    	'service_title',
    	array(
	        'default'			=> __('Technology from tomorrow','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'avril_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'service_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'service_setting',
			'type'           => 'text',
		)  
	);
	
	// Service Subtitle // 
	$wp_customize->add_setting(
    	'service_subtitle',
    	array(
	        'default'			=> __('Outstanding <span class="av-heading animate-7"><span class="av-text-wrapper"><b class="is-show">Services</b>                                   <b>Services</b><b>Services</b></span></span>','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'avril_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'service_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'service_setting',
			'type'           => 'textarea',
		)  
	);
	
	// Service Description // 
	$wp_customize->add_setting(
    	'service_description',
    	array(
	        'default'			=> __('Lorem Ipsum is simply dummy of printing and typesetting and industry. Lorem Ipsum been.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'avril_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'service_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'service_setting',
			'type'           => 'textarea',
		)  
	);

	// Service content Section // 
	
	$wp_customize->add_setting(
		'service_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'avril_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'service_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'service_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add service
	 */
	
		$wp_customize->add_setting( 'service_contents', 
			array(
			 'sanitize_callback' => 'avril_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => avril_get_service_default()
			)
		);
		
		$wp_customize->add_control( 
			new Avril_Repeater( $wp_customize, 
				'service_contents', 
					array(
						'label'   => esc_html__('Service','clever-fox'),
						'section' => 'service_setting',
						'add_field_label'                   => esc_html__( 'Add New Service', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Service', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
		//Pro feature
		class Avril_service__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
			$theme = wp_get_theme(); // gets the current theme
				if ( 'Aera' == $theme->name){	
			?>
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/aera-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }elseif ( 'Avail' == $theme->name){ ?>
				
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/avail-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
					
			<?php }elseif ( 'Axtia' == $theme->name){ ?>
			
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/axtia-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>

			<?php }elseif ( 'Avtari' == $theme->name){ ?>
			
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/avtari-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>

			<?php }elseif ( 'Aviser' == $theme->name){ ?>
			
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/aviser-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
				
			<?php }elseif ( 'Ampark' == $theme->name){ ?>
			
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/ampark-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>	

			<?php }elseif ( 'Avitech' == $theme->name){ ?>
			
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/avitech-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>	

			<?php }elseif ( 'Evion' == $theme->name){ ?>
			
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/evion-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>	

			<?php }elseif ( 'Varuda' == $theme->name){ ?>
			
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/varuda-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>		
					
			<?php
			   }else{
			?>	
				<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/avril-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			<?php
			   }
			}
		}
		
		$wp_customize->add_setting( 'avril_service_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Avril_service__section_upgrade(
			$wp_customize,
			'avril_service_upgrade_to_pro',
				array(
					'section'				=> 'service_setting',
					'settings'				=> 'avril_service_upgrade_to_pro',
				)
			)
		);
}

add_action( 'customize_register', 'avril_service_setting' );

// service selective refresh
function avril_home_service_section_partials( $wp_customize ){	
	// service title
	$wp_customize->selective_refresh->add_partial( 'service_title', array(
		'selector'            => '.service-home .heading-default .ttl',
		'settings'            => 'service_title',
		'render_callback'  => 'avril_service_title_render_callback',
	
	) );
	
	// service subtitle
	$wp_customize->selective_refresh->add_partial( 'service_subtitle', array(
		'selector'            => '.service-home .heading-default h3',
		'settings'            => 'service_subtitle',
		'render_callback'  => 'avril_service_subtitle_render_callback',
	
	) );
	
	// service description
	$wp_customize->selective_refresh->add_partial( 'service_description', array(
		'selector'            => '.service-home .heading-default p',
		'settings'            => 'service_description',
		'render_callback'  => 'avril_service_desc_render_callback',
	
	) );
	// service content
	$wp_customize->selective_refresh->add_partial( 'service_contents', array(
		'selector'            => '.service-home .services-carousel'
	
	) );
	
	}

add_action( 'customize_register', 'avril_home_service_section_partials' );

// service title
function avril_service_title_render_callback() {
	return get_theme_mod( 'service_title' );
}

// service subtitle
function avril_service_subtitle_render_callback() {
	return get_theme_mod( 'service_subtitle' );
}

// service description
function avril_service_desc_render_callback() {
	return get_theme_mod( 'service_description' );
}