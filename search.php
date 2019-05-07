<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
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
              <h2><?php _e( 'Search results for:', 'bizpage' ); ?></h2>
				<h2><?php echo get_search_query(); ?></h2>
              <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','bizpage') ?></a>/ <?php the_title(); ?></p>
            </div><!-- end breadcrumb content -->
          </div>
        </div>
      </div>
    </section><!-- end breadcrumb -->



	<section id="about">
		<div class="container">

		   <?php if ( have_posts() ) : ?>
			
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/page/content', 'excerpt' );

				// End the loop.
			endwhile; ?>
			
             <!---- Previous/next page navigation.--->
			<div class="blog_pagination">
					<nav>
						<ul class="pagination">
							<?php
								the_posts_pagination(array(
									'mid_size' => 3,
									'prev_text' => __('<i class="fa fa-chevron-left"></i>', 'bizpage') ,
									'next_text' => __('<i class="fa fa-chevron-right"></i>', 'barrister') ,
								));
							?>

						</ul>
					</nav>
                 </div>

		
        <?php
			// If no content, include the "No posts found" template.
		else :
			get_template_part('template-parts/page/content', 'none'); 

		endif;
		?>
	</div>
	</section><!-- #primary -->

<?php
get_footer();
