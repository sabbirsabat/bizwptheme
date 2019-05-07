<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------

$settings           = array(
  'menu_title'      => esc_html__('Theme Option','bizpage'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'bizpage theme options',
  'ajax_save'       => true,
  'show_reset_all'  => true,
  'framework_title' => esc_html__('BizPage -by Sabat','bizpage'),
);


// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------

$options        = array();


//-----------------------------------------
// Styling  Setting      
//-----------------------------------------

$options[]=array(
'name'  =>  'Bizpage_style_setting',
'title' =>  esc_html__('Styling', 'bizpage'),
'icon'  =>  'fa fa-paint-brush',

//begin field
'fields'=>array(
     array(
      'id'         =>  'theme_color',
      'type'       =>  'color_picker',
      'title'      =>  esc_html__('Theme Color','bizpage'),
      'default'    =>   '',
      'desc'       =>  esc_html__('if you want to change Theme Color, Select this','bizpage'),
      ),     
	array(
      'id'         =>  'theme_heading_font_color',
      'type'       =>  'color_picker',
      'title'      =>   esc_html__('Heading Text Color','bizpage'),
      'default'    =>  '',
       'desc'      =>  esc_html__('if you want to change Heading Text Color, Select this', 'bizpage'),
      ),
	array(
      'id'         =>  'theme_body_font_color',
      'type'       =>  'color_picker',
      'title'      =>  esc_html__('Body Text Color', 'bizpage'),
      'default'    =>  '',
	  'desc'       =>  esc_html__('if you want to change Body Text Color, Select this', 'bizpage'),
      ), 
	 array(
      'id'         =>  'enable_preloder',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable Preloder', 'bizpage'),
      'default'    =>  true,
	   'desc'      =>  esc_html__('if you enable preloder, Just select ON', 'bizpage'),
      ), 
	
   	 array(
      'id'         =>  'enable_boxed_layout',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable Box Layout', 'bizpage'),
      'default'    =>  false,
	   'desc'      =>   esc_html__('if you enable Box Layout, select ON', 'bizpage'),
      ),
	
	 array(
      'id'         =>  'body_bg_color',
      'type'       =>  'color_picker',
      'title'      =>  esc_html__('Body Backgroud Color', 'bizpage'),
	   'desc'      =>  esc_html__('Select your body background color', 'bizpage'),
	 'dependency'  =>  array('enable_boxed_layout', '==', 'true' ),
      ),
	
	 array(
      'id'         =>  'body_bg',
      'type'       =>  'image',
      'title'      =>  esc_html__('Body Backgroud Image', 'bizpage'),
	   'desc'      =>  esc_html__( 'Select your body background image', 'bizpage'),
	 'dependency'  =>  array('enable_boxed_layout', '==', 'true' ),
      ),
	
	 array(
      'id'         =>  'body_bg_repeat',
      'type'       =>  'select',
      'title'      =>   esc_html__('Body Backgroud Repeat', 'bizpage'),
      'default'    =>  'repeat',
	  'options'    =>  array(
		  'repeat'     =>   'Repeat',
		  'no-repeat'  =>   'No Repeat',
		  'cover'      =>   'Cover',
		),
	   'desc'      =>   esc_html__('Select your option','bizpage'),	 
	 'dependency'  =>  array('enable_boxed_layout', '==', 'true' ),
      ),
	
	 array(
      'id'         =>  'body_bg_attachment',
      'type'       =>  'select',
      'title'      =>  esc_html__('Body backgroud attachment', 'bizpage'),
      'default'    =>  'scroll',
	  'options'    =>  array(
		  'scroll'     =>   'Scroll',
		  'fixed'      =>   'Fixed',
		),
	   'desc'      =>  esc_html__( 'Select your attachment', 'bizpage'),	 
	 'dependency'  =>  array('enable_boxed_layout', '==', 'true' ),
      ),

    ), // end: fields
);   // end: Options


//-----------------------------------------
// Logo                    
//-----------------------------------------

$options[]=array(
'name'  =>  'Bizpage_logo_setting',
'title' =>  esc_html__('Logo', 'bizpage'),
'icon'  =>  'fa fa-leaf',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_image_logo',
      'type'       =>  'switcher',
      'title'      =>   esc_html__('Enable Image Logo', 'bizpage'),
      'default'    =>  false,
	   'desc'      =>   esc_html__('if you enable Image Logo, select ON', 'bizpage'),
    ),
	array(
      'id'         => 'image_logo',
      'type'       => 'image',
      'title'      => esc_html__('Upload site logo', 'bizpage'),  
	   'desc'      => esc_html__('Upload your image logo', 'bizpage'),
	 'dependency'  =>  array('enable_image_logo', '==', 'true' ),	
	  ),
	array(
      'id'         => 'text_logo',
      'type'       => 'text',
      'title'      => esc_html__('Logo Text','bizpage'),   
	 'default'     => 'BizPaze',
	   'desc'      => esc_html__('Write Your Site Name','bizpage'),  
	 'dependency'  =>  array('enable_image_logo', '==', 'false' ),	
	  ),
	
    ), // end: fields
);   // end: Options


