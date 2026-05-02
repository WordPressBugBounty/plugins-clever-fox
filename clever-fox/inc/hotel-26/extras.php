<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function hotel_26_guest_nav(){
	$hotel26_theme = wp_get_theme();
	if( $hotel26_theme->get('Name') != 'Hotel Child' ) {
	return '<div class="nav-guest">
		<span class="goUp"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
		<span class="goDown"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
	</div>';
 } return '';}
 
/*
 *
 * Slider Default
 */
	function hotel_26_get_slider_default() {
		return apply_filters(
			'hotel_26_get_slider_default', json_encode(
					 array(
					array(
						'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/slider01.jpg',
						'title'           => esc_html__( 'Welcome To Nayra Luxury Hotel', 'clever-fox' ),
						'subtitle'         => esc_html__( 'A New Vision of <span>Luxury</span>', 'clever-fox' ),
						'description'       => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>gallery of type and scrambled it to make a type specimen book.', 'clever-fox' ),
						'button_text'	  =>  esc_html__( 'Discover Rooms', 'clever-fox' ),
						'button_link'	  =>  '',
						'button2_text'	  =>  esc_html__( 'Book Now', 'clever-fox' ),
						'button2_link'	  =>  '',
						'link'	  =>  '#',
						'newtab'		=>	'1',
						'nofollow'		=>	'1',
						'text'	  =>  esc_html__( '4', 'clever-fox' ),
						'id'              => 'customizer_repeater_slider_001'					
					),				
				)
			)
		);
	}
	
/*
 *
 * Service Default
 */
 function hotel26_get_service_default() {
	return apply_filters(
		'hotel26_get_service_default', json_encode(
				 array(
				array(
					'title'           => esc_html__( 'Swimming Pool', 'clever-fox' ),
					'description'         => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'clever-fox' ),
					'button_text'	  =>  esc_html__( 'Read More', 'clever-fox' ),
					'button_link'	  =>  '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/blog/post1.jpg',
					'image_url2'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/service-1.png',
					'icon_value' => 'fa-swimmer',
					'id'              => 'customizer_repeater_service_001',
				),
				array(
					'title'           => esc_html__( 'High Speed Wifi', 'clever-fox' ),
					'description'         => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'clever-fox' ),
					'button_text'	  =>  esc_html__( 'Read More', 'clever-fox' ),
					'button_link'	  => '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/blog/post2.jpg',
					'image_url2'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/service-2.png',
					'icon_value' => 'fa-wifi',
					'id'              => 'customizer_repeater_service_002',
				),
				array(
					'title'           => esc_html__( 'Bar & Restaurant', 'clever-fox' ),
					'description'         => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'clever-fox' ),
					'button_text'	  =>  esc_html__( 'Read More', 'clever-fox' ),
					'button_link'	  =>  '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/blog/post3.jpg',
					'image_url2'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/service-3.png',
					'icon_value' => 'fa-utensils',
					'id'              => 'customizer_repeater_service_003',
				),
				array(
					'title'           => esc_html__( 'Private Parking', 'clever-fox' ),
					'description'         => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'clever-fox' ),
					'button_text'	  =>  esc_html__( 'Read More', 'clever-fox' ),
					'button_link'	  =>  '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/blog/post2.jpg',
					'image_url2'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/service-4.png',
					'icon_value' => 'fa-parking',
					'id'              => 'customizer_repeater_service_004',
				),
				array(
					'title'           => esc_html__( 'Swimming Pool', 'clever-fox' ),
					'description'         => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'clever-fox' ),
					'button_text'	  =>  esc_html__( 'Read More', 'clever-fox' ),
					'button_link'	  =>  '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/blog/post1.jpg',
					'image_url2'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/service-1.png',
					'icon_value' => 'fa-swimmer',
					'id'              => 'customizer_repeater_service_005',
				),
				array(
					'title'           => esc_html__( 'High Speed Wifi', 'clever-fox' ),
					'description'         => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'clever-fox' ),
					'button_text'	  =>  esc_html__( 'Read More', 'clever-fox' ),
					'button_link'	  => '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/blog/post3.jpg',
					'image_url2'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/service-2.png',
					'icon_value' => 'fa-wifi',
					'id'              => 'customizer_repeater_service_006',
				),
				array(
					'title'           => esc_html__( 'Bar & Restaurant', 'clever-fox' ),
					'description'         => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'clever-fox' ),
					'button_text'	  =>  esc_html__( 'Read More', 'clever-fox' ),
					'button_link'	  =>  '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/blog/post1.jpg',
					'image_url2'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/service-3.png',
					'icon_value' => 'fa-utensils',
					'id'              => 'customizer_repeater_service_007',
				),
				array(
					'title'           => esc_html__( 'Private Parking', 'clever-fox' ),
					'description'         => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'clever-fox' ),
					'button_text'	  =>  esc_html__( 'Read More', 'clever-fox' ),
					'button_link'	  =>  '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/blog/post2.jpg',
					'image_url2'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/service-4.png',
					'icon_value' => 'fa-parking',
					'id'              => 'customizer_repeater_service_008',
				),			
			)
		)
	);
}

