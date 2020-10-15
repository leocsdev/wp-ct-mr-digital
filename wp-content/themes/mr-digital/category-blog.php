<?php get_header(); ?>

<section class="page-wrap">
  <div class="container">

    <h2>THIS IS A CATEGORY BLOG TEMPLATE, category-blog.php</h2>

    <?php get_template_part('includes/section', 'archive'); ?>

    <br><br>

    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
  </div>
    
</section>

<?php get_footer(); ?>