//-----------------------------------------
// Featured Service       
//-----------------------------------------

$options[]=array(
'name'  =>  'featured_service',
'title' =>  esc_html__('Featured Service', 'bizpage'),
'icon'  =>  'fa fa-newspaper-o',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_featured_service_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable Featured Service ?', 'bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to featured service area, select ON.', 'bizpage'),
    ),
	
	array(
      'id'              => 'featured_service_option',
      'type'            => 'group',
      'title'           => esc_html__('Featured Service Option', 'bizpage'),
      'button_title'    => esc_html__('Add New Featured', 'bizpage'),
      'accordion_title' => esc_html__('Featured', 'bizpage'),
      'fields'          => array(
	
			array(
			  'id'         => 'featured_icon',
			  'type'       => 'icon',
			  'title'      => esc_html__('Featured Icon', 'bizpage'),
			 ),

			array(
			  'id'         =>  'featured_title',
			  'type'       =>  'text',
			  'title'      =>  esc_html__('Featured Service Title', 'bizpage'),
			  'default'    =>  esc_html__('Write Featured Service Title', 'bizpage'),
			  'desc'       =>  esc_html__('Type featured service title', 'bizpage'),
			),
		   array(
			 'id'          => 'link',
		   'type'          => 'text',
		  'title'          => esc_html__('Featured Title Link', 'bizpage'),
		    ),
		  
		     array(
			 'id'          => 'link_target',
		   'type'          => 'select',
		  'title'          => esc_html__('Link target', 'bizpage'),
		  'default'        => '_blank',
		  'options'        => array(
				 '_self'      => 'open in same tab',
				'_blank'      => 'open in new tab'
			),
		  ),

			array(
			  'id'         =>  'featured_description',
			  'type'       =>  'textarea',
			  'title'      =>  esc_html__('Featured Service Description', 'bizpage'),
			  'default'    =>  esc_html__('Write Featured Service Description.', 'bizpage'),
			  'desc'       =>  esc_html__('Type featured service description', 'bizpage'), 
			),
       ),
	'dependency' =>  array('enable_featured_service_area', '==', 'true' ),
	  ), //end group
    ), // end: fields
);   // end: Options


//-----------------------------------------
// About Us Page section 
//-----------------------------------------

$options[]=array(
'name'  =>  'about_us',
'title' =>  esc_html__('About', 'bizpage'),
'icon'  =>  'fa fa-male',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_about_us_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable about us page content?', 'bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to about content area, select ON.', 'bizpage'),
    ),
  
    array(
      'id'         =>  'about_section_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('About Area Section title', 'bizpage'),
      'default'    =>  esc_html__('About Us', 'bizpage'),
      'desc'       =>  esc_html__('Type about us section title', 'bizpage'),
      'dependency' =>  array('enable_about_us_area', '==', 'true' ),
    ),

    array(
      'id'         =>  'about_section_description',
      'type'       =>  'textarea',
      'title'      =>  esc_html__('About Area Description', 'bizpage'),
      'default'    =>  esc_html__('Write About Area Description.', 'bizpage'),
      'desc'       =>  esc_html__('Type about area description', 'bizpage'),
      'dependency' =>  array('enable_about_us_area', '==', 'true' ),
    ),
	

  ), // end: fields
);   // end: Options



//-----------------------------------------
// Services Page section  
//-----------------------------------------

$options[]=array(
'name'  =>  'service',
'title' =>  esc_html__('Services','bizpage'),
'icon'  =>  'fa fa-paw',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_service_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable service page content?','bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to service content area, select ON.','bizpage'),
    ),
  
    array(
      'id'         =>  'service_section_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Service Area Section title','bizpage'),
      'default'    =>  esc_html__('Services','bizpage'),
      'desc'       =>  esc_html__('Type service section title','bizpage'),
      'dependency' =>  array('enable_service_area', '==', 'true' ),
    ),

    array(
      'id'         =>  'service_section_description',
      'type'       =>  'textarea',
      'title'      =>  esc_html__('Service Area Description','bizpage'),
      'default'    =>  esc_html__('Write Service Area Description.','bizpage'),
      'desc'       =>  esc_html__('Type service area description','bizpage'),
      'dependency' =>  array('enable_service_area', '==', 'true' ),
    ),
	
  ), // end: fields
);   // end: Options


//-----------------------------------------
// Team                
//-----------------------------------------

