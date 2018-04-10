<section id="contact" class="contact navigation" style="background-image: url('<?php $background_location_image = get_post(64); ?>
  <?php echo $background_location_image->post_content; ?>')" >
<div class="contact-inner">
    <header>
      <h3>contact <span class="green">me</span></h3>
      <h6>get in touch</h6>
    </header>
    <div class="contact-section-outer">
      <aside>
        <div>
            <?php $address = get_post(76); ?>
          <p><span class="green contact-icon"><?php echo $address->post_content ?></span><span><?php echo $address->post_title ?></span></p>
        </div>
        <div>
          <?php $phone_number = get_post(79); ?>
          <p><span class="green contact-icon"><?php echo $phone_number->post_content ?></span><span><?php echo $phone_number->post_title ?></span></p>
        </div>
      </aside>
      <!-- This line below is using contact form 7 plugin -->
      <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</section>
