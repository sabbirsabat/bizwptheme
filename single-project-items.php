<?php

 get_header();

   while ( have_posts() ) :the_post(); 
  

   if(get_post_meta( get_the_ID(),'bizpage_project_meta', true)){
   	 $project_meta = get_post_meta( get_the_ID(),'bizpage_project_meta', true );
   }else{
   	 $project_meta = array();
   }

   if (array_key_exists('sub_title', $project_meta)) {
   	$sub_title = esc_html($project_meta['sub_title']);
   }else{
   	$sub_title = '';
   }
   if (array_key_exists('big_preview', $project_meta)) {
   	$big_preview = esc_attr($project_meta['big_preview']);
   }else{
   	$big_preview = '';
   }
   if (array_key_exists('link_text', $project_meta)) {
   	$link_text = esc_html($project_meta['link_text']);
   }else{
   	$link_text = 'Visit Website';
   }
   if (array_key_exists('link', $project_meta)) {
   	$link = esc_url($project_meta['link']);
   }else{
   	$link = '';
   }
   if (array_key_exists('informations', $project_meta)) {
   	$informations = $project_meta['informations'];
   }else{
   	$informations = '';
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
              <h2><?php esc_html_e('Project Details','bizpage') ?></h2>
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
				<div class="col-md-6">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">
						<?php
							$big_portfolio_img = wp_get_attachment_image_src($big_preview, 'large');
						?>
						<?php if(!empty($big_preview)) : ?>
						<img class="img-responsive" src="<?php echo $big_portfolio_img[0]; ?>" alt="">
						<?php else: ?>
						<?php the_post_thumbnail('large'); ?>
						<?php endif; ?>	
					</div>
				</div>
				<div class="col-md-6">
					<!-- single portfolio info -->
					<div class="single-portfolio-inner">
						<header class="single-portfolio-title">
							<?php echo $sub_title; ?>
						</header>
						<div class="portfolio-details-panel">
							<h2><?php the_title(); ?></h2>
							<h4><?php echo $category->name; ?></h4>
							<?php the_content(); ?>

							<ul class="portfolio-meta">
								<?php if(!empty($informations)) : foreach ($informations as $information) : ?>
								<li><span><?php echo $information['title']; ?> </span> <?php echo $information['value']; ?></li>
								<?php endforeach; endif; ?>

								<li><span> Share </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<?php if(!empty($link)): ?>
						<a class="btn btn-primary" href="<?php echo $link; ?>"><?php echo $link_text; ?></a>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	  
      <br>
      <br>

	<?php endwhile; ?>

<?php get_footer(); ?>