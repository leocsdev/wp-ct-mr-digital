<!--
  This will be called by single-cars.php 

  This will pull the Cars single custom post type from WP
-->
<p class="text-muted">section-cars.php</p>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  
  <?php the_content(); ?>

  <!-- GET ALL THE TAGS -->
  <?php $tags = get_the_tags(); ?>
  <?php if($tags): ?>
    <?php foreach($tags as $tag): ?>
      <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-success">
        <?php echo $tag->name; ?>
      </a>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- GET THE CATEGORIES -->
  <?php $categories = get_the_category(); ?>
  <?php if($categories): ?>
    <?php foreach($categories as $cat): ?>
      <a href="<?php echo get_category_link($cat->term_id); ?>">
        <?php echo $cat->name; ?>
      </a>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- GET THE DATE WHEN POST WAS CREATED -->
  <p><?php echo get_the_date('l jS F, Y'); ?></p>

  <!-- DISPLAY DEFAULT COMMENTS SECTION -->
  <?php // comments_template(); ?>

<?php endwhile; else: endif; ?>