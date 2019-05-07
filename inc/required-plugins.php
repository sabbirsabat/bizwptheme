<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'bizpage_register_required_plugins' );


function bizpage_register_required_plugins() {
	
	$plugins = array(
		array(
			'name'      => esc_html__('Contact form 7'),
			'slug'      => 'contact-form-7',
			'required'  => true,
		),		
		
		array(
			'name'      => esc_html__('Breadcrumb NavXT'),
			'slug'      => 'breadcrumb-navxt',
			'required'  => true,
		),	

	);

	$config = array(
		'id'           => 'bizpage',               
		'default_path' => '',                     
		'menu'         => 'bizpage-install-plugins', 
		'has_notices'  => true,                   
		'dismissable'  => true,                   
		'dismiss_msg'  => '',                   
		'is_automatic' => false,                
		'message'      => '',                  


	);

	tgmpa( $plugins, $config );
}
