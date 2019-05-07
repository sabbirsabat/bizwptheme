
<?php

$enable_portfolio_area = cs_get_option('enable_portfolio_area');
$portfolio_section_title = cs_get_option('portfolio_section_title');

?>
<?php if($enable_portfolio_area == true ) : ?>

    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title"><?php echo esc_html($portfolio_section_title); ?></h3>
        </header>
		 
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              
			<?php	
				$cat_list = get_terms('project-cat');
				foreach($cat_list as $cat) :  
			?>
				 <li data-filter=".<?php echo $cat->slug;?>"><?php echo $cat->name; ?></li>
				<?php endforeach; ?>
				
            </ul> 
          </div>
        </div>    
		  
		   

        <div class="row portfolio-container">
			
		<?php 
		   $project = new WP_Query(array(
		       'post_type'     =>  'project-items',
			   'post_per_page' => -1
		   
		   ));
			
		?>
			
			<?php while($project->have_posts()) : $project->the_post(); ?>
				<?php	  
			  $cat_slug = get_the_terms(get_the_ID(), 'project-cat');
			   
			 ?>
			
			
          <div class="col-lg-4 col-md-6 portfolio-item <?php	  
			  $cat_slug = get_the_terms(get_the_ID(), 'project-cat');
			   
			foreach($cat_slug as $cat_sl){
		  	    echo $cat_sl->slug;
			} ?> wow fadeInUp ">
			  
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ; ?>" class="img-fluid" alt="">
                <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ; ?>" data-lightbox="portfolio" data-title="<?php echo get_the_title(); ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="<?php echo get_permalink(); ?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> 
              </figure>

              <div class="portfolio-info">
                <h4><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
			
				<?php echo $cat_sl->slug; ?>
		
			
              </div>    <!-- portfolio-info -->
							
            </div>  <!-- portfolio-wrap -->
          </div>    <!-- col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp -->
			
		
				<div class="blog_pagination">
						<nav>
							<ul class="pagination">
								<?php
									the_posts_pagination(array(
										'mid_size' => 3,
										'prev_text' => __('<i class="fa fa-chevron-left"></i>', 'bizpage') ,
										'next_text' => __('<i class="fa fa-chevron-right"></i>', 'bizpage') ,
									));
								?>

							</ul>
						</nav>
					 </div>
 	    
			
			
			<?php  endwhile; wp_reset_query(); ?>
        </div>   <!-- row portfolio-container -->
      </div>
    </section><!-- #portfolio -->

 <?php endif; ?>