/*
 *
 * Award Default
 */
 function hotel26_award_default() {
	return apply_filters(
		'hotel26_award_default', json_encode(
				 array(
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/awards/award1.png'),					
					'id'            => 'customizer_repeater_award_001',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/awards/award2.png'),
					'id'            => 'customizer_repeater_award_002',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/awards/award3.png'),
					'id'            => 'customizer_repeater_award_003',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/awards/award4.png'),
					'id'            => 'customizer_repeater_award_004',
				),
			)								
		)

	);
}

/*
 *
 * Team Default
 */
 function hotel26_team_default() {
	return apply_filters(
		'hotel26_team_default', json_encode(
					  array(
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/team/team1.jpg',
					'title'           => esc_html__( 'Steven Lucy', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Executive','clever-fox' ),
					'id'              => 'customizer_repeater_team_0001',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_001',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_002',
								'link' => 'googleplus.com',
								'icon' => 'fa-google-plus',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_003',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_004',
								'link' => 'instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_005',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							)
						)
					),
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/team/team2.jpg',
					'title'           => esc_html__( 'Glenn Maxwell', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Project Manager', 'clever-fox' ),
					'id'              => 'customizer_repeater_team_0002',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0011',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0012',
								'link' => 'googleplus.com',
								'icon' => 'fa-google-plus',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0013',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0014',
								'link' => 'pinterest.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0015',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
						)
					),
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/team/team3.jpg',
					'title'           => esc_html__( 'Aoron Finch', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Manager and director', 'clever-fox' ),
					'id'              => 'customizer_repeater_team_0003',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0021',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0022',
								'link' => 'googleplus.com',
								'icon' => 'fa-google-plus',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0023',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0024',
								'link' => 'linkedin.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0025',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
						)
					),
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/team/team4.jpg',
					'title'           => esc_html__( 'Christiana Ena', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Executive Officer', 'clever-fox' ),
					'id'              => 'customizer_repeater_team_0004',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0031',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0032',
								'link' => 'googleplus.com',
								'icon' => 'fa-google-plus',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0033',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0034',
								'link' => 'linkedin.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0035',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
						)
					),
				)
			)
		)
	);
}

