<?php 
/*
Template Name: AboutUs Template
*/

get_header(); ?>


  <!------------------------------
     Breadcrumb Section
    ------------------------------>
    <section <?php if(has_post_thumbnail()): ?> style="background-image: url(<?php echo esc_url(the_post_thumbnail_url('large')) ; ?>);"<?php endif; ?> class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb content -->
            <div class="page-breadcrumbd text-center">
              <h2><?php the_title(); ?></h2>
              <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a>/ <?php the_title(); ?></p>
            </div><!-- end breadcrumb content -->
          </div>
        </div>
      </div>
    </section><!-- end breadcrumb -->


 <!----------------------------
   Page  Content
 ------------------------------>

  <?php get_template_part('content/about'); ?> 
  <?php get_template_part('content/skill'); ?> 
  <?php get_template_part('content/facts'); ?> 
  <?php get_template_part('content/team'); ?>
	  
	  
<?php get_footer(); ?>