$options[]=array(
'name'  =>  'team',
'title' =>  esc_html__('Team','bizpage'),
'icon'  =>  'fa fa-paw',

//begin field
'fields'=>array(
	 array(
      'id'         => 'team_breadcrump_img',
      'type'       => 'image',
      'title'      => esc_html__('Team Breadcrump Image','bizpage'),
      'desc'       => esc_html__('Upload single team page breadcrump', 'bizpage'), 
	 ), 
     array(
      'id'         =>  'enable_team_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable team content?','bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to team content area, select ON.','bizpage'),
    ),
	
    array(
      'id'         =>  'team_section_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Team Area Section title','bizpage'),
      'default'    =>  esc_html__('Team','bizpage'),
      'desc'       =>  esc_html__('Type team section title','bizpage'),
      'dependency' =>  array('enable_team_area', '==', 'true' ),
    ),

    array(
      'id'         =>  'team_section_description',
      'type'       =>  'textarea',
      'title'      =>  esc_html__('Team Area Description','bizpage'),
      'default'    =>  esc_html__('Write team Area Description.','bizpage'),
      'desc'       =>  esc_html__('Type team area description','bizpage'),
      'dependency' =>  array('enable_team_area', '==', 'true' ),
    ),
   ),
);


//-----------------------------------------
// Portfolio section   
//-----------------------------------------

$options[]=array(
'name'  =>  'portfolio',
'title' =>  esc_html__('Portfolio','bizpage'),
'icon'  =>  'fa fa-male',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_portfolio_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable portfolio content?','bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to portfolio content area, select ON.','bizpage'),
    ),
  
    array(
      'id'         =>  'portfolio_section_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Portfolio Area Section title','bizpage'),
      'default'    =>  esc_html__('Our Portfolio','bizpage'),
      'desc'       =>  esc_html__('Type portfolio section title','bizpage'),
      'dependency' =>  array('enable_portfolio_area', '==', 'true' ),
	),

  ), // end: fields
);   // end: Options


//-----------------------------------------
// Blog  Setting          
//-----------------------------------------

$options[]=array(
'name'  =>  'Bizpage_blog_setting',
'title' =>  esc_html__('Blog Setting','bizpage'),
'icon'  =>  'fa fa-pencil',

//begin field
'fields'=>array(
     array(
      'id'         =>  'blog_breadcrump_image',
      'type'       =>  'image',
      'title'      =>  esc_html__('Blog breadcrump image','bizpage'),
      'desc'       =>  esc_html__('Upload blog pages breadcrump image','bizpage'),
	   	 
      ),    
	 array(
      'id'         =>  'display_post_by',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Display post by?','bizpage'),
      'default'    =>   true,
	  'desc'       =>  esc_html__('If you want to show posted by name on blog index page and single blog, select on','bizpage'),
      ),
	 array(
      'id'         =>  'display_post_date',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Display post date?','bizpage'),
      'default'    =>   true,
	  'desc'       =>  esc_html__('If you want to show blog post date on blog index page and single blog, select on','bizpage'),
      ), 
	 array(
      'id'         =>  'display_post_comment_count',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Display comment count?','bizpage'),
      'default'    =>   true,
	  'desc'       =>  esc_html__('If you want to show comment count on blog index page, select on','bizpage'),
      ), 
	 array(
      'id'         =>  'display_post_category',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Display posted in categories?','bizpage'),
      'default'    =>   true,
	  'desc'       =>  esc_html__('If you want to show blog category on blog index page and single blog, select on', 'bizpage'),	 
      ), 
	 array(
      'id'         =>  'display_post_tag',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Display posted tag?', 'bizpage'),
      'default'    =>   true,
	  'desc'       =>  esc_html__('If you want to show blog tag on single blog, select on', 'bizpage'),
      ), 
	 array(
      'id'         =>  'display_post_nav',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('enable next previous link on single post?', 'bizpage'),
      'default'    =>   true,
	  'desc'       =>  esc_html__('If you want to show next previous link on single blog, select on', 'bizpage'),
      ), 
	array(
      'id'              => 'blog_social',
      'type'            => 'group',
      'title'           => esc_html__('Blog Option', 'bizpage'),
	  'desc'            => esc_html__('Manage Blog Social Share Option', 'bizpage'),
      'button_title'    => esc_html__('Add New Social', 'bizpage'),
      'accordion_title' => esc_html__('Single Social', 'bizpage'),
      'fields'          => array(

				array(
				  'id'         =>  'social_shr_icon',
				  'type'       =>  'icon',
				  'title'      =>  esc_html__('Social Icon', 'bizpage'),
				  'desc'       =>  esc_html__('Select Icon', 'bizpage'),
				),
		        array(
				  'id'         =>  'share_value',
				  'type'       =>  'text',
				  'title'      =>  esc_html__('Share Value', 'bizpage'),
				  'desc'       =>  esc_html__('Input Area Value', 'bizpage'),
				),
			),
		),

    ), // end: fields
);   // end: Options