/*
 *
 * Packages Default
 */
 function hotel26_package_default() {
	return apply_filters(
		'hotel26_package_default', json_encode(
				 array(
				array(
					'image_url'		=> esc_url( CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/packages/post1.jpg' ),
					'title'			=> esc_html__('Manali Tour Package' , 'clever-fox' ),
					'subtitle'		=> esc_html__( 'Duration: 05 Nights / 06 Days by <span class="color-highlight">Volvo/Cab</span>', 'clever-fox' ),
					'subtitle2'		=> esc_html__( 'OFF 20%', 'clever-fox' ),
					'subtitle3'		=> esc_html__( 'Popular', 'clever-fox' ),
					'color'			=> esc_html( '#00ff00' ),
					'text'			=> esc_html__( 'Welcome Drink On Arrival', 'clever-fox' ),
					'text2'			=> esc_html__( 'Morning Tea With Breakfast & Dinner', 'clever-fox' ),
					'text6'			=> esc_html__( '<span class="old-price">$10,500</span><strong class="new-price"><span class="color-highlight">$5,500</span> / Person</strong>', 'clever-fox' ),
					'button_text'	=> esc_html__( 'Get A Quote', 'clever-fox' ),
					'button_link'	=> '',
					'button2_text'	=> esc_html__( ' Call Now : <span class="color-highlight">70 975 975 70</span>', 'clever-fox' ),
					'newtab'		=> '',
					'nofollow'		=> '',
					'id'        	=> 'customizer_repeater_package_001',
				),
				array(
					'image_url'		=> esc_url( CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/packages/post2.jpg' ),
					'title'			=> esc_html__('Singapore Tour Package' , 'clever-fox' ),
					'subtitle'		=> esc_html__( 'Duration: 05 Nights / 06 Days by <span class="color-highlight">Volvo/Cab</span>', 'clever-fox' ),
					'subtitle2'		=> esc_html__( 'OFF 40%', 'clever-fox' ),
					'subtitle3'		=> esc_html__( 'Recommended', 'clever-fox' ),
					'color'			=> esc_html( '#FF8C00' ),
					'text'			=> esc_html__( 'Welcome Drink On Arrival', 'clever-fox' ),
					'text2'			=> esc_html__( 'Morning Tea With Breakfast & Dinner', 'clever-fox' ),
					'text6'			=> esc_html__( '<span class="old-price">$10,500</span><strong class="new-price"><span class="color-highlight">$5,500</span> / Person</strong>', 'clever-fox' ),
					'button_text'	=> esc_html__( 'Get A Quote', 'clever-fox' ),
					'button_link'	=> '',
					'button2_text'	=> esc_html__( ' Call Now : <span class="color-highlight">70 975 975 70</span>', 'clever-fox' ),
					'newtab'		=> '',
					'nofollow'		=> '',
					'id'        	=> 'customizer_repeater_package_002',
				),
				array(
					'image_url'		=> esc_url( CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/packages/post1.jpg' ),
					'title'			=> esc_html__('Thailand Tour Package' , 'clever-fox' ),
					'subtitle'		=> esc_html__( 'Duration: 05 Nights / 06 Days by <span class="color-highlight">Volvo/Cab</span>', 'clever-fox' ),
					'subtitle2'		=> esc_html__( 'OFF 20%', 'clever-fox' ),
					'subtitle3'		=> esc_html__( 'Most Visited', 'clever-fox' ),
					'color'			=> esc_html( '#ff00ff' ),
					'text'			=> esc_html__( 'Welcome Drink On Arrival', 'clever-fox' ),
					'text2'			=> esc_html__( 'Morning Tea With Breakfast & Dinner', 'clever-fox' ),
					'text6'			=> esc_html__( '<span class="old-price">$10,500</span><strong class="new-price"><span class="color-highlight">$5,500</span> / Person</strong>', 'clever-fox' ),
					'button_text'	=> esc_html__( 'Get A Quote', 'clever-fox' ),
					'button_link'	=> '',
					'button2_text'	=> esc_html__( ' Call Now : <span class="color-highlight">70 975 975 70</span>', 'clever-fox' ),
					'newtab'		=> '',
					'nofollow'		=> '',
					'id'        	=> 'customizer_repeater_package_003',
				),
			)								
		)

	);
}

	
/*
 *
 * Info Default
 */
 function hotel26_info_default() {
	return apply_filters(
		'hotel26_info_default', json_encode(
				 array(
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/icon1.png'),
					'title' 		=> esc_html__( 'Spa & Wellness', 'clever-fox' ),
					'id'            => 'customizer_repeater_info_001',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/icon2.png'),
					'title' 		=> esc_html__( 'Swimming Pool', 'clever-fox' ),
					'id'            => 'customizer_repeater_info_002',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/icon3.png'),
					'title' 		=> esc_html__( 'Salon & Beauty', 'clever-fox' ),
					'id'            => 'customizer_repeater_info_003',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/services/icon4.png'),
					'title' 		=> esc_html__( 'Cafe & Restaurant', 'clever-fox' ),
					'id'            => 'customizer_repeater_info_004',
				),
			)								
		)

	);
}

function hotel26_info_two_default() {
	return apply_filters(
		'hotel26_info_two_default', json_encode(
				 array(
				array(
					'icon_value'	=> esc_html('fa-clock'),
					'title' 		=> esc_html__( 'Book Your Appointment', 'hotel-26-pro' ),
					'description' 		=> esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'hotel-26-pro' ),
					'button_text' 		=> esc_html__( 'Read More', 'hotel-26-pro' ),
					'button_link' 		=> '',
					'newtab' 		=> '',
					'nofollow' 		=> '',
					'id'            => 'customizer_repeater_info_two_001',
				),
				array(
					'icon_value'	=> esc_html('fa-heart'),
					'title' 		=> esc_html__( 'Our Commitment to Safety', 'hotel-26-pro' ),
					'description' 		=> esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'hotel-26-pro' ),
					'button_text' 		=> esc_html__( 'Read More', 'hotel-26-pro' ),
					'button_link' 		=> '',
					'newtab' 		=> '',
					'nofollow' 		=> '',
					'id'            => 'customizer_repeater_info_two_001',
				),
				array(
					'icon_value'	=> esc_html('fa-gift'),
					'title' 		=> esc_html__( 'Gift of Wellness', 'hotel-26-pro' ),
					'description' 		=> esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'hotel-26-pro' ),
					'button_text' 		=> esc_html__( 'Read More', 'hotel-26-pro' ),
					'button_link' 		=> '',
					'newtab' 		=> '',
					'nofollow' 		=> '',
					'id'            => 'customizer_repeater_info_two_001',
				),
				array(
					'icon_value'	=> esc_html('fa-users'),
					'title' 		=> esc_html__( 'Join Our Community', 'hotel-26-pro' ),
					'description' 		=> esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'hotel-26-pro' ),
					'button_text' 		=> esc_html__( 'Read More', 'hotel-26-pro' ),
					'button_link' 		=> '',
					'newtab' 		=> '',
					'nofollow' 		=> '',
					'id'            => 'customizer_repeater_info_two_001',
				),
				array(
					'icon_value'	=> esc_html('fa-journal-whills'),
					'title' 		=> esc_html__( 'Your Wellness Journey', 'hotel-26-pro' ),
					'description' 		=> esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'hotel-26-pro' ),
					'button_text' 		=> esc_html__( 'Read More', 'hotel-26-pro' ),
					'button_link' 		=> '',
					'newtab' 		=> '',
					'nofollow' 		=> '',
					'id'            => 'customizer_repeater_info_two_001',
				),
				array(
					'icon_value'	=> esc_html('fa-couch'),
					'title' 		=> esc_html__( 'Relax & Chill', 'hotel-26-pro' ),
					'description' 		=> esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'hotel-26-pro' ),
					'button_text' 		=> esc_html__( 'Read More', 'hotel-26-pro' ),
					'button_link' 		=> '',
					'newtab' 		=> '',
					'nofollow' 		=> '',
					'id'            => 'customizer_repeater_info_two_001',
				),
			)								
		)

	);
}

