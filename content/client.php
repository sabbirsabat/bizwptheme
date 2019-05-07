<?php

$enable_our_client = cs_get_option('enable_our_client');
$our_client_sec_title = cs_get_option('our_client_sec_title');
$logos = cs_get_option('logos');
$logos_array = explode(',', $logos);

?>

<?php if($enable_our_client == true ) : ?>

    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <header class="section-header">		
          <h3><?php echo esc_html($our_client_sec_title); ?></h3>
        </header>
        <div class="owl-carousel clients-carousel">	
		<?php foreach ($logos_array as $logo) : $logo_array = wp_get_attachment_image_src($logo, 'medium'); ?> 		
         <img src="<?php echo esc_url($logo_array[0]); ?>"alt="client logo" />
	    <?php endforeach; ?>	
        </div>
      </div>
    </section><!-- #clients -->
<?php endif; ?>



