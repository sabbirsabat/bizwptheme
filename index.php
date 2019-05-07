<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$blog_breadcrump_image = cs_get_option('blog_breadcrump_image');

get_header();
?>

  <!------------------------------
     Breadcrumb Section
    ------------------------------>
    <section style="background-image: url(<?php echo esc_url(wp_get_attachment_image_src($blog_breadcrump_image,'full')[0]); ?>);" class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb content -->
            <div class="page-breadcrumbd text-center">
              <h2><?php esc_html_e('Blog','bizpage') ?></h2>
              <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','bizpage') ?></a>/ <?php esc_html_e('Blog','bizpage') ?> </p>
            </div><!-- end breadcrumb content -->
          </div>
        </div>
      </div>
    </section><!-- end breadcrumb -->


	<section class="blog section-padding">
		<div class="container">	
			<div class="row">

				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- single blog item -->
					<div class="col-sm-4 col-md-4">
						<div class="blog-item">
							<!-- blog thumbnail -->
							<div class="blog-thumb">
								<?php the_post_thumbnail('bizpage-blog-thumb'); ?>
							</div>
							<div class="blog-content">
								<!-- blog title -->
								<header class="blog-header"> 
									<div class="tag">
										
									</div>
									<div class="blog-title">
										<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</div>
								</header>
								
								<!-- blog content -->
								<div class="entry-content">
									
									<?php echo wp_trim_words(get_the_excerpt(),50); ?>
									<br>
									<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More..','bizpage') ?></a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile;?>
				
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
				
 	            <?php else: ?>
				<div class="col-md-12">
					<h2><?php get_template_part('template-parts/page/content', 'none'); ?></h2>
				</div>			
				<?php endif; wp_reset_postdata(); ?>	
				
			</div>
			
			<?php if(is_active_sidebar('sidebar-1')): ?>
			<div class="col-lg-3 col-md-6">
             <?php dynamic_sidebar( 'sidebar-1' ); ?>
           </div>
			<?php endif; ?>
			
		</div>
	</section>
<?php
get_footer();
