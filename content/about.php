<?php
$enable_about_us_area = cs_get_option('enable_about_us_area');
$about_section_title = cs_get_option('about_section_title');
$about_section_description = cs_get_option('about_section_description');

?>

<?php if($enable_about_us_area == true ) : ?>

    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3><?php echo esc_html($about_section_title); ?></h3>
          <p><?php echo esc_html($about_section_description); ?></p>
        </header>
		  

        <div class="row about-cols">
	
	    <?php 	
		global $post;
		$args = array('posts_per_page' => -1,'post_type'=> 'about', 'orderby'=>'menu_order' );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata($post);	
			
		  

		   if(get_post_meta( get_the_ID(),'bizpage_about_meta', true)){
			 $about_meta = get_post_meta(get_the_ID(),'bizpage_about_meta', true );
			}else{
			 $about_meta = array();
		   }

		   if (array_key_exists('about_icon', $about_meta)) {
			$about_icon = esc_attr($about_meta['about_icon']);
		   }else{
			$about_icon = 'fa fa-user';
		   }
		   if (array_key_exists('about_short_desc', $about_meta)) {
			$about_short_desc = esc_attr($about_meta['about_short_desc']);
		   }else{
			$about_short_desc = '';
		   }
	    ?>
			
			
			

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img class="img-fluid" src="<?php echo esc_url(the_post_thumbnail_url('large')) ; ?>">
                <div class="icon"><i class="<?php echo esc_attr($about_icon); ?>"></i></div>
              </div>	
              <h2 class="title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a></h2>
				<p><?php echo esc_html($about_short_desc); ?></p>
			<!---	<p><//?php the_excerpt(); ?></p> --->
            </div>
          </div>

     <?php endforeach; wp_reset_query(); ?>
			
        </div>

      </div>
    </section><!-- #about -->

<?php endif; ?>
