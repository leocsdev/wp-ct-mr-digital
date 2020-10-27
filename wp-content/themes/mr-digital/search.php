<?php get_header(); ?>
<p class="text-muted">search.php template</p>

<section class="page-wrap">
  <div class="container">

    <h1>Search result for '<?php echo get_search_query(); ?>'</h1>
    <?php get_template_part('includes/section', 'searchresult'); ?>

    <br><br>

    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>    
  </div>
</section>

<?php get_footer(); ?>