//-----------------------------------------
// Call to Action Section        
//-----------------------------------------

$options[]=array(
'name'  =>  'callto_action',
'title' =>  esc_html__('Call To Action', 'bizpage'),
'icon'  =>  'fa fa-phone',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_callto_action',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable Call to Action Content?', 'bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to call to action content, select ON.', 'bizpage'),
    ),
  
    array(
      'id'         =>  'callto_action_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Call To Action Title', 'bizpage'),
      'default'    =>  esc_html__('Call To Action', 'bizpage'),
      'desc'       =>  esc_html__('Type call to action title', 'bizpage'),
      'dependency' =>  array('enable_callto_action', '==', 'true' ),
    ),
   
    array(
      'id'         =>  'callto_action_description',
      'type'       =>  'textarea',
      'title'      =>  esc_html__('Call To Action Description', 'bizpage'),
      'default'    =>  esc_html__('Write Call to Action Description.', 'bizpage'),
      'desc'       =>  esc_html__('Type service area description', 'bizpage'),
      'dependency' =>  array('enable_callto_action', '==', 'true' ),
    ),
	array(
      'id'         =>  'callto_action_button_text',
      'type'       =>  'text',
      'title'      =>  esc_html__('Call To Action Button Text', 'bizpage'),
      'default'    =>  esc_html__('Call To Action', 'bizpage'),
      'desc'       =>  esc_html__('Type call to action button text', 'bizpage'),
      'dependency' =>  array('enable_callto_action', '==', 'true' ),
    ),
	 array(
		 'id'      => 'cta_link',
	   'type'      => 'text',
	  'title'      => esc_html__('Button Link', 'bizpage'),
	  'dependency' =>  array('enable_callto_action', '==', 'true' ),
		),

	 array(
		 'id'      => 'cta_link_target',
	   'type'      => 'select',
	  'title'      => esc_html__('Button target', 'bizpage'),
	  'default'    => '_blank',
	  'options'    => array(
			 '_self'    => 'open in same tab',
			'_blank'    => 'open in new tab'
		),
	  'dependency' =>  array('enable_callto_action', '==', 'true' ),
	  ),
   ), // end: fields
);  // end: Options

//-----------------------------------------
// Skill section 
//-----------------------------------------

$options[]=array(
'name'  =>  'skill',
'title' =>  esc_html__('Skill', 'bizpage'),
'icon'  =>  'fa fa-align-left',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_skill_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable Skill content?', 'bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to enable skill area, select ON.', 'bizpage'),
    ),
  
    array(
      'id'         =>  'skill_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Skill Area Title', 'bizpage'),
      'default'    =>  esc_html__('Skill', 'bizpage'),
      'desc'       =>  esc_html__('Type skill aea title', 'bizpage'),
      'dependency' =>  array('enable_skill_area', '==', 'true' ),
    ),

    array(
      'id'         =>  'skill_area_description',
      'type'       =>  'textarea',
      'title'      =>  esc_html__('Skill Area Description', 'bizpage'),
      'default'    =>  esc_html__('Write Skill Area Description.', 'bizpage'),
      'desc'       =>  esc_html__('Type skill area description', 'bizpage'),
      'dependency' =>  array('enable_skill_area', '==', 'true' ),
    ),
	
	array(
      'id'              => 'skill_option',
      'type'            => 'group',
      'title'           => esc_html__('Skill Option', 'bizpage'),
	  'desc'            => esc_html__('Manage Skill Option', 'bizpage'),
      'button_title'    => esc_html__('Add New Skill', 'bizpage'),
      'accordion_title' => esc_html__('Single Skill', 'bizpage'),
      'fields'          => array(

				array(
				  'id'         =>  'area_value_now',
				  'type'       =>  'text',
				  'title'      =>  esc_html__('Area Value Now', 'bizpage'),
				  'default'    =>  esc_html__('100', 'bizpage'),
				  'desc'       =>  esc_html__('Input Area Value', 'bizpage'),
				),
		        
				array(
				  'id'         =>  'skill',
				  'type'       =>  'text',
				  'title'      =>  esc_html__('Skill', 'bizpage'),
				  'default'    =>  esc_html__('HTML', 'bizpage'),
				  'desc'       =>  esc_html__('Type Skill Name', 'bizpage'),
				 
				),
		  
				array(
				  'id'         =>  'value',
				  'type'       =>  'text',
				  'title'      =>  esc_html__('Value', 'bizpage'),
				  'default'    =>  esc_html__('100%', 'bizpage'),
				  'desc'       =>  esc_html__('Input Your Value (%)', 'bizpage'),
				 
				),
				  array(
				  'id'          => 'button_select',
				  'type'        => 'select',
				  'title'       => esc_html__('Button Select', 'bizpage'),
				  'placeholder' => 'Select an option',
				  'options'     => array(
				    	'bg-success'  => 'bg-success',
					   	'bg-info'     => 'bg-info',
						'bg-warning'  => 'bg-warning',
						'bg-danger'   => 'bg-danger',
				  ),
				  'default'     => esc_attr__('bg-success', 'bizpage'),
				),
	   
	    	),
		'dependency' =>  array('enable_skill_area', '==', 'true' ),
	), //end group
  ), // end: fields
);   // end: Options


