<?php get_header(); ?>



   <!-----------------------------
     Breadcrumb Section
   ------------------------------->
    <section <?php if(has_post_thumbnail()): ?> style="background-image: url(<?php echo esc_url(the_post_thumbnail_url('large')) ; ?>);"<?php endif; ?> class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb content -->
            <div class="page-breadcrumbd text-center">
              <h2><?php the_title(); ?></h2>
              <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','bizpage') ?></a>/ <?php the_title(); ?></p>
            </div><!-- end breadcrumb content -->
          </div>
        </div>
      </div>
    </section><!-- end breadcrumb -->
	

   <!-----------------------------
     Breadcrumb Section
   ------------------------------->
		<section class="block section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
					<?php 
						while ( have_posts() ) : the_post();

						get_template_part('template-parts/page/content','page');

							if ( comments_open() || get_comments_number() ) :
											comments_template();
							endif;

						endwhile;
					?>
						
					</div>					
				</div>
			</div>
		</section><!-- block area end -->
	

<?php get_footer(); ?>