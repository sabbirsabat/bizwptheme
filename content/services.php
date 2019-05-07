<?php

$enable_service_area = cs_get_option('enable_about_us_area');
$service_section_title = cs_get_option('service_section_title');
$service_section_description = cs_get_option('service_section_description');

?>

<?php if($enable_service_area == true ) : ?>




    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3><?php echo esc_html($service_section_title); ?></h3>
          <p><?php echo esc_html($service_section_description); ?></p>
        </header>

        <div class="row">
        
		<?php 	
		global $post;
		$args = array('posts_per_page' => -1,'orderby'=>'menu_order', 'post_type'=> 'service' );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata($post);	
			
			
		if(get_post_meta( get_the_ID(),'bizpage_service_meta', true)){
		$service_meta = get_post_meta(get_the_ID(),'bizpage_service_meta', true );
		}else{
		$service_meta = array();
		}

		   if (array_key_exists('service_icon', $service_meta)) {
			$service_icon = esc_attr($service_meta['service_icon']);
		   }else{
			$service_icon = 'fa fa-user';
		   }
		   if (array_key_exists('service_post_desc', $service_meta)) {
			$service_post_desc = esc_html($service_meta['service_post_desc']);
		   }else{
			$service_post_desc = '';
		   }
	    ?>	
			
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="<?php echo esc_attr($service_icon); ?>"></i></div>
            <h4 class="title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a></h4>
            <p class="description"><?php echo esc_html($service_post_desc); ?></p>
          </div>
			
        <?php endforeach; wp_reset_query(); ?>

        </div>

      </div>
    </section><!-- #services -->
<?php endif; ?>