//-----------------------------------------
// Fact section   
//-----------------------------------------

$options[]=array(
'name'  =>  'fact',
'title' =>  esc_html__('Fact', 'bizpage'),
'icon'  =>  'fa fa-question-circle-o',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_fact_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable Fact content?', 'bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to enable fact area, select ON.', 'bizpage'),
    ),
  
    array(
      'id'         =>  'fact_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Fact Area Title', 'bizpage'),
      'default'    =>  esc_html__('Facts', 'bizpage'),
      'desc'       =>  esc_html__('Type fact aea title', 'bizpage'),
      'dependency' =>  array('enable_fact_area', '==', 'true' ),
    ),

    array(
      'id'         =>  'fact_area_description',
      'type'       =>  'textarea',
      'title'      =>  esc_html__('Fact Area Description', 'bizpage'),
      'default'    =>  esc_html__('Write Fact Area Description.', 'bizpage'),
      'desc'       =>  esc_html__('Type fact area description', 'bizpage'),
      'dependency' =>  array('enable_fact_area', '==', 'true' ),
    ),
	
	array(
      'id'              => 'fact_option',
      'type'            => 'group',
      'title'           => esc_html__('Fact Option', 'bizpage'),
	  'desc'            => esc_html__('Manage Fact Option', 'bizpage'),
      'button_title'    => esc_html__('Add New Counter', 'bizpage'),
      'accordion_title' => esc_html__('Single Counter', 'bizpage'),
      'fields'          => array(

				array(
				  'id'         =>  'input_counter',
				  'type'       =>  'text',
				  'title'      =>  esc_html__('Input Counter Value', 'bizpage'),
				  'default'    =>  esc_html__('100', 'bizpage'),
				  'desc'       =>  esc_html__('Add Input Counter Value', 'bizpage'),
				),
		        
				array(
				  'id'         =>  'counter_description',
				  'type'       =>  'text',
				  'title'      =>  esc_html__('Counter Description', 'bizpage'),
				  'default'    =>  esc_html__('Happy Customer', 'bizpage'),
				  'desc'       =>  esc_html__('Type Counter description', 'bizpage'),
				 
				),
		  	),
	  'dependency' =>  array('enable_fact_area', '==', 'true' ),
		), //end group
	
	array(
	  'id'         =>  'fact_cover_img',
	  'type'       =>  'image',
	  'title'      =>  esc_html__('Fact Cover Image', 'bizpage'),
	  'desc'       =>  esc_html__('Upload Fact Cover Image', 'bizpage'),	
	  'dependency' =>  array('enable_fact_area', '==', 'true' ),
	),

  ), // end: fields
);   // end: Options



//-----------------------------------------
// Our Client Section   
//-----------------------------------------
$options[]=array(
'name'  =>  'global',
'title' =>  esc_html__('Client Logo', 'bizpage'),
'icon'  =>  'fa fa-address-book-o',

//begin field
'fields'=>array(
	
    array(
      'id'         =>  'enable_our_client',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable Our Client?', 'bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to Client Area, select ON.', 'bizpage'),
    ),
  
    array(
      'id'         =>  'our_client_sec_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Our Client Section Title', 'bizpage'),
      'default'    =>  esc_html__('Our Clients', 'bizpage'),
      'desc'       =>  esc_html__('Type our client section title', 'bizpage'),
      'dependency' =>  array('enable_our_client', '==', 'true' ),
    ),

    array(
      'id'         =>  'logos',
      'type'       =>  'gallery',
      'title'      =>  esc_html__('Company logos', 'bizpage'),
      'desc'       =>  esc_html__('Upload client company logos here.', 'bizpage'),
	  'dependency' =>  array('enable_our_client', '==', 'true' ),
    ),
  ),
);


