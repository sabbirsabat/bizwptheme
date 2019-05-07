<?php

$enable_callto_action = cs_get_option('enable_callto_action');
$callto_action_title = cs_get_option('callto_action_title');
$callto_action_description = cs_get_option('callto_action_description');
$callto_action_button_text = cs_get_option('callto_action_button_text');
$cta_link = cs_get_option('cta_link');
$cta_link_target = cs_get_option('cta_link_target');

?>

<?php if($enable_callto_action == true ) : ?>



    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3><?php echo esc_html($callto_action_title); ?></h3>
        <p> <?php echo esc_html($callto_action_description); ?></p>
        <a class="cta-btn" href="<?php echo esc_url($cta_link); ?>" target="<?php echo esc_attr($cta_link_target); ?>"><?php echo esc_html($callto_action_button_text); ?></a>
      </div>
    </section> <!-- #call-to-action -->

<?php endif; ?>