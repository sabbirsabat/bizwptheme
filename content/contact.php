<?php

$enable_contact_us_area = cs_get_option('enable_contact_us_area');
$contact_us_section_title = cs_get_option('contact_us_section_title');
$contact_us_section_description = cs_get_option('contact_us_section_description');
$contact_option = cs_get_option('contact_option');



?>
<?php if($enable_contact_us_area == true ) : ?>

<section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        
        <div class="section-header">
          <h3><?php echo esc_html($contact_us_section_title); ?></h3>
          <p><?php echo esc_html($contact_us_section_description); ?></p>
        </div>
		

        <div class="row contact-info">
			
		<?php if(!empty($contact_option)): foreach($contact_option as $contact): ?>
          <div class="col-md-4">
            <div class="contact-address">
              <i class="<?php echo esc_attr($contact['contact_icon']); ?>"></i>
              <h3><?php echo esc_html($contact['contact_option_title']); ?></h3>
				<address><?php echo esc_html($contact['contact_option_description']); ?></address> 
            </div>
          </div>
           <?php endforeach; endif; ?>
			
        </div>
             <!--- Contact Form 7 Shortcode --->
          <?php echo do_shortcode('[contact-form-7 id="60" title="Bizpage Contact"]');?>
      </div>
    </section><!-- #contact -->

<?php endif; ?>