/*
 *
 * Workflow Default
 */
 function hotel26_workflow_default() {
	return apply_filters(
		'hotel26_workflow_default', json_encode(
				 array(
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/spa/workflow1.png'),
					'title' 		=> esc_html__( 'Appointment', 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_info_001',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/spa/workflow2.png'),
					'title' 		=> esc_html__( 'Treatment', 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_info_002',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/spa/workflow3.png'),
					'title' 		=> esc_html__( 'Bathing', 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_info_003',
				),
			)								
		)
	);
}

/*
 *
 * Gallery Default
 */
 function hotel26_gallery_default() {
	return apply_filters(
		'hotel26_gallery_default', json_encode(
				 array(
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/restaurants/gallery/img1.jpg'),
					'id'            => 'customizer_repeater_gallery_001',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/restaurants/gallery/img2.jpg'),
					'id'            => 'customizer_repeater_gallery_002',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/restaurants/gallery/img3.jpg'),
					'id'            => 'customizer_repeater_gallery_003',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/restaurants/gallery/img4.jpg'),
					'id'            => 'customizer_repeater_gallery_004',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/restaurants/gallery/img5.jpg'),
					'id'            => 'customizer_repeater_gallery_005',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/restaurants/gallery/img6.jpg'),
					'id'            => 'customizer_repeater_gallery_006',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/restaurants/gallery/img7.jpg'),
					'id'            => 'customizer_repeater_gallery_007',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/restaurants/gallery/img8.jpg'),
					'id'            => 'customizer_repeater_gallery_008',
				),
			)								
		)
	);
}

