<?php get_header(); ?>
<p class="text-muted">single.php template</p>

<section class="page-wrap">
	<div class="container">

		<?php if(has_post_thumbnail()) : ?>
			<div class="img-container">
				<img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mb-3">
			</div>
		<?php endif; ?>

		<h1><?php the_title(); ?></h1>

		<?php get_template_part('includes/section', 'blogcontent'); ?>

		<!-- FOR POST PAGE BREAK NAVIGATION -->
		<?php wp_link_pages(); ?>
	</div>
</section>

<?php get_footer(); ?>