<?php get_header("98"); ?>

  <section class="video-page-section">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   		<?php the_content(); ?>

    <?php endwhile; else : ?>
   	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
   <?php endif; ?>

  </section
<?php get_footer(); ?>

<!-- Paste this code below in the post for each recent works

<div class="content-outer">
   <h4>content title</h4>
   <ul class="green project-features">
     <li><span><i class="fas fa-angle-right"></i></span> features</li>
     <li><span><i class="fas fa-angle-right"></i></span> features</li>
     <li><span><i class="fas fa-angle-right"></i></span> features</li>
    <li><span><i class="fas fa-angle-right"></i></span> features</li>
   </ul>
   <ul class="video-links">
     <li> <a href="#"><span class="link-icons"><i class="far fa-window-maximize"></i></span><span>Live Website</span></a> </li>
     <li> <a href="#"><span class="link-icons"><i class="fab fa-github-square"></i></span><span>Code for website on github</span></a> </li>
   </ul>
</div>
 <div class="video-outer">
   <video controls>
     <source src="http://localhost/mh/wp-content/uploads/2018/04/intro.mp4" type="video/mp4">
     Your browser does not support the video tag.
  </video>
 </div>

 -->
