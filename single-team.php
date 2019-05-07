<?php

 $team_breadcrump_img = cs_get_option('team_breadcrump_img');
 get_header(); 

   while ( have_posts() ) :the_post(); 
  
   if(get_post_meta( get_the_ID(),'bizpage_team_meta', true)){
   	 $team_meta = get_post_meta(get_the_ID(),'bizpage_team_meta', true );
	}else{
   	 $team_meta = array();
   }

   if (array_key_exists('profile_position', $team_meta)) {
   	$profile_position = esc_html($team_meta['profile_position']);
   }else{
   	$profile_position = '';
   }

   if (array_key_exists('team_social', $team_meta)) {
   	$team_social = $team_meta['team_social'];
   }else{
   	$team_social = '';
   }

?>


   <!------------------------------
     Breadcrumb Section
   -------------------------------->
    <section style="background-image: url(<?php echo esc_url(wp_get_attachment_image_src($team_breadcrump_img,'full')[0]); ?>);" class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb content -->
            <div class="page-breadcrumbd text-center">
              <h2><?php esc_html_e('Team Details','bizpage') ?></h2>
              <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','bizpage') ?></a>/ <?php the_title(); ?></p>
            </div><!-- end breadcrumb content -->
          </div>
        </div>
      </div>
    </section><!-- end breadcrumb -->

<br>
<br>
	<section class="single-portfolio-wrapper">
		<div class="container">
			<div class="row">
				
					<!-- single portfolio images -->
					<div class="col-md-6">
					<div class="single-portfolio-images">
						<?php the_post_thumbnail('large'); ?>
					</div>
					</div>

                      <div class="col-md-6">
						<header class="single-portfolio-title">
							
					    	<div class="social-links a">
							 <?php if(!empty($team_social)) : foreach ($team_social as $social) : ?>  
							<a href="<?php echo esc_url($social['team_social_link']); ?>"><i class="<?php echo esc_attr($social['team_social_icon']); ?>"></i></a>
							 <?php endforeach; endif; ?>
                           </div>
							
							<h2><?php the_title(); ?></h2>
							<h6><?php echo esc_html($profile_position); ?></h6>
						</header>
						<div class="portfolio-details-panel">
						
							<p><?php the_content(); ?></p>
							
						</div>	
					</div>
				 
			  </div>
		 </div>
	</section>
<br>
<br>

<?php endwhile; ?>

<?php get_footer(); ?>