/*
 *
 * Funfact Default
 */
 function hotel26_get_funfact_default() {
	return apply_filters(
		'hotel26_get_funfact_default', json_encode(
				 array(
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/funfact/cheers.png'),
					'title' 		=> '35400',
					'subtitle' 		=> '+',
					'text'      	=> esc_html__( 'Drinks', 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_funfact_001',
				),				
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/funfact/key-room.png'),
					'title' 		=> '10256',
					'subtitle' 		=> '+',
					'text'      	=> esc_html__( 'Hotel Keys', 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_funfact_002',
				),				
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/funfact/tourism.png'),
					'title' 		=> '51000',
					'subtitle' 		=> '+',
					'text'      	=> esc_html__( 'World Tour', 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_funfact_003',
				),				
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/funfact/group.png'),
					'title' 		=> '42500',
					'subtitle' 		=> '+',
					'text'      	=> esc_html__( 'Total People', 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_funfact_004',
				),
				
			)								
		)

	);
}

/*
 *
 * Testimonial Default
 */
 function hotel26_testimonial_default() {
	return apply_filters(
		'hotel26_testimonial_default', json_encode(
				 array(
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/testimonial/testimonial1.png'),
					'title' 		=> esc_html__( 'John D. Alexon', 'hotel-26-pro' ),
					'subtitle' 		=> esc_html__( 'Manager', 'hotel-26-pro' ),
					'text'      	=> esc_html__( '5', 'hotel-26-pro' ),
					'description'      	=> esc_html__( 'There many variations passages of Lorem Ipsum available but the majority have suffered alteration in some form, by injected .', 'hotel-26-pro' ),
					'image_url2'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/testimonial/trip-advisor.png'),
					'id'            => 'customizer_repeater_testimonial_001',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/testimonial/testimonial2.png'),
					'title' 		=> esc_html__( 'Michael Dean', 'hotel-26-pro' ),
					'subtitle' 		=> esc_html__( 'Event Member', 'hotel-26-pro' ),
					'text'      	=> esc_html__( '5', 'hotel-26-pro' ),
					'description'      	=> esc_html__( 'There many variations passages of Lorem Ipsum available but the majority have suffered alteration in some form, by injected .', 'hotel-26-pro' ),
					'image_url2'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/testimonial/thomas-cook.png'),
					'id'            => 'customizer_repeater_testimonial_002',
				),
			)								
		)

	);
}