//-----------------------------------------
// Testimonial section  
//-----------------------------------------
$options[]=array(
'name'  =>  'testimonial',
'title' =>  esc_html__('Testimonial', 'bizpage'),
'icon'  =>  'fa fa-text-width',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_testimonial_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable testimonial content?', 'bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to testimonial content area, select ON.', 'bizpage'),
    ),
  
    array(
      'id'         =>  'testimonial_section_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Testimonial Section title', 'bizpage'),
      'default'    =>  esc_html__('Testimonials', 'bizpage'),
      'desc'       =>  esc_html__('Type testimonial section title', 'bizpage'),
      'dependency' =>  array('enable_testimonial_area', '==', 'true' ),
    ),
	
	array(
      'id'              => 'testimonial_option',
      'type'            => 'group',
      'title'           => esc_html__('Testimonial Option', 'bizpage'),
	  'desc'            => esc_html__('Manage Testimonial Option', 'bizpage'),
      'button_title'    => esc_html__('Add New Testimonial', 'bizpage'),
      'accordion_title' => esc_html__('Single Testimonial', 'bizpage'),
      'fields'          => array(

				array(
				  'id'         =>  'testimonial_profile_img',
				  'type'       =>  'image',
				  'title'      =>  esc_html__('Testimonial Profile image', 'bizpage'),
				),

				array(
				  'id'         =>  'testimonial_profile_name',
				  'type'       =>  'text',
				  'title'      =>  esc_html__('Testimonial profile Name', 'bizpage'),
				  'default'    =>  esc_html__('Alex', 'bizpage'),
				  'desc'       =>  esc_html__('Type profile Name', 'bizpage'),
				),

				array(
				  'id'         =>  'testimonial_profile_position',
				  'type'       =>  'text',
				  'title'      =>  esc_html__('Testimonial Profile Position', 'bizpage'),
				  'default'    =>  esc_html__('Web Developer', 'bizpage'),
				  'desc'       =>  esc_html__('Type Profile Position', 'bizpage'),
				),

				array(
				  'id'         =>  'testimonial_feedback',
				  'type'       =>  'textarea',
				  'title'      =>  esc_html__('Buyer Feedback', 'bizpage'),
				  'default'    =>  esc_html__('BizPaze is a Wonderful Company', 'bizpage'),
				  'desc'       =>  esc_html__('Type Feedback', 'bizpage'),
				),
		   ),
	 'dependency' =>  array('enable_testimonial_area', '==', 'true' ),
	   ), //end group
    ), // end: fields
);  // end: Options



//-----------------------------------------
// Contact Us Page section   
//-----------------------------------------

$options[]=array(
'name'  =>  'contact_us',
'title' =>  esc_html__('Contact Page', 'bizpage'),
'icon'  =>  'fa fa-connectdevelop',

//begin field
'fields'=>array(
     array(
      'id'         =>  'enable_contact_us_area',
      'type'       =>  'switcher',
      'title'      =>  esc_html__('Enable contact us page content?', 'bizpage'),
      'default'    =>   true,
      'desc'       =>  esc_html__('If you want to contact us area, select ON.', 'bizpage'),
    ),
  
    array(
      'id'         =>  'contact_us_section_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Contact Area Section title', 'bizpage'),
      'default'    =>  esc_html__('Contact Us', 'bizpage'),
      'desc'       =>  esc_html__('Type contact us section title', 'bizpage'),
      'dependency' =>  array('enable_contact_us_area', '==', 'true' ),
    ),

    array(
      'id'         =>  'contact_us_section_description',
      'type'       =>  'textarea',
      'title'      =>  esc_html__('Contact Us Area Description', 'bizpage'),
      'default'    =>  esc_html__('Write Contact Us Area Description.', 'bizpage'),
      'desc'       =>  esc_html__('Type contact us area description', 'bizpage'),
      'dependency' =>  array('enable_contact_us_area', '==', 'true' ),
    ),

  	array(
      'id'              => 'contact_option',
      'type'            => 'group',
      'title'           => esc_html__('Contact Option', 'bizpage'),
	  'desc'            => esc_html__('Manage Contact Option', 'bizpage'),
      'button_title'    => esc_html__('Add new', 'bizpage'),
      'accordion_title' => esc_html__('Add New Link', 'bizpage'),
      'fields'          => array(
			  array(
				 'id'         => 'contact_icon',
			   'type'         => 'icon',
			  'title'         => esc_html__('Contact Icon', 'bizpage'),
			  ),

			  array(
				'id'         =>  'contact_option_title',
				'type'       =>  'text',
				'title'      =>  esc_html__('Contact Option title', 'bizpage'),
				'default'    =>  esc_html__('Address or phone or email', 'bizpage'),
				'desc'       =>  esc_html__('Type contact option title',  'bizpage'),   
			  ),

			  array(
				'id'         =>  'contact_option_description',
				'type'       =>  'textarea',
				'title'      =>  esc_html__('Contact Option Description', 'bizpage'),
				'default'    =>  esc_html__('A108 Adam Street, NY 535022, USA.', 'bizpage'),
				'desc'       =>  esc_html__('Type contact option description', 'bizpage'),
			  ), 
		  
       ),
	'dependency' =>  array('enable_contact_us_area', '==', 'true' ),
      ),

    ), // end: fields
  );   // end: Options


