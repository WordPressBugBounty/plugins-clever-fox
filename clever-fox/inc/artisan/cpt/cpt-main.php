<?php
// code for custom post type  Project
		function artisan_project() {
	
			$project_slug = get_theme_mod('project_slug','project'); 
			register_post_type( 'artisan_project',
				array(
					'labels' => array(
						'name' => __('Project', 'artisan'),
						'singular_name' => __('Project', 'artisan'),
						'add_new' => __('Add New', 'artisan'),
						'add_new_item' => __('Add New Project','artisan'),
						'edit_item' => __('Edit Project','artisan'),
						'new_item' => __('New Facebook link ','artisan'),
						'all_items' => __('All Project','artisan'),
						'view_item' => __('View Link','artisan'),
						'search_items' => __('Search Links','artisan'),
						'not_found' =>  __('No Links found','artisan'),
						'not_found_in_trash' => __('No Links found in Trash','artisan'), 
						
					),
						'supports' => array('title','thumbnail','comments'),
						'show_in_nav_menus' => false,
						'public' => true,
						'menu_position' => 20,
						'rewrite' => array('slug' => $project_slug),
						'menu_icon' => 'dashicons-schedule',
					
				)
			);
		}
		add_action( 'init', 'artisan_project' );


		// Project Meta Box

		function artisan_project_init()
		{
							
			add_meta_box('project_all_meta', 'Project Description', 'artisan_meta_project','artisan_project', 'normal', 'high');
			
			add_action('save_post','artisan_meta_project_save');
		}


		add_action('admin_init','artisan_project_init');		
						

						
		function artisan_meta_project()
		{
			global $post;
			
			$project_button_link 			= sanitize_text_field( get_post_meta( get_the_ID(),'project_button_link', true ));
			$project_button_link_target 	= sanitize_text_field( get_post_meta( get_the_ID(),'project_button_link_target', true ));
		?>	
			
			<h3><i><?php esc_html_e('Project Single View Detail','artisan'); ?></i></h3>

			
			<div class="inside">				
				<p><label><?php _e('Project URL','artisan');?></label></p>
				<p><input style="width:100%; height:40px; padding: 10px;"  name="project_button_link" placeholder="<?php _e('Project URL','artisan');?>" type="text" value="<?php if (!empty($project_button_link)) echo esc_attr($project_button_link);?>">&nbsp;</input></p>
				<p> <input name="project_button_link_target" type="checkbox" <?php if(!empty($project_button_link_target)) echo "checked"; ?> > </input>
				<label><?php _e('Open link in a new tab','artisan'); ?> </label> </p>
			</div>				
			
		<?php 	
		}


		function artisan_meta_project_save($post_id) 
			{
				if (isset($_POST['post_ID'])) 
				{ 	
					$post_ID = $_POST['post_ID'];				
					$post_type = get_post_type($post_ID);
					
					if ($post_type == 'artisan_project') 
					{	
						update_post_meta($post_ID, 'project_button_link', sanitize_text_field($_POST['project_button_link']));
						
						$project_button_link_target = isset($_POST['project_button_link_target']) ? '1' : '0';
						update_post_meta($post_ID, 'project_button_link_target', $project_button_link_target);
					}
				}
			}

		
		// Project Category Texonomy
		
		function artisan_project_taxonomy() {
		
		$texo_project_slug = get_theme_mod('texo_project_slug','project_category'); 
		register_taxonomy('project_categories', 'artisan_project',
			array(
				'hierarchical' => true,
				'label' => 'Project Categories',
				'show_in_nav_menus' => true,
				'query_var' => true,
				'rewrite' => array('slug' => $texo_project_slug )
			)
		);
	
	
		//Default category id		
		$defualt_tex_id = get_option('custom_texo_project_id');
		//quick update category
		if((isset($_POST['action'])) && (isset($_POST['taxonomy']))){		
			wp_update_term($_POST['tax_ID'], 'project_categories', array(
			  'name' => $_POST['name'],
			  'slug' => $_POST['slug']
			));	
			update_option('custom_texo_project_id', $defualt_tex_id);
		}
		else 
		{ 	//insert default category 
			if(!$defualt_tex_id){
				wp_insert_term('All','project_categories', array('description'=> 'Default Category','slug' => 'All'));
				$Current_text_id = term_exists('All', 'project_categories');
				update_option('custom_texo_project_id', $Current_text_id['term_id']);
			}
		}
		//update category
		if(isset($_POST['submit']) && isset($_POST['action']) )
		{	wp_update_term(isset($_POST['tag_ID']), 'project_categories', array(
			  'name' => isset($_POST['name']),
			  'slug' => isset($_POST['slug']),
			  'description' => isset($_POST['description'])
			));
		}
		// Delete default category
		if(isset($_POST['action']) && isset($_POST['tag_ID']) )
		{	if(($_POST['tag_ID'] == $defualt_tex_id) && $_POST['action']	 =="delete-tag")
			{	
				delete_option('custom_texo_project_id'); 
			} 
		}
	}
	add_action( 'init', 'artisan_project_taxonomy' );

?>