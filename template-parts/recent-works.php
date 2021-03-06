<section id="recent-works" class="recent-works navigation">
  <header>
    <!-- Get section post by post id -->
    <?php $section_recent_works = get_post(42); ?>
     <h3><?php echo $section_recent_works->post_title; ?></h3>
     <h6><?php echo $section_recent_works->post_content; ?></h6>
  </header>
  <?php
    // Query all recent works by category id
    $the_query = new WP_Query(array( 'cat' => 4 ));

    // Loop through and display each recent works
    if ( $the_query->have_posts() ) {

      echo '<ul>';
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li style="background-image: url('. get_the_post_thumbnail_url() .')">
               <div class="background-hover">
                  <a href="' . get_the_permalink() . '">
                    <i class="fas fa-search"></i>
                  </a>
               </div>
            </li>';
      }
      echo '</ul>';
      /* Restore original Post Data */
      wp_reset_postdata();
    } else {
      // no posts found
    }
  ?>
</section>
