<?php

 get_header(); 

   while ( have_posts() ) :the_post(); 
  
   if(get_post_meta( get_the_ID(),'bizpage_about_meta', true)){
   	 $about_meta = get_post_meta(get_the_ID(),'bizpage_about_meta', true );
	}else{
   	 $about_meta = array();
   }

   if (array_key_exists('about_icon', $about_meta)) {
   	$about_icon = $about_meta['about_icon'];
   }else{
   	$about_icon = '';
   }
   if (array_key_exists('about_short_desc', $about_meta)) {
   	$about_short_desc = $about_meta['about_short_desc'];
   }else{
   	$about_short_desc = '';
   }

?>


   <!-----------------------------
     Breadcrumb Section
   ------------------------------->
    <section <?php if(has_post_thumbnail()): ?> style="background-image: url(<?php echo esc_url(the_post_thumbnail_url('large')) ; ?>);"<?php endif; ?> class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb content -->
            <div class="page-breadcrumbd text-center">
              <h2><?php esc_html_e('About Details','bizpage') ?></h2>
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
				<div class="col-md-12">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">
						<?php the_post_thumbnail('large'); ?>
					</div>


					<!-- single portfolio info -->

						<header class="single-portfolio-title">
							<div class="icon"><i class="<?php echo esc_attr($about_icon); ?>"></i></div>
							<h2><?php the_title(); ?></h2>
						</header>
						<div class="portfolio-details-panel">
						
							<p><?php the_content(); ?></p>
							<h4><?php echo esc_html($about_short_desc); ?></h4>
						</div>	
				  </div> 
			  </div>
		 </div>
	</section>
<br>
<br>

	<?php endwhile; ?>

<?php get_footer(); ?>