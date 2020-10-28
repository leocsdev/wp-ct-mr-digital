<!--
  This will be called by single.php 

  This will pull the page single blog content from WP
-->
<p class="text-muted">section-blogcontent.php</p>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  
  <!-- GET THE DATE WHEN POST WAS CREATED -->
  <p><?php echo get_the_date('l jS F, Y'); ?></p>

  <?php the_content(); ?>

  <!-- GET THE AUTHORS NAME -->
  <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
  ?>

  <!-- DISPLAY NAME -->
  <p>Posted by <?php echo $fname; ?> <?php echo $lname; ?></p>

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
  
  <br><br><br><br>
  
  <!-- DISPLAY DEFAULT COMMENTS SECTION -->
  <?php // comments_template(); ?>

<?php endwhile; else: endif; ?>