<?php get_header(); ?>

<section class="page-wrap">
	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<!-- set page sidebar -->
				<?php if(is_active_sidebar('page-sidebar')) : ?>
					<?php dynamic_sidebar('page-sidebar'); ?>
				<?php endif; ?>
			</div>

			<div class="col-md-9">
			
				<!-- get featured image -->
				<?php if(has_post_thumbnail()) : ?>
					<div class="img-container">
						<img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mb-3">
					</div>
				<?php endif; ?>

				<!-- display post title and content -->
				<h1><?php the_title(); ?></h1>
				<?php get_template_part('includes/section', 'content'); ?>
			</div>
			
			
		</div>
	</div>
</section>

<?php get_footer(); ?>