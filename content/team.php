<?php
$enable_team_area = cs_get_option('enable_team_area');
$team_section_title = cs_get_option('team_section_title');
$team_section_description = cs_get_option('team_section_description');
?>


<?php if($enable_team_area == true ) : ?>

  <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3><?php echo esc_html($team_section_title); ?></h3>
          <p><?php echo esc_html($team_section_description); ?></p>
        </div>

		  
         <div class="row">
		
			<?php 	
			global $post;
			$args = array('posts_per_page' => -1,'post_type'=> 'team', 'orderby'=>'menu_order' );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata($post);
			 
			 
			 
			if(get_post_meta( get_the_ID(),'bizpage_team_meta', true)){
			$team_meta = get_post_meta(get_the_ID(),'bizpage_team_meta', true );
			}else{
			$team_meta = array();
			}

			   if (array_key_exists('profile_position', $team_meta)) {
				$profile_position = esc_html($team_meta['profile_position']);
			   }else{
				$profile_position = '';
			   }

			   if (array_key_exists('team_social', $team_meta)) {
				$team_social = $team_meta['team_social'];
			   }else{
				$team_social = '';
			   }
			?> 
			 

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?php echo esc_url(the_post_thumbnail_url('large')) ; ?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a></h4>
                  <span><?php echo $profile_position; ?></span>
					
                  <div class="social">
					<?php if(!empty($team_social)) : foreach ($team_social as $social) : ?>  
                    <a href="<?php echo esc_url($social['team_social_link']); ?>"><i class="<?php echo esc_attr($social['team_social_icon']); ?>"></i></a>
					 <?php endforeach; endif; ?>
                  </div>
					
                </div>
              </div>
            </div>
          </div>
			 
         <?php endforeach; wp_reset_query(); ?>
			 
        </div>  
      </div>
    </section><!-- #team -->
<?php endif; ?>