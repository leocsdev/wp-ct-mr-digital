<?php get_header(); ?>
	

<section class="page-wrap">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php get_template_part('includes/section', 'content'); ?> <!-- this will pull the content of the page from template part -->
	</div>
</section>

<?php get_footer(); ?>

