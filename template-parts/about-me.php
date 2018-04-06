<section>
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

</section>