//-----------------------------------------
// Footer Style               
//----------------------------------------- 
$options[]=array(
'name'  =>  'Bizpage_footer_style',
'title' =>  esc_html__('Footer Style', 'bizpage'),
'icon'  =>  'fa fa-paint-brush',

//begin field
'fields'=>array(

    array(
      'id'              => 'footer_bg',
      'type'            => 'color_picker',
      'title'           => esc_html__('Footer background color', 'bizpage'),
      'default'         => '',
	  'desc'            => esc_html__('if you want to change footer background color, Select this', 'bizpage'),
		
		
	 ),    
	array(
      'id'              => 'footer_heading_color',
      'type'            => 'color_picker',
      'title'           => esc_html__('Footer heading color', 'bizpage'),
      'default'         => '',
	  'desc'            => esc_html__('if you want to change footer heading font color, Select this', 'bizpage'),
	 ),
    array(
      'id'              => 'footer_text_color',
      'type'            => 'color_picker',
      'title'           => esc_html__('Footer text color', 'bizpage'),
      'default'         => '',
	  'desc'            => esc_html__('if you want to change footer text font color, Select this', 'bizpage'),
	 ),
      
    ), // end: fields
); // end: Options


//-----------------------------------------
// Social Option   
//-----------------------------------------
$options[]=array(
'name'  =>  'socials',
'title' =>  esc_html__('Social link', 'bizpage'),
'icon'  =>  'fa fa-link',

//begin field
'fields'=>array(

    array(
      'id'              => 'socials',
      'type'            => 'group',
      'title'           => esc_html__('Social link', 'bizpage'),
      'desc'            => esc_html__('Manage your footer Social Link', 'bizpage'),
      'button_title'    => esc_html__('Add new', 'bizpage'),
      'accordion_title' => esc_html__('Add New Link', 'bizpage'),
      'fields'          => array(
			  array(
				 'id'         => 'icon',
			   'type'         => 'icon',
			  'title'         => esc_html__('icon', 'bizpage'),
			  ),
			  array(
				 'id'         => 'link',
			   'type'         => 'text',
			  'title'         => esc_html__('Link', 'bizpage'), 
			  ),
			  array(
				 'id'         => 'link_target',
			   'type'         => 'select',
			  'title'         => esc_html__('Link target', 'bizpage'),
			  'default'         => '_blank',
			  'options'       => array(
					 '_self'        => 'open in same tab',
					'_blink'        => 'open in new tab',


				  ),
				),
			  ),  
		   ), //end group

    ), // end: fields
); // end: Options


//-----------------------------------------
// Typography         
//-----------------------------------------

$options[]=array(
'name'  =>  'Bizpage_typography_setting',
'title' =>  esc_html__('Typography Setting', 'bizpage'),
'icon'  =>  'fa fa-font',

//begin field
'fields'=>array(

	array(
		  'id'         => 'heading_font',
		  'type'       => 'typography',
		  'title'      => esc_html__('Heading font', 'bizpage'),  
		  'desc'       => esc_html__('if you want to change your heading font, Select One', 'bizpage'),  
		 'default'     =>  array(
				 'family'   => 'Noto Serif',
				 'variant'  => '700',
				 'font'     => 'google', 
				  ),
		),
		array(
      'id'         => 'heading_font_varient',
      'type'       => 'checkbox',
      'title'      => esc_html__('Heading font type', 'bizpage'),  
	 'options'     =>  array(
				 '100'    => '100',
				 '100i'   => '100i',
				 '200'    => '200',
				 '200i'   => '200i',
				 '300'    => '300',
				 '300i'   => '300i',
				 '400'    => '400',
				 '400i'   => '400i',
				 '500'    => '500',
				 '500i'   => '500i',
				 '600'    => '600',
				 '600i'   => '600i',
				 '700'    => '700',
				 '700i'   => '700i',
				 '800'    => '800',
				 '800i'   => '800i',
				 '900'    => '900',
				 '900i'   => '900i',

			  ),
		'default'  => array('400', '400i', '700', '700i')
	 ),
	
	array(
      'id'         => 'body_font',
      'type'       => 'typography',
      'title'      => esc_html__('Body font', 'bizpage'), 
	  'desc'       => esc_html__('if you want to change your body font, Select One', 'bizpage'),  
	 'default'  =>  array(
		 'family'   => 'Roboto',
		 'variant'  => 'regular',
		 'font'     => 'google', 
	      ),
	 ),
	
	array(
      'id'         => 'body_font_varient',
      'type'       => 'checkbox',
      'title'      => esc_html__('Body font type', 'bizpage'),  
	 'options'     =>  array(
				 '100'    => '100',
				 '100i'   => '100i',
				 '200'    => '200',
				 '200i'   => '200i',
				 '300'    => '300',
				 '300i'   => '300i',
				 '400'    => '400',
				 '400i'   => '400i',
				 '500'    => '500',
				 '500i'   => '500i',
				 '600'    => '600',
				 '600i'   => '600i',
				 '700'    => '700',
				 '700i'   => '700i',
				 '800'    => '800',
				 '800i'   => '800i',
				 '900'    => '900',
				 '900i'   => '900i',

			  ),
		'default'  => array('400', '400i', '700', '700i')
	    ),
	
    ), // end: fields
);   // end: Options

