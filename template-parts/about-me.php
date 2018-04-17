<section id="about-me" class="about-me navigation">
  <header>
    <?php $section_about_me = get_post(30); ?>
     <h3><?php echo $section_about_me->post_title; ?></h3>
     <h6><?php echo $section_about_me->post_content; ?></h6>
  </header>
  <div class="video-outer">
     <?php
      $section_about_me_video = get_post(32);
      echo $section_about_me_video->post_content;
     ?>
  </div>
  <div class="social-icons">
    <?php
     wp_nav_menu( array(
       'theme_location' => 'social_media'
      ) );
     ?>
  </div>
</section>
