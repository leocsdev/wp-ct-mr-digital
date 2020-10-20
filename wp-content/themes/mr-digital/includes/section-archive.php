<!-- 
  This will be called by category templates like category-blog.php and category-recipes.php
  
  This will pull the content from WP blog posts
 -->

<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <h3><?php the_title(); ?></h3>
  <?php 
    // the_content();
    the_excerpt(); 
  ?>
  <a href="<?php the_permalink(); ?>">Read More</a>

<?php endwhile; else: endif; ?>