//-----------------------------------------
// 404 Page             
//----------------------------------------- 
$options[]=array(
'name'  =>  'bizpage_not_found',
'title' =>  esc_html__('404 Page', 'bizpage'),
'icon'  =>  'fa fa-undo',

//begin field
'fields'=>array(

    array(
      'id'              => 'nf_breadcrump_img',
      'type'            => 'image',
      'title'           => esc_html__('Breadcrump Image', 'bizpage'),
      'desc'            => esc_html__('Upload your 404 breadcrump', 'bizpage'),  
	 ),      
	array(
      'id'              => 'nf_heading',
      'type'            => 'text',
      'title'           => esc_html__('Heading', 'bizpage'),
      'desc'            => esc_html__('404 heading', 'bizpage'),  
   'default'            => esc_html__('Sorry! The Page Not Found', 'bizpage'),  
	 ),  	
	array(
      'id'              => 'nf_description',
      'type'            => 'text',
      'title'           => esc_html__('Description', 'bizpage'),
      'desc'            => esc_html__('404 description', 'bizpage'), 
   'default'            => esc_html__('The page you were looking for could not be found.', 'bizpage'), 
	 ), 	
	array(
      'id'              => 'nf_back_button',
      'type'            => 'text',
      'title'           => esc_html__('Back Button Text', 'bizpage'),
      'desc'            => esc_html__('Write your back button text', 'bizpage'),
   'default'            => esc_html__('Back To Home', 'bizpage'), 
	 ),          
        
    ), // end: fields
); // end: Options



//-----------------------------------------
// Script Setting               
//----------------------------------------- 
$options[]=array(
'name'  =>  'Bizpage_script_setting',
'title' =>  esc_html__('Script Setting', 'bizpage'),
'icon'  =>  'fa fa-code',

//begin field
'fields'=>array(

    array(
      'id'              => 'head_scripts',
      'type'            => 'textarea',
      'title'           => esc_html__('Head Script', 'bizpage'),
      'sanitize'        => false,
      'desc'            => esc_html__('Script goes before closing < / head >', 'bizpage'),  
	 ),    
    array(
      'id'              => 'body_end_scripts',
      'type'            => 'textarea',
      'title'           => esc_html__('Body End Script', 'bizpage'),
      'sanitize'        => false,
      'desc'            => esc_html__('Script goes just before < / body >', 'bizpage'),  
	 ),       
	array(
      'id'              => 'bizpage_custom_css',
      'type'            => 'textarea',
      'title'           => esc_html__('Custom CSS', 'bizpage'),
      'sanitize'        => false,
      'desc'            => esc_html__('Add your custom CSS here', 'bizpage'),  
	 ),    

      
    ), // end: fields
); // end: Options


//-----------------------------------------
// Copyright Option   
//-----------------------------------------
$options[]=array(
'name'  =>  'copyright',
'title' =>  esc_html__('Copyright', 'bizpage'),
'icon'  =>  'fa fa-copyright',

//begin field
'fields'=>array(
  
    array(
      'id'         =>  'copyright_title',
      'type'       =>  'text',
      'title'      =>  esc_html__('Copyright Area Section title', 'bizpage'),
      'default'    =>  esc_html__(' &copy; Copyright <strong>BizPage</strong>. All Rights Reserved', 'bizpage'),
      'desc'       =>  esc_html__('Type copyright section title', 'bizpage'),
    ),

    array(
      'id'         =>  'copyright_description',
      'type'       =>  'textarea',
      'title'      =>  esc_html__('Copyright Description', 'bizpage'),
      'default'    =>  esc_html__('Designed by', 'bizpage'),
      'desc'       =>  esc_html__('Type copyright area description', 'bizpage'),
    ),
	    array(
      'id'         =>  'copyright_link_text',
      'type'       =>  'text',
      'title'      =>  esc_html__('Copyright Link Text', 'bizpage'),
      'default'    =>  esc_html__('sabbirsabat', 'bizpage'),
      'desc'       =>  esc_html__('Type copyright link text', 'bizpage'),
    ),
	
   array(
	  'id'         => 'copyright_link',
    'type'         => 'text',
   'title'         => esc_html__('Link', 'bizpage'), 
  ),
  array(
	  'id'         => 'copyright_link_target',
    'type'         => 'select',
   'title'         => esc_html__('Link target', 'bizpage'),
   'default'       => '_blank',
   'options'       => array(
		 '_self'        => 'open in same tab',
		'_blink'        => 'open in new tab',


	  ),
	),
   ), // end: fields	
); // end: Options


CSFramework::instance( $settings, $options );