/*
 *
 * Pricing Default
 */
 function hotel26_pricing_default() {
	return apply_filters(
		'hotel26_pricing_default', json_encode(
				 array(
				array(
					'title'			=> esc_html__('Single Room' , 'hotel-26-pro' ),
					'subtitle'		=> esc_html__( 'Most Popular', 'hotel-26-pro' ),
					'text'			=> esc_html__( '$49', 'hotel-26-pro' ),
					'text2'			=> esc_html__( '/Per Night', 'hotel-26-pro' ),
					'text3'			=> esc_html__( 'ALL PLANS INCLUDED', 'hotel-26-pro' ),
					'text7'			=> esc_html__( 'family,signature', 'hotel-26-pro' ),
					'button_text'	=> esc_html__( 'Choose Your Plan', 'hotel-26-pro' ),
					'button_link'	=> '',
					'newtab'		=> '',
					'nofollow'		=> '',
					'social_repeater'		=> json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_001',
								'title' => 'Comfortable Single Bed',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_002',
								'title' => 'Free Wi-Fi & Smart TV',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_003',
								'title' => 'Complimentary Breakfast',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_004',
								'title' => 'Attached Bathroom',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_005',
								'title' => 'Daily Housekeeping',
								'subtitle' => '',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_006',
								'title' => 'Pick & Drop Services',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_007',
								'title' => 'Book Flights Online',
								'subtitle' => '',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_008',
								'title' => 'City Tour Guide',
								'subtitle' => '',
							),
						)
					),
					'id'        => 'customizer_repeater_pricing_001',
				),
				array(
					'title'			=> esc_html__('Deluxe Room' , 'hotel-26-pro' ),
					'subtitle'		=> esc_html__( 'Best Value', 'hotel-26-pro' ),
					'text'			=> esc_html__( '$49', 'hotel-26-pro' ),
					'text2'			=> esc_html__( '/Per Night', 'hotel-26-pro' ),
					'text3'			=> esc_html__( 'ALL PLANS INCLUDED', 'hotel-26-pro' ),
					'text7'			=> esc_html__( 'deluxe', 'hotel-26-pro' ),
					'button_text'	=> esc_html__( 'Choose Your Plan', 'hotel-26-pro' ),
					'button_link'	=> '',
					'newtab'		=> '',
					'nofollow'		=> '',
					'social_repeater'		=> json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0011',
								'title' => 'Comfortable Single Bed',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0012',
								'title' => 'Free Wi-Fi & Smart TV',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0013',
								'title' => 'Complimentary Breakfast',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0014',
								'title' => 'Attached Bathroom',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0015',
								'title' => 'Daily Housekeeping',
								'subtitle' => '',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0016',
								'title' => 'Pick & Drop Services',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0017',
								'title' => 'Book Flights Online',
								'subtitle' => '',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0018',
								'title' => 'City Tour Guide',
								'subtitle' => '',
							),
						)
					),
					'id'        => 'customizer_repeater_pricing_002',
				),
				array(
					'title'			=> esc_html__('Business Room' , 'hotel-26-pro' ),
					'subtitle'		=> esc_html__( 'Recommended', 'hotel-26-pro' ),
					'text'			=> esc_html__( '$199', 'hotel-26-pro' ),
					'text2'			=> esc_html__( '/Per Night', 'hotel-26-pro' ),
					'text3'			=> esc_html__( 'ALL PLANS INCLUDED', 'hotel-26-pro' ),
					'text7'			=> esc_html__( 'deluxe,signature', 'hotel-26-pro' ),
					'button_text'	=> esc_html__( 'Choose Your Plan', 'hotel-26-pro' ),
					'button_link'	=> '',
					'newtab'		=> '',
					'nofollow'		=> '',
					'social_repeater'		=> json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0021',
								'title' => 'Comfortable Single Bed',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0022',
								'title' => 'Free Wi-Fi & Smart TV',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0023',
								'title' => 'Complimentary Breakfast',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0024',
								'title' => 'Attached Bathroom',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0025',
								'title' => 'Daily Housekeeping',
								'subtitle' => '',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0026',
								'title' => 'Pick & Drop Services',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0027',
								'title' => 'Book Flights Online',
								'subtitle' => '',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0028',
								'title' => 'City Tour Guide',
								'subtitle' => '',
							),
						)
					),
					'id'        => 'customizer_repeater_pricing_003',
				),
				array(
					'title'			=> esc_html__('Luxury Room' , 'hotel-26-pro' ),
					'subtitle'		=> esc_html__( 'Recommended', 'hotel-26-pro' ),
					'text'			=> esc_html__( '$69', 'hotel-26-pro' ),
					'text2'			=> esc_html__( '/Per Night', 'hotel-26-pro' ),
					'text3'			=> esc_html__( 'ALL PLANS INCLUDED', 'hotel-26-pro' ),
					'text7'			=> esc_html__( 'luxury', 'hotel-26-pro' ),
					'button_text'	=> esc_html__( 'Choose Your Plan', 'hotel-26-pro' ),
					'button_link'	=> '',
					'newtab'		=> '',
					'nofollow'		=> '',
					'social_repeater'		=> json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0031',
								'title' => 'Comfortable Single Bed',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0032',
								'title' => 'Free Wi-Fi & Smart TV',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0033',
								'title' => 'Complimentary Breakfast',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0034',
								'title' => 'Attached Bathroom',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0035',
								'title' => 'Daily Housekeeping',
								'subtitle' => '',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0036',
								'title' => 'Pick & Drop Services',
								'subtitle' => 'yes',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0037',
								'title' => 'Book Flights Online',
								'subtitle' => '',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-pricing_0038',
								'title' => 'City Tour Guide',
								'subtitle' => '',
							),
						)
					),
					'id'        => 'customizer_repeater_pricing_004',
				),
			)								
		)

	);
}


