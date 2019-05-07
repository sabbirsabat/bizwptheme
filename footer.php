
</main>

<?php
$socials = cs_get_option('socials');
$copyright_title = cs_get_option('copyright_title');
$copyright_description = cs_get_option('copyright_description');
$copyright_link_text = cs_get_option('copyright_link_text');
$copyright_link = cs_get_option('copyright_link');
$copyright_link_target = cs_get_option('copyright_link_target');
$body_end_scripts = cs_get_option('body_end_scripts');

// if i want added editor to footer, then use this code.  
/*$footer_copyright_text_allowed_tags = array(
    'a'=> array(
		'href' => array(),
		'title' => array(),
	),    
	'img'=> array(
		'alt' => array(),
		'src' => array(),
	),
     'br' => array(),
	 'em' => array(),
	'strong' => array(),
);
*/

?>

  <footer id="footer">
    <div class="footer-top">	
      <div class="container">
		 
        <div class="row">
			
           <?php if(is_active_sidebar('footer-1')): ?>
          <div class="col-lg-3 col-md-6 footer-info">
           <?php dynamic_sidebar( 'footer-1' ); ?>
          </div>
           <?php endif; ?>
			
			<?php if(is_active_sidebar('footer-2')): ?>
          <div class="col-lg-3 col-md-6 footer-links">
            <?php dynamic_sidebar( 'footer-2' ); ?>
          </div>
			<?php endif; ?>

			<?php if(is_active_sidebar('footer-3')): ?>
          <div class="col-lg-3 col-md-6 footer-contact">
            <?php dynamic_sidebar( 'footer-3' ); ?>
			  
			<!--- Social Network-->  
            <div class="social-links">
		      <?php if(!empty($socials)) : foreach($socials as $social) : ?>
              <a href="<?php echo esc_url($social['link']); ?>" target="<?php echo esc_attr($social['link_target']); ?>"><i class="<?php echo esc_attr($social['icon']); ?>"></i></a>
			  <?php endforeach; endif; ?>	 
            </div> <!--- Social Network-->  
			
          </div>
           <?php endif; ?>
			
			<?php if(is_active_sidebar('footer-4')): ?>
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <?php dynamic_sidebar( 'footer-4' ); ?>
          </div>
           <?php endif; ?>
			
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <?php echo esc_html($copyright_title); ?>
      </div>
		
      <div class="credits">
        <?php echo esc_html($copyright_description); ?> <a href="<?php echo esc_url($copyright_link); ?>" target="<?php echo esc_attr($copyright_link_target); ?>"><?php echo esc_html($copyright_link_text); ?></a>
      </div>
		
    </div>
	  
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- User Script -->
<?php echo $body_end_scripts; ?>
 <?php wp_footer(); ?>

   </div>
  </body>
</html>
