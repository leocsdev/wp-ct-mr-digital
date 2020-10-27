<?php get_header(); ?>

<p class="text-muted">front-page.php template</p>

<section class="page-wrap">
	<div class="container">
		<h1><?php the_title(); ?></h1>

		<!-- pull the content of the page from template part -->
		<?php get_template_part('includes/section', 'content'); ?> 

		<!-- call search form -->
		<?php get_search_form(); ?>
	</div>
</section>

<?php get_footer(); ?>

