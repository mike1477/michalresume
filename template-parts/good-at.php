<section id="good-at" class="good-at navigation">
  <h3>i'm good at</h3>
  <div class="circle-outer">
      <?php
        // Query everthing in good-at category
              $the_query = new WP_Query(array( 'cat' => 3 ));
          // Display each post in the category
              if ( $the_query->have_posts() ) {
                	echo '<ul>';
                	while ( $the_query->have_posts() ) {
                    	$the_query->the_post();
                    	echo '<li><div class="c100 p'. get_the_content() .' dark box"><span>'. get_the_content() .  '%</span><div class="slice"><div class="bar"></div><div class="fill"></div></div></div>
                          <div class="good-at-title"><p>'
                         . get_the_title() .
                         '</p></div></li>';
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
