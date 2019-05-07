<?php 
/**
 * Template part for displaying a message that posts cannot be found
 *
 */
$nf_breadcrump_img = cs_get_option('nf_breadcrump_img');
$nf_heading = cs_get_option('nf_heading');
$nf_description = cs_get_option('nf_description');
$nf_back_button = cs_get_option('nf_back_button');

get_header(); ?>


  <!------------------------------
     Breadcrumb Section
    ------------------------------>
   <section style="background-image: url(<?php echo esc_url(wp_get_attachment_image_src($nf_breadcrump_img,'full')[0]); ?>);" class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb content -->
            <div class="page-breadcrumbd text-center">
              <h2>404</h2>
              <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a>/ 404 NOT FOUND </p>
            </div><!-- end breadcrumb content -->
          </div>
        </div>
      </div>
    </section><!-- end breadcrumb -->


    <div class="page_area_404">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content404 text-center">
                        <h2>4<i class="fa fa-frown-o"></i>4</h2>
                        <h3><?php echo $nf_heading; ?></h3>
						<em><?php echo $nf_description; ?></em>
                        <div class="send_me_ph">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="submit_btn_quick_contact"><?php echo $nf_back_button; ?></a>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page_area_404 -->

  <?php get_footer(); ?>