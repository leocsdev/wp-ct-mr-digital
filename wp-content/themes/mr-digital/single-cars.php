<?php get_header(); ?>
<p class="text-muted">single-cars.php template</p>

<section class="page-wrap">
	<div class="container">
		
		<h1 class="text-center mb-4"><?php the_title(); ?></h1>
		
		<?php if(has_post_thumbnail()) : ?>
			<div class="img-container mb-4">
				<img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mb-3">
			</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-lg-6">
				<?php get_template_part('includes/section', 'cars'); ?>

				<!-- FOR POST PAGE BREAK NAVIGATION -->
				<?php wp_link_pages(); ?>
			</div>
			
			<div class="col-lg-6">
				<p>some information here.</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>