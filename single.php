<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$blog_breadcrump_image = cs_get_option('blog_breadcrump_image');
$blog_social = cs_get_option('blog_social');
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
              <h2><?php esc_html_e('Single Blog','bizpage') ?></h2>
              <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','bizpage') ?></a>/<?php esc_html_e('Blog','bizpage') ?> / <?php the_title(); ?></p>
            </div><!-- end breadcrumb content -->
          </div>
        </div>
      </div>
    </section><!-- end breadcrumb -->


<?php while ( have_posts() ) :the_post(); ?>
	<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- post wrapper -->
				<div class="post-wrapper clearfix">
					<!-- post thumbnail -->
					<div class="single-thumb">
						<?php the_post_thumbnail('large'); ?>
					</div>

					<!-- start single blog content -->
					<div class="blog-content">
						<!-- start single blog header -->
						<header class="single-header">
							<div class="single-post-title">
								<h2><?php the_title(); ?></h2>
							</div>
							<!-- post meta -->
							<div class="post-meta">
								<ul>
									<?php
									 $display_post_by = cs_get_option('display_post_by');
                                     if($display_post_by == true ) : ?>
									<li>
										<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));?>">
											<i class="fa fa-user"></i>
											<?php the_author();?>
										</a>
									</li>
									<?php endif; ?>
									
									
									<?php
									 $display_post_tag = cs_get_option('display_post_tag');
                                     if($display_post_tag == true ) : ?>
									<li>
										<a href="#">
											<i class="fa fa-tag"></i>
											 <?php the_tags('','',); ?>
										</a>
									</li>
									<?php endif; ?>
									
									<?php
									 $display_post_date = cs_get_option('display_post_date');
                                     if($display_post_date == true ) : ?>
									<li>
										<a href="#">
											<i class="fa fa-calendar"></i>
											<?php echo get_the_date('j F Y');?>
										</a>
									</li>
									<?php endif; ?>
									
									<?php
									 $display_post_category = cs_get_option('display_post_category');
                                     if($display_post_category == true ) : ?>
									<li>
										<a href="#">
											<i class="fa fa-calendar"></i>
											<?php echo get_the_category_list(); ?>
										</a>
									</li>
									<?php endif; ?>
									
									
									<?php
									 $display_post_comment_count = cs_get_option('display_post_comment_count');
                                     if($display_post_comment_count == true ) : ?>
									<li>
										<a href="#">
											<i class="fa fa-comment"></i>
											<?php echo get_comments_number();?>
										</a>
									</li>
									<?php endif; ?>

								</ul>
							</div>
						</header><!-- /.end single blog header -->

						<!-- start single blog entry content -->
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- /.end single blog entry content -->

						<!-- start social link -->
						<div class="social-link">
							<ul>
							 <?php if(!empty($blog_social)) : foreach($blog_social as $bsocial) : ?>	
								<li><a class="facebook" href="#">
									<i class="<?php echo esc_attr($bsocial['social_shr_icon']); ?>"></i>
									<span><?php echo esc_html($bsocial['share_value']); ?></span>
								</a></li>
							 <?php endforeach; endif; ?>

							</ul>
						</div><!-- /.end social link -->
						
                        <div class="content_blog_a fix">
							<div class="e_blog_A">
								 <?php echo get_avatar(get_the_author_meta('ID'),100); ?>
 
							</div>
							<div class="blog_a_text">
							
								<h5><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));?>" class="admin"><?php the_author();?></a></h5>
								
								<p><?php the_author_meta('description'); ?></p>
							</div>
						</div>

					</div><!-- /.end single blog content -->

					<?php
					if ( comments_open() || get_comments_number() ) :?>


					<!-- start comments wrapper -->
					<div class="comments-wrapper">
						<?php comments_template(); ?>


					</div><!-- /.end comments wrapper -->
				   <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section><!-- ./end single-blog section -->

<?php endwhile; ?>

<?php
get_footer();
