<?php
/**
*The header for our theme
*This is template that displayed all of the <head> section and everything up until <div id="content">
*
*@link https://developer.wordpress.org/theme/basics/template-files/#template-partials
*
*@package BizPage
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
	
  <title>BizPage</title>
	<?php 
	$enable_preloder = cs_get_option('enable_preloder');
	$enable_boxed_layout = cs_get_option('enable_boxed_layout');
  //  $enable_image_logo = cs_get_option('enable_image_logo');
  //  $image_logo = cs_get_option('image_logo');
  //  $text_logo = cs_get_option('text_logo');
	wp_head(); ?>
</head>

<body>
  <div id="page" class="site<?php if($enable_boxed_layout == true) :?> bizpage-boxed-layout<?php endif; ?>">
	
	<?php if($enable_preloder == true) : ?>
	<!---Preloader--->
	<?php endif; ?>
	  
<main id="main">
  <!----------------------------
    Header
  ------------------------------>
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1>
		<?php if ( has_custom_logo() ) : ?>
		<div class="scrollto"><?php the_custom_logo(); ?></div>
			<?php endif; ?>
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="scrollto"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="scrollto"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
			<?php endif; ?>
				  </h1>

			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) :
				?>
					<p class="site-description">
						<?php echo $description; ?>
					</p>
			<?php endif; ?>  
		  
      </div>

      <nav id="nav-menu-container">
		  <?php  
		  /**
			* Display a navigation menu
			* @param array $args Arguments
			*/
			$args = array(
				'theme_location' => 'menu-1',
				'menu_class'     => 'nav-menu navbar-right',
			);
				wp_nav_menu( $args );
		?>        
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->