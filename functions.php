<?php

/**
 * Enqueue styles and scripts.
 */
function bizpage_cs_js() {
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), '1.0', 'all' );
	
	wp_enqueue_style( 'bizpage-style', get_stylesheet_uri());


	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'superfish-hoverIntent', get_template_directory_uri() . '/lib/superfish/hoverIntent.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'superfish-superfish', get_template_directory_uri() . '/lib/superfish/superfish.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'touchSwipe', get_template_directory_uri() . '/lib/touchSwipe/jquery.touchSwipe.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
	
	
	$head_scripts = cs_get_option('head_scripts');
	$body_end_scripts = cs_get_option('body_end_scripts');
	$bizpage_custom_css = cs_get_option('bizpage_custom_css');
	
	wp_add_inline_script('bizpage-active', $body_end_scripts);
	wp_add_inline_script('jquery-migrate', $head_scripts);
	wp_add_inline_style('bizpage-style', $bizpage_custom_css);
	
	
}
add_action( 'wp_enqueue_scripts', 'bizpage_cs_js' );



//Theme Support
function bizpage_theme_supports(){

	// loading theme textdomain
	load_theme_textdomain( 'bizpage-sabat', get_template_directory() . '/languages' );
	
	// Generate automated feed links on head 
	add_theme_support( 'automatic-feed-links' ); 

    //Adding support for ahtomatic title tag
	add_theme_support( 'title-tag' );

	//Enabling post-thumbnail support
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'bizpage-blog-thumb', 740, 520, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'bizpage-sabat' ),
	) );


	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	//Custom logo support
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

}

add_action( 'after_setup_theme', 'bizpage_theme_supports' );

add_filter('widget_text', 'do_shortcode');


//Registering Custom Post

add_action( 'init', 'bizpage_theme_custom_post' );
function bizpage_theme_custom_post(){
	register_post_type( 'slide',
		array(
			'labels' => array(
				'name' => __( 'Slider' ),
				'singular_name' => __( 'Slide' )
			),
			'menu_icon' => 'dashicons-slides',
			'supports' => array('title', 'editor',),
			'public' => true
		
		)
	);
	register_post_type( 'about',
		array(
			'labels' => array(
				'name' => __( 'About Us' ),
				'singular_name' => __( 'About' )
			),
			'supports' => array('title', 'editor','excerpt','thumbnail', 'page-attributes','sort_order'=>'asc'),
			'menu_icon' => 'dashicons-smiley',
			'public' => true
		)
	);
	register_post_type( 'service',
		array(
			'labels' => array(
				'name' => __( 'Services' ),
				'singular_name' => __( 'Service' )
			),
			'supports' => array('title', 'editor','excerpt', 'thumbnail','page-attributes','sort_order'=>'asc'),
			'menu_icon' => 'dashicons-admin-generic',
			'public' => true
		)
	);
	register_post_type( 'team',
		array(
			'labels' => array(
				'name' => __( 'Our Team' ),
				'singular_name' => __( 'Team' )
			),
			'supports' => array('title', 'editor','excerpt', 'thumbnail','page-attributes','sort_order'=>'asc'),
			'menu_icon' => 'dashicons-groups',
			'public' => true
		)
	);
	
	register_post_type( 'project-items',
		array(
			'labels' => array(
				'name' => __( 'Project' ),
				'singular_name' => __( 'Project' ),
				'add_new_item' => __( 'Add New Project Item' )
			),
			'supports' => array('title', 'editor','excerpt', 'thumbnail','page-attributes'),
			'menu_icon' => 'dashicons-screenoptions',
			'has_archive' => true,
			'rewrite' => array('slug' => 'project-item'),     
			'public' => true 
		)
	);
	
}


function bizpage_theme_custom_taxonomy(){
	register_taxonomy( 
		'project-cat',
		'project-items',
		array(
			'hierarchical'       => true, 
			'lable'              => 'Project Category', 
			'query_var'          => true, 
			'show_admin_column'  => true, 
			'rewrite'            => array(
					'slug'       => 'project-category',
					'with_front' => true
	          	)
			)
	);
}
add_action( 'init', 'bizpage_theme_custom_taxonomy' );



// Register widget area.

function bizpage_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'bizpage' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer one widgets here.', 'bizpage' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer two', 'bizpage' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer two widgets here.', 'bizpage' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-links">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer three', 'bizpage' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add footer three widgets here.', 'bizpage' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-contact">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer four', 'bizpage' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add footer four widgets here.', 'bizpage' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-newsletter">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(
	array(
		'name'          => esc_html__( 'Sidebar', 'bizpage' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'bizpage' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'bizpage_widgets_init' );



//Include cs-framework
require get_template_directory().'/inc/cs-framework/cs-framework.php';
require get_template_directory().'/inc/custom-style.php';
require get_template_directory().'/inc/required-plugins.php';



//Short Code // Not use this theme its example
function thumbpost_list_shortcode($atts){
	extract(shortcode_atts(array(
		'count' => 3,
	),$atts) );

	$q = new WP_Query(
		array('post_per_page' => $count, 'post_type' => 'post')
	);

	$list = '<ul>';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
		$list .= '
		<li>
			'.get_the_post_thumbnail($idd, 'thumbnail').'
			<p><a href="'.get_permalink().'">'.get_the_title().'</a></P>
			<span>'.get_the_date('d F Y', $idd).'</span>
		</li>

		';

		endwhile;
		$list.= '</ul>';
		wp_reset_query();
		return $list;
}
add_shortcode('thumb_posts', 'thumbpost_list_shortcode');