/*
 *
 * Why Choose Default
 */
 function hotel26_choose_default() {
	return apply_filters(
		'hotel26_choose_default', json_encode(
				 array(
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/why-choose/img5.jpg'),					
					'title'			=> esc_html__('Breakfast' , 'hotel-26-pro' ),		
					'id'            => 'customizer_repeater_choose_001',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/why-choose/img6.jpg'),
					'title'			=> esc_html__('Chicken Dum Biryani' , 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_choose_002',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/why-choose/img7.jpg'),
					'title'			=> esc_html__('Vegan Pistachio Cream' , 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_choose_003',
				),
				array(
					'image_url'		=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/why-choose/img8.jpg'),
					'title'			=> esc_html__('Vegan Poke Bowl' , 'hotel-26-pro' ),
					'id'            => 'customizer_repeater_choose_004',
				),
			)								
		)

	);
}

/*
 *
 * Room Default
 */
function hotel26_get_room_default() {
	return apply_filters(
		'hotel26_get_room_default', json_encode(
					  array(
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/rooms/room-1.jpg',
					'title'           => esc_html__( '<span class="color-secondary">Deluxe</span> Room 1', 'hotel-26-pro' ),
					'subtitle'        => esc_html__( 'Starting at <br><span class="fw-bold">$199</span> / <span class="color-secondary">Night</span>','hotel-26-pro' ),
					'button_text'        => esc_html__( 'Book Now','hotel-26-pro' ),
					'button_link'        => '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'id'              => 'customizer_repeater_room_0001',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-room_001',
								'title' => '600 sq. m',
								'icon' => 'fa-bed',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_002',
								'title' => 'Salon',
								'icon' => 'fa-scissors',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_003',
								'title' => 'Bathroom',
								'icon' => 'fa-bath',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_004',
								'title' => 'Living Area',
								'icon' => 'fa-podcast',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_005',
								'title' => 'WiFi',
								'icon' => 'fa-wifi',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_006',
								'title' => 'CCTV Camera',
								'icon' => 'fa-camera',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_007',
								'title' => 'Newspaper',
								'icon' => 'fa-newspaper',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_008',
								'title' => 'Heater',
								'icon' => 'fa-fire-alt',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_009',
								'title' => 'Bar',
								'icon' => 'fa-building',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_010',
								'title' => 'Massage',
								'icon' => 'fa-spa',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_011',
								'title' => 'Blanket',
								'icon' => 'fa-podcast',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_012',
								'title' => 'Sofa',
								'icon' => 'fa-couch',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_013',
								'title' => 'Wheelchair',
								'icon' => 'fa-wheelchair-alt',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_014',
								'title' => 'Community Hall',
								'icon' => 'fa-handshake',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_0115',
								'title' => 'Elevator',
								'icon' => 'fa-elevator',
							),
						)
					),
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/rooms/room-2.jpg',
					'title'        => esc_html__( '<span class="color-secondary">Deluxe</span> Room 2', 'hotel-26-pro' ),
					'subtitle'           => esc_html__( 'Starting at <br><span class="fw-bold">$199</span> / <span class="color-secondary">Night</span>', 'hotel-26-pro' ),
					'button_text'        => esc_html__( 'Book Now','hotel-26-pro' ),
					'button_link'        => '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'id'              => 'customizer_repeater_room_0002',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-room_301',
								'title' => '600 sq. m',
								'icon' => 'fa-bed',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_302',
								'title' => 'Salon',
								'icon' => 'fa-scissors',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_303',
								'title' => 'Bathroom',
								'icon' => 'fa-bath',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_304',
								'title' => 'Living Area',
								'icon' => 'fa-podcast',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_305',
								'title' => 'WiFi',
								'icon' => 'fa-wifi',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_306',
								'title' => 'CCTV Camera',
								'icon' => 'fa-camera',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_307',
								'title' => 'Newspaper',
								'icon' => 'fa-newspaper',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_308',
								'title' => 'Heater',
								'icon' => 'fa-fire-alt',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_309',
								'title' => 'Bar',
								'icon' => 'fa-building',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_310',
								'title' => 'Massage',
								'icon' => 'fa-spa',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_311',
								'title' => 'Blanket',
								'icon' => 'fa-podcast',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_312',
								'title' => 'Sofa',
								'icon' => 'fa-couch',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_313',
								'title' => 'Wheelchair',
								'icon' => 'fa-wheelchair-alt',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_314',
								'title' => 'Community Hall',
								'icon' => 'fa-handshake',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_315',
								'title' => 'Elevator',
								'icon' => 'fa-elevator',
							),
						)
					),
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL. 'inc/hotel-26/images/rooms/room-3.jpg',
					'title'           => esc_html__( '<span class="color-secondary">Deluxe</span> Room 3', 'hotel-26-pro' ),
					'subtitle'           => esc_html__( 'Starting at <br><span class="fw-bold">$109</span> / <span class="color-secondary">Night</span>', 'hotel-26-pro' ),
					'button_text'        => esc_html__( 'Book Now','hotel-26-pro' ),
					'button_link'        => '',
					'newtab'		=>	'',
					'nofollow'		=>	'',
					'id'              => 'customizer_repeater_room_0003',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-room_201',
								'title' => '600 sq. m',
								'icon' => 'fa-bed',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_202',
								'title' => 'Salon',
								'icon' => 'fa-scissors',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_203',
								'title' => 'Bathroom',
								'icon' => 'fa-bath',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_204',
								'title' => 'Living Area',
								'icon' => 'fa-podcast',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_205',
								'title' => 'WiFi',
								'icon' => 'fa-wifi',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_206',
								'title' => 'CCTV Camera',
								'icon' => 'fa-camera',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_207',
								'title' => 'Newspaper',
								'icon' => 'fa-newspaper',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_208',
								'title' => 'Heater',
								'icon' => 'fa-fire-alt',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_209',
								'title' => 'Bar',
								'icon' => 'fa-building',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_210',
								'title' => 'Massage',
								'icon' => 'fa-spa',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_211',
								'title' => 'Blanket',
								'icon' => 'fa-podcast',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_212',
								'title' => 'Sofa',
								'icon' => 'fa-couch',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_213',
								'title' => 'Wheelchair',
								'icon' => 'fa-wheelchair-alt',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_214',
								'title' => 'Community Hall',
								'icon' => 'fa-handshake',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-room_215',
								'title' => 'Elevator',
								'icon' => 'fa-elevator',
							),
						)
					),
				),
			)
		)
	);
}

/**
 * 
 * Hotel 26 Premium Links
 * 
 */
 
 if ( ! function_exists( 'hotel_26_premium_links' ) ) :
	function hotel_26_premium_links() {
		
		$theme = wp_get_theme(); // gets the current theme
		if( 'Hotel Elegance' == $theme->name){
			$hotel_26_premium_url= 'https://www.nayrathemes.com/hotel-Elegance-pro/';
		
		}else if( 'Hotelchild2' == $theme->name){
			$hotel_26_premium_url= 'https://www.nayrathemes.com/hotel-26-c2-pro/';
		
		}else if( 'Hotelchild3' == $theme->name){
			$hotel_26_premium_url= 'https://www.nayrathemes.com/hotel-26-c3-pro/';
		
		}else{
			$hotel_26_premium_url= 'https://www.nayrathemes.com/hotel-26-pro/';
		}	
		return $hotel_26_premium_url;
	}
endif;