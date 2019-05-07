<?php

$enable_featured_service_area = cs_get_option('enable_featured_service_area');
$featured_service_option = cs_get_option('featured_service_option');


?>

<?php if($enable_featured_service_area == true ) : ?>


<section id="featured-services">
      <div class="container">
        <div class="row">
			 <?php if(!empty($featured_service_option)) : foreach($featured_service_option as $featured_service) : ?>

          <div class="col-lg-4 box">
			 
            <i class="<?php echo esc_html($featured_service['featured_icon']); ?>"></i>
            <h4 class="title"><a href="<?php echo esc_url($featured_service['link']); ?>" target="<?php echo esc_attr($featured_service['link_target']); ?>"><?php echo esc_html($featured_service['featured_title']); ?></a></h4>
            <p class="description"><?php echo esc_html($featured_service['featured_description']); ?></p>
			 
          </div>
			 <?php endforeach; endif; ?>

        </div>
      </div>
    </section><!-- #featured-services -->
<?php endif; ?>