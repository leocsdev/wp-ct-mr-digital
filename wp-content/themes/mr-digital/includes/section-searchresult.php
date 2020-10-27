<!-- 
  This will be called by search.php
 -->
 <p class="text-muted">section-searchresult.php</p>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="card mb-3">
  <div class="card-body d-flex flex-sm-column flex-md-row justify-content-center align-items-center">
    <?php if(has_post_thumbnail()) : ?>  
      <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mb-3 mr-4">
    <?php endif; ?>

    <div class="blog-content">
      <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <a class="btn btn-success" href="<?php the_permalink(); ?>">Read More</a>
    </div>
  </div>
</div>

<?php endwhile; else: ?> 

  <p>There are no results for '<?php echo get_search_query(); ?>'</p>

<?php endif; ?>