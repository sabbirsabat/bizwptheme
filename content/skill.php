<?php

$enable_skill_area = cs_get_option('enable_skill_area');
$skill_title = cs_get_option('skill_title');
$skill_area_description = cs_get_option('skill_area_description');
$skill_option = cs_get_option('skill_option');

?>
<?php if($enable_skill_area == true ) : ?>

    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3><?php echo esc_html($skill_title); ?></h3>
          <p><?php echo esc_html($skill_area_description); ?></p>
        </header>

        <div class="skills-content">

	<?php if(!empty($skill_option)) : foreach($skill_option as $skill) : ?>
          <div class="progress">
            <div class="progress-bar <?php echo esc_attr($skill['button_select']); ?>" role="progressbar" aria-valuenow="<?php echo esc_html($skill['area_value_now']); ?>" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?php echo esc_html($skill['skill']); ?> <i class="val"><?php echo esc_html($skill['value']); ?></i></span>
            </div>
          </div>
     <?php endforeach; endif; ?>
			

        </div>

      </div>
    </section>

<?php endif; ?>
	  