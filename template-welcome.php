<?php 
/*
Template Name: Homepage Template
*/

get_header();  
?>

 <!--------------------------
   Slider
 ---------------------------->

  <section>

	<?php
	global $post;
	$args = array('posts_per_page' => -1,'post_type'=> 'slide','orderby'=>'menu_order','order'=> 'ASC' );
	$mypost = get_posts( $args );
	foreach ( $mypost as $post ) : setup_postdata($post); ?>

			<?php the_content(); ?>

	<?php endforeach; wp_reset_query(); ?>
  
  </section><!-- #intro -->

<!---------------------------
Home Page Setup Content
----------------------------->	 

  <?php get_template_part('content/featured-service'); ?> 
  <?php get_template_part('content/about'); ?> 
  <?php get_template_part('content/services'); ?> 
  <?php get_template_part('content/call-to-action'); ?> 
  <?php get_template_part('content/skill'); ?> 
  <?php get_template_part('content/facts'); ?> 
  <?php get_template_part('content/portfolio'); ?> 
  <?php get_template_part('content/testimonial'); ?>
  <?php get_template_part('content/team'); ?>
  <?php get_template_part('content/contact'); ?> 
  <?php get_template_part('content/client'); ?> 
 
 <?php get_footer(); ?>