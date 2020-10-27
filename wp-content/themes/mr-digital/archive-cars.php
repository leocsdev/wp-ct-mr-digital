<?php get_header(); ?>

<p class="text-muted">archive-cars.php template</p>

<section class="page-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <!-- set blog sidebar -->
        <?php if(is_active_sidebar('blog-sidebar')) : ?>
          <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif; ?>
      </div>

      <div class="col-md-9">
        <h1><?php echo single_cat_title(); ?></h1>
        <?php get_template_part('includes/section', 'archive'); ?>

        <br><br>

        <!-- PAGINATION - METHOD 1 -->
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>

        <!-- PAGINATION - METHOD 2 -->
        <?php
          // global $wp_query;

          // $big = 999999999; // need an unlikely integer

          // echo paginate_links(array(
          //   'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          //   'format' => '?paged=%#%',
          //   'current' => max(1, get_query_var('paged')),
          //   'total' => $wp_query->max_num_pages
          // ));
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

