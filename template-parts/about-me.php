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
      // Query everthing in social links category
            $the_query = new WP_Query(array( 'cat' => 7 ));
        // Display each post in the category
            if ( $the_query->have_posts() ) {
                echo '<ul>';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<li><a href="'. get_the_content() .'" target="blank">' . get_the_title() . '</a></li>';
                    }
                 echo '</ul>';
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // no posts found
                }
     ?>
  </div>
</section>
