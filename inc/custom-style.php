<?php

// Google fonts enqueue helper
if( ! function_exists( 'bizpage_google_fonts_url' ) ):
/**
*Register Google fonts.
*
*@return string Google fonts URL for the theme.
*/

function bizpage_google_fonts_url(){

    $fonts_url = '';
    $fonts     = array();
	$body_font_varient = cs_get_option('body_font_varient');
	$body_font_varient_processed = implode(',', $body_font_varient);
	$body_subsets   = ':'.$body_font_varient_processed.'';
	
	$heading_font_varient = cs_get_option('heading_font_varient');
	//$heading_font_varient_processed = implode(',', $heading_font_varient);
	$heading_subsets   = ':'.$heading_font_varient_processed.'';
	
	$body_font = cs_get_option('body_font')['family'];
	$body_font .= $body_subsets;
	
	$heading_font = cs_get_option('heading_font')['family'];
	$heading_font .= $heading_subsets;
	
	/* transatator: if there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate your own language*/
	
    if ( 'off' !== esc_html_x( 'on', 'Karla font: on or off', 'textdomain')) {
        $fonts[] = $body_font;
	}

	/* transatator: if there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate your own language*/
    if ( 'off' !== esc_html_x( 'on', 'Lato font: on or off', 'textdomain')) {
        $fonts[] = $heading_font;
	}
	
	if ( $fonts ) {
	    $fonts_url = add_query_arg( array(
		    'family' => urlencode( implode( '|', $fonts ) ),	
		), 'https://fonts.googleapis.com/css' );
	}

    return $fonts_url;
}
endif;

/**
* Enqueue script and style.
*/

function bizpage_prefix_scripts() {
	
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style('bizpage-google-fonts', bizpage_google_fonts_url(), array(), null );
}

add_action('wp_enqueue_scripts', 'bizpage_prefix_scripts');

function bizpage_custom_css() {
    wp_enqueue_style(
     'bizpage-custom-style',
		get_template_directory_uri() . 'lib/css/custom-style.css'
   );
	$body_font = cs_get_option('body_font')['family'];
	$body_font_varient = cs_get_option('body_font')['variant'];
	
	$heading_font = cs_get_option('heading_font')['family'];
	$heading_font_varient = cs_get_option('heading_font')['variant'];
	
	/*Box Layout */
	$enable_boxed_layout = cs_get_option('enable_boxed_layout');
	$body_bg_color = cs_get_option('body_bg_color');
	$body_bg = cs_get_option('body_bg');
	$body_bg_image_array = wp_get_attachment_image_src( $body_bg, 'large', false );
	$body_bg_repeat = cs_get_option('body_bg_repeat');
	$body_bg_attachment = cs_get_option('body_bg_attachment');
		
	/*Footer Style */
	$footer_bg = cs_get_option('footer_bg');
	$footer_heading_color = cs_get_option('footer_heading_color');
	$footer_text_color = cs_get_option('footer_text_color');
	
    /*Theme Color */
	$theme_color = cs_get_option('theme_color');
	$theme_heading_font_color = cs_get_option('theme_heading_font_color');
	$theme_body_font_color = cs_get_option('theme_body_font_color');
	

	$custom_css = '
	    body {font-family: '.esc_html($body_font).';font-weight: '.esc_attr($body_font_varient).'}
		h1, h2, h3, h4, h5, h6 {font-family: '.esc_html($heading_font).'; font-weight: '.esc_attr($heading_font_varient).'}
	';
	
	
	if($enable_boxed_layout == true){
		
		if(!empty($body_bg_color)){
			$custom_css .='
			   body {background-color:'.esc_attr($body_bg_color).'}
			';
		}	
		if(!empty($body_bg)){
			$custom_css .='
			   body {background-image:url('.esc_url($body_bg_image_array[0]).')}
			';
		}	
		if(!empty($body_bg_repeat)){
			$custom_css .='
			   body {background-repeat:'.esc_attr($body_bg_repeat).'}
			';
		}	
		if(!empty($body_bg_attachment)){
			$custom_css .='
			   body {background-attachment:'.esc_attr($body_bg_attachment).'}
			';
		}		
	}
	

	if(!empty($footer_bg)){
		$custom_css .='
		   #footer .footer-top {background-color:'.esc_attr($footer_bg).'}
		';
	}		
	if(!empty($footer_heading_color)){
		$custom_css .='
		 .footer-top h4,#footer .footer-top h4 {color:'.esc_attr($footer_heading_color).'}
		';
	}		
	if(!empty($footer_text_color)){
		$custom_css .='
		 #footer .copyright,#footer .credits,  #footer,.textwidget p,#footer .footer-top .footer-info p,#footer .footer-top .footer-links ul a  {color:'.$footer_text_color.'}
		';
	}	
	
	if(!empty($theme_color)){
		$custom_css .='
		.back-to-top, #intro .btn-get-started, .section-header h3::after, #about .about-col .icon, #call-to-action .cta-btn:hover, #portfolio #portfolio-flters li:hover,
#portfolio #portfolio-flters li.filter-active,.link-preview:hover,
#portfolio .portfolio-item figure .link-details:hover, #clients .owl-dot.active, #testimonials .owl-dot.active, .wpcf7-form-control.wpcf7-submit, .social .fa, #footer .footer-top .social-links a:hover, #footer .footer-top h4::after, #footer .footer-top .footer-newsletter input[type="submit"] {background-color:'.esc_attr($theme_color).'} 
		   
		   
a:hover,
a:active,
a:focus,	   
 #header #logo h1 , #header #logo h1 a:hover, a, .page-breadcrumbd h2, .page-breadcrumbd a, #intro .btn-get-started:hover, .nav-menu li:hover > a,
.nav-menu > .menu-active > a, .nav-menu ul li:hover > a, #mobile-nav ul li a:hover, #mobile-nav ul li.menu-active a, #mobile-nav ul .menu-has-children i.fa-chevron-up, #mobile-nav ul .menu-item-active, #featured-services i, #featured-services h4 a:hover, #about .about-col:hover i, #about .about-col h2 a:hover, #services .icon i, #services .box:hover .title a,#facts .counters span, #portfolio .portfolio-item .portfolio-info h4 a:hover, #team .member .social a:hover, #contact .contact-info i, #contact .contact-info a:hover, #contact .form #sendmessage, #footer .footer-top .footer-links ul a:hover, {color:'.esc_attr($theme_color).'}
		';
	}
	
		if(!empty($theme_heading_font_color)){
		$custom_css .='
		  .page-breadcrumbd h2, .page-breadcrumbd a, .section-header h3, .section-header p,#services .title a,#contact .contact-info h3,#portfolio .portfolio-item .portfolio-info h4 a,#about .about-col h2 a {color:'.esc_attr($theme_heading_font_color).'}
		';
	}		
	if(!empty($theme_body_font_color)){
		$custom_css .='
		  #contact .contact-info address, #contact .contact-info p,#about .about-col p,#facts .counters p {color:'.esc_attr($theme_body_font_color).'}
		';
	}
	
	
	wp_add_inline_style( 'bizpage-custom-style', $custom_css );
}

add_action('wp_enqueue_scripts', 'bizpage_custom_css');
