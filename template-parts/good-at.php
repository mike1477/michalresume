<section id="good-at" class="good-at navigation">
  <h3>i'm good at</h3>
  <?php
    // The Query
    $the_query = new WP_Query(array( 'cat' => 3 ));


    // The Loop
    if ( $the_query->have_posts() ) {
    	echo '<ul>';
    	while ( $the_query->have_posts() ) {
    		$the_query->the_post();
    		echo '<li><div>'
         . get_the_content() .
         '</div><div>'
         . get_the_title() .
         '</div></li>';
    	}
    	echo '</ul>';
    	/* Restore original Post Data */
    	wp_reset_postdata();
    } else {
    	// no posts found
    }
  ?>
</section>
