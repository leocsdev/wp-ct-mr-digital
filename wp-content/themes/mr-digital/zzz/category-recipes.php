<?php get_header(); ?>

<section class="page-wrap">
  <div class="container">

    <h1><?php echo single_cat_title(); ?></h1>
    <h2>THIS IS A CATEGORY RECIPES TEMPLATE, category-recipes.php</h2>

    <?php get_template_part('includes/section', 'archive'); ?>

    <br><br>

    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
  </div>
    
</section>

<?php get_footer(); ?>

