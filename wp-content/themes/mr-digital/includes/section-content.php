<!-- 
  This will be called by page templates like template-contact-us.php

	This will pull the page content from WP
 -->

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; else: endif; ?>