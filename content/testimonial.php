<?php

$enable_testimonial_area = cs_get_option('enable_testimonial_area');
$testimonial_section_title = cs_get_option('testimonial_section_title');
$testimonial_option = cs_get_option('testimonial_option');


?>

<?php if($enable_testimonial_area == true ) : ?>

    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3><?php echo esc_html($testimonial_section_title); ?></h3>
        </header>
    
        <div class="owl-carousel testimonials-carousel">
			
         <?php if(!empty($testimonial_option)) : foreach($testimonial_option as $testimonial) : ?>
          <div class="testimonial-item">		    
            <img src="<?php echo esc_url(wp_get_attachment_image_src($testimonial['testimonial_profile_img'],'full')[0]); ?>" class="testimonial-img" alt="">	  		  
            <h3><?php echo esc_html($testimonial['testimonial_profile_name']); ?></h3>
            <h4><?php echo esc_html($testimonial['testimonial_profile_position']); ?></h4>
            <p>
              <img src="<?php echo get_template_directory_uri(); ?>../img/quote-sign-left.png" class="quote-sign-left" alt="">
              <?php echo $testimonial['testimonial_feedback']; ?>
              <img src="<?php echo get_template_directory_uri(); ?>../img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div> 
         <?php endforeach; endif; ?>
			
        </div>  
      </div>
    </section><!-- #testimonials -->

<?php endif; ?>
