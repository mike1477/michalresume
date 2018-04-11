
      <footer><div class="social-icons-footer">
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
     </footer>
  <?php wp_footer(); ?>
  </div>
 </body>
</html>
