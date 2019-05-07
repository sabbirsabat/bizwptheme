<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------

$options      = array();


//-----------------------------------------
// Project Meatabox        
//-----------------------------------------

$options[]    = array(
  'id'        => 'bizpage_project_meta',
  'title'     => esc_html__('Project Options', 'bizpage'),
  'post_type' => 'project-items',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'project_meta_section_1',
      'fields' => array(

        array(
          'id'    => 'sub_title',
          'type'  => 'text',
          'title' => esc_html__('Sub title', 'bizpage'),
          'desc'  => esc_html__('Type work sub title/category.', 'bizpage'),
        ),
         array(
          'id'    => 'big_preview',
          'type'  => 'image',
          'title' => esc_html__('Big Preview image', 'bizpage'),
          'desc'  => esc_html__('Upload portfolio big preview image.', 'bizpage'),
        ),
         array(
          'id'    => 'link_text',
          'type'  => 'text',
          'title' => esc_html__('Link text', 'bizpage'),
         'default'=> esc_html__('Visit Website', 'bizpage'),
      
       ),
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => esc_html__('Link', 'bizpage'),
      
       ),

        array(
          'id'    =>'informations',
          'type'  =>'group',
          'title' => esc_html__('Work Information', 'bizpage'),
          'button_title'    => esc_html__('Add New', 'bizpage'),
          'accordion_title' => esc_html__('Add New Information', 'bizpage'),
          
          'fields'=>array(
			  
            array(
            'id'=>'title',
            'type'=>'text',
            'title'=>esc_html__('Information Title', 'bizpage'),
            ),  
            
            array(
            'id'=>'value',
            'type'=>'text',
            'title'=> esc_html__('Information Value', 'bizpage'),
            )
        
          ),
        ),

      ),
    ),

  ),
);




//-----------------------------------------
// About Us Metabox        
//-----------------------------------------

$options[]    = array(
  'id'        => 'bizpage_about_meta',
  'title'     => esc_html__('About Options', 'bizpage'),
  'post_type' => 'about',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
     array(
      'name'   => 'about_meta_section',
      'fields' => array(

			array(
			  'id'         => 'about_icon',
			  'type'       => 'icon',
			  'title'      => esc_html__('About Icon', 'bizpage'),
			  'desc'       => esc_html__('Select About Post Icon', 'bizpage'),
			 ),
			array(
			  'id'         =>  'about_short_desc',
			  'type'       =>  'textarea',
			  'title'      =>  esc_html__('About Post Short Description', 'bizpage'),
			  'default'    =>  esc_html__('Write Short Post Description', 'bizpage'),
			  'desc'       =>  esc_html__('Type About Post Short Description', 'bizpage'),

			),
		
		),

	), //end group

  ), // end: fields
);   // end: Options



//-----------------------------------------
// Services Page section  
//-----------------------------------------


$options[]    = array(
  'id'        => 'bizpage_service_meta',
  'title'     => esc_html__('Sevice Options', 'bizpage'),
  'post_type' => 'service',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'service_meta_section',
      'fields' => array(
	
		array(
		  'id'         => 'service_icon',
		  'type'       => 'icon',
		  'title'      => esc_html__('Service Icon', 'bizpage'),
		 ),

		array(
		  'id'         =>  'service_post_desc',
		  'type'       =>  'textarea',
		  'title'      =>  esc_html__('Service Area Post Short Description', 'bizpage'),
		  'default'    =>  esc_html__('Service Short Post Description', 'bizpage'),
		  'desc'       =>  esc_html__('Type Service Area Post Short Description', 'bizpage'),

		),
      ),

     ), // end group
  ), // end: fields
);   // end: Options



//-----------------------------------------
// Team Metabox            
//-----------------------------------------


$options[]    = array(
  'id'        => 'bizpage_team_meta',
  'title'     => esc_html__('Team Options', 'bizpage'),
  'post_type' => 'team',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'team_meta_section',
      'fields' => array(
	
	    array(
		  'id'         =>  'profile_position',
		  'type'       =>  'text',
		  'title'      =>  esc_html__('Profile Position', 'bizpage'),
		  'default'    =>  esc_html__('Web Developer', 'bizpage'),
		  'desc'       =>  esc_html__('Type Profile Position', 'bizpage'),
		 ),
		array(
		  'id'              => 'team_social',
		  'type'            => 'group', 
		  'title'           => esc_html__('Social Link', 'bizpage'),
		  'button_title'    => esc_html__('Add New Social', 'bizpage'),
		  'accordion_title' => esc_html__('Single Social', 'bizpage'),
		  'fields'          => array(
			  array(
				 'id'         => 'team_social_icon',
			   'type'         => 'icon',
			  'title'         => esc_html__('Social Icon', 'bizpage'),
			  ),
			  array(
				 'id'         => 'team_social_link',
			   'type'         => 'text',
			  'title'         => esc_html__('Social Link', 'bizpage'), 
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
		   ),  
         ),

     ), // end group
  ), // end: fields
);   // end: Options


CSFramework_Metabox::instance( $options );
