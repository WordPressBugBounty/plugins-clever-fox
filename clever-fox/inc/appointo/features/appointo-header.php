<?php
function appointo_lite_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	// Header Navigation Contact
	$wp_customize->add_setting(
		'hdr_nav_contact_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'gradiant_sanitize_html',
			'priority' => 9,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_contact_head',
		array(
			'type' => 'hidden',
			'label' => __('Contact Info','clever-fox'),
			'section' => 'header_navigation',
		)
	);
	
	//hdr_nav_contact_content
	$wp_customize->add_setting(
		'hdr_nav_contact_content'
			,array(
			'default'     	=> /* Translators: 1:P Tag Start 2: Strong Tag Start 3: Close Strong Tag 4: End P Tag */sprintf(__('%1$sAre you to grow up your business? %2$sJoin our team%3$s%4$s','clever-fox'),'<p>','<strong>','</strong>','</p>'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'gradiant_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 9,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_contact_content',
		array(
			'type' => 'textarea',
			'label' => __('Contact Info','clever-fox'),
			'section' => 'header_navigation',
		)
	);
	
	//hdr_nav_contact_content2
	$wp_customize->add_setting(
		'hdr_nav_contact_content2'
			,array(
				'default'     	=> __('<div class="contact-icon"><i class="fa fa-wechat"></i></div><a href="#" class="contact-info"> <span class="title">Hotline Number</span><span class="text">0123-456-789</span></a>','clever-fox'),
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'gradiant_sanitize_html',
				'transport'         => $selective_refresh,
				'priority' => 9,
			)	
	);

	$wp_customize->add_control(
	'hdr_nav_contact_content2',
		array(
			'type' => 'textarea',
			'label' => __('Contact Info 2','clever-fox'),
			'section' => 'header_navigation',
		)
	);
}
add_action( 'customize_register', 'appointo_lite_header_settings' );

// Header selective refresh
function appointo_lite_header_partials( $wp_customize ){
	
	// hdr_nav_contact_content
	$wp_customize->selective_refresh->add_partial( 'hdr_nav_contact_content', array(
		'selector'            => '.nav-area .menu-right .widget-contact .ct-area1',
		'settings'            => 'hdr_nav_contact_content',
		'render_callback'  => 'gradiant_hdr_nav_contact_content_render_callback',
	) );
	
	// hdr_nav_contact_content2
	$wp_customize->selective_refresh->add_partial( 'hdr_nav_contact_content2', array(
		'selector'            => '.nav-area .menu-right .widget-contact .ct-area2',
		'settings'            => 'hdr_nav_contact_content2',
		'render_callback'  => 'gradiant_hdr_nav_contact2_content_render_callback',
	) );
}

add_action( 'customize_register', 'appointo_lite_header_partials' );

// hdr_nav_contact_content
function gradiant_hdr_nav_contact_content_render_callback() {
	return get_theme_mod( 'hdr_nav_contact_content' );
}

// hdr_nav_contact_content2
function gradiant_hdr_nav_contact2_content_render_callback() {
	return get_theme_mod( 'hdr_nav_contact_content2' );
}