<?php

$enable_fact_area = cs_get_option('enable_fact_area');
$fact_title = cs_get_option('fact_title');
$fact_area_description = cs_get_option('fact_area_description');
$fact_option = cs_get_option('fact_option');
$fact_cover_img = cs_get_option('fact_cover_img');

?>
<?php if($enable_fact_area == true ) : ?>

    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3><?php echo esc_html($fact_title); ?></h3>
          <p><?php echo esc_html($fact_area_description); ?></p>
        </header>

        <div class="row counters">
	
     <?php if(!empty($fact_option)) : foreach($fact_option as $fact) : ?>
  			<div class="col-lg-3 col-6 text-center">
				<span data-toggle="counter-up"><?php echo esc_html($fact['input_counter']); ?></span>
				<p><?php echo esc_html($fact['counter_description']); ?></p>
  			</div>
     <?php endforeach; endif; ?>

  			</div>

        <div class="facts-img">
          <img src="<?php echo esc_url(wp_get_attachment_image_src($fact_cover_img,'full')[0]); ?>" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->

<?php endif; ?>

